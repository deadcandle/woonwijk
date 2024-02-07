
<?php

class House {
    private int $floor;
    private int $rooms;
    private float $width;
    private float $height;
    private float $depth;
    private int $volume;

    public function __construct($floor, $rooms, $width, $height, $depth) {
        $this->floor = $floor;
        $this->rooms = $rooms;
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
        $this->setVolume();
    }

    public function setVolume() {
        $this->volume = $this->width * $this->height * $this->depth;
    }

    public function getHouse() {
        return "Dit huis heeft ".$this->floor." verdiepingen, 4 kamers en een volume van ".$this->volume." m3";
    }

    public function getPrice() {
        return "De prijs van dit huis is: ".$price;
    }
}

?>