<?php 
$this->extend('layout/navbar');
$this->section('content');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $title ?> NiceAdmin Bootstrap Template</title>
  
</head>
<style>
  .image-size{
    width: 100px;
    height: 100px;
  }
</style>
  
<body>

  
  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <a href="add.php?">Tambah Data</a>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Siswa</h5>
              <p>Data Siswa di Sekolah</a></p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NISN</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $row=0;
                  foreach ($siswa as $s): ?>
                  <tr>
                    <th scope="row"> <?php echo ++$row; ?> </th>
                    <td> <?php echo $s['nisn']; ?> </td>
                    <td> <?php echo $s['nama_siswa']; ?></td>
                    <td> <?php echo $s['jenis_kelamin']; ?> </td>
                    <td> <?php echo $s['alamat']; ?></td>
                    <td> <img src="/img/<?= $s['foto']; ?>" class="image-size"> </td>
                    <td>
                      <button type="button" name=edit class="btn btn-outline-primary"> <a href="/siswa/<?php echo $s['id_siswa']; ?>">Edit</a> </button>
                      <button type="button" name="hapus" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin?')" ><a href="proses.php;?>">Hapus</a></button>
                    </td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


</body>

</html>
<?php $this->endSection(); ?>