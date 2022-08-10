<?php
//     ----------TASK 1----------
// 1st query
//display all the guitars (type) which the price is lower than 100

SELECT type, price 
FROM instruments 
WHERE type = "guitar" && price < 100;


// 2nd query
//display all instruments (name) for band_id = 5

SELECT name, band_id
FROM instruments i
INNER JOIN instruments_in_band b ON i.id = b.instruments_id
WHERE b.band_id = 5;

?>

