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
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit User</h3>
                </div>
                <!-- /.box-header -->
                <?=form_open_multipart('dashboard/usermanajemen') ?>
                <div class="box-body">
                  <div class="form-group">
                    <label>Username</label>
                    <input name="username" type="text" class="form-control" placeholder="Username" value="<?=$ume['username'] ?>" style="width:80%;" readonly>
                  </div>
              
                  <div class="form-group">
                    <label>Password</label>
                    <input name="password" type="password" class="form-control" placeholder="Ketik Password baru untuk Login" style="width:80%;">
                    <p class="help-block">Kosongkan jika tidak ingin diganti.</p>
                  </div>
                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input name="nama_lengkap" type="text" class="form-control" placeholder="Nama Lengkap" value="<?=$ume['nama_lengkap'] ?>" style="width:80%;">
                  </div>

                  <div class="form-group">
                    <label>Email</label>
                    <input name="email" type="email" class="form-control" placeholder="Email" value="<?=$ume['email'] ?>" style="width:80%;">
                    <p class="help-block">Kosongkan jika tidak ingin diganti.</p>
                  </div>
                  <?php if($this->session->level == 'admin'){?>
                  <div class="form-group">
                    <label>Level</label>
                      <select name="level" class="form-control select2">
                        <?php
                         foreach ($lvl->result() as $lvl) :
                         ?>
                            <option value="<?php echo $lvl->level ?>" <?=$lvl->level == $ume['level'] ? 'selected="selected"' : ''; ?> > <?php echo $lvl->level ?></option>";
                         <?php endforeach ?>
                      </select>
                  </div> 

                   <div class="form-group">
                    <label>Blokir</label>
                      <select name="blokir" class="form-control select2">
                        <?php
                         foreach ($opt->result() as $opt) :
                         ?>
                            <option value="<?php echo $opt->opsi ?>" <?=$opt->opsi == $ume['blokir'] ? 'selected="selected"' : ''; ?> > <?php echo $opt->opsi ?></option>";
                         <?php endforeach ?>
                      </select>
                  </div>
                  <?php }else{?>
                      
                          <input name="level" type="hidden" class="form-control" value="<?=$ume['level'] ?>">
                          <input name="blokir" type="hidden" class="form-control" value="<?=$ume['blokir'] ?>">
               

                 <?php   } ?> 
                  <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" name="gambar" class="form-control" style="width:50%;">
                    <p class="help-block">Kosongkan jika tidak ingin diganti.</p>
                  </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button name="update" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Update</button>
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