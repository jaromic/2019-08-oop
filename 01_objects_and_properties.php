<?php

class Hund {
    public $name;
    public $farbe;
}

/* Objekt erzeugen: */
$meinTier = new Hund();

/* Properties setzen: */
$meinTier->name = 'Hasso';
$meinTier->farbe = 'schwarz';

/* Auslesen von Properties: */
echo "Ich habe folgendes Tier: " . get_class($meinTier) . "<br>";
echo "Sein Name ist: " . $meinTier->name . "<br>";
echo "Seine Farbe ist: " . $meinTier->farbe . "<br>";
echo "<br>";

/* Objekte werden als referenz zugewiesen: */
$zweitesTier = $meinTier;
echo "Zuweisung:<br>";
echo "gleich? " . ($zweitesTier == $meinTier) . "<br>";
echo "ident? " . ($zweitesTier === $meinTier) . "<br>";
echo "<br>";

/* sollen sie statt dessen kopiert werden, gibt es den clone-Operator: */
echo "Klon:<br>";
$zweitesTier = clone $meinTier;
echo "gleich? " . ($zweitesTier == $meinTier) . "<br>";
echo "ident? " . ($zweitesTier === $meinTier) . "<br>";
echo "<br>";

/* Ich kann Objekte mit var_dump() oder print_r() ausgeben: */
var_dump($meinTier);
echo "<br>";
print_r ( $meinTier );
echo "<br>";
echo "<br>";

/* Die Klasse eines Objektes kann ich so herausfinden: */
/* Das soll aber nur zum Debuggen verwendet werden */
echo "Typ: " .  gettype($meinTier) ."<br>";
echo "Klasse: " .  get_class($meinTier) . "<br>";

/* Objekte können in PHP nicht zerstört werden, aber gibt es keine Referenzen mehr darauf, gibt PHP den Speicher frei. */
/* IdR ist ein Objekt mit dem nächsten Request zerstört: */
unset ($meinTier);
echo "Nach unset():<br>";
var_dump($meinTier);
echo "<br>";
