<?php

// This file is your starting point (= since it's the index)
// It will contain most of the logic, to prevent making a messy mix in the html

// This line makes PHP behave in a more strict way
declare(strict_types=1);

// We are going to use session variables so we need to enable sessions
session_start();

// Use this function when you need to need an overview of these variables
function whatIsHappening()
{
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}


$products = [
    ['name' => 'Standard rubber duck', 'price' => 1.5],
    ['name' => 'pirate rubber duck', 'price' => 2.5],
    ['name' => 'princess rubber duck', 'price' => 2.5],
    ['name' => 'Big rubber duck', 'price' => 3],
    ['name' => 'mummy rubber duck', 'price' => 3],
];

$totalValue = 0;






function validate()
{
    // TODO: This function will send a list of invalid fields back

    return [];
}

function handleForm()
{


    // TODO: form related tasks (step 1)
    $street = $_POST['street'];
    $streetNumber = $_POST['streetnumber'];
    $city = $_POST['city'];
    $zipcode = $_POST['zipcode'];
    $adress = $street . " " . $streetNumber . " " . $city . " " . $zipcode;

    echo "You ordered following items:<br>";
    if (!empty($_POST['products'])){
        foreach ($_POST['products'] as $selected){
            echo $selected."<br>";
        }
    }
    echo "For delivery at " .$adress . "<br>Estimated delivery time: 1-3 workdays.";





    // Validation (step 2)
        $invalidFields = validate();
        if (!empty($invalidFields)) {
            // TODO: handle errors

        } else {
            // TODO: handle successful submission
        }
    }


// TODO: replace this if by an actual check

$formSubmitted = false;
if (isset($_POST['submit'])) {
    $formSubmitted = true;
}
if ($formSubmitted) {
    handleForm();
}


require 'form-view.php';