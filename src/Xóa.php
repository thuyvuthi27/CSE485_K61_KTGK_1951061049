<?php
if(isset($_GET['mahm'])){
    $conn = mysqli_connect('localhost', 'root','','dhtl','3306');
    mysqli_set_charset($conn,"utf8");//Định dang font chữ 
         if(!$conn){
            die("Không thể kết nối, kiểm tra lại các tham số kết nối");
            }
    $id=$_GET['mahm'];
    $sql ="delete from db_nhanvien where mahm='".$id."'";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header('location:vdu.php');
}
?>