<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();

	$errorMessage = '';
	if(@$_POST['action'] != 'check_answer') {
	$form->setField('Nombre Completo', @$_POST['imObjectForm_2_1'], '', false);
	$form->setField('Teléfono fijo o celular', @$_POST['imObjectForm_2_2'], '', false);
	$form->setField('Correo electrónico:', @$_POST['imObjectForm_2_3'], '', false);
	$form->setField('Mensaje:', @$_POST['imObjectForm_2_4'], '', false);
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != '06D501FA7C83CDFD38CC997648CE2A99' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner('no_reply@gmail.com', $_POST['imObjectForm_2_3'] != '' ? $_POST['imObjectForm_2_3'] : 'contacto@blocksale.mx', 'contacto@blocksale.mx', 'Nuevo desde contacta con nostros', "Datos recibidos desde Contacta con Nosotros:\n\n", true);
		$form->mailToCustomer('no_reply@gmail.com', 'no_reply@gmail.com', $_POST['imObjectForm_2_3'], 'Gracias por contactarnos', "¡Hola!\nGracias por contactarnos.\n\nConfirmamos que hemos recibido los datos correctamente y que responderemos lo antes posible.\n\n¡Gracias por haber elegido nuestro sitio web!\n", false);
		@header('Location: ../enviado.html');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file