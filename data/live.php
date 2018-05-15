<style>
#streamframe {
	width: 720px;
	position: relative;
	z-index: 9;
	left: 45px;
	color: #000000;
	background: #ffffff;
	padding: 1px;
	margin-top: 10px;
	box-shadow: 0px 0px 8px #A0A0A0;
	border-radius: 2px;
	text-indent: 0px;
}
#disqus_thread {
	width: 698;
	position: relative;
	z-index: 9;
	left: 45px;
	color: #000000;
	background: #ffffff;
	padding: 12px;
	padding-top: 0;
	padding-bottom: 0;
	margin-top: 10px;
	box-shadow: 0px 0px 8px #A0A0A0;
	border-radius: 2px;
	border-bottom-left-radius: 19px;
	text-indent: 0px;
}
#streamtext {
	font-family: visit;
	font-size: 20;
}
.streamg {
	color: #FF7A00;
}
</style>

<?php
// twitch info
	$twitchapi = file_get_contents('https://api.twitch.tv/kraken/channels/Mindinetorg');
	$twitch = json_decode($twitchapi, true);
	$twitch_game = $twitch['game'];
	$twitch_status = $twitch['status'];
	
	if ($twitch_game == $null) { echo '<div id="streamtext">'.$twitch_status.'</div>'; }
	else { echo '<div id="streamtext">Now playing: <span class="streamg">'.$twitch_game.'</span></div>'; }
?>
<div id='streamframe'>
<iframe src="http://www.twitch.tv/mindinetorg/embed" frameborder="0" scrolling="no" height="436" width="720" seamless="seamless"></iframe>
</div><br>

<div id="disqus_thread"></div>
    <script type="text/javascript">
        var disqus_shortname = 'mindinet'; // required: replace example with your forum shortname
		var disqus_identifier = 'Mindinet.org - Live Stream';
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    