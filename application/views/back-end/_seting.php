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
                  <h3 class="box-title">Set Seting</h3>
                </div>
                <!-- /.box-header -->
                <?=form_open_multipart('dashboard/seting') ?>
                <div class="box-body">
                  <div class="form-group">
                    <label>Periode</label>
                    <input name="id" type="hidden" value="<?=$l['id_seting'] ?>">
					
					<select name="periode" class="form-control select2">
                        <?php
                         foreach ($pe as $per){
                         ?>
                            <option value="<?=$per->id_periode?>" <?=$per->id_periode == $l['periode'] ? 'selected="selected"' : '';?> > <?=$per->ket_periode ?></option>
                         <?php } ?>
                      </select>
					  *periode ditentukan di awal mulai dari input kandidat
                  </div>
				  <div class="form-group">
                    <label>Buka Voting</label>
            
					<select name="buka" class="form-control select2">
                        <?php
                         foreach ($opsi as $buka){
                         ?>
                            <option value="<?=$buka->id_opsi?>" <?=$buka->id_opsi == $l['buka'] ? 'selected="selected"' : '';?> > <?=$buka->jenis ?></option>
                         <?php } ?>
                      </select>
                  </div>
				  
				  <div class="form-group">
                    <label>Tampilkan Hasil Voting</label>
            
					<select name="tampil" class="form-control select2">
                        <?php
                         foreach ($opsi as $tampil){
                         ?>
                            <option value="<?=$tampil->id_opsi?>" <?=$tampil->id_opsi == $l['tampil'] ? 'selected="selected"' : '';?> > <?=$tampil->jenis ?></option>
                         <?php } ?>
                      </select>
                  </div>
             
                 
                   
                      
						
                   
                   
                  
               
                
                   
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