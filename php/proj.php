<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User InFo</title>
</head>
<body>
    
</body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $message = $_POST['message'];
        
        $data = "Name: $name\nEmail: $email\nNumber: $number\nMessage: $message\n";
        
        $file = "user_data.txt";
        
        $fileHandle = fopen($file, 'a') or die("Unable to open file!");
        
        fwrite($fileHandle, $data);
        
        fclose($fileHandle);
        
        echo "Table reserved! We are waiting for you!";
    } else {
        echo "Invalid request method!";
    }
?>
