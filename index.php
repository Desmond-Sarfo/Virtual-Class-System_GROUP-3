<?php
   session_start();
?>   

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: Arial,sans-serif;
        }
        .container{
            width: 350px;
            margin: 100px auto;
            text-align: center;
        }
        input{
            width: 100%;
            padding: 8px;
            margin: 8px 0;
        }
    </style>
    
</head>
<body>

     <div class="container">
    <h1>Welcome to virtual class</h1> 
    <form action="index.php" method="post">
        <input type="text" name="indexnum" placeholder="Enter index number" 
        maxlength="12" pattern="\d{12}" title="Index number must be exactly 12 digits"><br>
      
        <input type="password" name="password" placeholder="Enter password" required=""><br>
        <input type="submit" name="login" value="login">

       
    </form>
     </div>
      
</body>
</html>
<?php
    

      if(!empty($_POST["indexnum"])&&!empty($_POST["password"])){
            $_SESSION["indexnum"] = $_POST["indexnum"];
             $_SESSION["password"] = $_POST["password"];
           
           header("Location: home.php");
           exit();
     
      }
      
    
?>