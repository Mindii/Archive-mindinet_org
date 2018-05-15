<?php
// This is tinyui's chat/etc smile converter & BBcode enabler

// [b][/b]-tag
$bbtagfinder[] = '/\[b\](.*?)\[\/b\]/i';
$bbtagreplacer[] = '<b>$1</b>';
// [br]-tag
$bbtagfinder[] = '/\[br](.*?)/i';
$bbtagreplacer[] = '<br>$1';
// [li]-tag (line)
$bbtagfinder[] = '/\[li](.*?)/i';
$bbtagreplacer[] = '<br><img src=https://leo.mindinet.org/data/image/line.png><br>$1';

// [mail]-tag (admin email link)
$bbtagfinder[] = '/\[mail\](.*?)\[\/mail\]/i';
$bbtagreplacer[] = '<a href="mailto:contact@mindinet.org">$1</a>';

// [code][/code]-tag
$bbtagfinder[] = '/\[code\](.*?)\[\/code\]/i';
$bbtagreplacer[] = '<div id="tinycode_tag">$1</div><br>';

// [img]Link[/img]-tag
$bbtagfinder[] = '/\[img\](.*?)\[\/img\]/i';
$bbtagreplacer[] = '<img width="720" src="$1">';


// [url]Link[/url]-tag
$bbtagfinder[] = '/\[url\](.*?)\[\/url\]/i';
$bbtagreplacer[] = '<a href="$1">$1</a>';
// [url=url]text[/url]
$bbtagfinder[] = '/\[url=(.*?)\](.*?)\[\/url\]/i';
$bbtagreplacer[] = '<a href="$1" target="_blank">$2</a>';

// [tube]id[/tube]
$bbtagfinder[] = '/\[tube\](.*?)\[\/tube\]/i';
$bbtagreplacer[] = '<iframe width="720" height="405" src="//www.youtube.com/embed/$1?wmode=opaque&rel=0&theme=light&color=orange&iv_load_policy=3&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

<div style="
position: absolute;
top: 43px;
left: 0;
width: 720;
height: 405;
z-index: -15;
box-shadow: 0px 0px 0px 1px #FF7A00;
"></div>
<br><br>';

// Replace bbcodes
$bbtext = preg_replace($bbtagfinder, $bbtagreplacer, $bbtext);

//Smiles etc
$bbtext = str_replace(':)', '<img src=https://leo.mindinet.org/data/image/smile/Smiling.png>', $bbtext);
$bbtext = str_replace(':D', '<img src=https://leo.mindinet.org/data/image/smile/Grinning.png>', $bbtext);
$bbtext = str_replace('^^', '<img src=https://leo.mindinet.org/data/image/smile/Happy.png>', $bbtext);
$bbtext = str_replace(':wink:', '<img src=https://leo.mindinet.org/data/image/smile/Grinning_Winking.png>', $bbtext);
$bbtext = str_replace('<3', '<img src=https://leo.mindinet.org/data/image/smile/Heart.png>', $bbtext);
$bbtext = str_replace(':love:', '<img src=https://leo.mindinet.org/data/image/smile/Heart.png>', $bbtext);

$bbtext = str_replace('xD', '<img src=https://leo.mindinet.org/data/image/smile/Laughing.png>', $bbtext);
$bbtext = str_replace(':(', '<img src=https://leo.mindinet.org/data/image/smile/Childish.png>', $bbtext);
$bbtext = str_replace(':uncertain:', '<img src=https://leo.mindinet.org/data/image/smile/Uncertain.png>', $bbtext);
$bbtext = str_replace(':o', '<img src=https://leo.mindinet.org/data/image/smile/Terrified.png>', $bbtext);
$bbtext = str_replace('O_o', '<img src=https://leo.mindinet.org/data/image/smile/Huh.png>', $bbtext);
?>