
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    <div class ="col-lg-6 m-auto">
        <h2>Login Page</h2>
    <form action="" method="POST">
        <input type="text"name='username' placeholder='Enter Your Name'required>
        <input type="pasword" name='pasword' placeholder='Enter Your Pasword'required>
        <button type='submit'name= 'submit' >SUBMIT</button>


    </form>


    </div>
</body>
</html>

<?php
include ('connected.php');
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $pass=$_POST['pasword'];
     if($username!=''and $pass!='') {


    $query="insert into login (name,pasword) values($username,$pass)";

    $result =mysqli_query($con,$query); 
    if ($result){
        ?>
        <script>
            alert('DATA INSERTED!!');
        </script>
        <?php
    }
    }
}
?>