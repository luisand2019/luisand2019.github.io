<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'url' => 'http://www.softy.com/CursoInfor/',
	'homepage_url' => 'http://www.softy.com/CursoInfor/index.html',
	'icon' => 'http://www.softy.com/CursoInfor/admin/images/logo_l5i03kxu.png',
	'version' => '13.1.8.23',
	'sitename' => 'CURSO DE INFORMATICA  FCAPFyV',
	'public_folder' => '',
	'salt' => 'y6952p0ne1a8gog8fnz68n1ecbuja7iprowa3wgsd3ybvt9n8',
	'use_common_email_sender_address' => false,
	'common_email_sender_addres' => ''
);


$imSettings['admin'] = array(
	'icon' => 'admin/images/logo_l5i03kxu.png',
	'theme' => 'orange'
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array();
$ecommerce = Configuration::getCart();
$ecommerce->setSettings(array(
	'force_sender' => false,
	'email_opening' => 'Estimado cliente,<br /><br />Gracias por su compra. Este es un resumen de su pedido<br /><br />A continuación encontrará una lista de los productos pedidos, la información de facturación y las instrucciones sobre el envío y la forma de pago que ha elegido.',
	'email_closing' => 'Póngase en contacto con nosotros si requiere información adicional.<br /><br />Atentamente, el personal de Ventas.',
	'useCSV' => false,
	'header_bg_color' => '#C0C0C0',
	'header_text_color' => '#000000',
	'cell_bg_color' => 'transparent',
	'cell_text_color' => '#000000',
	'border_color' => '#808080',
	'owner_email' => '',
	'vat_type' => 'included'
));


/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array();

/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'phpmailer';
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '<meta name="generator" content="Incomedia WebSite X5 v13 - www.websitex5.com">' . "\n" . '</head>' . "\n" . '<body bgcolor="#253A58" style="background-color: #253A58;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px;">' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; padding: 10px; font: normal normal normal 9pt \'Tahoma\'; color: #000000; background-color: #FFFFFF; text-align: left; text-decoration: none;  width: 700px;border-style: solid; border-color: #808080; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px;background-color: #FFFFFF" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '</table>' . "\n" . '<table width="100%"><tr><td id="imEmailFooter" style="font: normal normal normal 7pt \'Tahoma\'; color: #FFFFFF; background-color: transparent; text-align: center; text-decoration: none;  padding: 10px; margin-top: 5px;background-color: transparent">' . "\n\t\t" . 'Este e-mail incluye información exclusiva para el destinatario mencionado anteriormente.<br>Si lo ha recibido por error, notifíqueselo inmediatamente al remitente y destrúyalo sin copiarlo.' . "\n\t" . '</td></tr></table>' . "\n\t" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = '#FFFFFF';
$ImMailer->bodyBackgroundEven = '#FFFFFF';
$ImMailer->bodyBackgroundOdd = '#F0F0F0';
$ImMailer->bodyBackgroundBorder = '#CDCDCD';
$ImMailer->bodySeparatorBorderColor = '#000000';
$ImMailer->emailBackground = '#253A58';
$ImMailer->emailContentStyle = 'font: normal normal normal 9pt \'Tahoma\'; color: #000000; background-color: #FFFFFF; text-align: left; text-decoration: none; ';
$ImMailer->emailContentFontFamily = 'font-family: Tahoma;';
ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label>Palabra de control:</label><br />
			<input type=\"text\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";

// End of file x5settings.php