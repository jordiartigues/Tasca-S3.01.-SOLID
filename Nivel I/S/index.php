<?php

require_once 'Athlete.php';
require_once 'OlympicGames.php';
require_once 'Event.php';
require_once 'PrinterOlympicGames.php';

$olympicGame = new OlympicGames();

$athlete1 = new Athlete("Usain Bolt","Jamaica");
$athlete2 = new Athlete("Michael Phelps","USA");

$olympicGame->addAthlete($athlete1);
$olympicGame->addAthlete($athlete2);


$event1 = new Event ("100m Sprint", "2024-08-01");
$event2= new Event ("Swimming" , "2024-08-02");

$olympicGame->addEvent($event1);
$olympicGame->addEvent($event2);

$olympicGame->addResult(new Result($athlete1 , $event1, "Gold"));
$olympicGame->addResult(new Result($athlete2, $event2, "Gold"));

$printer = new PrinterOlympicGames();
$printer->printResult($olympicGame);