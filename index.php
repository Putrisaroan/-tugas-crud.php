<?php include 'crud.php';  ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>kristina putri saroan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
      
      
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-md">
            <a class="navbar-brand" href="#">pemograman PHP</a>
          </div>
        </nav>
      
      <div class="container">
          <!-- Content here -->
          <h2>CRUD DAFTAR DATA SERTIFIKASI</h2>
  
          <!-- Button Tambah Data -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahdata">
          Tambah Data
        </button>

        <!-- Modal Tambah Data -->
        <div class="modal fade" id="tambahdata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form method="post">
              <div class="modal-body">
            
                <input type="text" name="namasertifikasi" class="form-control" placeholder="Nama Sertifikasi"><br>
                <input type="text" name="lembagasertifikasi" class="form-control" placeholder="Lembaga sertifikasi"><br>
                <input type="date" name="tanggalditerbitkan" class="form-control" placeholder="Tanggal Diterbitkan"><br>
                <input type="text" name="masaberlaku" class="form-control" placeholder="Masa Berlaku"><br>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <input type="submit" class="btn btn-primary" name="tambahdata" value="Tambah Data">
              </div>
              </form>
            </div>
          </div>
        </div>
        
        
        <!-- Modal Ubah Data -->
        <?php foreach ($AmbilData as $data):?>
            <div class="modal fade" id="<?=$data['ID']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <form method="post">
                  <div class="modal-body">
                    <input type="number" name="id" value="<?=$data['ID']?>"  class="form-control" placeholder="ID" hidden>
                    <input type="text" name="namasertifikasi" value="<?=$data['NAMASERTIFIKASI']?>" class="form-control" placeholder="Nama Sertifikasi"><br>
                    <input type="text" name="lembagasertifikasi" value="<?=$data['LEMBAGASERTIFIKASI']?>" class="form-control" placeholder="Lembaga sertifikasi"><br>
                    <input type="date" name="tanggalditerbitkan"  value="<?=$data['TANGGALSERTIFIKASI']?>" class="form-control" placeholder="Tanggal Diterbitkan"><br>
                    <input type="text" name="masaberlaku"  value="<?=$data['MASABERLAKU']?>" class="form-control" placeholder="Masa Berlaku"><br>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-primary" name="ubahdata" value="Ubah Data">
                  </div>
                  </form>
                </div>
              </div>
            </div>
        <?php endforeach;?>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nama Sertifikasi</th>
              <th scope="col">Lembaga Sertifikasi</th>
              <th scope="col">Tanggal Diterbitkan</th>
              <th scope="col">Masa Berlaku</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
              
              <?php foreach ($AmbilData as $data):?>
              
            <tr>
              <td><?= $data['NAMASERTIFIKASI']?></td>
              <td><?= $data['LEMBAGASERTIFIKASI']?></td>
              <td><?= $data['TANGGALSERTIFIKASI']?></td>
              <td><?= $data['MASABERLAKU']?></td>
              
              <td>
                  <form method="post">
                    <!-- Button Ubah Data -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#<?=$data['ID']?>">
          Ubah Data
        </button>
        
            <input type="hidden" name="id" value="<?= $data['ID']?>">
            <input type="submit" class="btn btn-primary" name="hapus" value="Hapus Data">
            </form>
              </td>
            </tr>
                
                <?php endforeach;?>
                
          </tbody>
        </table>

        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>
