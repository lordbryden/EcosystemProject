<?php
class Plant {
    private $name;
    private $type;

    public function __construct($name, $type) {
        $this->name = $name;
        $this->type = $type;
    }

    public function getName() {
        return $this->name;
    }

    public function getType() {
        return $this->type;
    }

    public function photosynthesis() {
        return "Converting sunlight into energy";
    }
}
?>
