<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KOMUNITAS</title>

    <!--CSS Files-->
    <link href="<?=base_url("thames")?>/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link href="<?=base_url("thames")?>/css/style.css" rel="stylesheet"/>
  </head>
  <body>

    <!--page loader-->
    <div class="loader-wrapper">
      <div class="d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
        <div class="spinner-border text-white" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
      </div>
    </div>
   <!--end loader-->

   <!--start wrapper-->
    <div class="wrapper">

      <!--start to header-->
      <header class="top-header fixed-top border-bottom d-flex align-items-center">
        <nav class="navbar navbar-expand w-100 p-0 gap-3 align-items-center">
            <div class="nav-button" onclick="history.back()"><a href="javascript:;"><i class="bi bi-arrow-left"></i></a></div>
            <div class="account-profile">
              <h6 class="mb-0 fw-bold text-dark">REGISTER</h6>
            </div>
        </nav>
       </header>
        <!--end to header-->

      <!--start to page content-->
       <div class="page-content">

         <div class="login-body">
            <h5 class="fw-bold">Form Register</h5>
            <p class="mb-0"></p>
            <form method="post">

              <div class="form-floating mb-3">
                <input  oninput="this.value = this.value.toUpperCase()" type="text" class="form-control rounded-3" name="nama_lengkap" required>
                <label for="floatingInputEmail">NAMA LENGKAP</label>
              </div>
              <div class="form-floating mb-3">
                <select class="form-control rounded-3" name="jenis_kelamin" required>
                  <option value="pria">Pria</option>
                  <option value="wanita">Wanita</option>
                </select>
                <label for="floatingInputEmail">JENIS KELAMIN</label>
              </div>
              
              
              <div class="form-floating mb-3">
                <input  oninput="this.value = this.value.toUpperCase()" type="date" class="form-control rounded-3" name="tempat_lahir" required>
                <label for="floatingInputEmail">TEMPAT LAHIR</label>
              </div>
              <div class="form-floating mb-3">
                <select class="form-control rounded-3" name="status" required>
                  <option value="menikah">MENIKAH</option>
                  <option value="lajang">LAJANG</option>
                  <option value="berpisah">BERPISAH</option>
                </select>
                <label for="floatingInputEmail">STATUS</label>
              </div>
              
              <div class="form-floating mb-3">
                <select class="form-control rounded-3" name="pendidikan" required>
                  <option value="SD">SD</option>
                  <option value="SMP">SMP</option>
                  <option value="SMA">SMA</option>
                  <option value="D1">D1</option>
                  <option value="D2">D2</option>
                  <option value="D3">D3</option>
                  <option value="D4">D4</option>
                  <option value="SARJANA">SARJANA</option>
                  <option value="Magister">Magister</option>
                  <option value="Doktor">Doktor</option>
                </select>
                <label for="floatingInputEmail">Pendidikan Terakhir</label>
              </div>
              <div class="card mb-3">
                <div class="card-header">Dusun Asal/ Dusun Ayah/Ibu </div>
                <div class="card-body">
                  <div class="form-floating mb-3">
                    <select class="form-control rounded-3" name="prov_asal" required>
                    </select>
                    <label for="floatingInputEmail">Provinsi</label>
                  </div>
                  
                  <div class="form-floating mb-3">
                    <select class="form-control rounded-3" name="kab_asal" required>
                    </select>
                    <label for="floatingInputEmail">Kabupaten</label>
                  </div>
                  
                  <div class="form-floating mb-3">
                    <select class="form-control rounded-3" name="kec_asal" required>
                    </select>
                    <label for="floatingInputEmail">Kecamatan</label>
                  </div>
                  
                  <div class="form-floating mb-3">
                    <select class="form-control rounded-3" name="desa_asal" required>
                    </select>
                    <label for="floatingInputEmail">Desa</label>
                  </div>
                  
                  <div class="form-floating mb-3">
                    <input   oninput="this.value = this.value.toUpperCase()" type="text" class="form-control rounded-3" name="alamatRumah_asal" required>
                    <label for="floatingInputEmail">ALAMAT Rumah (komplek rt rw no rumah)</label>
                  </div>
                </div>
              </div>
              
              <div class="card mb-3">
                <div class="card-header">Alamat Tempat Tinggal </div>
                <div class="card-body">
                  <div class="form-floating mb-3">
                    <select class="form-control rounded-3" name="prov_tinggal" required>
                    </select>
                    <label for="floatingInputEmail">Provinsi</label>
                  </div>
                  
                  <div class="form-floating mb-3">
                    <select class="form-control rounded-3" name="kab_tinggal" required>
                    </select>
                    <label for="floatingInputEmail">Kabupaten</label>
                  </div>
                  
                  <div class="form-floating mb-3">
                    <select class="form-control rounded-3" name="kec_tinggal" required>
                    </select>
                    <label for="floatingInputEmail">Kecamatan</label>
                  </div>
                  
                  <div class="form-floating mb-3">
                    <select class="form-control rounded-3" name="desa_tinggal" required>
                    </select>
                    <label for="floatingInputEmail">Desa</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input  oninput="this.value = this.value.toUpperCase()" type="text" class="form-control rounded-3" name="alamatRumah_tinggal" required>
                    <label for="floatingInputEmail">ALAMAT Rumah (komplek rt rw no rumah)</label>
                  </div>
              
                </div>
                
            
                
              </div>
              <div class="form-floating mb-3">
                <input  oninput="this.value = this.value.toUpperCase()" type="text" class="form-control rounded-3" name="ibu" required>
                <label for="floatingInputEmail">Nama Ibu</label>
              </div>
              <div class="form-floating mb-3">
                <input  oninput="this.value = this.value.toUpperCase()" type="text" class="form-control rounded-3" name="bapak" required>
                <label for="floatingInputEmail">Nama Bapak</label>
              </div>
              <div class="form-floating mb-3">
                <select class="form-control rounded-3" name="Pekerjaan" required>
                  <option value="Pegawai">Pegawai</option>
                  <option value="Usaha">Usaha</option>
                  <option value="irt">Ibu Rumah Tangga</option>
                  <option value="mencari pekerjaan">sedang mencari kerja</option>
                </select>
                <label for="floatingInputEmail">Pekerjaan</label>
              </div>


              <div class="form-floating mb-3">
                <input  oninput="this.value = this.value.toUpperCase()" type="text" class="form-control rounded-3" name="tempat_bekerja" required>
                <label for="floatingInputEmail">Nama Tempat Gawe</label>
              </div>
              
              <div class="form-floating mb-3">
                <input  oninput="this.value = this.value.toUpperCase()" type="tel" class="form-control rounded-3" name="no_telp" required>
                <label for="floatingInputEmail">No Telp / WA (USER LOGIN) </label>
              </div>
              <div class="input-group mb-3" id="show_hide_password">
                <div class="form-floating flex-grow-1">
                  <input  oninput="this.value = this.value.toUpperCase()" type="password" class="form-control rounded-3 rounded-end-0 border-end-0" name="password" placeholder="Enter Password" required>
                  <label for="floatingInputPassword">Password</label>
                </div>
                <span class="input-group-text bg-transparent rounded-start-0 rounded-3"><i class="bi bi-eye-slash"></i></span>
              </div>

              
              <div class="mb-0 d-grid">
              
              </div>
              
         </div>

       </div>
     <!--end to page content-->


     <!--start to footer-->
    <footer class="page-footer fixed-bottom border-top d-flex align-items-center justify-content-center">
    <input  oninput="this.value = this.value.toUpperCase()" type="submit" class="btn btn-dark btn-ecomm rounded-3" value="DAFTAR">
    </footer>
    <!--end to footer-->

    
    </form>
    

    </div>
   <!--end wrapper-->


    <!--JS Files-->  
    <script src="<?=base_url("thames")?>/js/bootstrap.bundle.min.js"></script>

    <script src="<?=base_url("thames")?>/js/jquery.min.js"></script>
    <script src="<?=base_url("thames")?>/js/show-hide-password.js"></script>
    <script src="<?=base_url("thames")?>/js/loader.js"></script>

    <script>
      $.ajax({
              url: "<?=base_url("wilayah/prov")?>",
              dataType: 'json', // type of response data
              timeout: 500,     // timeout milliseconds
              success: function (data,status,xhr) {   // success callback function
                //  console.log(data+status);
                var prov = "<option>PILIH PROVINSI</option>";
                 data.forEach(function(datax, index) {
                    // console.log(datax);
                    prov += "<option value='"+datax.kode+"'>"+datax.nama+"</option>";
                  });
                  console.log(prov);
                $("select[name='prov_asal']").html(prov);
                $("select[name='prov_tinggal']").html(prov);
                // $("#prov_asal").html(prov);
              },
              error: function (jqXhr, textStatus, errorMessage) { 
                console.log(textStatus+errorMessage);
              }
            });

    $("select[name='prov_asal']").on('change', function() {
      console.log($(this).val());
      $.ajax({
              url: "<?=base_url("wilayah/kabupaten/")?>"+$("select[name='prov_asal']").val(),
              dataType: 'json', // type of response data
              timeout: 500,     // timeout milliseconds
              success: function (data,status,xhr) {   // success callback function
                //  console.log(data+status);
                var prov = "<option>PILIH kabupaten</option>";
                 data.forEach(function(datax, index) {
                    // console.log(datax);
                    prov += "<option value='"+datax.kode+"'>"+datax.nama+"</option>";
                  });
                  console.log(prov);
                $("select[name='kab_asal']").html(prov);
                // $("#prov_asal").html(prov);
              },
              error: function (jqXhr, textStatus, errorMessage) { 
                console.log(textStatus+errorMessage);
              }
            });
    });
    
    $("select[name='kab_asal']").on('change', function() {
      console.log($(this).val());
      $.ajax({
              url: "<?=base_url("wilayah/kecamatan/")?>"+$("select[name='kab_asal']").val(),
              dataType: 'json', // type of response data
              timeout: 500,     // timeout milliseconds
              success: function (data,status,xhr) {   // success callback function
                //  console.log(data+status);
                var prov = "<option>PILIH kabupaten</option>";
                 data.forEach(function(datax, index) {
                    // console.log(datax);
                    prov += "<option value='"+datax.kode+"'>"+datax.nama+"</option>";
                  });
                  console.log(prov);
                $("select[name='kec_asal']").html(prov);
                // $("#prov_asal").html(prov);
              },
              error: function (jqXhr, textStatus, errorMessage) { 
                console.log(textStatus+errorMessage);
              }
            });
    });
    $("select[name='kec_asal']").on('change', function() {
      console.log($(this).val());
      $.ajax({
              url: "<?=base_url("wilayah/desa/")?>"+$("select[name='kec_asal']").val(),
              dataType: 'json', // type of response data
              timeout: 500,     // timeout milliseconds
              success: function (data,status,xhr) {   // success callback function
                //  console.log(data+status);
                var prov = "<option>PILIH Desa</option>";
                 data.forEach(function(datax, index) {
                    // console.log(datax);
                    prov += "<option value='"+datax.kode+"'>"+datax.nama+"</option>";
                  });
                  console.log(prov);
                $("select[name='desa_asal']").html(prov);
                // $("#prov_asal").html(prov);
              },
              error: function (jqXhr, textStatus, errorMessage) { 
                console.log(textStatus+errorMessage);
              }
            });
    });







    $("select[name='prov_tinggal']").on('change', function() {
      console.log($(this).val());
      $.ajax({
              url: "<?=base_url("wilayah/kabupaten/")?>"+$("select[name='prov_tinggal']").val(),
              dataType: 'json', // type of response data
              timeout: 500,     // timeout milliseconds
              success: function (data,status,xhr) {   // success callback function
                //  console.log(data+status);
                var prov = "<option>PILIH kabupaten</option>";
                 data.forEach(function(datax, index) {
                    // console.log(datax);
                    prov += "<option value='"+datax.kode+"'>"+datax.nama+"</option>";
                  });
                  console.log(prov);
                $("select[name='kab_tinggal']").html(prov);
                // $("#prov_tinggal").html(prov);
              },
              error: function (jqXhr, textStatus, errorMessage) { 
                console.log(textStatus+errorMessage);
              }
            });
    });
    
    $("select[name='kab_tinggal']").on('change', function() {
      console.log($(this).val());
      $.ajax({
              url: "<?=base_url("wilayah/kecamatan/")?>"+$("select[name='kab_tinggal']").val(),
              dataType: 'json', // type of response data
              timeout: 500,     // timeout milliseconds
              success: function (data,status,xhr) {   // success callback function
                //  console.log(data+status);
                var prov = "<option>PILIH kabupaten</option>";
                 data.forEach(function(datax, index) {
                    // console.log(datax);
                    prov += "<option value='"+datax.kode+"'>"+datax.nama+"</option>";
                  });
                  console.log(prov);
                $("select[name='kec_tinggal']").html(prov);
                // $("#prov_tinggal").html(prov);
              },
              error: function (jqXhr, textStatus, errorMessage) { 
                console.log(textStatus+errorMessage);
              }
            });
    });
    $("select[name='kec_tinggal']").on('change', function() {
      console.log($(this).val());
      $.ajax({
              url: "<?=base_url("wilayah/desa/")?>"+$("select[name='kec_tinggal']").val(),
              dataType: 'json', // type of response data
              timeout: 500,     // timeout milliseconds
              success: function (data,status,xhr) {   // success callback function
                //  console.log(data+status);
                var prov = "<option>PILIH Desa</option>";
                 data.forEach(function(datax, index) {
                    // console.log(datax);
                    prov += "<option value='"+datax.kode+"'>"+datax.nama+"</option>";
                  });
                  console.log(prov);
                $("select[name='desa_tinggal']").html(prov);
                // $("#prov_tinggal").html(prov);
              },
              error: function (jqXhr, textStatus, errorMessage) { 
                console.log(textStatus+errorMessage);
              }
            });
    });
    </script>

  


  </body>
</html>