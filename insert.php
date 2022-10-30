<?php

$con=mysqli_connect('localhost','root','','bbb');


if(isset($_POST['button'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql=" INSERT INTO bbbt(name,email,passwordb) VALUES ('$username','$email','$password')";
    if(empty($username)){
        echo "
        <script>
        alert('add the username please');
        window.location.href='register.php';

        </script>
        ";  
    }
    elseif(empty($email)){
        echo "
        <script>
        alert('add the email please');
        window.location.href='register.php';

        </script>
        ";
    }
    elseif(empty($password)){
        echo "
        <script>
        alert('add the password please');
        window.location.href='register.php';

        </script>
        ";
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "
        <script>
        alert('add correct email please please');
        window.location.href='register.php';

        </script>
        ";
    }
    else{
    mysqli_query($con,$sql);
    echo "
    <script>
    alert('successfully register');
window.location.href='login.php';
    </script>
    
    ";
    }


}


?>