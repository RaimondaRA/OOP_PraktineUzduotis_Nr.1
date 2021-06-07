<?php
use DemoApp\Vehicle;
use DemoApp\Car;
use DemoApp\Bicycle;
use DemoApp\Motorbike;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicles</title>
</head>
<body>
<?php
    $car = new Vehicle("Audi", "A5");
    $car->setPrice(13000); 
    $car->setWeight(500);
    $car->setEnginePower(150);
    $car->setMaxSpeed(260);
    $car->setDescription("The Audi A5 is a series of compact executive coupe cars produced by the German automobile manufacturer Audi since June 2007. The A5 range additionally comprises the coupe, cabriolet, and \"Sportback\" (a five-door liftback with a fastback roofline) version of the Audi A4 saloon and estate models.");
    $car->setNumberOfSeats(5);
    //var_dump($car);
    echo $car->brand." ".$car->model;
    echo "<br>";
    echo "Price: ".$car->price." Eur";
    echo "<br>";
    echo "Weight: ".$car->weight." kg";
    echo "<br>";
    echo "Engine: ".$car->enginePower." kW";
    echo "<br>";
    echo "Top speed: ".$car->maxSpeed." km/h";
    echo "<br>";
    echo "Description: ".$car->description;
    echo "<br>";
    echo "Numebr of seats: ".$car->seats;
    echo "<br>"."<br>";
    $anotherCar = new Car();
    $anotherCar->setPositionOfSteeringWheel("left");
    echo "Car Class:";
    echo "<br>";
    echo "Position of steering wheel: ".$anotherCar->getPositionOfSteeringWheel();
    echo "<br>"."<br>";
    echo "Bicycle Class:";
    echo "<br>";
    $bicycle = new Bicycle();
    $bicycle->setFork("steel");
    echo "Fork: ".$bicycle->getFork();
    echo "<br>"."<br>";
    echo "Motorbike Class:";
    echo "<br>";
    $motorbike = new Motorbike();
    $motorbike->setMotorbikeType("motocross");
    echo "Motobike type: ".$motorbike->getMotorbikeType();
    ?>
</body>
</html>