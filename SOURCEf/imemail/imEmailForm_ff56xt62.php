<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();

	$errorMessage = '';
	if(@$_POST['action'] != 'check_answer') {
	$form->setField('¿Cuál es el código postal de tu propiedad?', @$_POST['imObjectForm_3_2'], '', false);
	$form->setField('¿En qué estado de la República se encuentra?', @$_POST['imObjectForm_3_3'], '', false);
	$form->setField('¿En qué alcaldía o municipio se encuentra?', @$_POST['imObjectForm_3_4'], '', false);
	$form->setField('¿En qué colonia se encuentra?', @$_POST['imObjectForm_3_5'], '', false);
	$form->setField('¿Cuál es el nombre de la calle?', @$_POST['imObjectForm_3_6'], '', false);
	$form->setField('¿Qué número exterior tiene?', @$_POST['imObjectForm_3_7'], '', false);
	$form->setField('¿Qué número interior?', @$_POST['imObjectForm_3_8'], '', false);
	$form->setField('', @$_POST['imObjectForm_3_9'], '', true);
	$form->setField('¿Tienes acceso a la propiedad?', @$_POST['imObjectForm_3_10'], '', false);
	$form->setField('¿Qué tipo de propiedad es?', @$_POST['imObjectForm_3_11'], '', false);
	$form->setField('¿Cuál es tu relación con la propiedad?', @$_POST['imObjectForm_3_12'], '', false);
	$form->setField('¿Cuánto mide el terreno?', @$_POST['imObjectForm_3_13'], '', false);
	$form->setField('¿Cuánto mide el área construida?', @$_POST['imObjectForm_3_14'], '', false);
	$form->setField('¿Cuál es el año de construcción? (Antigüedad)', @$_POST['imObjectForm_3_15'], '', false);
	$form->setField('¿Número de Habitaciones?', @$_POST['imObjectForm_3_16'], '', false);
	$form->setField('¿Número de 1/2 baños?', @$_POST['imObjectForm_3_17'], '', false);
	$form->setField('¿Número de baños?', @$_POST['imObjectForm_3_18'], '', false);
	$form->setField('¿Cuántos lugares de estacionamiento para autos tiene?', @$_POST['imObjectForm_3_19'], '', false);
	$form->setField('¿Tiene alguna amenidad o característica especial?', @$_POST['imObjectForm_3_20'], '', false);
	$form->setField('¿Cuál es el valor aproximado de tu propiedad?', @$_POST['imObjectForm_3_21'], '', false);
	$form->setField('', @$_POST['imObjectForm_3_22'], '', true);
	$form->setField('¿Cuál es el problema que tiene tu propiedad?', @$_POST['imObjectForm_3_24'], '', false);
	$form->setField('Describe con tus palabras cuál es el problema que ha tenido tu propiedad', @$_POST['imObjectForm_3_25'], '', false);
	$form->setField('', @$_POST['imObjectForm_3_26'], '', true);
	$form->setField('¿Cuál es tu nombre?', @$_POST['imObjectForm_3_28'], '', false);
	$form->setField('¿En qué número podemos contactarte?', @$_POST['imObjectForm_3_29'], '', false);
	$form->setField('¿En qué correo podemos contactarte?', @$_POST['imObjectForm_3_30'], '', false);
	$form->setField('', @$_POST['imObjectForm_3_31'], '', false);
	$form->setField('', @$_POST['imObjectForm_3_32'], '', false);
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != '84BDE5E513E40766DA2A4DED49E97B2B' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner('no_reply@gmail.com', $_POST['imObjectForm_3_30'] != '' ? $_POST['imObjectForm_3_30'] : 'contacto@blocksale.mx', 'contacto@blocksale.mx', 'CUESTIONARIO QUIERO VENDER', "Datos enviados desde website:\n\n\n", true);
		$form->mailToCustomer('no_reply@gmail.com', 'no_reply@gmail.com', $_POST['imObjectForm_3_30'], 'Blocksale - Felicidades, acabas de dar el primer paso!', "Gracias por contactar a Blocksale. Hemos recibido tu información sobre la propiedad y estaremos realizando un análisis preliminar para determinar si podamos ayudarte.\n\nEn caso de que sí podamos, te estaremos contactado a través de los medios de contacto que nos diste para agendar una cita y conocernos.\n\nNO ES NECESARIO QUE NOS CONTESTES ESTE CORREO\n\nATENTAMENTE\nEquipo de comunidad de Blocksale", false);
		@header('Location: ../muy-bien.html');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file