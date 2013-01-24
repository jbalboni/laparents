<?php
/*
  $pathToImages = "expo_slideshow/";
  $thumbWidth = 500;
  $pathToThumbs = "expo_slideshow/tn/";
  // open the directory
  $dir = opendir( $pathToImages );

  // loop through it, looking for any/all JPG files:
  while (false !== ($fname = readdir( $dir ))) {
    // parse path for the extension
    $info = pathinfo($pathToImages . $fname);
    // continue only if this is a JPEG image
    if ( strtolower($info['extension']) == 'jpg' )
    {
      echo "Creating thumbnail for {$fname} <br />";

      // load image and get image size
      $img = imagecreatefromjpeg( "{$pathToImages}{$fname}" );
      $width = imagesx( $img );
      $height = imagesy( $img );

      // calculate thumbnail size
      $new_width = $thumbWidth;
      $new_height = floor( $height * ( $thumbWidth / $width ) );

      // create a new temporary image
      $tmp_img = imagecreatetruecolor( $new_width, $new_height );

      // copy and resize old image into new image
      imagecopyresized( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );

      // save thumbnail into a file
      imagejpeg( $tmp_img, "{$pathToThumbs}{$fname}" );
    }
  }
  // close the directory
  closedir( $dir );
*/
?>

<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<head>
<title>Lousiana Parent Congress - EXPO Pictures</title>
<!--[if lt IE 9]>
  <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
<link type="text/css" href="css/smoothness/jquery-ui-1.8.8.custom.css" rel="Stylesheet" />
<link href="laparents.css" title="normal" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="../jquery.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.8.custom.min.js"></script>
<script src="menu.js" type="text/javascript"></script>
</head>
<body>
<div id="container">
<?php $cur_page = "Expo"; include("decorator.php") ?>
<div class="page_header"><h1>Expo Picture Gallery</h1></div>
<div id="content">
<div class="full_box">
<?php

        echo "<h2>Pictures from previous EXPOs</h2>";
        echo "<div id='accordion'>";
        $dhandle = opendir('.');
        if ($dhandle)
        {
            while (false !== ($fname = readdir($dhandle)))
            {
                if (stripos($fname,"expo_pics") === 0 ) 
                {
                    //echo "<a href=\"expo_pictures.php?year=" . substr($fname,-4) . "\">" . substr($fname,-4) . "</a><br/>";
                    $year = substr($fname,-4);
                    $folder = "expo_pics_$year";
                    $dhandle_year = opendir($folder);
	            // define an array to hold the files
	            $files = array();

                    if ($dhandle_year)
                    {
                        // loop through all of the files
                        while (false !== ($fname_pic = readdir($dhandle_year)))
                        {
                            // if the file is not this file, and does not start with a '.' or '..',
                            // then store it for later display
                            if (($fname_pic != '.') && ($fname_pic != '..') && ($fname_pic != 'tn') && ($fname_pic != basename($_SERVER['PHP_SELF'])))
                            {
                                // store the filename
                                $files[] = $fname_pic;
                            }
                        }
                       // close the directory
                       closedir($dhandle_year);
                    } 
                    echo "<h3><a href='#'>$year Pictures</a></h3>\n<div>";
                    $count = 1;
                    foreach ($files as $name)
                    {
                        echo "<a class='single_image' href=\"$folder/$name\"><img src=\"$folder/tn/$name\" alt=\"Expo picture\"/></a> \n";
                        if ($count % 3 == 0)
                        {
                            echo "<br/>";
                        }
                        $count++;
                    }
                    echo "</div>\n";
                }
            }
 //           closedir($dhandle_year);
        }

?></div>
</div>
</div>
<div class="section">&nbsp;</div>
</div>
<div id="footer"><?php include("decorator_foot.inc"); ?></div>
</div>
</body>
</html>
