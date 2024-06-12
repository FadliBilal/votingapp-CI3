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

          <div class="row">
            <div class="col-sm-12">
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Kandidat</h3>
                </div>
                <!-- /.box-header -->
                <?=form_open_multipart('dashboard/kandidat') ?>
                <div class="box-body">
                  <div class="form-group">
                    <label>Nama</label>
                    <input name="id_kandidat" type="hidden" value="<?=$sl['id_kandidat'] ?>">
                    <input name="nama" type="text" class="form-control" value="<?=$sl['nama'] ?>" style="width:80%;">
                  </div>
                  <div class="form-group">
                    <label>Keterangan</label>
                   <textarea name="ket" class="form-control ckeditor" placeholder="Keterangan Kandidat" rows="5"><?php echo $sl['ket']?></textarea>
                  </div>
                  
                  <div class="form-group">
                    <label>Gambar Kandidat</label><br><br>
					<?php if(!empty($sl['gambar'])){?>
                    <img src="<?=base_url().'uploads/kandidat/'.$sl['gambar'] ?>" width="100" heigth="100"><br><br>
                    <?php } ?>
					<input type="file" name="gambar" class="form-control" style="width:50%;">
                    <p class="help-block">Kosongkan jika tidak ingin diganti.</p>
                  </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button name="update" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Update</button>
                <a href="<?=site_url().'/dashboard/kandidat' ?>" class="btn btn-warning btn-flat"><i class="fa fa-retweet"></i> Kembali</a>
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