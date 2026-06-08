<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();

	$errorMessage = '';
	if(@$_POST['action'] != 'check_answer') {
	$form->setField('', @$_POST['imObjectForm_5_1'], '', true);
	$form->setField('', @$_POST['imObjectForm_5_2'], '', true);
	$form->setField('', @$_POST['imObjectForm_5_3'], '', true);
	$form->setField('Nombre completo', @$_POST['imObjectForm_5_6'], '', false);
	$form->setField('Teléfono fijo o celular', @$_POST['imObjectForm_5_7'], '', false);
	$form->setField('Correo electrónico:', @$_POST['imObjectForm_5_8'], '', false);
	$form->setField('Mensaje:', @$_POST['imObjectForm_5_9'], '', false);
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != 'E16FE2848FAF323180901E6A9C2B3FFE' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner('no_reply@gmail.com', '', 'contacto@blocksale.mx', 'Mensaje quiero invertir', "Nuevos datos recibidos desde quiero invertir:\n\n", true);
		$form->mailToCustomer('no_reply@gmail.com', 'no_reply@gmail.com', $_POST['imObjectForm_5_8'], '¡Gracias por contactarnos!', "¡Hola!\nGracias por contactarnos.\n\nConfirmamos que hemos recibido sus datos correctamente y que nuestro equipo responderá a su solicitud lo antes posible.\n\n¡Gracias por haber elegido nuestro sitio web!", false);
		@header('Location: ../enviado.html');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file