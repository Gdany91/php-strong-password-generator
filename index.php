<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strong-password-generator</title>

   <?php 
   
   $pswLength = $_GET["psw-lngt"];

   ?>
</head>
<body>

    <form >
        <h2>Lunghezza Password:</h2>
        <input type="number" name="psw-lngt">
        <input type="submit" value="GENERA">
        <?php
        function generatePassword($length) {

            $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_[]{}<>~`+=,.;:/?|';
            $password = '';
            for ($i = 0; $i < $length; $i++) {
                $password .= $chars[rand(0, strlen($chars) - 1)];
            }
            return $password;

        }
        ?>
        <h2>
           <?= generatePassword($pswLength)?> 
        </h2>
        

        
         
        
    </form>
</body>
</html> 