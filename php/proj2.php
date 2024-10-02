<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Orders</title>
</head>
<body>
    
</body>
</html>
<?php

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $file = fopen("orders.txt", "a") or die("Unable to open file!");
   
       $products = [
           "input1" => "Espresso",
           "input2" => "Cappuccino",
           "input3" => "Americano",
           "input4" => "Hot Mocha",
           "input5" => "Turkish Coffee",
           "input6" => "Latte"
       ];
   
       foreach ($products as $input => $name) {
           if (isset($_POST[$input]) && $_POST[$input] == "on") {
               $quantityKey = "quantity" . substr($input, -1); 
               $quantity = isset($_POST[$quantityKey]) ? $_POST[$quantityKey] : 0;
               fwrite($file, $name . ": " . $quantity . "\n");
           }
       }
   
       fclose($file);
       echo "Order saved successfully!";
   }
   
?>
   