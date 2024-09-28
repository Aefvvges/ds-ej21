<?php

header('Content-Type: application/json');
require_once 'modeloRespuesta/consultarTodosRespuesta.php';
require_once '../../modelo/club.php';
require_once '../../modelo/jugador.php';

$resp = new ConsultarTodosRespuesta();

$club1 = new Club();
$club1->Nombre = 'Paris Saint-Germain Football Club';
$club1->Fundacion = '2 de agosto de 1970 (52 años)';
$club1->Presidente = 'Nasser Al-Khelaifi';

$jug1 = new Jugador();
$jug1->Id = 1;
$jug1->Nombre = 'Lionel Andrés Messi';
$jug1->Apodo = 'La Pulga, El mesías, D10S';
$jug1->Club = $club1;
$jug1->Altura = '1.70 m';

$club2 = new Club();
$club2->Nombre = 'Manchester United Football Club';
$club2->Fundacion = '5 de marzo de 1878 (144 años)';
$club2->Presidente = 'Joel Glazer';

$jug2 = new Jugador();
$jug2->Id = 2;
$jug2->Nombre = 'Lisandro Martínez';
$jug2->Apodo = 'Licha';
$jug2->Club = $club2;
$jug2->Altura = '1.75 m';

$resp->ListJugadores[] = $jug1;
$resp->ListJugadores[] = $jug2;

echo json_encode($resp);