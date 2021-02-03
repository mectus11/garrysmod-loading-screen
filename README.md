# garrysmod-loading-screen
A bootstrap garry's mod loading screen.

<h2>Features</h2>
<ul style="line-height: 1.6;">   		
<li>Slideshow background</li>
<li>Random music with auto-play in the background.</li>
<li>Steam playername, avatar and current map in play.</li>
<li>Music title.</li>
<li>Rules list.</li>
 </ul>
                    
<h2>How to use properly</h2>
Put up to 3 or more music files in .ogg-format in the music folder. They must be named 1.ogg, 2.ogg and 3.ogg!<br>
To add more music just edit $r       = mt_rand(1,2); and simpy change the "2" to the amount of music files you want in the play list.<br>
To change the music titles simply add more arrays in <br>
$authors = array(<br>
    1 => 'Deadmau5 - Ghosts N Stuff - Nero Remix',<br>
	2 => 'Jump DJ - This Party',<br>
);<br>
<hr>
Replace the XXXXXXXXXXXXXXXXX in $data = 'http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=XXXXXXXXXXXXXXXXX&steamids='.$_GET['steamid']; with your personal API key.<br>
Upload this code on your webserver that must support PHP<br>
set the url of the loading screen in your server.cfg like that sv_loadingurl "http://example.com/gmod-loadingscreen/?steamid=%s&mapname=%m"<br>
Enjoy!
