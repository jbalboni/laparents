<?php

function generateLinks($pathToDocs)
{
  $dir = opendir( "handouts/" . $pathToDocs );
  // loop through it, looking for any/all JPG files:
  while (false !== ($fname = readdir( $dir ))) 
  {
    if ($fname != '.' && $fname != '..')
    {
      echo '<li><a href="handouts/' . $pathToDocs . '/' . $fname . '">' . substr($fname,0,strlen($fname)-4) . ' (' .
           substr($fname,-3) . ')</a></li>';
    }
  }
  closedir($dir);
}

?>
<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<head>
<title>Lousiana Parents Congress - Annual Meeting - Presenter Handouts</title>
<!--[if lt IE 9]>
  <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<link href="laparents.css" title="normal" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="../jquery.js"></script>
<script src="menu.js" type="text/javascript"></script>
</head>
<body>
<div id="container">
<?php $cur_page = "Annual"; include("decorator.php") ?>
<div class="page_header"><h1>Past Presenter Handouts</h1></div>
<div id="content">
<div class="section_left">
<h2>LPC Presenters</h2>
<div class="section_text">
<ul>
<?php generateLinks("lpc_pres"); ?>
</ul>
</div></div>
<div class="section_right">
<h2>Student Success Habits</h2>
<div class="section_text">
<ul>
<?php generateLinks("student_success"); ?>
</ul>
</div></div>

<div class="section_left">
<h2>Youth Services</h2>
<div class="section_text">
<ul>
<?php generateLinks("youth"); ?>
</ul>
</div></div>

<div class="section_right">
<h2>T4L</h2>
<div class="section_text">
<ul>
<?php generateLinks("t4l"); ?>
</ul>
</div></div>

<div class="section_left">
<h2>Technology</h2>
<div class="section_text">
<ul>
<?php generateLinks("tech"); ?>
</ul>
</div></div>

<div class="section_right">
<h2>Beverly Taylor</h2>
<div class="section_text">
<ul>
<?php generateLinks("taylor"); ?>
</ul>
</div></div>

<div class="section">
<h2>LPB</h2>
<div class="section_text">
<ul>
<?php generateLinks("lpb"); ?>
</ul>
</div></div>

</div>
</div>
<div id="footer"><?php include("decorator_foot.inc"); ?></div>
</body>
</html>
