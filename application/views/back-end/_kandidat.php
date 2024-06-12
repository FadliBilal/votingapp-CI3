    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>2024</small>
          </h1>
          <ol class="breadcrumb">
            <li><a class="btn btn-primary btn-sm" href="kandidat_tambah">
            <i class="fa fa-plus"></i>Tambah Kandidat</a>
            </li>
          </ol>
        </section>

        <!-- Main content -->
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
            <div class="col-md-12">
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Daftar Kandidat</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="slider" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>No</th>
                      <th width="35%">Nama</th>
                      <th width="25%">Keterangan</th>
                      <th width="20%">Tgl Posting</th>
                      <th width="20%">Gambar</th>
                      <th width="8%">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; foreach($sl->result() as $sl){ ?>
                    <tr>
                      <td><?=$no; ?></td>
                      <td><?=$sl->nama ?></td>
                      <td><?=$sl->ket ?></td>
              
                      <td><?=$sl->t_time ?></td>
                      <td>
                         <?php if (!empty($sl->gambar)){ ?>

                            <img src="<?=base_url().'uploads/kandidat/'.$sl->gambar ?>" width="50%" heigth="50">
                            <?php
                          }else{
                            ?>
                            <img src="<?=base_url().'uploads/kandidat/default-user.png'?>" width="50%" heigth="50">
                            <?php
                          }
                          ?>
                      </td>
       
                      <td>
                      <div class="btn-group">
                        <a class="btn btn-success btn-sm btn-flat" href="<?=site_url().'/dashboard/kandidat_edit/'.$this->encrypt->encode($sl->id_kandidat) ?>"><i class="fa fa-edit"></i> </a>
                        <a class="btn btn-danger btn-sm btn-flat" href="<?=site_url().'/dashboard/kandidat_delete/'.$this->encrypt->encode($sl->id_kandidat) ?>"><i class="fa fa-trash"></i> </a>
                      </div>
                      </td>
                    </tr>
                    <?php $no++; } ?>
                  </table>
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