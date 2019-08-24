<?php
class Hund
{
    private $name;
    private $farbe;

    /**
     * Hund constructor.
     * @param $name
     * @param $farbe
     */
    public function __construct($name, $farbe='schwarz')
    {
        $this->name = $name;
        $this->farbe = $farbe;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getFarbe()
    {
        return $this->farbe;
    }

    /**
     * @param mixed $farbe
     */
    public function setFarbe($farbe)
    {
        $this->farbe = $farbe;
    }

}

$meinTier = new Hund('Bello');
$anderesTier = new Hund ('Einstein');

$anderesTier->setFarbe('braun');

foreach([$meinTier, $anderesTier] as $tier) {
    echo "Tier {$tier->getName()} hat die Farbe {$tier->getFarbe()}<br>";
}