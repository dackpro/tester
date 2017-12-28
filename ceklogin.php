<?php
include "koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "SELECT * from petugas where username = '$username' and password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo '
        <script type="text/javascript">
            alert("Login BERHASIL"); 
            window.location.href = "admin/index.php?menu=";</script>';    
}
else{
echo '
        <script type="text/javascript">
            alert("Username / Password Salah"); 
            window.location.href = "login.php";</script>';    
}
