<?php
$countriesAndCapitals = array(
    "USA" => "Washington D.C.",
    "France" => "Paris",
    "Japan" => "Tokyo",
    "Brazil" => "Brasília",
    "Australia"=> "Sydney"
);
$countries = [];
$countries += $countriesAndCapitals;
print_r($countries);

echo "The capital of Japan is: " . $countriesAndCapitals["Japan"] . "\n";

$countriesAndCapitals["India"] = "New Delhi";

foreach ($countriesAndCapitals as $country => $capital) {
    echo "The capital of $country is $capital.\n";
}

echo rand()."";