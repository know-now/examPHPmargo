<?php

// Based on this array, write a PHP script that displays the country AND the capital on each line, as well
// as the number of inhabitants.
// This list should be displayed in ascending alphabetical order.
// Example :
// The capital of France is Paris. Number of inhabitants: 89797998
// The capital City of Italy is Rome. Number of inhabitants: 788798
// The capital of Luxembourg is Luxembourg. Number of inhabitants: 3213416

$countries = array(
    "France" => ["capital" => "Paris", "population" => 65687541],
    "Italy" => ["capital" => "Rome", "population" => 9879055],
    "Luxembourg" => ["capital" => "Luxembourg", "population" => 300],
    "Belgium" => ["capital" => "Brussels", "population" => 9849849],
    "Denmark" => ["capital" => "Copenhagen", "population" => 8789797],
    "Finland" => ["capital" => "Helsinki", "population" => 2989897],
    "Slovakia" => ["capital" => "Bratislava", "population" => 3879879],
    "Slovenia" => ["capital" => "Ljubljana", "population" => 64988],
    "Germany" => ["capital" => "Berlin", "population" => 3965987],
    "Greece" => ["capital" => "Athens", "population" => 4897987],
    "Ireland" => ["capital" => "Dublin", "population" => 1987497],
    "Netherlands" => ["capital" => "Amsterdam", "population" => 6897987],
    "Portugal" => ["capital" => "Lisbon", "population" => 7997978],
    "Spain" => ["capital" => "Madrid", "population" => 13277854],
    "Sweden" => ["capital" => "Stockholm", "population" => 897982],
);
////---------Displaying information about countries---------
ksort($countries);

foreach ($countries as $key => $val) {
    foreach ($val as $sub_key => $sub_val) {
        echo "The " . $sub_key . " of " . $key . " is " .  $countries[$key][$sub_key] . " people. <br>";
    }
}
////---------Displaying rating of population---------
echo  "<h3>The rating of population: </h3>";

foreach ($countries as $key => $val) {
    echo $key . " - \n";
    foreach ($val as $sub_key => $sub_val) {
        $popularArray = array();
        $nameCountry = $countries[$key];
        $popularArray[] = $countries[$key]['population'];
    }
    asort($popularArray);
    echo $popularArray[0] . " people in a country. <br>";
}
////---------Displaying country with highest population---------
echo  "<h3> Highest population is in </h3>";

foreach ($countries as $key => $val) {
    echo $key . " has the highest population.\n";
    die();
}
