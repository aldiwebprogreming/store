<!DOCTYPE html>
<html>
<head>
	<title>Card</title>
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

<?php foreach ($cart as $data) {
} ?>

<div class="container" style="margin-top: 30px;">
	<div class="row">
		<div class="col-md-12">
			<h2>Shopping Summary</h2>
		</div>

		<div class="col-md-8 mt-4">
			<div class="card">
			  <div class="card-body">
			    <div class="row">
			    	<div class="col-sm-3">
			    		<img src="<?= base_url() ?>assets/img/2.png ?>" alt="..." class="img-thumbnail">
			    		<label>Qlt : 1 X Rp.200.000</label>
			    		<center><a href="<?= base_url() ?>ebunga/hapus">Delete / Hapus</a></center>
			    	</div>
			    	<div class="col-sm-9">
			    		<h3>Papan Bunga Singel</h3>
			    		<div class="row">
			    			<div class="col-sm-6">
			    				<div class="form-groub">
			    					<label style="font-weight: bold;">Nama Penerima</label>
			    					<p><?= $data['nama_penerima']?></p>
			    				</div>
			    			</div>

			    			<div class="col-sm-6">
			    				<div class="form-groub">
			    					<label style="font-weight: bold;">Tanggal Kirim</label>
			    					<p>03-03-2021</p>
			    				</div>
			    			</div>

			    			<div class="col-sm-6">
			    				<div class="form-groub">
			    					<label style="font-weight: bold;">Email</label>
			    					<p><?= $data['email_penerima'] ?></p>
			    				</div>
			    			</div>

			    			<div class="col-sm-6">
			    				<div class="form-groub">
			    					<label style="font-weight: bold;">No.Telp</label>
			    					<p><?= $data['no_tlp'] ?></p>
			    				</div>
			    			</div>
			    			<div class="col-sm-12">
			    				<div class="form-groub">
			    					<label style="font-weight: bold;">Alamat</label>
			    					<p><?= $data['kel'] ?>, <?= $data['kec'] ?>, <?= $data['kab'] ?>, <?= $data['prov'] ?></p>
			    				</div>
			    			</div>
			    			<div class="col-sm-6">
			    				<div class="form-groub">
			    					<label style="font-weight: bold;">Catatan</label>
			    					<p><?= $data['keterangan'] ?></p>
			    				</div>
			    			</div>
			    			<div class="col-sm-6">
			    				<div class="form-groub">
			    					<label style="font-weight: bold;">Dari</label>
			    					<p><?= $data['dari'] ?></p>
			    				</div>
			    			</div>
			    			<div class="col-sm-6">
			    				<div class="form-groub">
			    					<label style="font-weight: bold;">Dear</label>
			    					<p><?= $data['nama_item'] ?></p>
			    				</div>
			    			</div>
			    			<div class="col-sm-6">
			    				<div class="form-groub">
			    					<label style="font-weight: bold;">Pesan</label>
			    					<p><?= $data['text_item'] ?></p>
			    				</div>
			    			</div>
			    		</div>
			    	</div>
			    </div>
			  </div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="card">
			  <div class="card-body">
			    <label>Summary :</label><label class="float-right" style="font-size: 20px; font-weight: bold;">Rp.200.000</label>
			    <hr>
			    <label>Grend Total :</label><label class="float-right" style="font-size: 20px; font-weight: bold;">Rp.200.000</label>

			    <button type="button" class="btn btn-primary btn-lg btn-block">Check Out</button>
				
			</div>
		</div>
	</div>
</div>



</body>
</html>