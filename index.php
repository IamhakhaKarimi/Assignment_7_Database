<?php 

$db_connect = new mysqli('localhost','root','','users_db');

// var_dump($db_connect);
//$sql_query = 'INSERT INTO teachers(teacher_name,email,phone,department) VALUES ("teacher_7","teacher_7@mail.com",null,"SE")';
//$db_connect -> query($sql_query);
//echo "Tabel Field inserted succesfully";

// To echo a field from database to PHP//

// $teacher_query = 'SELECT * FROM teachers WHERE department = "SE"';
// $teacher_query = 'SELECT * FROM teachers ';

// // echo '<pre>';
// $result  = $db_connect -> query($teacher_query);
// // $teacher_data = $result -> fetch_assoc();
// $teacher_data = $result -> fetch_all(MYSQLI_ASSOC);
// // var_dump($teacher_data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

    <div class="card col-sm-6 shadow">
        <div class="card-body float-center">
           
        <div class="card-title">
        <h4>Codeweekend Assignment 7</h4>
         
        </div>
        <a href="teachers.php" class="card-link">   Teachers Database</a>
        <a href="students.php" class="card-link">   Student Database</a>
        </div>
        
    </div>
    

</body>
</html>