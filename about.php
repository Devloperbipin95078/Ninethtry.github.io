<?php require 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<body>
    <h1>About</h1>
    <form action="" method="post">
        <label for="">
            Name:
            <input type="text" name="name" id="name"><br>
            <button name="submit">Submit</button>
        </label>
    </form>

    <?php 
    if(isset($_POST['submit'])){
        $name = $_POST['name'];

        $insertquery = "INSERT INTO `github`( `name`) VALUES ('$name')";
        $query = mysqli_query($con,$insertquery);
        if($query){
            ?>
            <script>
                alert('Data inserted');
            </script>
            <?php
        }else{
            ?>
            <script>
                alert('Data not inserted');
            </script>
            <?php
        }
    }
    ?>
</body>
</html>