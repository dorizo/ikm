<?php include("header.php")?>

      <!--start to page content-->
      <div class="page-content">

        <div class="card rounded-3 border-0 bg-transparent">
    <div class="card-body p-0">
        <form method="post" enctype="multipart/form-data">
            <div class="row row-cols-1 g-3">
                <?php echo validation_errors(); ?>

                <div class="col">
                    <div class="form-floating">
                    <input type="number" class="form-control rounded-3" id="floatingInputName" name="jumlah" >
                    <label for="floatingInputName">JUMLAH IURAN</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                    <input type="date" class="form-control rounded-3" id="floatingInputName" name="tanggal" >
                    <label for="floatingInputName">TANGGAL IURAN</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating">
                    <input type="file" name="foto" class="form-control rounded-3">
                    <label for="floatingInputNumber">Foto Pembayaran</label>
                    </div>
                </div>
                <div class="col">
                    <div class="d-grid gap-2 col-6 mx-auto">
                    <input type="submit"  value="SIMPAN" class="btn btn-success btn-ecomm">
                    </div>
                </div>
            </div>
        </form>
    </div>
 </div>
<!--end to page content-->
<?php include("menubawah.php")?>