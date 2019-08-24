<?php

class Hund
{
    public $name;
    public $farbe;

    /**
     * @param $name
     * @param $farbe
     */
    public function __construct($name, $farbe)
    {
        $this->name = $name;
        $this->farbe = $farbe;
    }

    public function belle()
    {
        echo "WAU<br>";
    }

    public function istHund() {
        return true;
    }
}

/* Objekte können nicht nur Daten halten, sondern auch Funktionalität. Eine Funktion in einer KLasse nennen wir Methode. */

/* Konstruktor: */
$meinTier = new Hund('Bello', 'braun');

/* Andere Methode aufrufen: */
echo "Methode aufrufen: <br>";
$meinTier->belle();
echo "<br>";

echo "Methode mit Rückgabewert: <br>";
echo "ist Hund: " . ($meinTier->istHund() ? "ja" : "nein");
