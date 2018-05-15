<?php
$Articles="1"; 

// TinyUI's RSS Writer
// delete old content
$rssfile = 'data/rss.xml';
file_put_contents($rssfile, $null);

//write topic here
$rssnow = file_get_contents($rssfile);
$rssnow .= 
"<?xml version='1.0' encoding='utf-8'?>
<rss version='2.0'>
<channel>
<title>TinyUI Feed</title>
<link>http://www.mindinet.org/</link>
<description>TinyUI is lightweight cms thingy.</description>\n";
file_put_contents($rssfile, $rssnow);
	
// NEW MYSQL Content
$rss = mysqli_query($Tinysqcon,"SELECT * FROM Articles ORDER BY id DESC");
$artcount = $rss->num_rows;
$Articles = 1;

while($row = mysqli_fetch_array($rss))
    {
	$FirstT = ''.$row['Name'].'';
	$First = ''.$row['Article'].'';
	$ArticleTime = ''.$row['Time'].'';
	$PostUser = ''.$row['User'].'';
	$RDate = date("d.m.Y",strtotime("$ArticleTime"));
	$RTime = date("H:i:s",strtotime("$ArticleTime"));

	$rssnow = file_get_contents($rssfile);
	if ($Articles < 10) {
	$rssnow .= "
	<item>
	<title>$FirstT</title>
	<link>www.mindinet.org</link>
	<guid>$Articles</guid>
	<pubDate>$RDate $RTime GMT +2</pubDate>
	<description>Posted by $PostUser.</description>
	</item>\n";
	file_put_contents($rssfile, $rssnow);
    $Articles++;
	}
}
// MYSQL Content ends
	

//write end stuff here
$rssnow = file_get_contents($rssfile);
$rssnow .= "
</channel>
</rss>";
file_put_contents($rssfile, $rssnow);
echo '<br>Rss Updated.';
?>