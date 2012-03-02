<?php

function days_counter($deadline)
{
  $deadline = strtotime($deadline);
  $today = time();
  $delta = $deadline - $today;
  $days = (int) ($delta / 86400);
  if ($days > 0)
  {
    if ($days > 1) 
    { 
      return "$days days";
    }
    else
    {
      return "<strong>$days day</strong>";
    }
  }
  else if ($days < 0)
  {
    return "deadline has passed";
  }
  else
  {
    return "<strong>deadline is today</strong>";
  }
}

?>

<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<head>
<title>Lousiana Parents Congress - EXPO 2011</title>
<link href="laparents.css" title="normal" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="../jquery.js"></script>
<script src="menu.js" type="text/javascript"></script>
</head>
<body>
<div id="container">
<?php $cur_page = "Expo"; include("decorator.php") ?>
<h1>Expo 2011</h1>
<div id="content">
<div class="full_box">
<h2>Greetings!</h2>
<div class="section_text">
<p>The Louisiana Parent Congress will host its fourteenth Parent EXPO at the Riverfront Center in Alexandria, LA on <strong>May 6th, 2011.</strong></p>

<p>Educators and parents become active participants in a festival of good ideas and information. Over fifty booth spaces are available for showcasing, and it is imperative that parishes and educational agencies come on board to make this year's EXPO a wonderful and fulfilling event! You will be proud to part of such an experience!</p>

<p>It is very important that you adhere to all deadlines and forward all required forms as requested.</p>

<p>Our theme this year is "Ride the Waves with Learning!" and <strong>Bruce Hamilton</strong> of <em>No Bad Days</em> will be our guest speaker.</p>

<p>We are asking each parish to bring 3 table decorations with an Educational theme to be used for door prizes. [Don't forget the men in the audience.]</p>

<p>As educators and parents who truly believe that family involvement is the key to a child's success in school, let us pledge to work together to make this the best EXPO ever!</p>
</div></div>

<div class="section_left">
<h2>Time line</h2>
<div class="section_text">
<p>Please follow the time line indicated:
<ul>
<li>March 31st, 2011 (<?php echo days_counter("31 Mar 2011") ?>) - Showcase Description Form [one per showcase booth]</li>
<li>April 8th, 2011 (<?php echo days_counter("8 Apr 2011") ?>) - AV Request Form</li>
<li>April 8th, 2011 (<?php echo days_counter("8 Apr 2011") ?>) - Registration Form [everyone must register!]</li>
</ul>
</div></div>

<div class="section_right">
<h2>Important Links</h2>
<div class="section_text">
<ul>
<li><a href="expo_registration.doc">Registration Form</a></li>
<ul><li>please submit one per attendee</li></ul>
<li><a href="showcase_description.doc">Showcase Description Form</a></li>
<li><a href="av_request.doc">AV Request Form</a></li>
<li><a href="expo_room_info.php">Hotel Information</a></li>
</ul>
</div></div>

<div class="section_left">
<h2>Tentative Schedule</h2>
<div class="section_text">
<p><strong>Thursday, May 5th, 2011:</strong><br/>
<strong>10:00 AM to 4:00 PM</strong> - Showcasers may set up their booth in the Riverfront Center<br/>
<strong>2:00 PM to 4:00 PM</strong> - Early Bird Registration [only for those working their booths Friday.]<br/></p>
 
<p><strong>Friday, May 6th, 2011:</strong><br/>
<strong>8:00 AM</strong> - Registration - Riverfront Center - lower level<br/>
<strong>8:30 AM</strong> - Opening of Showcases - upper level<br/>
<strong>12:30 PM</strong> - Close of Showcases<br/>
<strong>12:45 PM</strong> - Lunch & Program<br/></p>
</div></div>

<div class="section_right">
<h2>Contact for additional information</h2>
<div class="section_text">
<p>Janet Howell, Rapides Parish School District, Title I, Parental Involvement<br/>
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

</script><br/></p></div>
</div>
<h3 style="clear:both">&nbsp;</h3>
</div>
</div>
<div id="footer"><?php include("decorator_foot.inc"); ?></div>
</body>
</html>
