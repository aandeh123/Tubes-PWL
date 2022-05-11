<br>
<div class="container">
<div class="row">  
    <div class="col-md-3 col-sm-3">
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#">Tambah User</a></li>
        <li><a href="topik">Topik</a></li>
        <li><a href="aspirasi">Aspirasi</a></li><br>
      </ul>
    </div>
 	<div class="col-md-9 col-sm-9">	
		<div class="page-header-body">
		<div class="row">
			<div class="text text-justify"><br>
				<h3>Selamat Datang,<br> Admin <?php echo $_SESSION['nama'];?></h3>
				<form action="../../../aspirasi/aspirasibaru.php" method="post">
				<div class="form-group">
					
					<label for="nim">NIM</label>
						<input type="text" class="form-control" id="nim" name="nim">
					<label for="nama">Nama</label>
						<input type="text" class="form-control" id="nama" name="nama">
					<label for="pass">Password</label>
						<input type="text" class="form-control" id="pass" name="pass">
					
					<button type="submit" class="btn-submit btn-primary">Submit</button><br>
				</div>
				</form>
			</div>			
		</div>
		</div>
	</div>		
</div>
</div>	
<br>

