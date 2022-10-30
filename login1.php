<?php
$nam=$_POST['lun'];
$pass=$_POST['lpa'];
$con=mysqli_connect('localhost','root','','bbb');
$result=mysqli_query($con,"SELECT * FROM `bbbt` WHERE email='$nam' AND passwordb='$pass'");
if(mysqli_num_rows($result)){
    echo "
    <script>
    alert('successfully login');
window.location.href='ind.php';
    </script>
    
    ";
}
else{
    echo "
    <script>
    alert('incorrect email or password');
window.location.href='login.php';
    </script>
    
    "; 
}
?>