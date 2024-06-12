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
            <div class="col-sm-5">
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Periode Jurnal TA</h3>
                </div>
                <!-- /.box-header -->
                <?=form_open_multipart('ta/periode') ?>
                <div class="box-body">
                  <div class="form-group">
                    <label>Periode TA</label>
                    <input name="id_periode" type="hidden" value="<?=$l['id_periode'] ?>">
                    <input name="periode" type="text" class="form-control" value="<?=$l['periode'] ?>">
                  </div>
                     
                 
                 
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button name="update" type="submit" class="btn btn-success btn-flat"><i class="fa fa-save"></i> Update</button>
                <a href="<?=site_url().'/ta/jurnalta' ?>" class="btn btn-warning btn-flat"><i class="fa fa-retweet"></i> Kembali</a>
                </div>
              </div>
              </form>
              <!-- /.box -->
            </div>
                   
            <div class="col-md-7">
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Daftar Kategori_berita</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <table id="kategori" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th width="5%">No</th>
                      <th>Periode TA</th>
                      <th width="25%">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; foreach($p->result() as $r){ ?>
                    <tr>
                      <td><?=$no; ?></td>
                      <td><?=$r->periode ?></td>
                      
                      <td>
                      <div class="btn-group">
                        <a class="btn btn-success btn-sm btn-flat" href="<?=site_url().'/ta/periode_edit/'.$r->id_periode ?>"><i class="fa fa-edit"></i> </a>
                        <a class="btn btn-danger btn-sm btn-flat" href="<?=site_url().'/ta/periode_delete/'.$r->id_periode ?>"><i class="fa fa-trash"></i> </a>
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