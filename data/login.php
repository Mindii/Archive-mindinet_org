<style>
#LoginForm1{
font-family: visit;
font-size: 10px;
width: 120px;
margin-left: 30px;
margin-bottom: 5px;
}

#LoginForm2{
font-family: visit;
font-size: 10px;
width: 120px;
margin-left: 30px;
}
#LoginFormButton{
margin-left: 70px;
margin-top: 10px;
color: #FF7A00;
font-size: 14px;
font-family: visit;
}

#LoginFrame{
font-family: visit;
font-size: 10px;
margin-left: 35%;
background: #FFFFFF;
width: 200px;
padding-bottom: 1px;
padding-left: 10px;
padding-right: 10px;
box-shadow: 0px 0px 2px #000000;
margin-top: 10px;
}

</style>

<?php

echo "<div id='LoginFrame'>
	<form>
	<form action='' method='post'>
	<input type='hidden' name='t' value='log'>
	<br>Login<br><br>
	Username:<input type='text' id='LoginForm1' name='User' value=''><br>
	Password:<input type='text' id='LoginForm2' name='Password' value=''><br>
	<input type='submit' id='LoginFormButton' value='Login'> 
	</form><br>
	</div><br>";
?>