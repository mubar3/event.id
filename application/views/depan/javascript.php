<script type="text/javascript">
  $(document).ready(function(){

      $('#daftarkan').submit(function(e){
          e.preventDefault();
               $.ajax({
                   url:'<?php echo base_url();?>fungsi_utama/Daftar',
                   type:"post",
                   data:new FormData(this),
                   processData:false,
                   contentType:false,
                   cache:false,
                   async:false,
                    success: function(data){
                    document.getElementById("nama1").value = "";
                    document.getElementById("password1").value = "";
                    document.getElementById("foto1").value = "";
                    document.getElementById("email1").value = "";
                    document.getElementById("WA1").value = "";
                        alert("Pendaftaran Berhasil.");
                      },
                    error: function () {
                        alert("size Foto maksimal 1 mb");
                      }
               });
          });


  });

  $(document).ready(function(){

      $('#daftarevent').submit(function(e){
          e.preventDefault();
               $.ajax({
                   url:'<?php echo base_url();?>fungsi_utama/Daftarevent',
                   type:"post",
                   data:new FormData(this),
                   processData:false,
                   contentType:false,
                   cache:false,
                   async:false,
                    success: function(data){
                      alert("pendaftaran berhasil, silahkan cek menu myevent untuk pembayaran");
                    },
                    error: function () {
                        alert("pendaftaran gagal, silahkan ulangi beberapa saaat lagi");
                      }
               });
          });


  });

  $(document).ready(function(){
    $('#event').on('show.bs.modal', function(event){
      var div = $(event.relatedTarget)
      var modal =$(this)

      modal.find('#nama').attr("value",div.data('nama'));
      modal.find('#tanggal').attr("value",div.data('tanggal'));
      modal.find('#waktu').attr("value",div.data('waktu'));
      modal.find('#tempat').attr("value",div.data('tempat'));
      modal.find('#id').attr("value",div.data('id'));
      $('#namaa').show();
      $("#namaa").html(div.data('nama'));
    })

    $('#eventlogin').on('show.bs.modal', function(event){
      var div = $(event.relatedTarget)
      var modal =$(this)

      modal.find('#nama').attr("value",div.data('nama'));
      modal.find('#tanggal').attr("value",div.data('tanggal'));
      modal.find('#waktu').attr("value",div.data('waktu'));
      modal.find('#tempat').attr("value",div.data('tempat'));
      modal.find('#id').attr("value",div.data('id'));
      $('#namaa').show();
      $("#namaa").html(div.data('nama'));
    })

          var rupiah = document.getElementById("rupiah");
      rupiah.addEventListener("keyup", function(e) {
        // tambahkan 'Rp.' pada saat form di ketik
        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
        rupiah_tampil.value = formatRupiah(this.value, "Rp. ");
      });

      /* Fungsi formatRupiah */
      function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, "").toString(),
          split = number_string.split(","),
          sisa = split[0].length % 3,
          rupiah = split[0].substr(0, sisa),
          ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if (ribuan) {
          separator = sisa ? "." : "";
          rupiah += separator + ribuan.join(".");
        }

        rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
        return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
      }



  });

  $(document).ready(function(){

      $('#daftarkanevent').submit(function(e){
          e.preventDefault();
               $.ajax({
                   url:'<?php echo base_url();?>fungsi_utama/Daftarkanevent',
                   type:"post",
                   data:new FormData(this),
                   processData:false,
                   contentType:false,
                   cache:false,
                   async:false,
                    success: function(data){
                    document.getElementById("nama").value = "";
                    document.getElementById("password").value = "";
                    document.getElementById("foto").value = "";
                    document.getElementById("deskripsi").value = "";
                    document.getElementById("email").value = "";
                    document.getElementById("WA").value = "";
                    document.getElementById("tanggal").value = "";
                    document.getElementById("waktu").value = "";
                    document.getElementById("tempat").value = "";
                    document.getElementById("rupiah").value = "";
                    document.getElementById("rupiah_tampil").value = "";
                        alert("Pendaftaran Berhasil tunggu konfirmasi admin 1X24 jam lewat email.");
                      },
                    error: function () {
                        alert("size Foto maksimal 5 mb");
                      }
               });
          });


  });

  $(document).ready(function() {
      $("#email1").on("input", function(e) {
        $('#msg').hide();
        if ($('#email1').val() == null || $('#email1').val() == "") {
          $('#msg').show();
          $("#msg").html("Username is required field.").css("color", "red");
        } else {
          var email1 = $("#email1").val();
          $.ajax({
            type: "POST",
            url: '<?php echo base_url();?>validasi/cekemail',
            data: {email1:email1},
            dataType: "html",
            cache: false,
            success: function(msg) {
              $('#msg').show();
              $("#msg").html(msg);
            },
            error: function(jqXHR, textStatus, errorThrown) {
              $('#msg').show();
              $("#msg").html("gagal");
            }
          });
        }
      });
    });
</script>
