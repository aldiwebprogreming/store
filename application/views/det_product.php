<!DOCTYPE html>
<html>
<head>
	<title>Detail product</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link href="<?= base_url() ?>assets/select2/dist/css/select2.min.css" rel="stylesheet" />

<!-- jQuery library -->
<script src="<?= base_url() ?>assets/jquery-3.3.1.min.js"></script>

<!-- Select2 JS -->
<script src="<?= base_url() ?>assets/select2/dist/js/select2.min.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			  <a class="navbar-brand" href="#">Ebunga</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav">
			      <li class="nav-item active">
			        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Features</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Pricing</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link disabled" href="#">Disabled</a>
			      </li>
			    </ul>


			  </div>
			  <div class="float-right">
			  	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			  		<i class="fas fa-shopping-bag"></i>
				</button>
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Orders</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				    
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				       <!--  <button type="button" class="btn btn-primary">Save changes</button> -->
				      </div>
				    </div>
				  </div>
				</div>
			  </div>
		</div>
</nav>


<div class="section" style="margin-top: 50px;">
	<div class="container">
		<div class="row">

			<?php foreach ($get_product as $data) {} ?>
			<div class="col-sm-4">
				<img src="<?= base_url() ?>assets/img/<?= $data['image'] ?>" alt="images" class="img-thumbnail">
			</div>

			<div class="col-sm-8">
				<div class="card">
				  <div class="card-header">
				    Order
				  </div>
				  <div class="card-body">
				  	<h3><?= $data['nama_product'] ?></h3>
				  	<h5 style="color: silver"><?= $data['nama_product'] ?></h5>
				  	<label style="color: orange; font-size: 19px;">☆☆☆☆☆☆ </label><label>| 0 Terjual</label>
				  	<h2>RP. <?= $data['harga'] ?></h2>
				  	<hr>

				  	<form method="post" action="<?= base_url() ?>ebunga/post_action">

				  	<!-- step 1  -->

				  	<div id="step1-show">
					  	<img src="<?= base_url() ?>assets/img/<?= $data['image'] ?>" alt="images" class="img-thumbnail" style='height: 150px;'>

					  	<br>
					  	<br>
					  	<p style="font-weight: bold;">qlt / jumlah</p>
					  	<div class="input-group mb-3" style="width: 150px;">
						  <div class="input-group-prepend">
						    <button class="btn btn-outline-secondary" id="kurang" type="button">-</button>
						  </div>
						  <input type="number" class="form-control" id="qlt" placeholder="" aria-label="" aria-describedby="basic-addon1" style="text-align: center;" value="1" min="0" required="" name="qlt">
						  <div class="input-group-prepend">
						    <button class="btn btn-outline-secondary" id="tambah" type="button">+</button>
						  </div>
						</div>

						 <div class="form-group">
						    <label for="exampleInputEmail1">Note / catatan</label>
						    <textarea class="form-control" name="note" style="height: 150px;" name="catatan"></textarea>
						    <small id="emailHelp" class="form-text text-muted">fill in your notes if necessary.</small>
						 </div>
						 	<button type="button" id="step1" class="btn btn-primary btn-lg btn-block">Next</button>
					 </div>
				

					 <!-- step 1  -->


					 <!-- step 2  -->

				  	<div id="step2-show" style="display: none;">

				  		<div class="row">
				  			<div class="col-sm-3">
				  				<div class="form-group">
				  					<label>Provinsi</label>
				  					<input type="text" name="prov" value="Aceh" class="form-control" readonly="">
				  				</div>
				  			</div>

				  			<div class="col-sm-3">
				  				<div class="form-group">
				  					<label>Kabupaten</label>
				  					<input type="text" name="kab" value="KAB. ACEH SELATAN" class="form-control" readonly="">
				  				</div>
				  			</div>

				  			<div class="col-sm-3">
				  				<div class="form-group">
				  					<label>Kecamatan</label>
				  					<input type="text" name="kec" value="Bakongan" class="form-control" readonly="">
				  				</div>
				  			</div>

				  			<div class="col-sm-3">
				  				<div class="form-group">
				  					<label>Kelurahan</label>
				  					<input type="text" name="kel" value="Keude Bakongan" class="form-control" readonly="">
				  				</div>
				  			</div>

				  			<div class="col-sm-12">
				  				<div class="form-group">
				  					<label style="font-weight: bold">Receiver Address / Alamat Penerima :</label>
				  					<textarea class="form-control" style="height: 150px;" placeholder="Enter the address of the recipient of the order" name="alamat_penerima" required=""></textarea>
				  				</div>
				  			</div>

				  			<div class="col-sm-12">
				  				<div class="form-group">
				  					<label style="font-weight: bold">Receiver Name / Nama Penerima :</label>
				  					<input type="text" name="nama_penerima" class="form-control" required="" placeholder="Receiver name">
				  				</div>
				  			</div>

				  			<div class="col-sm-12">
				  				<div class="form-group">
				  					<label style="font-weight: bold">Receiver Email / Email Penerima :</label>
				  					<input type="email" name="email_penerima" class="form-control" required="" placeholder="Receiver email">
				  				</div>
				  			</div>

				  			<div class="col-sm-12">
				  				<div class="form-group">
				  					<label style="font-weight: bold">Receiver Phone / No.Telp Penerima :</label>
				  					<input type="number" name="telp_penerima" class="form-control" required="" placeholder="Receiver phone">
				  				</div>
				  			</div>
				  			<button type="button" id="step2" class="btn btn-primary btn-lg btn-block">Next</button>

				  		</div>
					  	
						
					 </div>

					 <!-- step 2  -->


					  <!-- step 3  -->

				  	<div id="step3-show" style="display: none;">

				  		<div class="row">

				  			<div class="col-sm-12">
				  				<div class="form-group">
				  					<h3>Greeting Cards / Kartu Ucapan</h3>
				  				</div>
				  			</div>

				  		
				  			<div class="col-sm-12">
				  				<div class="form-group">
				  					<label style="font-weight: bold">Name on Gift / Nama pada Item :</label>
				  					<input type="text" name="nama_item" class="form-control" placeholder="Dear Jane Doe">
				  				</div>
				  			</div>

				  			<div class="col-sm-12">
				  				<div class="form-group">
				  					<label style="font-weight: bold">Messages on Gift / Teks pada Item :</label>
				  					<textarea class="form-control" name="text_item" placeholder="Happy Birthday (Max Length 50)" maxlength="50"></textarea>
				  				</div>
				  			</div>


				  			<div class="col-sm-12">
				  				<div class="form-group">
				  					<label style="font-weight: bold">From (Optional) / Dari (Opsional) :</label>
				  					<input type="text" name="dari" class="form-control" required="" placeholder="From Jhon Doe">
				  				</div>
				  			</div>
				  			
				  			<input type="submit" name="kirim" class="btn btn-primary btn-lg btn-block" value="View Summary">

				  		</div>
					  	
						
					 </div>

					 <!-- step 3  -->

					 </form>


				   <!--  <h5 class="card-title">Special title treatment</h5>
				    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				    <a href="#" class="btn btn-primary">Go somewhere</a>
				  </div> -->
				</div>
			</div>
		</div>
	</div>
</div>


<script>
	$(document).ready(function(){
		var qlt = $("#qlt").val();
		$("#tambah").click(function(){
			var hasil = qlt++;
			$("#qlt").val(hasil);

		})

		$("#kurang").click(function(){
			var hasil_kurang = qlt--;
			$("#qlt").val(hasil_kurang);

		})

	 	$("#step1").click(function(){
	 		$("#step1-show").hide();
	 		$("#step2-show").show();

	 	})

	 	$("#step2").click(function(){
	 		$("#step3-show").show();
	 		$("#step1-show").hide();
	 		$("#step2-show").hide();

	 	})
	})
</script>

</body>
</html>