<?php
class Ecosystem {
    private $animals = [];
    private $plants = [];
    private $insects = [];

    public function addAnimal(Animal $animal) {
        $this->animals[] = $animal;
    }

    public function addPlant(Plant $plant) {
        $this->plants[] = $plant;
    }

    public function addInsect(Insect $insect) {
        $this->insects[] = $insect;
    }

    public function getAnimals() {
        return $this->animals;
    }

    public function getPlants() {
        return $this->plants;
    }

    public function getInsects() {
        return $this->insects;
    }

    public function updateAnimal($index, Animal $animal) {
        if (isset($this->animals[$index])) {
            $this->animals[$index] = $animal;
        }
    }

    public function updatePlant($index, Plant $plant) {
        if (isset($this->plants[$index])) {
            $this->plants[$index] = $plant;
        }
    }

    public function updateInsect($index, Insect $insect) {
        if (isset($this->insects[$index])) {
            $this->insects[$index] = $insect;
        }
    }

    public function deleteAnimal($index) {
        if (isset($this->animals[$index])) {
            unset($this->animals[$index]);
            $this->animals = array_values($this->animals);
        }
    }

    public function deletePlant($index) {
        if (isset($this->plants[$index])) {
            unset($this->plants[$index]);
            $this->plants = array_values($this->plants);
        }
    }

    public function deleteInsect($index) {
        if (isset($this->insects[$index])) {
            unset($this->insects[$index]);
            $this->insects = array_values($this->insects);
        }
    }

    public function ecosystemDetails() {
        echo "Ecosystem Details:\n";

        echo "\nAnimals:\n";
        foreach ($this->animals as $animal) {
            echo "- " . $animal->getName() . " (" . $animal->getSpecies() . ")\n";
        }

        echo "\nPlants:\n";
        foreach ($this->plants as $plant) {
            echo "- " . $plant->getName() . " (" . $plant->getType() . ")\n";
        }

        echo "\nInsects:\n";
        foreach ($this->insects as $insect) {
            echo "- " . $insect->getName() . " (" . $insect->getSpecies() . ")\n";
        }
    }
}
?>
