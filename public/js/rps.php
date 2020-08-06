<?php

function getcompchoices() {
    $compoptions = [
        0 => "Rock",
        1 => "Paper",
        2 => "Scissors"];
    $computer = random_int(0, 2);
    $compchoice = $compoptions[$computer];
    echo "<p>Your virtual opponent has picked... $compchoice \n \n</p>";
    return $compchoice;
}

//added userinput into func name?
function getplayerchoices() {
//            echo Please choose your weapon (R for Rock, P for Paper or S for Scissors)' . "\n";
//            $playchoice = stream_get_line(STDIN, 10, "\n");
    $userinput = $_GET['choice'];
    $playchoice = $userinput;

    switch ($playchoice) {
        case "R":
        case "r":
            $option = "Rock";
            break;
        case "P":
        case "p":
            $option = "Paper";
            break;
        case "S":
        case "s":
            $option = "Scissors";
            break;
        default:
            die("There is an error. Please enter either R, P or S");
            break;
    }
    echo "<p>You picked... $option \n\n</p>";
    return $option;
}

//if statement to know if you have beaten the computer

function comparechoice($option, $compchoice) {

    $point =0;


    if ($option == $compchoice) {

        echo "<h3>It's a draw! Please try again! \n \n</h3>";

    } elseif ($option == "Rock" && $compchoice == "Paper") {
        echo "<h3>You've lost...Please try again! \n \n</h3>";
        
    } elseif ($option == "Paper" && $compchoice == "Scissors") {
        echo "<h3>You've lost...Please try again! \n \n</h3>";
    } elseif ($option == "Scissors" && $compchoice == "Rock") {
        
        echo "<h3>You've lost...Please try again! \n \n</h3>";
    } else {
       
       $point= 1;
       
       echo "<h3>You've won! \n \n</h3>";

    }
}


$playerchoice = getplayerchoices();
$computerchoice = getcompchoices();
$answer = comparechoice($playerchoice, $computerchoice);
