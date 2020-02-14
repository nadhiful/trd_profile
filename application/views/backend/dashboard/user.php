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
                <th><?php echo $th_menu5;?></th>
              </tr>
            </thead>
            <tbody>
             <?php 
              if (isset($konten)) {
                foreach ($konten as $key ) { ?>
                  <tr>
                    <td><?php echo $key->id_user?></td>
                    <td><?php echo $key->nama?></td>
                    <td>
                      <?php 
                        if ($key->id_role == "ADM") {
                          echo "Administrator";
                        }elseif($key->id_role == "DMO"){
                          echo "Officer DEM";
                        }elseif ($key->id_role == "SMO") {
                          echo "Officer SM";
                        }elseif($key->id_role == "MCO"){
                          echo "Officer MC";
                        }elseif ($key->id_role == "HRO") {
                          echo "HR Officer";
                        }
                      ?>
                    </td>
                    <td>
                  <button class="btn btn-danger" onclick="deletedata('<?php echo $key->id_user ?>')">
                  <i class="fa fa-trash"></i> Hapus
                  </button>
                  <button class="btn btn-warning" data-toggle="modal" data-target="#modal-edit<?php echo $key->id_user ?>">
                  <i class="fa fa-edit"></i> Edit
                  </button>
                    </td>
                  </tr>
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
            <form class="form-horizontal" method="post" action="<?php echo site_url('Data_control/add_user')?>">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Compose User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label class="control-label"><?php echo $th_menu1 ?></label>
                  <div class="col-sm-12">
                    <input type="text" name="id_user" class="form-control" value="<?php echo $id_user ?>"readonly>
                  </div>
                </div>
                  <div class="form-group">
                  <label class="control-label"><?php echo $th_menu2 ?></label>
                  <div class="col-sm-12">
                   <input type="text" name="username" class="form-control" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label"><?php echo $th_menu3 ?></label>
                  <div class="col-sm-12">
                    <select name="role" class="form-control">
                      <option value="ADM">Administrator</option>
                      <option value="HRO">HR</option>
                      <option value="DMO">DM Officer</option>
                      <option value="SMO">SM Office</option>
                      <option value="MCO">MC Officer</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label"><?php echo $th_menu4; ?></label>
                  <div class="col-sm-12">
                    <input type="password" name="password" class="form-control" required>
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
    
    <div class="modal fade" id="modal-edit<?php echo $key->id_user?>">
          <div class="modal-dialog">
            <form class="form-horizontal" method="post" action="<?php echo site_url('Data_control/update_user')?>" enctype="multipart/form-data">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Compose User</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label class="control-label"><?php echo $th_menu1 ?></label>
                  <div class="col-sm-12">
                    <input type="text" name="kd_user" class="form-control" value="<?php echo $key->id_user ?>"readonly>
                  </div>
                </div>
                  <div class="form-group">
                  <label class="control-label"><?php echo $th_menu2 ?></label>
                  <div class="col-sm-12">
                   <input type="text" name="kd_username" class="form-control" required value="<?php echo $key->nama ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label"><?php echo $th_menu3 ?></label>
                  <div class="col-sm-12">
                    <select name="kd_role" class="form-control">
                      <?php 
                        $kode = $key->id_role;
                        if ($kode == "ADM") { ?>
                          <option value="<?php echo $kode ?>" selected>Administrator</option>
                          <option value="HRO">HR</option>
                          <option value="DMO">DM Officer</option>
                          <option value="SMO">SM Officer</option>
                          <option value="MCO">MC Officer</option>
                        <?php }elseif ($kode == "HRO") { ?>
                          <option value="<?php echo $kode ?>" selected>HR</option>
                          <option value="ADM">Administrator</option>
                          <option value="DMO">DEM Officer</option>
                          <option value="SMO">SM Officer</option>
                          <option value="MCO">MC Officer</option>
                        <?php }elseif ($kode == "DMO") { ?>
                          <option value="<?php echo $kode ?>" selected>DM Officer</option>
                          <option value="ADM">Administrator</option>
                          <option value="HRO">HR</option>
                          <option value="SMO">SM Officer</option>
                          <option value="MCO">MC Officer</option>
                        <?php } elseif ($kode == "SMO") { ?>
                          <option value="<?php echo $kode ?>" selected>SM Officer</option>
                          <option value="ADM">Administrator</option>
                          <option value="HRO">HR</option>
                          <option value="DMO">DM Officer</option>
                          <option value="MCO">MC Officer</option>
                        <?php } elseif ($kode == "MCO") { ?>
                          <option value="<?php echo $kode ?>" selected>MC Officer</option>
                          <option value="ADM">Administrator</option>
                          <option value="HRO">HR</option>
                          <option value="DMO">DM Officer</option>
                          <option value="SMO">SM Officer</option>
                        <?php }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label"><?php echo $th_menu4; ?></label>
                  <div class="col-sm-12">
                    <input type="password" name="kd_password" class="form-control" required>
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
                  url: "<?php echo base_url('Data_control/delete_user/')?>" + id,
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
