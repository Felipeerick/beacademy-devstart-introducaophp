
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<form action="" method="post">
  <input type="text" name="numero1">
    <br><br> 
  <input type="text" name="numero2">
     <br>
   <button type="submit">Enviar</button>

   
    
</form>


<?php 
    echo $_POST["numero1"];
    echo $_POST["numero2"];
     
?>
</body>
</html>
