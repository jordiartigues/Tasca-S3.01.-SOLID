<?php

require_once 'OlympicGames.php';

class PrinterOlympicGames
{

    public function printResult(OlympicGames $olympicGame)
    {
        echo "Olympic Games Results:\n";

        foreach ($olympicGame->getEvents() as $event) {

            echo "Event: " . $event->getEvent() .
                " on " . $event->getDate() . "\n";

            foreach ($olympicGame->getResults() as $result) {

                if ($result->getEvent() === $event) {

                    $athlete = $result->getAthlete();

                    echo "- " . $athlete->getName() .
                        " from " . $athlete->getCountry() .
                        " won " . $result->getMedal() . "\n";
                }
            }
        }
    }
}
