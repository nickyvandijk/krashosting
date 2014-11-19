<?php

$basename = str_replace(".php","",basename($_SERVER['REQUEST_URI']));

?>
<?php include ("php/login.php");?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="js/register.js"></script>
<script src="js/js-functions.js"></script>
<title><?php echo $basename ?></title>
</head>

<body>
	<div class="hidden-top-2">
    	 <div id="register-form" class="display-hidden">
            <div class="register-form-header">
         		<a href="" id="close-register"><img src="images/close-icon.png" /></a>
         	</div>
            <div class="register-form-wrapper">
         	     <form action="register.php" method="post">
                	<table>
                    	<tr><th colspan="2" align="left">offerte aanvraagformulier</th></tr>
                    	<tr><td>Gebruikersnaam:</td><td><input type="text" name="username" /></td></tr>
                        <tr><td>Wachtwoord:</td><td><input type="text" name="password" /></td></tr>
                        <tr><td>Geslacht:</td><td><select name="geslacht"><option>man</option><option>vrouw</option></select></td></tr>
                        <tr><td>Voornaam:</td><td><input type="text" name="voornaam" /></td></tr>
                        <tr><td>Achternaam:</td><td><input type="text" name="achternaam" /></td></tr>
                        <tr><td>Adres:</td><td><input type="text" name="adres" /></td></tr>
                        <tr><td>Postcode:</td><td><input type="text" name="postcode" /></td></tr>
                        <tr><td>Telefoonnummer:</td><td><input type="text" name="telefoonnummer" /></td></tr>
                        <tr><td>E-mail:</td><td><input type="text" name="email" /></td></tr>
                        <tr><td>Pakket:</td>
                        	<td>
                        		<select name="pakket">
                        			<option>Starter</option>
                                    <option>Basis</option>
                                    <option>Advanced</option>
                                    <option>Custom</option>
                                </select>
                            </td>
                        </tr>
                        <tr><td></td><td><input type="submit" value="vraag aan"/></td></tr>
                    </table>
                </form>
		 </div>
         </div>
    	 <div id="login-form">
         	<div class="login-form-header">
         		<a href="" id="close-login"><img src="images/close-icon.png" /></a>
         	</div>
            <div class="login-form-wrap">
                <form action="login.php" method="post">
                	<table>
                    	<tr><th colspan="2" align="left">Login</th></tr>
                    	<tr><td>Gebruikersnaam:</td><td><input type="text" name="username" /></td></tr>
                        <tr><td>Wachtwoord:</td><td><input type="text" name="password" /></td></tr>
                        <tr><td></td><td><input type="submit" value="log in"/></td></tr>
                    </table>
                </form>
        	</div>
     	 </div> 
    </div>
	 <div class="hidden-top">
    	
    </div>
	<div class="outer-rim">
    	   
    	<div class="top-bar">
        	<div class="inner-row">
            	<div id="logout" onClick="">uitloggen</div>
                <div id="login" >inloggen</div>
            </div>
        </div>
        <header>
        	<div class="inner-row">
            	<div class="logo">
                	<img src="images/kras-hosting-logo.png" width="300" alt=""/>
                </div>
                <nav>
                	<ul>
                    	<li><a href="index.php">home</a></li>
                        <li><a href="pakketten.php">paketten</a></li>
                        <li><a href="">help</a></li>
                        <li><a href="">reviews</a></li>
                        <li><a href="">contact</a></li>
                    </ul>
        		</nav>
            </div>
        </header>
        