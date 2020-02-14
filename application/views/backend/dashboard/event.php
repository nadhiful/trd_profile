<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><?php echo $label2; ?></h3>
          <div class="card-tools">
            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-add">
            <i class="fas fa-plus"> Compose </i>
            </button>
            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip" tittle="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
            title="Remove">
            <i class="fas fa-times"></i></button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th><?php echo $th_menu1;?></th>
                <th><?php echo $th_menu2;?></th>
                <th><?php echo $th_menu3;?></th>
                <th><?php echo $th_menu4;?></th>
                <th><?php echo $th_menu5;?></th>
              </tr>
            </thead>
            <tbody>
              <?php 
                if (isset($konten)) {
                  foreach ($konten as $key) { ?>
                    
                <td><?php echo $key->id_event?></td>
                <td><?php echo $key->title ?></td>
                <td><?php echo $key->date_event ?></td>
                <td>
                   <?php
                      $product_image = [
                        'src'         => 'upload/event/' . $key->images, 
                        'height'      => '60',
                        'data-toggle' => 'modal',
                        'data-target' => '#modal-image'.$key->id_event
                      ]; 
                      echo img($product_image);
                    ?>
                </td>
                <td>
                  <button class="btn btn-danger" onclick="deletedata('<?php echo $key->id_event ?>')">
                  <i class="fa fa-trash"></i> Hapus
                  </button>
                  <button class="btn btn-warning" data-toggle="modal" data-target="#modal-edit<?php echo $key->id_event ?>">
                  <i class="fa fa-edit"></i> Edit
                  </button>
                </td>

                  <?php }
                }

              ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>

    <div class="modal fade" id="modal-add">
          <div class="modal-dialog">
            <form class="form-horizontal" method="post" action="<?php echo site_url('Data_control/add_event')?>" enctype="multipart/form-data">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Compose Career</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label class="control-label"><?php echo $th_menu1 ?></label>
                  <div class="col-sm-12">
                    <input type="text" name="id_event" class="form-control" value="<?php echo $id_event ?>"readonly>
                  </div>
                </div>
                  <div class="form-group">
                  <label class="control-label">Nama Event</label>
                  <div class="col-sm-12">
                   <input type="text" name="judul" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label"><?php echo $th_menu3 ?></label>
                  <div class="col-sm-12">
                    <input type="date" name="tanggal" class="form-control">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label"><?php echo $th_menu4; ?></label>
                  <div class="col-sm-12">
                    <input type="file" name="images">
                  </div>
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </form>
          </div>
          <!-- /.modal-dialog -->
    </div>

<?php 
    if (isset($konten)) {
      foreach ($konten as $key) { ?>
        
        <div class="modal fade" id="modal-edit<?php echo $key->id_event ?>">
          <div class="modal-dialog">
            <form class="form-horizontal" method="post" action="<?php echo site_url('Data_control/update_event')?>" enctype="multipart/form-data">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Compose Career</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label class="control-label"><?php echo $th_menu1 ?></label>
                  <div class="col-sm-12">
                    <input type="text" name="kd_event" class="form-control" value="<?php echo $key->id_event ?>"readonly>
                  </div>
                </div>
                  <div class="form-group">
                  <label class="control-label">Nama Event</label>
                  <div class="col-sm-12">
                   <input type="text" name="kd_judul" class="form-control" value="<?php echo $key->title ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label"><?php echo $th_menu3 ?></label>
                  <div class="col-sm-12">
                    <input type="date" name="kd_tanggal" class="form-control" value="<?php echo $key->date_event; ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label"><?php echo $th_menu4; ?></label>
                  <div class="col-sm-12">
                    <input type="hidden" name="old_images" value="<?php echo $key->images;?>">
                    <input type="file" name="images">
                  </div>
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </form>
          </div>
          <!-- /.modal-dialog -->
    </div>
<?php }
    }
 ?>
        
  <script>
  function deletedata(id)
  {
      swal({
          title: "Are you sure?",
          text: "Your will not be able to recover this imaginary file!",
          type: "warning",
          showCancelButton: true,
          confirmButtonClass: "btn-danger",
          confirmButtonText: "Yes, delete it!",
          closeOnConfirm: false,
          
        },
    function(){
        $.ajax({
                  url: "<?php echo base_url('Data_control/delete_event/')?>" + id,
                  type: "post",
                  data: {id:id},
                  success:function(){

                      swal("Deleted","Data berhasil dihapus","success");
                  },
                  error:function(){
                      
                      swal("Data gagal dihapus","error");
                  }
        });
      });

  }


</script>

</div>
