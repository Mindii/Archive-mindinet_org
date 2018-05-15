<style>
#about {
	text-align: center;
}

#about img {
	border-radius: 4px;
	box-shadow: 0px 0px 5px #000000;
	margin-left: -45px;
}
</style>

<?php
$copyrightetc = "
<br><b>Contacting information</b><br>
You can try contact me from any of these things,<br>
best way right now would be steam or xmpp.<br>
If you want xmpp account contact with email.<br>
there is web xmpp client in [url=https://mindinet.org/chat/]here[/url]
<br>
Mail: contact .at. mindinet .dot. org<br>
XMPP: mindi .at. mindinet .dot. org<br>
Steam: mindi-chan<br>
AIM: mindinetorg<br>
ICQ: 666845559<br>
[li]
<br><b>FAQ Without FA Part</b><br>
<br><b>What is TinyUI?</b><br>
TinyUI is just another very simple, fast and lightweight php content management system for my use.<br>
<br><b>Where do I get it?</b><br>
Right now, nowhere, It is just something to keep my stuff together but if you are interested let me know.<br>
<br><b>What are your system specs?</b><br>
Main rig:<br>
CPU: AMD FX-6300 Black Edition (~4.1GHz)<br>
Mem: G.Skill RipjawsX 1600MHz (16GB)<br>
GPU: MSI GeForce GTX 780 Lightning<br>
SSD: Kingston SSDNow V300 (60GB)<br>
HDD: Seagate Baracuda (1TB) X 2<br>
Mobo: Gigabyte GA-990XA-UD3 990X<br>
Power: EVGA 750W Supernova 750 G2<br>
Case: Thermaltaken Commander MS-I Snow Edition<br><br>
Also working on some laptops like these two:<br>
TravelMate 5520G & Asus EEE900<br>
<br>
And there is also some servers, right now you are looking this site from this one<br>
Leo Server: Cpu: Dedicated 2.4GHz // Ram: 512 MB // HDD: 20GB // Debian 8.5
<br>
<br>
<b>Your distro/distros?</b><br>
Thing is my main computer still have Windows 7 altought using minimal debian install everything else my goal is change to debian<br>
when I can play more games in there, hopefully because microsoft keeps doing retarded things and also because of Vulkan.<br>
[li]
<br><b>Licensing things</b><br>
<br><b>All material unless stated otherwise are under CC-BY-NC 4.0 License:</b><br>  
<br>  You are free to:<br>  
<b>Share</b> * copy and redistribute the material in any medium or format<br>  
<b>Adapt</b> * remix, transform, and build upon the material<br>  
The licensor cannot revoke these freedoms as long as you follow the license terms.<br> 
<br>  
Under the following terms:<br>  
<b>Attribution</b> * You must give appropriate credit, provide a link to the license, and indicate if changes were made.<br>
You may do so in any reasonable manner, but not in any way that suggests the licensor endorses you or your use.<br>  
<b>NonCommercial</b> * You may not use the material for commercial purposes.<br>  
<br>  
<b>No additional restrictions</b><br>  
* You may not apply legal terms or technological measures that legally restrict others from doing anything the license permits.<br>
<br>
<br>
Others stuff:<br>
Logo background pictures are usually from [url=http://wallpaperswide.com/]wallpaperswide.com[/url] and are licensed by their respective authors.
<br>[li]";

// add this if using audioplayer
// Audio player uses [url=http://kolber.github.io/audiojs/]audio.js[/url], and test song is [url=http://freemusicarchive.org/music/johnny_ripper/2014041520203329/23_watashi]watashi by johnny_ripper[/url].

	// TinyUi's BBCode converter
	$bbtext = $copyrightetc;
	include 'data/bbcode.php';
	$copyrightetc = $bbtext;

	
echo '<br>'.$copyrightetc.'<br>';
?>