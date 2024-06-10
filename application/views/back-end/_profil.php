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
            <div class="col-sm-12">
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Profil</h3>
                </div>
                <!-- /.box-header -->
                <?=form_open_multipart('dashboard/profil') ?>
                <div class="box-body">
                  <div class="form-group">
                    <label>Nama Pemilik</label>
                    <input name="id" type="hidden" value="<?=$p['id_identitas'] ?>">
                    <input name="nama_pemilik" type="text" class="form-control" value="<?=$p['nama_pemilik'] ?>" style="width:50%;">
                  </div>
                  <div class="form-group">
                    <label>Judul Website</label>
                    <input name="judul_website" type="text" class="form-control" value="<?=$p['judul_website'] ?>">
                  </div>
                  <div class="form-group">
                    <label>Alamat Website</label>
                   <input name="alamat_website" type="text" class="form-control" value="<?=$p['alamat_website'] ?>">
                  </div>
                   <div class="form-group">
                    <label>Meta Deskripsi</label>
                    <input name="meta_deskripsi" type="text" class="form-control" value="<?=$p['meta_deskripsi'] ?>">
                  </div>
                   <div class="form-group">
                    <label>Meta Keyword</label>
                    <input name="meta_keyword" type="text" class="form-control" value="<?=$p['meta_keyword'] ?>">
                  </div>
                    <div class="box box-danger"></div>
                        Buka link ini <a href="https://www.google.com/settings/u/1/security/lesssecureapps">https://www.google.com/settings/u/1/security/lesssecureapps</a> dan ijinkan aplikasi pihak ketiga. <b>Allow less secure apps: OFF</b>
                        <div class="form-group">
                          <label>Email Administrator</label>
                          <input name="email_admin" type="email" class="form-control" value="<?=$p['email_admin'] ?>" style="width:50%;">
                        </div>
                        <div class="form-group">
                          <label>Password Email Administrator (jika salah email tidak terkirim, pastikan benar)</label>
                          <input name="password_email" type="password" class="form-control" value="<?=$p['password_email'] ?>" style="width:50%;">
                        </div>
						 <div class="form-group">
                          <label>Email CC</label>
                          <input name="email_cc" type="email" class="form-control" value="<?=$p['email_cc'] ?>" style="width:50%;">
                        </div>
						
                    <div class="box box-danger"></div>
                    <div class="form-group">
                    <label>Facebook</label>
                    <input name="facebook" type="text" class="form-control" value="<?=$p['facebook'] ?>">
                  </div>
                    <div class="form-group">
                    <label>Twitter</label>
                    <input name="twitter" type="text" class="form-control" value="<?=$p['twitter'] ?>">
                  </div>
                    <div class="form-group">
                    <label>Twitter_widget</label>
                    <input name="twitter_widget" type="text" class="form-control" value="<?=$p['twitter_widget'] ?>">
                  </div>
                    <div class="form-group">
                    <label>Google Plus</label>
                    <input name="googleplus" type="text" class="form-control" value="<?=$p['googleplus'] ?>">
                  </div>
                    <div class="form-group">
                    <label>Google Map</label>
                    <input name="googlemap" type="text" class="form-control" value="<?=$p['googlemap'] ?>">
                  </div>
                   <img src="<?=base_url().'../'.$p['favicon'] ?>" width="30" heigth="30"><br><br>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button name="update" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Update</button>
                <a href="<?=site_url().'/dashboard/profil' ?>" class="btn btn-warning btn-flat"><i class="fa fa-retweet"></i> Kembali</a>
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