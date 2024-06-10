<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Cpanel</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Daftar User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="berita" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th width="35%">Username</th>
                  <th width="20%">Nama_Lengkap</th>
                  <th width="20%">Email</th>
                  <th width="20%">Level</th>
                  <th width="20%">Blokir</th>
                  <th width="20%">Gambar</th>
                  <th width="8%">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php $no=1; 
                foreach($um->result() as $r){ ?>
                <tr>
                  <td><?=$no; ?></td>
                  <td><?=$r->username ?></td>
                  <td><?=$r->nama_lengkap ?></td>
                  <td><?=$r->email ?></td>
                  <td><?=$r->level ?></td>
                  <td><?=$r->blokir ?></td>
                  <td>
                  <?php if (!empty($r->gambar)){ ?>

                  <img src="<?=base_url().'uploads/administrator/'.$r->gambar ?>" width="50%" heigth="50">
                  <?php
                }else{
                  ?>
                  <img src="<?=base_url().'uploads/administrator/default-user.png'?>" width="50%" heigth="50">
                  <?php
                }
                  ?>
                  </td>
                  <td>
                  <div class="btn-group">
                    <a class="btn btn-success btn-sm btn-flat" href="<?=site_url().'/dashboard/usermanajemen_edit/'.$this->encrypt->encode($r->username) ?>"><i class="fa fa-edit"></i> </a>
                     <?php if ($this->session->level == 'admin'){?> 
                    <a class="btn btn-danger btn-sm btn-flat" href="<?=site_url().'/dashboard/usermanajemen_delete/'.$this->encrypt->encode($r->username) ?>"><i class="fa fa-trash"></i> </a>
                    <?php } ?>
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