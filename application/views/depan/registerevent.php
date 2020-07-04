<!-- Modal daftar event -->
<div id="mydaftarevent" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
        <h4 class="modal-title">DAFTAR</h4>
      </div>
      <div class="modal-body">
        <!--<?php echo form_open_multipart('fungsi_utama/daftar');?>-->
        <form id="daftarkanevent" method="post" enctype="multipart/form-data" >
     <div class="form-group">
      <label for="exampleInputEmail1">Nama event</label>
      <input type="text" class="form-control"  name="nama" id="nama" placeholder="nama lengkap" required>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">deskripsi</label>
      <textarea rows="7" class="form-control" name="deskripsi" id="deskripsi" ></textarea>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Jenis Acara</label>
      <?php echo cmb_dinamis('jenis','jenis_event','jenis','no') ?>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email Acara</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">No.Telpon/WA Acara</label>
      <input type="number" class="form-control"  name="WA" id="WA" placeholder="08XXXX" required>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control"  name="password" id="password" placeholder="Password" required>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">pamflet Acara</label><br>
      <p>format img/gif/png/jpg dengan size dibawah 5 mb</p>
      <input type="file" class="form-control" name="foto" id="foto" placeholder="Password" required>
    </div>
  	<center><button class="btn btn-success" id="btn_upload" type="submit">DAFTAR</button></center>
  </form>
      </div>
      <div class="modal-footer">
        <!--<input type="submit" class="btn btn-success" value="daftar">-->
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal daftar event-->
