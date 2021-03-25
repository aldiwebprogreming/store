<!DOCTYPE html>
<html>
<head>
	<title>Ebunga</title>
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

	<div class="container mt-5">
			<h3 class="text-center">Pilih Produk anda</h3>
			<select id='selUser' class="form-control" >
				<option value='0'>-- Select keluarahan --</option>
			</select>
		<small>Tentukan pengantaran produk berdasarkan keluarhan.</small>

			<div class="row">
				<div class="col-sm-4 mt-2">
					<label>Kecamatan</label><br>
					<input type="text" name="kec" id="kec" value="">
					<input type="hidden" name="kec" id="id_kab" value="">
				</div>

				<div class="col-sm-4 mt-2">
					<label>Kabupaten</label><br>
					<input type="text" name="kab" id="kab" value="">
					<input type="hidden" name="prov" id="id_prov" value="">
				</div>

				<div class="col-sm-4 mt-2">
					<label>Provinsi</label><br>
					<input type="text" name="prov" id="prov" value="">
				</div>
			</div>

	</div>

	<!-- product -->

	<div class="container mt-5">
		<h2 class="text-center">Produk Tersedia</h2>
		<center>
			<img src="<?= base_url("assets/img/noot.svg") ?>" id="gambar" class="img" style="display:none; height: 500px;">
		</center>

		<div class="row mt-3" id="product" style="display:;">

			<?php 

				$get = $this->db->get('tbl_store')->result_array();
				foreach ($get as $data) { ?>

			<div class="col-sm-4">
				<div class="card" style="width: 18rem;">
				  <img class="card-img-top" src="<?= base_url() ?>assets/img/<?= $data['image'] ?>" alt="Card image cap">
				  <div class="card-body">
				    <p class="card-text"><?= $data['nama_product'] ?></p>
				   <a href="<?= base_url() ?>ebunga/product?id=<?= $data['id'] ?>" class="btn btn-primary text-center">Order</a>
				  </div>
				</div>
			</div>

		<?php } ?>

		</div>

	</div>
	<!-- product -->

		
	<script>
		function alert1(){
			Swal.fire({
			  title: 'Yess',
			  text: 'Produk tersedia.',
			  imageUrl: '<?= base_url('assets/img/success.svg') ?>',
			  imageWidth: 400,
			  imageHeight: 200,
			  imageAlt: 'Custom image',
			})
		}


		function alert2(){
			Swal.fire({
			  title: 'Maaf',
			  text: 'Produk tidak tersedia.',
			  imageUrl:  "<?= base_url('assets/img/search.svg') ?>",
			  imageWidth: 400,
			  imageHeight: 200,
			  imageAlt: 'Custom image',
			});
			
		}
	</script>

	<script type="text/javascript">
		$(document).ready(function(){

			get()

			
			$("#selUser").select2({
			  	ajax: { 
			   		url: '<?= base_url() ?>Ebunga/data_kel',
			   		type: "post",
			   		dataType: 'json',
			   		delay: 250,
			   		data: function (params) {
			    		return {
			      			searchTerm: params.term // search term
			    		};
			   		},
			   		processResults: function (response) {
			     		return {
			        		results: response
			     		};
			   		},
			   		cache: true
			  	}
			});
		});
	</script>


	<script>
			
		function get(){
			$("#selUser").change(function(){
				var ab = $(this).val();
				
				$.ajax({
					type : 'GET',
					url: "<?= base_url() ?>ebunga/get_kec?id="+ab,
					async : false,
					dataType:'json',
					success:function(data){
						var kec = "";
						var i;
						for(i=0; i<data.length; i++){
							var hasil = data[i].nama;
							var kab = data[i].id_kab;
						}
						$("#kec").val(hasil);
						$("#id_kab").val(kab);

						if (hasil == "Bakongan") {
							alert1();
							$("#product").show();
							$("#gambar").hide()
						}else {
							alert2();
							$("#product").hide();
							$("#gambar").show()
						}
						
					}
				})

				var id_kab = $("#id_kab").val();
				$.ajax({
					type : 'GET',
					url: "<?= base_url() ?>ebunga/get_kab?id="+id_kab,
					async : false,
					dataType:'json',
					success:function(data){
						
						for(i=0; i<data.length; i++){
							var kab = data[i].nama;
							var id_prov = data[i].id_prov;
						}
						$("#kab").val(kab);
						$("#id_prov").val(id_prov);
						
					}
				});

				var id_prov = $("#id_prov").val();
				$.ajax({
					type : 'GET',
					url: "<?= base_url() ?>ebunga/get_prov?id="+id_prov,
					async : false,
					dataType:'json',
					success:function(data){
						
						for(i=0; i<data.length; i++){
							var prov = data[i].nama;
							var id_prov = data[i].id_prov;
						}
						$("#prov").val(prov);
						
						
					}
				});

			})
		}


	</script>

	<script>
		$(document).ready(function(){
			cek_kec();

			function cek_kec(){
				var cek = $("#kec").val();

			}
		})
	</script>


 <?php echo "<script>".$this->session->flashdata('message')."</script>"?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>