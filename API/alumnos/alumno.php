<?php
	header('Content-Type: application/json');

	$resultados;

	function mostrar_cursos(){
		$cursos = array('AngularJS','MongoDB','PHP');
		return $cursos;
	}

	function mostrar_alumno(){
		$alumno = array('Ignacio','Ivan','German');

		return $alumno;
	}

	if($_GET['solicitud'] == 'cursos'){
		$resultados = mostrar_cursos();

	}else if ($_GET['solicitud'] == 'lista') {
		$resultados = mostrar_alumno();
	}

	echo json_encode($resultados);

?>