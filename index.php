<?php
	$cursosURL= 'http://localhost/services/rest/API/alumnos/cursos';
	$alumnosURL= 'http://localhost/services/rest/API/alumnos/lista';
	
	$cursosJSON = file_get_contents($cursosURL);
	$alumnosJSON = file_get_contents($alumnosURL);

	$cursos = json_decode($cursosJSON);
	$alumnos = json_decode($alumnosJSON);

	echo "<h1>Alumnos</h1>";

	echo '<ul>';

	foreach ($alumnos as $alumno) {
		echo "<li>".$alumno."</li>";
	}
	echo "</ul>";

	echo "<h2>Cursos Disponibles</h2>";

	foreach ($cursos as $curso) {
		echo "->".$curso."<br>";
	}
?>