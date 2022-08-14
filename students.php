<?php 
    $db_connect = new mysqli('localhost','root','','users_db');
    $student_query = 'SELECT * FROM students ';
    $result  = $db_connect -> query($student_query);
    $student_data = $result -> fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers List</title>
     
    <link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
    <div class="container ">
    <div class="row">
        <div class="col-md-8 shadow">
            <div>
                <h4 class="alert alert-warning">Students Data Query </h4>
            </div>
            <table class="table table-striped  table-success ">
                <caption> Table is fetched from Teachers Database</caption> 
        <tr> 
            <th> ID</th>
            <th> Teacher Name</th>
            <th> Email</th>
            <th> Phone</th>
            <th> Department</th>
        </tr>
        <tbody>
            <?php 
            foreach ($student_data as $record){
                echo '<tr>
                        <td>'.$record['id'].'</td>
                        <td>'.$record['student_name'].'</td>
                        <td>'.$record['student_surname'].'</td>
                        <td>'.$record['class'].'</td>
                        <td>'.$record['email'].'</td>
                    </tr>';
            }
            ?>
        </tbody>
        
           
        </table>
            <div>
                <a href="index.php" class="btn-link">Home Page</a>
            </div>
        </div>

    </div>
        

    </div>
  


<script src="js/bootstrap.bundle.js">

</script>
</body>
</html>