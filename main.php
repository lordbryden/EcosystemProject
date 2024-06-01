<?php
// Include the class definitions
require_once 'animal.php';
require_once 'plant.php';
require_once 'insect.php';
require_once 'ecosystem.php';

// Function to display the ecosystem details
function displayEcosystemDetails($ecosystem) {
    echo "\nEcosystem Details:\n";
    $ecosystem->ecosystemDetails();
}

// Function to get user input
function getInput($prompt) {
    echo $prompt;
    return trim(fgets(STDIN));
}

// Function to display entities with their indexes
function displayEntitiesWithIndexes($entities, $entityType) {
    echo "\n$entityType:\n";
    foreach ($entities as $index => $entity) {
        echo "$index. " . $entity->getName() . " (" . ($entityType == "Plant" ? $entity->getType() : $entity->getSpecies()) . ")\n";
    }
}

// Create the ecosystem
$ecosystem = new Ecosystem();

while (true) {
    echo "\nWhat would you like to do?\n";
    echo "1. Add\n";
    echo "2. Update\n";
    echo "3. Delete\n";
    echo "4. Display Ecosystem Details\n";
    echo "5. Exit\n";

    $choice = getInput("Enter your choice (1-5): ");

    switch ($choice) {
        case '1':
            $entityType = getInput("What would you like to add? (1. Animal, 2. Plant, 3. Insect): ");
            $numEntities = getInput("How many would you like to add?: ");

            for ($i = 0; $i < $numEntities; $i++) {
                switch ($entityType) {
                    case '1':
                        $name = getInput("Enter the name of the animal: ");
                        $species = getInput("Enter the species of the animal: ");
                        $ecosystem->addAnimal(new Animal($name, $species));
                        break;
                    case '2':
                        $name = getInput("Enter the name of the plant: ");
                        $type = getInput("Enter the type of the plant: ");
                        $ecosystem->addPlant(new Plant($name, $type));
                        break;
                    case '3':
                        $name = getInput("Enter the name of the insect: ");
                        $species = getInput("Enter the species of the insect: ");
                        $ecosystem->addInsect(new Insect($name, $species));
                        break;
                    default:
                        echo "Invalid option\n";
                        break;
                }
            }
            break;

        case '2':
            $entityType = getInput("What would you like to update? (1. Animal, 2. Plant, 3. Insect): ");
            
            switch ($entityType) {
                case '1':
                    displayEntitiesWithIndexes($ecosystem->getAnimals(), "Animals");
                    break;
                case '2':
                    displayEntitiesWithIndexes($ecosystem->getPlants(), "Plants");
                    break;
                case '3':
                    displayEntitiesWithIndexes($ecosystem->getInsects(), "Insects");
                    break;
                default:
                    echo "Invalid option\n";
                    break;
            }

            $index = getInput("Enter the index of the entity to update: ");

            switch ($entityType) {
                case '1':
                    $name = getInput("Enter the new name of the animal: ");
                    $species = getInput("Enter the new species of the animal: ");
                    $ecosystem->updateAnimal($index, new Animal($name, $species));
                    break;
                case '2':
                    $name = getInput("Enter the new name of the plant: ");
                    $type = getInput("Enter the new type of the plant: ");
                    $ecosystem->updatePlant($index, new Plant($name, $type));
                    break;
                case '3':
                    $name = getInput("Enter the new name of the insect: ");
                    $species = getInput("Enter the new species of the insect: ");
                    $ecosystem->updateInsect($index, new Insect($name, $species));
                    break;
                default:
                    echo "Invalid option\n";
                    break;
            }
            break;

        case '3':
            $entityType = getInput("What would you like to delete? (1. Animal, 2. Plant, 3. Insect): ");
            
            switch ($entityType) {
                case '1':
                    displayEntitiesWithIndexes($ecosystem->getAnimals(), "Animals");
                    break;
                case '2':
                    displayEntitiesWithIndexes($ecosystem->getPlants(), "Plants");
                    break;
                case '3':
                    displayEntitiesWithIndexes($ecosystem->getInsects(), "Insects");
                    break;
                default:
                    echo "Invalid option\n";
                    break;
            }

            $index = getInput("Enter the index of the entity to delete: ");

            switch ($entityType) {
                case '1':
                    $ecosystem->deleteAnimal($index);
                    break;
                case '2':
                    $ecosystem->deletePlant($index);
                    break;
                case '3':
                    $ecosystem->deleteInsect($index);
                    break;
                default:
                    echo "Invalid option\n";
                    break;
            }
            break;

        case '4':
            displayEcosystemDetails($ecosystem);
            break;

        case '5':
            exit("Goodbye!\n");

        default:
            echo "Invalid choice. Please try again.\n";
            break;
    }
}
?>
