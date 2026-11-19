<?php

require_once 'Athlete.php';
require_once 'Event.php';
require_once 'Result.php';

class OlympicGames {
    private $athletes = [];
    private $events = [];
    private $results = [];

    public function addAthlete(Athlete $athlete): void {
        $this->athletes[] = $athlete;
    }
    public function addEvent (Event $event) : void {
        $this->events[] = $event;
    }
    public function addResult (Result $result) : void {
        $this->results[] = $result;
    }

    public function getAthletes(): array{
        return $this->athletes;
    }

    public function getResults(): array{
        return $this->results;
    }

    public function getEvents(): array{
        return $this->events;
    }
}