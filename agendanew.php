<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<head>
<title>Lousiana Parents Congress - Agenda</title>
<link href="laparents.css" title="normal" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
<script type="text/javascript" src="../jquery.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script src="menu.js" type="text/javascript"></script>
</head>
<body>
<div id="container">
<?php $cur_page = "Annual"; include("decorator.php") ?>
<h1>Annual Meeting Agenda</h1>
<div id="content">
<div class="full_box">
<h2>Presentations</h2>
<div class="section_text">
Coming soon
</div></div>
<div class="full_box">
<h2>Schedule</h2>
<table id="schedule" cellspacing="0">
<?php
  include('laparents_data.php');
  
  $dao = new LPData();
  $dao->openConnection();
  $events = $dao->getMeetingEvents("2011");
  $slot = "";
  foreach ($events as $event)
  {
    if ($slot == "" || $slot != $event["start"])
    {
      echo "<tr>";
    }
    echo $event["id"]."<br/>";
  }
  $dao->closeConnection();

?>
</table>
<!-- <div class="section_text">
<a id="inline" href="#schedule">View Larger</a>
<table id="schedule" cellspacing="0">
<tr class="date_header"><td colspan="7">Friday, January 28, 2011</td></tr>
<tr><td>7:30 AM - 8:30 AM</td><td colspan="6" class="center"><strong>Solarium</strong><br/>Registration & Continental Breakfast</td></tr>
<tr><td>8:30 AM - 9:40 AM</td><td colspan="6" class="center"><strong>Pine Room</strong><br/>Opening Session<br/>Guest Speaker</td></tr>
<tr><td>9:40 AM - 10:00 AM</td><td colspan="6" class="center"><strong>Solarium</strong><br/>Break / Refreshments</td></tr>
<tr><td rowspan="1">10:00 AM - 10:50 AM</td>
	<td><strong>Beauregard Room</strong><br/><em>"High School Redesign"</em><br/>Shenita Sumblin<br/>LA Promise</td>
	<td><strong>Ft. Buhlow Room</strong><br/><em>"Bringing Nursery Rhymes to Life for Young Learners"</em><br/>Gardenia Reliford<br/>LA Promise</td>
	<td><strong>Ft. Randolph Room</strong><br/><em>"The True Story of the Three Little Pigs: A Literacy Approach to Fostering Self-Regulatory Skills of Young Children."</em><br/>Elaine Foster & Gloria Ard<br/>Grambling State University</td>
	<td><strong>Red River Room</strong><br/><em>"iPods: More than just fun & games!"</em><br/>Rhonda Eloi<br/>Tioga Elem - Rapides Parish</td>
        <td><strong>Rapides Room</strong><br/><em>"Dolch Word Dilemm" or "Reading...Sight Words Required"</em><br/>Debbie Dollar<br/>Rapides Parish, Retired</td>
	<td><strong>Veterans Room</strong><br/><em>"Literacy Begins at Home"</em><br/>Tammy DiBartilo, Susan Baker, Karla Kirby<br/>Youth Services - Rapides Parish Library</td></tr>
<tr><td rowspan="1">11:00 AM - 11:50 AM</td>
	<td><strong>Beauregard Room</strong><br/><em>"High School Redesign"</em><br/>Shenita Sumblin<br/>LA Promise</td>
	<td><strong>Ft. Buhlow Room</strong><br/><em>"The Role of Parents in Dropout Prevention"</em><br/>Debbie McCartney & Sylvia Norris<br/>LaSalle Parish</td>
	<td><strong>Ft. Randolph Room</strong><br/><em>"Hooking Boys, Including Struggling Male Readers on Books"</em><br/>Dr. Nancy Manuel<br/>Picard Center for Children Development & Life Long Learning</td>
	<td><strong>Red River Room</strong><br/><em>"Math & Art Through Literature"</em><br/>Kara Meaux<br/>St. Martin Parish</td>
        <td><strong>Rapides Room</strong><br/><em>"Homework, Study Skills & Read Alouds"</em><br/>Angela McFaul<br/>St. Martin Parish</td>
	<td><strong>Veterans Room</strong><br/><em>"Literacy Begins at Home"</em><br/>Tammy DiBartilo, Susan Baker, Karla Kirby<br/>Youth Services - Rapides Parish Library</td></tr>
<tr><td rowspan="1">12:00 PM - 12:50 PM</td>
	<td><strong>Beauregard Room</strong><br/><em>"Fathers Matter! Involving Fathers in Children's Learning"</em><br/>Windell Dorsey<br/>Iberville Parish</td>
	<td><strong>Ft. Buhlow Room</strong><br/><em>"Bullying"</em><br/>Sgt. Danny Perry<br/>DARE, Rapides Parish</td>
	<td><strong>Ft. Randolph Room</strong><br/><em>"Reading for Everyone: It Makes for Great Conversation"</em><br/>Shirley Posey<br/>Richland Parish</td>
	<td><strong>Red River Room</strong><br/><em>"Math & Art Through Literature"</em><br/>Kara Meaux<br/>St. Martin Parish</td>
        <td><strong>Rapides Room</strong><br/><em>"Teacher's Toolbox for Successful Students"</em><br/>Scarlett Callicoatte & Sarah Gibson<br/>West Baton Parish</td>
	<td><strong>Veterans Room</strong><br/><em>"Beaches, Bubbles, Books -Tales from the Deep Blue Sea"</em><br/>Jane Watson<br/>Lincoln Parish</td></tr>
<tr><td>1:00 PM</td><td colspan="6" class="center"><strong>Solarium</strong><br/>Lunch to Go</td></tr></table>
<a id="inline" href="#schedule">View Larger</a>
</div>-->
</div></div></div>
<div id="footer"><?php include("decorator_foot.inc"); ?></div>
</body>
</html>
