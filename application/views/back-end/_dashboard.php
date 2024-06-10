<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
	  <h1>
		Dashboard
		<small>Cpanel</small>
	  </h1>
	</section>
	<section class="content">
	<?php if($this->session->flashdata('success')){ ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Sukses !... </strong> <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php } ?>
        <section class="content">
        <?php if($this->session->flashdata('error')){ ?>
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Mohon Maaf !... </strong> <?php echo $this->session->flashdata('error'); ?>
        </div>
        <?php } ?>
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
										<b>Detil Kandidat</b>
									</li>
								</ul>
								<p class="text-muted text-center"><?=$kan->ket?></p>
							</div>
						</div>
					</div>	
				<?php } ?>	
				</div>
			  </div>
			</div>
		</div>
	</section>
</div>