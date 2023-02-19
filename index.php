<?php
//manggil koneksi database
require 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan CRUD </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="style-tabel.css">
    <link rel="icon" type="image/x-icon" href="icon.png">
    <link rel="stylesheet" href="style-sidebar.css">

    <style>

  body {

    background-color: #f6f6f2;
  }

  input {

    background-color: #C2EDCE;
  }

    </style>

</head>
<body>
  





<!-- bagian form create -->
 <div class="crud">
   <h2>Hey,Nice To Meet You!</h2>
    <p style="margin-left: 1px;" >Isi tabel di bawah  untuk menambah data</p>
      <div class="create">
        <form action="" method="POST">
           <div class="box">
               <label for="nama"> Nama : </label><input type="text" name="nama" required="required" placeholder="Isi Nama lengkap" >    
           </div>
           <div class="box">
               <label for="nim"> NIM :</label><input type="text" name="nim"  required="required" placeholder="Alamat Yang Benar" >
           </div>
           <div class="box">
               <label for="fakultas"> FAKULTAS : </label><input type="text" name="fakultas" required="required" placeholder="Isi NIK yang benar">
           </div>
            <div class="button">
             <button type="submit" name="kirim" >Simpan!</button>
            </div>
       </form>
      </div>
 </div>





 <!-- Membuat  tabel -->
   
</form>
  <div class="tabel">
    <table class="table" align="center" >
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Nim</th>
        <th scope="col">Fakultas</th>
        <th scope="col">Edit</th>
      </tr>
    </thead>
    
    <tbody>



    <!-- Menampilkan data di database -->
     <?php
     include 'config.php';
     $no = 1;
     $ambildata = mysqli_query($conn, 'SELECT * FROM siswa ORDER BY id DESC');
     while ($tampil = mysqli_fetch_array($ambildata)) {

         $id = $tampil['id'];
         $name = $tampil['nama'];
         $nime = $tampil['nim'];
         $jurusan = $tampil['fakultas'];
         ?>
      <tr>
        <th scope="row"><?php echo $no++; ?></th>
        <td scope="row"><?php echo $name; ?></td>
        <td scope="row"><?php echo $nime; ?></td>
        <td scope="row"><?php echo $jurusan; ?></td>
        <td scope="row">
        <a href="edit.php?edit=edit&id=<?php echo $id; ?>"><button type="button" class="btn btn-warning">Edit</button></a>
        <a href=""><button type="button" class="btn btn-danger">Delete</button></a>
        
        </td>
      </tr>
      <?php
     }
     ?>
    </tbody>
  </table>
</body>
</html>