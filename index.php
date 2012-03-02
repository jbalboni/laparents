<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<head>
<title>Lousiana Parent Congress</title>
<!--[if lt IE 9]>
  <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<link href="laparents.css" title="normal" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />
<script type="text/javascript" src="jquery.js"></script>
<script src="jquery.nivo.slider.pack.js" type="text/javascript"></script>
<script src="menu.js" type="text/javascript"></script>
<script type="text/javascript">
$(window).load(function() {
    $('#slider:visible').nivoSlider();
});
var menu_name = "Home";
</script>
</head>
<body>
<div id="container">
<?php $cur_page = "Home"; include("decorator.php"); ?>
<div class="page_header"><h1>Welcome to the Louisiana Parent Congress website</h1></div>
<div id="content">
<div class="full_box">
<div id="slider">
<?php
$step=1;
if ($handle = opendir('expo_slideshow/tn')) {
  while (false !== ($file = readdir($handle))) {
    if ($file !== "." && $file !== "..")
    {
      echo "<img src=\"/expo_slideshow/tn/$file\" alt=\"\"/>";
      $step++;
    }
  }
  closedir($handle);
}
?>
</div>
</div>

<div class="section_left">
<h2>Conference Participants</h2>
<div class="section_text"><p>Every year the Louisiana Parent Congress draws a diverse group of individuals.  To get a better idea of if this one day meeting is for you, below is a suggested list of people who have attended in the past.
</p>
<ul>
<li>Superintendents</li>
<li>Federal Programs Directors</li>
<li>School Board Members</li>
<li>PTA Members / Officers</li>
<li>Principals</li>
<li>Classroom Teachers</li>
<li>Paraprofessionals</li>
<li>Parents</li>
</ul></div>
</div>

<div class="section_right"><h2>Important Dates</h2>
<div class="section_text">
<ul>
  <li>Annual Meeting: Friday, October 14th, 2011</li>
  <li>EXPO: Friday, May 4th, 2012</li>
</ul></div>
</div>

<div class="section">
<h2>Contact Us</h2>
<div class="section_text">
<p>Janet Howell<br/>
Rapides Parish School District, Title I, Parental Involvement<br/>
EXPO Chairperson</p>

<p>501 Elliott Street<br/>
Alexandria, LA 71301<br/> 
318-442-8891<br/>
FAX 318-442-8178<br/>
<script>
<!--

function escramble(){
 var a,b,c,d,e,f,g,h,i
 a='<a href=\"mai'
 b='janet.howell'
 c='\">'
 a+='lto:'
 b+='@'
 e='</a>'
 f=''
 b+='rpsb.us'
 g='<img src=\"'
 h=''
 i='\" alt="Email us." border="0">'

 if (f) d=f
 else if (h) d=g+h+i
 else d=b

 document.write(a+b+c+d+e)
}

escramble()

//-->

</script><br/></p></div>

</div>
</div>
</div>
<div id="footer"><?php include("decorator_foot.inc"); ?></div>
</div></div>
</body>
</html>
