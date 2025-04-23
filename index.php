<?php

error_reporting(0);
@set_time_limit(3);

$r       = mt_rand(1,2);
$plname  = 'Player';
$map     = 'Map';
$avatar  = 'img/noavatar.jpg';

$authors = array(
    1 => 'Deadmau5 - Ghosts N Stuff - Nero Remix',
	2 => 'Jump DJ - This Party',
);

$pictures = array(1,2,3);
shuffle($pictures);


if (isset($_GET['mapname']))
    $map = '<br>'.$_GET['mapname'];

if (isset($_GET['steamid'])) {
    $data = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=6497B801436A3BCA72DE74582F7F6974&steamids='.$_GET['steamid'];
    $f = file_get_contents($data);
    $arr = json_decode($f, true);
    if (isset($arr['response']['players'][0]['personaname']))
        $plname = $arr['response']['players'][0]['personaname'];
    if (isset($arr['response']['players'][0]['avatar']))
        $avatar = $arr['response']['players'][0]['avatar'];
    
}

?>



<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro">
    <link href="css/faafnetwork.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.3.min.js"></script>

<script type="text/javascript">
function DownloadingFile( fileName ) {
document.getElementById("FileLoad").innerHTML = fileName;
}
function SetStatusChanged( status ) {
document.getElementById("LoadingStatus").innerHTML = status;
}
</script>
  
</head>
<body> 
    <audio autoplay loop>
        <source src="music/<?php echo $r?>.og" type="audio/ogg">
    </audio>
 <!-- STart of the background carousel div-->
	   <div id="myCarousel" class="carousel slide">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <div class="container">



	<script src="./js/jquery-1.10.0.min.js"></script>
	<script src="./js/bootstrap/js/bootstrap.min.js"></script>

	<!-- Just include this Js file -->
	<script src="./js/jquery.carousel.fullscreen.js"></script>
	

 <!-- The background images  -->
        <div class="carousel-inner">

            <div class="active item">
                <img src="./img/bg.jpg" alt="Slide1" />
            </div>
			        <div class="item">
                <img src="./img/bg6.jpg" alt="Slide2" />
            </div>
			        <div class="item">
                <img src="./img/bg1.jpg" alt="Slide2" />
            </div>
			        <div class="item">
                <img src="./img/bg4.jpg" alt="Slide2" />
            </div>
            <div class="item">
                <img src="./img/bg2.jpg" alt="Slide2" />
            </div>
			        <div class="item">
                <img src="./img/bg5.jpg" alt="Slide2" />
            </div>
            <div class="item">
                <img src="./img/bg3.jpg" alt="Slide3" />
            </div>
        </div>




 <!-- Row div, it has most of the stuff under it. -->
        <div class="row">
		 <!-- Div for the rules -->
<div class="col-md-6" style=" position: relative; top: 10px;">

<div class="panel-heading1" style="opacity: 0.9;">

      <link href='http://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>
			<h1 style="font-size: 24px;font-family: 'Audiowide', cursive;" id="title" class="bigEntrance" >Trouble in Terrorist Town - [US3] </h1>

          <center> 
					<h1 style="font-family: 'Inconsolata', ;font-size:18px;" id="title" class="bigEntrance" >SERVER RULES</h1>
		</center>

<hr>

                
		<p class="lead">		
                <small>
                    <ul style="line-height: 1.6;">   
		
		
<li>Use only English in chat and voice chat.</li>
<li>No advertising or talking about other servers.</li>
<li>Do not use cheats/hacks, it's pathetic.</li>
<li>Be nice to other players, occasional swearing is allowed </li>
<li>Do not flood text chat or spam voice chat and no voice changers/soundboards, it's just annoying.</li>
<li>No trying to make the server lag or crash.</li>
<li>If you witness an admin abusing their power please report them on our forum.</li>
<li>No ghosting or metagaming.</li>
<li>Listen to the server staff, don't ask to be a staff member, we'll approach you.</li>
<li>Disrespecting our staff will result you in a ban.</li>
<li>No inappropriate sprays.</li>
<li>Use your common sense and think for a moment.</li>
<li>Don't randomly deathmatch people, don't revenge deathmatch people, we have staff to handle punishments.</li>
<li>No traitor baiting, it is kos-able ( kill on sight-able ).</li>
<li>You can kill people in overtime if you think they are suspicious and you have a good reason.</li>
<li>No prop surfing, no killing or damaging others with props.</li>
<li>You may not call KOS's( kill on sights ) on skins unless it's a donator custom skin.</li>
<li>Calling a false kos  ( kill on sight ) is kos-able, you may not call a kos on an innocent as a traitor.</li>
<li>Destroying the tester is kos-able, on some maps closing the lights is kos-able ( kill on sight-able ).</li>
<li>Mistakes happen a lot in TTT - try to see things from the other person's point of view before accusing them of RDM( Random deathmatch ).</li>
<li>If someone does damage to you when you are an innocent, it's fair to assume they are a Traitor unless they declare it an accident.</li>
<li>You cannot call a kos ( kill on sight ) on someone that is hurt, didn't test, following you, AFK, suspicion (until overtime) and spelling innocent backwards.</li>
<li>Breaking bridges in some maps is kos-able ( kill on sight-able ).</li>
<li>Entering the traitor room as an innocent is kos-able ( kill on sight-able ) so don't complain if someone kills you.</li>
<li>No excessive camping or wasting time unless you are forced to.</li>
<li>Claiming areas and killing people just for entering is RDM ( Random deathmatch ) unless it's in overtime then it's allowed.</li>
                    </ul>
				</small>
            </p>
			<ul><h3>Have fun playing on our server!</h3></ul>
</div>
</div>
<link href='http://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
	 <!-- Div for the map and name stuff -->
	<div class="col-md-6">
	
	<center><img src="./logo.png" width="450" height="145" /></center>
	
<div class="panel-heading1" style="opacity: 0.9; height:220px;">
		
		<div class="col-md-6">
		<img style="" src="<?php echo $avatar?>" alt="" class="img-borders">
		</div>
		&nbsp;
		<p style="font-size: 24px;font-family: 'Audiowide', cursive;"><b><?php echo $plname ?></b></p>
		<hr>
		<p style="font-size: 24px;font-family: 'Audiowide', cursive;"><b>Rank</b></p>
		<p style="font-size: 24px;font-family: 'Audiowide', cursive;"><b>Playtime</b></p>
		
		</div>
		&nbsp;
        <div class="panel-heading1" style="opacity: 0.9;">
		<div style="font-size: 24px;font-family: 'Audiowide', cursive;"><center>
		<p>
		<?php echo $map ?><br></center>
		</p></div>
		
	</div>
		&nbsp;


	</div>
	 <!-- Controls the TTT image slideshow -->
			<div class="col-md-6" style="opacity: 0.98;">

			<div class="panel-heading1" style="opacity: 0.9; position: relative; top: -5px;height:357px;">
		<center><p style="font-size: 24px;font-family: 'Audiowide', cursive;">Information</center></p>

			<ul style="line-height: 1.6;">
			&nbsp;
            <li>Forum: www.faafnetwork.net</li>			
			<li>Teamspeak: ts.faafnetwork.net</li>
			<li>IRC IP: irc.faafnetwork.net</li>
			<li>Twitter: www.twitter.com/FaafNetwork</li>
			&nbsp;
			<hr>
			<h4>Status:</h4><p id="LoadingStatus">Retrieving server info...</p>
			<h4>Downloading File:</h4><p id="FileLoad">No File Downloading</p>
			<p></p>
			</ul>
			</div>
			</div>

</div>
    &nbsp;
    <div style="font-size: 12px;min-width: 260px;opacity: 0.9; " class="panel-heading1">
	    Music: &nbsp; <?php echo $authors[$r];?>
	</div>



    
    </div> </div>
</div>


</div>
	 <!-- Enb of background carousel div  -->

    <script src="js/vendor/jquery-1.10.1.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/jquery.cycle2.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>
