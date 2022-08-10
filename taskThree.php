<?php
// Create a function to convert a price in euro to Japanese yen OR a price in Japanese yen to euro.
// This function has 2 arguments:
// ● The price (int type or float type)
// ● The currency of the price (EUR or JPY).
// If the second parameter is ‘JPY’, the function needs to convert the price to ‘EUR’.
// If the second parameter is ‘EUR’, the function needs to convert the price to ‘JPY’.
// You have to display the result.
// Reminder : 1 EUR = 138.20 JPY
// You also have to perform the necessary verifications in order to validate the arguments.

function currencyConverter($amountOfMoney, $currency)
{
    // --------Validation of input--------
    if (!is_numeric($amountOfMoney) || (is_numeric($currency))) {
        echo "Amount of money must be a number.  <br>";
    }

    //------Creating a converter----------
    elseif ($currency == 'JPY') {
        echo "Your sum is " . $amountOfMoney / 138.20 . " EUR. <br>";
    } elseif ($currency == 'EUR') {
        echo "Your sum is " . $amountOfMoney * 138.20 . " JPY. <br>";
    } else {
        echo "Please verify your input. Currency should be 'JPY' or 'EUR', amount of money should be a number.";};
};
// ---------Checking if its working---------

currencyConverter(300, 'JPY');
currencyConverter(300, 'EUR');
currencyConverter(350.5, 'JPY');
currencyConverter(350.5, 'EUR');
currencyConverter("notAnumber", 'JPY');
currencyConverter("notAnumber", 'EUR');
currencyConverter(300, '$');
?>
