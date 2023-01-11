<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strong-password-generator</title>

   <?php 
   
   $pswLength = $_GET["psw-lngt"];

   require_once __DIR__ . "/helper.php";

   ?>
</head>
<body>

    <form >
        <h2>Lunghezza Password:</h2>
        <input type="number" name="psw-lngt">
        <input type="submit" value="GENERA">
       
        <h2>
           <?= generatePassword($pswLength)?> 
        </h2>
        

        
         
        
    </form>
</body>
</html> 