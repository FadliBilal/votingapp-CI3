    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-sm-12">
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> PILIH CALON ANDA !</h4>
               KANDIDAT KOMANDAN TINGKAT (KOMTING).
              </div>
            </div> 
            <div class="col-md-12">
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Halaman Kandidat</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
					<div class="container-fluid bg-3 text-center">
					<div class="row">
				<?php if($buka == 1){
					echo '<h1>Periode Pemilihan Belum Dibuka</h1>';
					
				}else{?>
					<?php if ($kandidat == 1){
						echo '<h1>Anda sudah melakukan proses voting</h1>';
					}else{?>
					
						<?php foreach($kandidat as $kan){?>
						<div class="col-md-4">
						<div class="jumbotron">
							<img src="<?=base_url('uploads/kandidat/').$kan->gambar?>" class="img-rounded" alt="" width="300px" height="400px">
							<h3><?=$kan->nama?></h3>
							 <?=form_open_multipart('dashboard/pilihKandidat') ?>
							 <input type="hidden" name="id_kandidat" value="<?=$kan->id_kandidat?>">
							  <input type="hidden" name="periode" value="<?=$kan->periode?>">
							 <button name="TpilihKandidat" type="submit" class="btn btn-success btn-flat"><i class="fa fa-hand-o-right"></i> Pilih</button>
							 <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default<?=$kan->id_kandidat?>">
								Detail Kandidat
							</button>
							 </form>
						</div>	
						</div>
						
							
								<div class="modal fade" id="modal-default<?=$kan->id_kandidat?>">
									<div class="modal-dialog">
										<div class="modal-content">
										<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">Data Kandidat <?=$kan->nama?></h4>
										</div>
										<div class="modal-body">
										<p><?=$kan->ket?></p>
										</div>
										
										</div>

									</div>

								</div>
						
						
					<?php }}}?>
					
					
					
					
			
					</div>
					</div>
                 
                 
                  
                </div>
                <!-- /.box-body -->
              </div>
              <!-- /.box -->

            </div>
          </div>
          <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
