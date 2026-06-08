<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'site_id' => '16B9AD7B8898C010F4D3BBA6C4DD4BFC',
	'url' => 'https://blocksale.mx/',
	'homepage_url' => 'https://blocksale.mx/index.html',
	'icon' => 'https://blocksale.mx/favImage.png',
	'version' => '2026.1.3.0',
	'sitename' => 'BlocksaleMx',
	'lang_code' => 'es-ES',
	'rtl' => false,
	'public_folder' => '',
	'salt' => 'ms24o30lpohdv57vigxfqksm7pf0wlm0aif4qpkvshyyc',
	'common_email_sender_addres' => 'no_reply@gmail.com',
	'enable_sender_header' => false,
	'date_format' => 'dd MMM yyyy',
	'date_format_ext' => 'dddd dd MMM yyyy',
	'date_format_no_day' => 'MMM yyyy',
	'date_format_no_day_ext' => 'MMM yyyy'
);
/*
|-------------------------------
|	BREAKPOINTS
|-------------------------------
*/

$imSettings['breakpoints'] = array(
	array("name" => "Desktop", "hash" => "ea2f0ee4d5cbb25e1ee6c7c4378fee7b", "start" => "max", "end" => 1150.0, "fluid" => false),
	array("name" => "Breakpoint 1", "hash" => "d2f9bff7f63c0d6b7c7d55510409c19b", "start" => 1149.9, "end" => 720.0, "fluid" => false),
	array("name" => "Mobile", "hash" => "72e5146e7d399bc2f8a12127e43469f1", "start" => 719.9, "end" => 480.0, "fluid" => false),
	array("name" => "Mobile Fluid", "hash" => "5ecdcca63de80fd3d4fbb36295d22b7d", "start" => 479.9, "end" => 0.0, "fluid" => true),
);
/*
|-------------------------------
|	PASSWORD POLICY
|-------------------------------
*/

$imSettings['password_policy'] = array(
	'required_policy' => false,
	'minimum_characters' => '6',
	'include_uppercase' => false,
	'include_numeric' => false,
	'include_special' => false
);
/*
|-------------------------------
|	Captcha
|-------------------------------
*/ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label for=\"mwxhqwn3-imCpt\">Palabra de control:</label><br />
			<input type=\"text\" id=\"mwxhqwn3-imCpt\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";


$imSettings['admin'] = array(
	'icon' => 'admin/images/logo_zwsjvq04.webp',
	'notification_public_key' => 'BAqCrr-iNButTEvTWKSFM583meIepzHeH3bQ9uzVunSNAuW5u2l1Gs2K7MesZXn-t3Jh4Mfi6VoDW2lX2eqoaFg',
	'notification_private_key' => 'DLEGkhgPyH6-Bjz-An_lOIkFngYvyyXV6gH5SqGlTFk',
	'notification_dbprefix' => 'w5_ovpupt15_notifications_',
	'enable_notifications' => false,
	'theme' => 'orange',
	'extra-dashboard' => array(),
	'extra-links' => array()
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array();
$ecommerce = Configuration::getCart();
// Setup the coupon data
$couponData = array();
$couponData['products'] = array();
// Setup the cart
$ecommerce->setPublicFolder('');
$ecommerce->setCouponData($couponData);
$ecommerce->setSettings(array(
	'page_url' => 'https://blocksale.mx/',
	'force_sender' => false,
	'mail_btn_css' => 'display: inline-block; text-decoration: none; color: rgba(255, 255, 255, 1); background-color: rgba(54, 71, 79, 1); padding: 5px; border: solid; border-block-color: rgba(55, 71, 79, 1) rgba(55, 71, 79, 1); border-inline-color: rgba(55, 71, 79, 1) rgba(55, 71, 79, 1); border-width: 0px; border-radius: 0px; ',
	'email_opening' => 'Estimado cliente,<br /><br />Gracias por su pedido Se le recordamos de que el pago no ha todavía sido recibido.<br /><br />A continuación encontrará una lista de los productos pedidos, la información de facturación y de envío y las instrucciones para efectuar el pago.',
	'email_closing' => 'Póngase en contacto con nosotros si requiere información adicional.<br /><br />Atentamente, el personal de Ventas.',
	'email_payment_opening' => 'Estimado cliente,<br /><br />Gracias por su compra. Se le confirmamos que el pago ha sido recibido y que el pedido será procesado lo antes posible.<br /><br />A continuación encontrará una lista de los productos pedidos y la información de facturación y de envío.',
	'email_payment_closing' => 'Estamos a su disposición si necesita más información.<br /><br />Un cordial saludo, el Equipo de Ventas',
	'email_digital_shipment_opening' => 'Estimado Cliente,<br /><br />muchas gracias por su compra. Aquí le presentamos la lista de enlaces de descarga correspondientes a los productos solicitados:',
	'email_digital_shipment_closing' => 'Estamos a su disposición si necesita más información.<br /><br />Un cordial saludo, el Equipo de Ventas',
	'email_physical_shipment_opening' => 'Estimado cliente, <br /><br />gracias por su orden. Se le confirmamos que su pedido ha sido correctamente procesado y que los productos han sido enviado. <br /><br />Aquí encuentra la lista de los productos adquiridos:',
	'email_physical_shipment_closing' => 'Estamos a su disposición si necesita más información.<br /><br />Un cordial saludo, el Equipo de Ventas',
	'sendEmailBeforePayment' => true,
	'sendEmailAfterPayment' => false,
	'useCSV' => false,
	'header_bg_color' => 'rgba(37, 58, 88, 1)',
	'header_text_color' => 'rgba(255, 255, 255, 1)',
	'cell_bg_color' => 'rgba(255, 255, 255, 1)',
	'cell_text_color' => 'rgba(0, 0, 0, 1)',
	'availability_reduction_type' => 1,
	'border_color' => 'rgba(211, 211, 211, 1)',
	'owner_email' => 'example@example.com',
	'vat_type' => 'included',
	'availability_image' => ''
));

$ecommerce->setPriceFormatData(array(
	'decimals' => 2,
	'decimal_sep' => '.',
	'thousands_sep' => '',
	'currency_to_right' => true,
	'currency_separator' => ' ',
	'show_zero_as' => '0',
	'currency_symbol' => '€',
	'currency_code' => 'EUR',
	'currency_name' => 'Euro',
));

$ecommerce->setDigitalProductsData(array());
$ecommerce->setProductsData(array());
$ecommerce->setSlugToProductIdMap(array());
$ecommerce->setCategoriesData(array(
	'nrtfhrd6' => array(
		'id' => 'nrtfhrd6',
		'name' => 'Nueva categoría',
		'containsProductsWithProductPage' => false,
		'products' => array(),
		'categories' => array()
	)
));
$ecommerce->setCommentsData(array(
	'enabled' => false,
	'type' => "websitex5",
	'db' => '',
	'table' => 'w5_ovpupt15_products_comments',
	'prefix' => 'x5productPage_',
	'comment_type' => "commentandstars"
));
$ecommerce->setPaymentData(array(
	'8dkejfu5' => array(
		'id' => '8dkejfu5',
		'name' => 'Transferencia bancaria',
		'description' => 'Pague más tarde mediante transferencia bancaria.',
		'email_text' => 'Estos son los datos necesarios para realizar el pago por transferencia bancaria:

XXX YYY ZZZ

Tenga en cuenta que una vez completado el pago, debe enviar una copia del recibo junto con el número de pedido.',
		'enableAfterPaymentEmail' => false
	)));
$ecommerce->setShippingData(array(
	'j48dn4la' => array(
		'id' => 'j48dn4la',
		'name' => 'Correo',
		'description' => 'La mercancía se entregará en 3-5 días.',
		'email_text' => 'Envío por Correo.\\nLa mercancía se entregará en 3-5 días.',
		'tracking_type' => 'none'
	),
	'hdj47dut' => array(
		'id' => 'hdj47dut',
		'name' => 'Envío urgente',
		'description' => 'La mercancía se entregará en 1-2 días.',
		'email_text' => 'Envío por Envío urgente.\\nLa mercancía se entregará en 1-2 días.',
		'tracking_type' => 'none'
	)));

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array();

/*
|-------------------------------------------------------------------------------------------
|	Dynamic Objects SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['dynamicobjects'] = array(	'template' => array(
),
	'pages' => array(

	));


/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'phpmailer';
$ImMailer->exposeWsx5 = false;
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '</head>' . "\n" . '<body bgcolor="#FFFFFF" style="background-color: #FFFFFF;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px; border-collapse: separate;">' . "\n\t" . '<tr><td id="imEmailHeader" style="text-align: center; width: 700px;border-top-style: solid; border-top-color: #FFFFFF; border-top-width: 0px; border-left: 0px solid rgba(255, 255, 255, 1); border-right: 0px solid rgba(255, 255, 255, 1); border-bottom-style: none; border-bottom-color: transparent; border-bottom-width: 0px; border-bottom: none; border-top-left-radius: 0px; border-top-right-radius: 0px; background-color: #FFFFFF;" width="700"><img src="https://blocksale.mx/images/casa-ladrillos-azules.png"  style="width: 122px; border: none; margin-top: 25px; margin-bottom: 25px; margin-left: 25px; margin-right: 25px; " width="122"></td></tr>' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; font: normal normal normal 16pt \'Montserrat\'; color: #000000; background-color: #FFFFFF; text-decoration: none; text-align: left; width: 700px; padding-top: 25px;  padding-bottom: 25px; padding-left: 25px; padding-right: 25px;  background-color: #FFFFFF" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '</table>' . "\n" . '<table width="100%"><tr><td id="imEmailIcons" style="background-color: #FFFFFF; padding-top: 25px;  padding-bottom: 25px; padding-left: 15px; padding-right: 15px;  text-align: center;  min-height: 300px; " width="700"></td></tr>' . "\n\t" . '</table>' . "\n" . '<table width="100%"><tr><td id="imEmailFooter" style="font: normal normal normal 7pt \'Montserrat\'; color: #FFFFFF; background-color: transparent; text-decoration: none; text-align: center;  margin-top: 5px; padding-top: 25px;  padding-bottom: 25px; padding-left: 25px; padding-right: 25px; background-color: transparent">' . "\n\t\t" . '' . "\n\t" . '</td></tr></table>' . "\n\t" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = '#FFFFFF';
$ImMailer->bodyBackgroundEven = '#FFFFFF';
$ImMailer->bodyBackgroundOdd = '#F0F0F0';
$ImMailer->bodyBackgroundBorder = '#CDCDCD';
$ImMailer->bodyTextColorOdd = '#000000';
$ImMailer->bodySeparatorBorderColor = '#000000';
$ImMailer->emailBackground = '#FFFFFF';
$ImMailer->emailContentStyle = 'font: normal normal normal 16pt \'Montserrat\'; color: #000000; background-color: #FFFFFF; text-decoration: none; text-align: left; ';
$ImMailer->emailContentFontFamily = 'font-family: Montserrat;';

// End of file x5settings.php