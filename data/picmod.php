<style>

#newpic{
border-radius: 5px;
box-shadow: 0px 0px 10px #222222;
position: absolute;
z-index: 9;
right: 15px;
top: 15px;
color: #FF8500;
font-size: 10px;
font-family: visit;
background: #FFFFFF;
padding: 5px;
text-align: center;
}

#newpic img{
border-radius: 4px;
box-shadow: 1px 1px 2px #747474;
margin-bottom: 3px;
}

</style>

<?php
$folderr = './i/mini/';
$filetype = '*.png';
$files = glob($folderr.$filetype);
$pictext = 'Images<br>';
echo '<div id="newpic">';
echo ''.$pictext.'<br>';
for ($i=0; $i<count($files); $i++) {
    echo '<a name="'.$i.'" href="http://mindinet.org/index.php?t=images"><img src="./i/mini/'.$i.'.png" /></a><br>';
}
echo '</div>';
?>