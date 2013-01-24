<script type="text/javascript" src="jquery.blockUI.js"></script>
<script type="text/javascript">
//$.blockUI({ overlayCSS:  {  opacity: .95, cursor: 'default' }, css: { cursor: 'default'},  message: '<h1 style="color:#000">The EXPO for this year has been cancelled</h1>' });
</script>
<div id="header">
<div id="header-text">Louisiana Parent Congress</div>
</div>
<div id="nav_menu"><ul class="topnav">
  <li <?php if ($cur_page == "Home") { echo 'class="highlight"';} ?>><a href="index.php">Home</a></li>
  <li <?php if ($cur_page == "About") { echo 'class="highlight"';} ?>>
    <a href="#">About</a>
    <ul id="about" class="subnav">
      <li><a href="about.php">About LPC</a></li>
      <li><a href="bylaws.php">Bylaws</a></li>
      <li><a href="parishes.php">Map with parishes</a></li>
    </ul>
  </li>
  <li <?php if ($cur_page == "Annual") { echo 'class="highlight"';} ?>>
    <a href="#">Teach &amp; Learn</a>
    <ul id="annual" class="subnav">
        <li><a href="reginfo.php">Registration Information</a></li>
        <li><a href="registration_form.doc">Registration Form</a></li>
        <li><a href="lodging.php">Lodging</a></li>
        <li><a href="agenda.php">Agenda</a></li>
        <li><a href="mtg_handouts.php">Past Presenter Handouts</a></li>
    </ul>
  </li>
</ul></div>
<div id="main">
