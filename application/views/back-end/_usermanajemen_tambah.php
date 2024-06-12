    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>2024</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
         <?php if($this->session->flashdata('success')){ ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Sukses !... </strong> <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php } ?>
          <div class="row">
            <div class="col-sm-12">
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title"> Tambah User</h3>
                </div>
                <!-- /.box-header -->
                <?=form_open_multipart('dashboard/usermanajemen') ?>
                <div class="box-body">
                  <div class="form-group">
                    <label>Username</label>
                    <input name="username" type="text" class="form-control" placeholder="Username/NPP" required="" style="width:80%;">
                    *Username tidak dapat dirubah kembali setelah terinput ke database.
                  </div>
              
                  <div class="form-group">
                    <label>Password</label>
                    <input name="password" type="text" class="form-control" placeholder="Password" required="" style="width:80%;">
                  </div>
                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input name="nama_lengkap" type="text" class="form-control" placeholder="Nama Lengkap" required="" style="width:80%;">
                  </div>

                  <div class="form-group">
                    <label>Email</label>
                    <input name="email" type="email" class="form-control" placeholder="Email" required="" style="width:80%;">
                  </div>
                  <div class="form-group">
                    <label>Level</label><br>
                    <?php foreach ($lvl->result() as $l): ?>
                        <label class="form-check-inline" style="margin-right: 10px;">
                            <input class="form-check-input" type="radio" name="level" value="<?php echo $l->level; ?>"> <?php echo $l->level; ?>
                        </label>
                    <?php endforeach; ?>
                </div>
                <div class="form-group">
                    <label>Blokir</label><br>
                    <?php foreach ($opt->result() as $o): ?>
                        <label class="form-check-inline" style="margin-right: 10px;">
                            <input class="form-check-input" type="radio" name="blokir" value="<?php echo $o->opsi; ?>"> <?php echo $o->opsi; ?>
                        </label>
                    <?php endforeach; ?>
                </div>
                <p>(Y= ya, N= tidak)</p>
                  <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" name="gambar" class="form-control" style="width:50%;">
                    <p class="help-block">Kosongkan jika tidak ingin diganti.</p>
                  </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button name="simpan" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Simpan</button>
                <a href="<?=site_url().'/dashboard/usermanajemen' ?>" class="btn btn-warning btn-flat"><i class="fa fa-retweet"></i> Kembali</a>
                </div>
              </div>
              </form>
              <!-- /.box -->
            </div>
          </div>
          <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>