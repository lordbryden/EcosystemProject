# Ecosystem Modeling in PHP

This project models a simple ecosystem using Object-Oriented Programming (OOP) principles in raw PHP. The ecosystem consists of three types of entities: Animals, Plants, and Insects. Each entity has its own properties and behaviors.

## Files

- `Animal.php`: Contains the `Animal` class.
- `Plant.php`: Contains the `Plant` class.
- `Insect.php`: Contains the `Insect` class.
- `Ecosystem.php`: Contains the `Ecosystem` class which manages the interactions between the entities.
- `main.php`: Main script to create and interact with the ecosystem.

## Classes

### Animal
Represents an animal in the ecosystem.

#### Properties:
- `name`: Name of the animal.
- `species`: Species of the animal.

#### Methods:
- `__construct($name, $species)`: Constructor to initialize an animal.
- `getName()`: Returns the name of the animal.
- `getSpecies()`: Returns the species of the animal.
- `makeSound()`: Returns a generic sound made by the animal.

### Plant
Represents a plant in the ecosystem.

#### Properties:
- `name`: Name of the plant.
- `type`: Type of the plant (e.g., Flower, Tree).

#### Methods:
- `__construct($name, $type)`: Constructor to initialize a plant.
- `getName()`: Returns the name of the plant.
- `getType()`: Returns the type of the plant.
- `photosynthesis()`: Simulates the process of photosynthesis.

### Insect
Represents an insect in the ecosystem.

#### Properties:
- `name`: Name of the insect.
- `species`: Species of the insect.

#### Methods:
- `__construct($name, $species)`: Constructor to initialize an insect.
- `getName()`: Returns the name of the insect.
- `getSpecies()`: Returns the species of the insect.
- `buzz()`: Simulates the buzzing sound of the insect.

### Ecosystem
Manages the interactions between animals, plants, and insects in the ecosystem.

#### Properties:
- `animals`: Array of animal objects.
- `plants`: Array of plant objects.
- `insects`: Array of insect objects.

#### Methods:
- `addAnimal(Animal $animal)`: Adds an animal to the ecosystem.
- `addPlant(Plant $plant)`: Adds a plant to the ecosystem.
- `addInsect(Insect $insect)`: Adds an insect to the ecosystem.
- `getAnimals()`: Returns the array of animals.
- `getPlants()`: Returns the array of plants.
- `getInsects()`: Returns the array of insects.
- `updateAnimal($index, Animal $animal)`: Updates an animal at the specified index.
- `updatePlant($index, Plant $plant)`: Updates a plant at the specified index.
- `updateInsect($index, Insect $insect)`: Updates an insect at the specified index.
- `deleteAnimal($index)`: Deletes an animal at the specified index.
- `deletePlant($index)`: Deletes a plant at the specified index.
- `deleteInsect($index)`: Deletes an insect at the specified index.
- `ecosystemDetails()`: Displays details of the ecosystem.

## Usage

1. Ensure you have PHP installed. You can check this by running `php -v` in your terminal.
2. Place the PHP files (`Animal.php`, `Plant.php`, `Insect.php`, `Ecosystem.php`, and `main.php`) in the same directory.
3. Open your terminal and navigate to the directory containing the PHP files.
4. Run the main script using the following command:

    ```sh
    php main.php
    ```

5. You should see the details of the ecosystem displayed in your terminal.

## Example Output

Initial Ecosystem Details:
Ecosystem Details:

Animals:
- Lion (Mammal)
- Eagle (Bird)

Plants:
- Rose (Flower)
- Oak (Tree)

Insects:
- Bee (Pollinator)
- Ant (Worker)

After Updating Animal at Index 1:
Ecosystem Details:

Animals:
- Lion (Mammal)
- Elephant (Mammal)

Plants:
- Rose (Flower)
- Oak (Tree)

Insects:
- Bee (Pollinator)
- Ant (Worker)

After Deleting Plant at Index 0:
Ecosystem Details:

Animals:
- Lion (Mammal)
- Elephant (Mammal)

Plants:
- Oak (Tree)

Insects:
- Bee (Pollinator)
- Ant (Worker)

After Adding Another Plant:
Ecosystem Details:

Animals:
- Lion (Mammal)
- Elephant (Mammal)

Plants:
- Oak (Tree)
- Tulip (Flower)

Insects:
- Bee (Pollinator)
- Ant (Worker)

After Updating Insect at Index 1:
Ecosystem Details:

Animals:
- Lion (Mammal)
- Elephant (Mammal)

Plants:
- Oak (Tree)
- Tulip (Flower)

Insects:
- Bee (Pollinator)
- Butterfly (Pollinator)

After Deleting Animal at Index 0:
Ecosystem Details:

Animals:
- Elephant (Mammal)

Plants:
- Oak (Tree)
- Tulip (Flower)

Insects:
- Bee (Pollinator)
- Butterfly (Pollinator)