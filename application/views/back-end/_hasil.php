  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
  <script type="text/javascript"> 

  var xValues = [];
  var yValues = [];
  var xValues1 = [];
  var yValues1 = [];
  var xValues2 = [];
  var yValues2 = [];
  var color = '#';
  var barColors = [];


  jQuery().ready(function (){

                  $.ajax({ // ajax
                      type: 'get',
                      dataType: 'JSON',
                      url: 'donutkandidat',
                      success: function(response) { // success
                        var len = response.length;

                        console.log(len);

                        for(var i=0; i<len; i++){

                          var nama = response[i].nama;
                          var jumlah = response[i].jumlah;

                          color += Math.floor(Math.random()*16777215).toString(16);

                          xValues.push(nama);
                          yValues.push(jumlah);
                          barColors.push(color);

                          color = '#';


                        }

                        console.log(xValues);
                        console.log(yValues);

                        new Chart("myChart", {
                          type: "doughnut",
                          data: {
                            labels: xValues,
                            datasets: [{
                              backgroundColor: barColors,
                              data: yValues
                            }]
                          },
                          options: {
                            title: {
                              display: true,
                              text: "Kandidat"
                            }
                          }
                        });
                     } // success

                  }) // ajax
                    
                });
				
				
				
				
			 jQuery().ready(function (){

                  $.ajax({ // ajax
                      type: 'get',
                      dataType: 'JSON',
                      url: 'browser',
                      success: function(response) { // success
                        var len = response.length;

                        console.log(len);

                        for(var i=0; i<len; i++){

                          var nama = response[i].nama;
                          var jumlah = response[i].jumlah;

                          color += Math.floor(Math.random()*16777215).toString(16);

                          xValues1.push(nama);
                          yValues1.push(jumlah);
                          barColors.push(color);

                          color = '#';


                        }

                        console.log(xValues1);
                        console.log(yValues1);

                        new Chart("myChart1", {
                          type: "doughnut",
                          data: {
                            labels: xValues1,
                            datasets: [{
                              backgroundColor: barColors,
                              data: yValues1
                            }]
                          },
                          options: {
                            title: {
                              display: true,
                              text: "Browser"
                            }
                          }
                        });
                     } // success

                  }) // ajax
                    
                });	
				
				 jQuery().ready(function (){

                  $.ajax({ // ajax
                      type: 'get',
                      dataType: 'JSON',
                      url: 'platform',
                      success: function(response) { // success
                        var len = response.length;

                        console.log(len);

                        for(var i=0; i<len; i++){

                          var nama = response[i].nama;
                          var jumlah = response[i].jumlah;

                          color += Math.floor(Math.random()*16777215).toString(16);

                          xValues2.push(nama);
                          yValues2.push(jumlah);
                          barColors.push(color);

                          color = '#';


                        }

                        console.log(xValues2);
                        console.log(yValues2);

                        new Chart("myChart2", {
                          type: "doughnut",
                          data: {
                            labels: xValues2,
                            datasets: [{
                              backgroundColor: barColors,
                              data: yValues2
                            }]
                          },
                          options: {
                            title: {
                              display: true,
                              text: "Platform"
                            }
                          }
                        });
                     } // success

                  }) // ajax
                    
                });	
  </script>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
	  <h1>
		Dashboard
		<small>Cpanel</small>
	  </h1>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-sm-12">
			  <div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fa fa-check"></i> Login Success!</h4>
				Selamat datang dihalaman <b><?=$this->session->userdata('level') ?></b>
			  </div>
			</div> 
			<div class="col-md-12">
			  <div class="box box-success">
				<div class="box-header with-border">
				  <h3 class="box-title">Kandidat</h3>
				</div>
				<div class="box-body">
		<?php if($tampil == 1 && $this->session->level == 'voter') {
			echo '<h1> Hasil Pemilihan Belum Dibuka<h1>';
		} else { ?>
				<?php foreach($kandidat as $kan){?>	
				
					<div class="col-md-3">

						<div class="box box-primary">
							<div class="box-body box-profile">
							<?php if($kan->gambar){?>
								<img class="profile-user-img img-responsive img-circle" src="<?=base_url('uploads/kandidat/').$kan->gambar?>" alt="<?=$kan->nama?>">
							<?php }else{?>
								<img class="profile-user-img img-responsive img-circle" src="<?=base_url('uploads/kandidat/default-user.png')?>" alt="<?=$kan->nama?>">
							<?php } ?>	
								<h3 class="profile-username text-center"><?=$kan->nama?></h3>
								<ul class="list-group list-group-unbordered">
									<li class="list-group-item">
									<b>Hasil Perhitungan</b> 
									<a class="pull-right">
									<?=$kan->totalsuara?>
									Dari <?=$jmlpilih?> Pemilih
									</a>
									
									
									</li>
								</ul>
								
							</div>
						</div>
					</div>	
				<?php } ?>	
	
				</div>
			  </div>
			</div>
			
			<div class="col-md-6">

				<div class="box box-primary">
					<div class="box-header with-border">
						<i class="fa fa-bar-chart-o"></i>
						<h3 class="box-title">Chart Kandidat</h3>
						<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<canvas id="myChart" style="width:600%;max-width:1000px"></canvas>
					</div>

				</div>


				<div class="box box-primary">
					<div class="box-header with-border">
						<i class="fa fa-bar-chart-o"></i>
						<h3 class="box-title">Chart Browser</h3>
						<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<canvas id="myChart1" style="width:600%;max-width:1000px"></canvas>
					</div>

				</div>

			</div>
			<div class="col-md-6">

				<div class="box box-primary">
					<div class="box-header with-border">
						<i class="fa fa-bar-chart-o"></i>
						<h3 class="box-title">Chart Platform</h3>
						<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
						<canvas id="myChart2" style="width:600%;max-width:1000px"></canvas>
					</div>

				</div>


				

			</div>
	<?php } ?>	

			
			
		</div>
	</section>
</div>

