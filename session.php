<?php

$color = [];

//           0        1       2
$color = ["green", "blue", "red"];
echo $color[2];

// Add item in array
$color[] = "black";
echo json_encode($color), "<br>";

// Replace item in array
$color[0] = "yellow";
echo json_encode($color), "<br>";

// Delete a specific item in array
unset($color[1]);
echo json_encode($color), "<br>";

// Example data
$data = ["john doe", 23, "Bacoor, Cavite", "BSIT", 4102, "09999999999"];
echo json_encode($color), "<br>";

$cars = ["toyota" => "vios", "honda" => "city", "hyundai" => "yamaha"];
echo json_encode($cars), "<br>";

$student = [
    "name" => "John Doe",
    "course" => "BSIT",
    "email" => "jdoe@test.com",
    "address" => "Bacoor, Cavite"
];
echo $student["address"], "<br>";

$indexArr = ["john doe", "BSIT", "jdoe@test.com", "Bacoor, Cavite"];
echo $indexArr[3], "<br>";

function showName($name, $number) {
    echo "HELLO THERE, ", $name, ", your total amount due is ", $number, "<br>";
}

$amount = "3500";
showName("John Doe", $amount);

function computeFare($fareAmount, $discount) {
    $totalDiscount = $fareAmount * ($discount / 100);
    $totalFare = $fareAmount - $totalDiscount;
    return $totalFare;
}

echo computeFare(200, 20);

?>
