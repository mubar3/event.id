<?php
  if( ! empty($detail)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
  foreach($detail as $data){
    ?>

  <br><br>
  <div class="section-title">
    <center><h2><?php echo "$data->nama";?></h2></center>
  </div>

  <!-- Page Content -->
<div class="container">
  <div class="row">

    <!--1-->
    <div class="col-md-8">

      <div class="card border-0">
      <form id="daftarevent" method="post">
            <div class="form-group">
             <label for="exampleInputEmail1">Deskripsi</label>
             <p><?php echo "$data->deskripsi";?></p>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Tanggal</label>
              <input type="date" class="form-control" id="tanggal" value="<?php echo "$data->tanggal";?>" name="tanggal" readonly>
                <input type="date" class="form-control" id="id_event" name="id_event" value="<?php echo "$data->id";?>" name="tanggal" hidden>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Waktu</label>
              <input type="time" class="form-control" id="waktu" value="<?php echo "$data->waktu";?>" name="waktu" readonly>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Tempat</label>
              <input type="text" class="form-control" id="tempat" name="tempat" value="<?php echo "$data->tempat";?>" readonly>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Harga</label>
              <?php
              $harga=$data->harga;
              $rupiah="Rp " . number_format($harga,2,',','.');
              ?>
              <input type="text" class="form-control" id="tempat" name="tempat" value="<?php echo $rupiah;?>" readonly>
            </div>
            <center><button class="btn btn-success" id="btn_upload" type="submit">Daftar ke event</button></center><br>
            <?php
            if( ! empty($diskon)){ // Jika data pada database tidak sama dengan empty (alias ada datanya)
            foreach($diskon as $data1){
              $id="tidak ada";
              if($data1->keterangan=$id){} else{?>
                  <center><button class="btn btn-success" id="btn_upload" type="submit"><?php echo "$data1->keterangan";?></button></center>
            <?php } }}  ?>
     </form>
        </div>

    </div>
    <!--2-->

    <!--2-->
    <div class="col-md-4" >




          <a href="gambar/<?php echo "$data->pamflet";?>" data-gall="portfolioGallery" class="venobox preview-link" title="Seminar 1">
            <div class="card my-4" >
                  <img src="gambar/<?php echo "$data->pamflet";?>" class="img-fluid" alt="">
    				</div>
        </a>



    </div>
    <!--2-->

  </div>
</div>






  <?php	} }?>
