<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <title>Quản lý người hiến máu</title>
    
</head>
<body>
    <div class ="container-fluid">
        <div class = "row header">
            <div class = "co-md-12">

            </div>
        </div>
  
        <div class="row">
          
            <div class="col-md-12">
                Bảng dữ liệu
                <div>
                    <a href="them.php?manv=>" class="btn btn-success">Thêm</a>
                </div>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">MaHM</th>
                      <th scope="col">Họ và tên</th>
                      <th scope="col">Giới tính</th>
                      <th scope="col">Tuổi</th>
                      <th scope="col">Nhóm máu</th>
                      <th scope="col">Ngày đăng kí</th>
                      <th scope="col">Số điện thoại</th>
                      <th scope="col">Sửa</th>
                      <th scope="col">Xóa</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php

                    #Lấy dữ liệu từ CSDL và đổ ra bảng(phần lặp lại)
                    #B1 kết nối với CSDL
                    $conn = mysqli_connect('localhost', 'root','','dhtl','3306');
                    mysqli_set_charset($conn,"utf8");//Định dang font chữ 
                    if(!$conn){
                        die("Không thể kết nối, kiểm tra lại các tham số kết nối");
                    }
                    #Bước 2: Khai báo câu lệnh thực thi và thực hiện truy vấn
                    $sql = "SELECT nv.mahm, nv.tennv, nv.gioitinh, nv.tuoi, nv.nhommau, nv.ngaydki, nv.sodienthoai, dv.tendv FROM  db_nhanvien nv, db_donvi dv WHERE nv.madv = dv.madv";
                    $result = mysqli_query($conn,$sql);
                    #Bước 3: Xử lí kết quả trả về
                    if(mysqli_num_rows($result)>0){
                        $i=1;
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                            <tr>
                              <th scope="row"><?php echo $i; ?></th>
                              <td><?php echo $row['tennv']; ?></td>
                              <td><?php echo $row['gioitinh']; ?></td>
                              <td><?php echo $row['tuoi']; ?></td>
                              <td><?php echo $row['nhommau']; ?></td>
                              <td><?php echo $row['ngaydki']; ?></td>
                              <td><?php echo $row['sodienthoai']; ?></td>
                          
                              <<td><a href="suaNhanVien.php?manv=<?php echo $row['manv']; ?>"><i class="fas fa-edit"></i> </a></td>
                              <td><a href="xoaNhanVien.php?manv=<?php echo $row['manv']; ?>"><i class="fas fa-trash"></i> </a></td>
                            </tr>
                    <?php
                            
                        $i++;
                        }
                       }

                    ?>
                    
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>