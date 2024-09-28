<?php

header('Content-Type: application/json');
require_once 'modelosRespuestas/consultarTodosRespuesta.php';
require_once '../../modelo/jugador.php';
require_once '../../modelo/equipos.php';

$resp = new ConsultarTodosRespuesta();

$jug1 = new Jugador();
$jug1->Nombre = 'Pedro Gonzales';
$jug1->Posicion = 'Delantero';
$jug1->Debut = '17 de agosto de 2005';
$jug1->Goles = 10;

$jug2 = new Jugador ();
$jug2->Nombre = 'Daniel Sanchez';
$jug2->Posicion = 'Delantero';
$jug2->Debut = '16 de diciembre de 2010';
$jug2->Goles = 0;

$jug3 = new Jugador ();
$jug3->Nombre = 'Juan Perez';
$jug3->Posicion = 'Defensor';
$jug3->Debut = '17 de septiembre de 2019';
$jug3->Goles = 10;

$eq1 = new Equipos ();
$eq1->Id = 1;
$eq1->Nombre = 'Equipo 1';
$eq1->ListaJugadores[] = $jug1;
$eq1->ListaJugadores[] = $jug2;
$eq1->ListaJugadores[] = $jug3;
$eq1->Fundacion = '3 de noviembre de 1903 (118 años)';
$eq1->Presidente = 'Javier Perez';

$jug4 = new Jugador ();
$jug4->Nombre = 'Ignacio Gonzales';
$jug4->Posicion = 'Arquero';
$jug4->Debut = '17 de enero de 2020';
$jug4->Goles = 2;

$jug5 = new Jugador ();
$jug5->Nombre = 'Ariel Cosentino';
$jug5->Posicion = 'Mediocampista';
$jug5->Debut = '16 de diciembre de 2001';
$jug5->Goles = 2;

$jug6 = new Jugador ();
$jug6->Nombre = 'Diego Dominguez';
$jug6->Posicion = 'Defensor';
$jug6->Debut = '15 d febrero de 2018';
$jug6->Goles = 5;

$jug7 = new Jugador ();
$jug7->Nombre = 'Gustavo Santos';
$jug7->Posicion = 'Delantero';
$jug7->Debut = '16 de diciembre de 2009';
$jug7->Goles = 3;

$eq2 = new Equipos();
$eq2->Id = 2;
$eq2->Nombre = 'Equipo 2';
$eq2->ListaJugadores[] = $jug4;
$eq2->ListaJugadores[] = $jug5;
$eq2->ListaJugadores[] = $jug6;
$eq2->ListaJugadores[] = $jug7;
$eq2->Fundacion = '5 de abril de 1923';
$eq2->Presidente = 'Ignacio Quinteros';

$resp->ListEquipos[] = $eq1;
$resp->ListEquipos[] = $eq2;
echo json_encode($resp);