<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><?php echo $label2; ?></h3>
          <div class="card-tools">
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
                <th><?php echo $th_menu6;?></th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $no=1;
                if (isset($konten)) {
                    foreach ($konten as $key) { ?>
              <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $key->name ?></td>
                <td><?php echo $key->email ?></td>
                <td><?php echo $key->subject ?></td>
                <td>
                  <?php
                  $messages = $key->message;
                  $karakter=character_limiter($messages,30);
                  echo $karakter;
                  ?>
                  <span class="badge bg-grey float-right" data-toggle="modal" data-target="#modal-readmore<?php echo $key->id ?>">Read More</span>
                </td>
                <td><?php echo $key->date_create ?></td>
                <td>
                  <?php if (($key->status)==1){
                      echo "<span class='badge bg-danger float-center'>Done</span>"  ;
                  }
                  else {
                      echo "<span class='badge bg-warning float-center'>New</span>"  ;
                  }
                  
                  ?>
                </td>
                <td>
                 
                    <button type="submit" class="btn btn-info btn-sm" value="update" onclick="updatedata(<?php echo $key->id?>)">Update </button>
              
                </td>
              </tr>  

      <div class="modal fade" id="modal-readmore<?php echo $key->id ?>">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Message Detail</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                  <div class="form-group">
                  <label class="control-label">Nama</label>
                  <div class="col-sm-12">
                    <input type="text"  class="form-control" value="<?php echo $key->name ?>"readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label">Email</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" value="<?php echo $key->email ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label">Messages</label>
                  <div class="col-sm-12">
                    <textarea  class="form-control" rows="6" readonly><?php echo $key->message?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label">Date</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" value="<?php echo date('l, d M Y', strtotime($key->date_create)) ?>"readonly>
                  </div>
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
      </div>


                <?php $no++; } } ?>
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

      <!-- /.modal -->

      <script>
  function updatedata(id)
  {
      swal({
          title: "Is this message done?",
          text: "You can't change the status again, if you click Yes!",
          type: "info",
          showCancelButton: true,
          confirmButtonClass: "btn-info",
          confirmButtonText: "Yes.",
          closeOnConfirm: false,
          
        },
    function(){
        $.ajax({
                  url: "<?php echo base_url('Data_control/update_messages/');?>" + id,
                  type: "post",
                  data: {id:id},
                  success:function(){
                      swal("Updated","Status updated successfully! Refresh the page.","success");
                  },
                  error:function(){
                      swal("Status update failed! Try Again.","error");
                  }
        });
      });

  }
</script>

 

</div>
