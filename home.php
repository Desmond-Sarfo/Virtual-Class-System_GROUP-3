<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homepage</title>

    <link rel="stylesheet" href="style.css">
    
      
</head>
<body>
   <div class="conatainer">
     <h1> This is the homepage</h1>
    <h3> Computer Technology </h3>
    <table border="2" >
      <div class="courses">

         <tr>
            <th>Courses</th>
         </tr>
         <tr>
            <td>Operation Research</td>
         </tr>
         <tr>
            <td>Advanced Programming in Java</td>
         </tr>
         <tr>
            <td>Discrete Math</td>
         </tr>
         <tr>
            <td>Human Computer Interaction</td>
         </tr>
         <tr>
            <td>Database Concept</td>
         </tr>
         <tr>
            <td>System Analysis and Design</td>
         </tr>
         <tr>
            <td>Backend</td>
         </tr>
      </div>
</div>

    </table>

      //
    <h2>Submit your Assignment</h2>
    
    <form action="home.php" method="post" enctype="multipart/form-data">
        Advanced Java<input type="file" name="document">
        <button type="submit">submit</button><br>
    </form><br>

    <form action="home.php" method="post" enctype="multipart/form-data">
        Backend<input type="file" name="document">
        <button type="submit">submit</button>
    </form> <br>

    <form action="home.php" method="post" enctype="multipart/form-data">
        Discrete Math<input type="file" name="document">
        <button type="submit">submit</button>
    </form><br>

    <form action="home.php" method="post" enctype="multipart/form-data">
        Human Computer Interaction<input type="file" name="document">
        <button type="submit">submit</button>
    </form><br>

    <form action="home.php" method="post" enctype="multipart/form-data">
        Opertion Research<input type="file" name="document">
        <button type="submit">submit</button>
    </form><br>

    <form action="home.php" method="post" enctype="multipart/form-data">
        System Analysis<input type="file" name="document">
        <button type="submit">submit</button>
    </form><br>

    <form action="home.php" method="post" enctype="multipart/form-data">
        Database<input type="file" name="document">
        <button type="submit">submit</button>
    </form><br>
    <form action="home.php" method="post" enctype="multipart/form-data">
        <input type="file" name="document">
        <button type="submit">submit</button>
    </form>
    <br>
    <form action="home.php" method="post">
        <input type="submit" name="logout" value="logout">
        
    </form>

   
    
</body>
</html>
<?php
  error_reporting(0);

// logging out of the homepage
     if(isset($_POST["logout"])){
        session_destroy();
        header("Location: index.php");
     } 


$document = $_FILES['document'];

 $allowedDocs = [
    'application/pdf',
    'application/msword',
    'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
];
   
if ($document['error'] !== 0) {
    //echo "Error uploading document.";
    exit();
}

if (!in_array($document['type'], $allowedDocs)) {
    echo "Only PDF/DOC/DOCX allowed.";
    exit();
}

$docName = time() . "_" . $document['name'];
$docPath = "document/" . $docName;

move_uploaded_file($document['tmp_name'], $docPath);



    
    
?>
