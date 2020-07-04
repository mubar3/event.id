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
                    document.getElementById("nama").value = "";
                    document.getElementById("password").value = "";
                    document.getElementById("foto").value = "";
                    document.getElementById("NIM").value = "";
                    document.getElementById("email").value = "";
                    document.getElementById("WA").value = "";
                        alert("Pendaftaran Berhasil.");
                      },
                    error: function () {
                        alert("size Foto maksimal 1 mb");
                      }
               });
          });


  });

  $(document).ready(function(){

      $('#daftarkanevent').submit(function(e){
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
                    document.getElementById("nama").value = "";
                    document.getElementById("password").value = "";
                    document.getElementById("foto").value = "";
                    document.getElementById("deskripsi").value = "";
                    document.getElementById("email").value = "";
                    document.getElementById("WA").value = "";
                        alert("Pendaftaran Berhasil tunggu konfirmasi admin 1X24 jam lewat email.");
                      },
                    error: function () {
                        alert("size Foto maksimal 5 mb");
                      }
               });
          });


  });

  $(document).ready(function() {
      $("#NIM").on("input", function(e) {
        $('#msg').hide();
        if ($('#NIM').val() == null || $('#NIM').val() == "") {
          $('#msg').show();
          $("#msg").html("Username is required field.").css("color", "red");
        } else {
          var nim = $("#NIM").val();
          $.ajax({
            type: "POST",
            url: '<?php echo base_url();?>validasi/cekNIM',
            data: {nim:nim},
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
