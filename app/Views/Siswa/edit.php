<?php 
$this->extend('layout/navbar');
$this->section('content');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms / Layouts - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
</head>


<body>

  <main id="main" class="main">

    <div class="pagetitle">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Edit Data</h5>
              <form method="POST" action="<?= site_url('siswa/update/' . $siswa['id_siswa']); ?>" class="row g-3" enctype="multipart/form-data">
                <input type="hidden" value="<?php echo $siswa['id_siswa'];?>" name="id_siswa" class="form-control" id="inputAddress">
                <div class="col-12">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Foto</label>
                  <img src="/img/<?= $siswa['foto']; ?>" class="image-size">
                  <div class="col-sm-10">
                    <input class="form-control" type="file" name=foto id="formFile">
                  </div>
                </div>
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Nama</label>
                  <input type="text" value="<?php echo $siswa['nama_siswa'];?>" name="nama_siswa" class="form-control" id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">NISN</label>
                  <input type="number" value="<?php echo $siswa['nisn'];?>" name="nisn" class="form-control" id="inputEmail4">
                </div>
                <div class="col-12">
                  <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                  <div class="col-sm-12">
                     <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                      <?php if ($siswa['jenis_kelamin'] == "Laki-laki"): ?>
                          <option value="Laki-laki" selected>Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                      <?php elseif ($siswa['jenis_kelamin'] == "Perempuan"): ?>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan" selected>Perempuan</option>
                      <?php else: ?>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan">Perempuan</option>
                      <?php endif; ?>
                  </select>
                  </div>
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Alamat</label>
                  <input type="text" value="<?php echo $siswa['alamat'];?>" name="alamat" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="text-center">
                  <button type="submit" value="submit" name="aksi" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary"><a href="/siswa">Kembali</a></button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>
       
      </div>
    </section>

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->

</body>

</html>

<?php $this->endSection(); ?>