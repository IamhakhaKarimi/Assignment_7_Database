<?php 
$db_connect = new mysqli('localhost','root','','users_db');
$teacher_query = 'SELECT * FROM teachers ';
$result  = $db_connect -> query($teacher_query);
$teacher_data = $result -> fetch_all(MYSQLI_ASSOC);


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
        <div class="col-md-6 shadow">
            <div>
                <h4 class="alert alert-warning">Teacher Data Query</h4>
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
        <tbody class="table">
            <?php 
            foreach ($teacher_data as $record){
                echo '<tr>
                        <td class="table-data">'.$record['id'].'</td>
                        <td>'.$record['teacher_name'].'</td>
                        <td>'.$record['email'].'</td>
                        <td>'.$record['phone'].'</td>
                        <td>'.$record['department'].'</td>
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