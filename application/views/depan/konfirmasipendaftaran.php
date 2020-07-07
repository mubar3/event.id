

<!-- Modal login -->
<div id="konfirmasi" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
        <h4 class="d-flex align-items-center">pendaftaran anda berhasil</h4>
      </div>
      <div class="modal-body">
  <form method="POST" action="<?php echo base_url();?>fungsi_utama/login" >
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Username">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    	<center><button class="btn btn-success" id="btn_upload" type="submit">LOGIN</button></center>
  </form>
      </div>
      <div class="modal-footer">
       <button type="submit" class="btn btn-success" data-dismiss="modal">Login</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Login -->
