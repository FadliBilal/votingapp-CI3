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
                      <select name="level" class="form-control select2" style="width: 40%;">
                        <?php foreach ($lvl->result() as $l) {
                          echo "<option value='$l->level'>$l->level</option>";
                        } ?>
                      </select>
                  </div> 
                  <div class="form-group">
                    <label>Blokir</label><br>
                      <select name="blokir" class="form-control select2" style="width: 40%;">
                        <?php foreach ($opt->result() as $o) {
                          echo "<option value='$o->opsi'>$o->opsi</option>";
                        } ?>
                      </select>
                  </div> (Y= ya, N= tidak)
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