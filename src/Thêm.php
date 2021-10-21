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
	<header>
		<div class = "container-fluid border-bottom border-1 border-dark">
			<div class="row">
				<div class="col-md-12">
				  	<ul class="nav justify-content-center">
	  					<li class="nav-item">
	    					<a class="nav-link active" aria-current="page" href="#">Quản trị người dùng</a>
	  					</li>
	  					<li class="nav-item">
	    					<a class="nav-link" href="#">Quản lí danh bạ cán bộ </a>
	  					</li>
	  					<li class="nav-item">
	    					<a class="nav-link" href="#">Quản lí danh bạ đơn vị </a>
	  					</li>
	  					<li class="nav-item">
	    					<a class="nav-link disabled" href="#">Hướng dẫn</a>
	  					</li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<main class = "mt-4">
		<div class="container">
			<div class="row">
				<div calss = "col-md-12">
					<h1>Thêm người hiến</h1>

					
					<form action="process-add-member.php" method="post">

						<button type="submit" class="btn btn-primary" name="btnSave">Lưu</button>

					  <div class="row mb-3">
					    <label for="txtHoTen" class="col-sm-2 col-form-label">tên người hiến</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="txtHoTen" name="txtHoTen">
					    </div>
					  </div>

					  <div class="row mb-3">
					    <label for="txtGioiTinh" class="col-sm-2 col-form-label">Giới tính</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="txtGioiTinh" name="txtGioiTinh">
					    </div>
					  </div>
					  
					  <div class="row mb-3">
					    <label for="txtTuoi" class="col-sm-2 col-form-label">Tuoi</label>
					    <div class="col-sm-10">
					      <input type="tel" class="form-control" id="txtTuoi" name="txtTuoi">
					    </div>
					  </div>
					  
					  <div class="row mb-3">
					    <label for="txtNhomMau" class="col-sm-2 col-form-label">Nhóm máu</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="txtNhomMau" name="txtNhomMau">
					    </div>

					  </div>
                      <div class="row mb-3">
					    <label for="txtNgayDKi" class="col-sm-2 col-form-label">Ngày đăng kí</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="txtNgayDKi" name="txtNgayDKi">
					    </div>
					  </div>

					  <div class="row mb-3">
					    <label for="txtDienThoai" class="col-sm-2 col-form-label">Số điện thoại</label>
					    <div class="col-sm-10">
					      <input type="tel" class="form-control" id="txtDienThoai" name="txtDienThoai">
					    </div>
					  </div>


					  <div class="row mb-3">
					    <label for="txtMaHM" class="col-sm-2 col-form-label">Mã người hiến máu</label>
					    <div class="col-sm-10">
					      <select name="sltMaDV" id="sltMaDV">
					      	<option value = "7"> </option>
					      	<option value = "8"> </option>
					      	<option value = "9"> </option>
					      </select>
					    </div>
					  </div>

					  

					</form>
				</div>
			</div>
		</div>
	</main>
	<footer>
</footer>
</body>
</html>