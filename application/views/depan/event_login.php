<!-- Modal event -->
<div id="eventlogin" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
        <h4 class="d-flex align-items-center">DETAIL EVENT</h4>
      </div>
      <div class="modal-body">
  <form enctype="multipart/form-data" method="POST" action="<?php echo base_url();?>detail_login" >

    <div class="form-group"><center><h5>
      <span id="namaa"></span>
    </h5></center>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Tanggal</label>
      <input type="date" class="form-control" id="tanggal" name="tanggal" readonly>
      <input type="text" class="form-control" id="id" name="id" readonly hidden>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">waktu</label>
      <input type="time" class="form-control" id="waktu" name="waktu" readonly>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">tempat</label>
      <input type="text" class="form-control" id="tempat" name="tempat" readonly>
    </div>
  </div>
      <div class="modal-footer">
       <button type="submit" class="btn btn-success">Detail</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
      </form>
    </div>
  </div>
</div>
