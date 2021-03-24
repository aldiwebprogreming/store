
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

// batas document ready

			
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

