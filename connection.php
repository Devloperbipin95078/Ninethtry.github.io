<?php 
$con = mysqli_connect('localhost','root','','chapter');
if($con){
    ?>
    <script>
    alert("Connected");
    </script>
    <?php
}else{
    ?>
    <script>
    alert(" Not Connected");
    </script>
    <?php
}
?>