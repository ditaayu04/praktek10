
<?php 
include 'koneksi.php';
    if (isset($_POST['submit'])) {
        $nama_ibu = $_POST['nama_ibu'];
        $tahun_lahir = $_POST['tahun_lahir'];
        $pendidikan = $_POST['pendidikan'];
        $pekerjaan = $_POST['pekerjaan'];
        $penghasilan = $_POST['penghasilan'];
        $berkebutuhan = $_POST['berkebutuhan'];

      // Menyimpan ke database
      $sql = mysqli_query($conn, "INSERT INTO dbibu (nama_ibu, tahun_lahir, pendidikan, pekerjaan, penghasilan, berkebutuhan) VALUES ('$nama_ibu', '$tahun_lahir', '$pendidikan', '$pekerjaan', '$penghasilan', '$berkebutuhan')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Seluruh Data Telah Diisi!'); window.location.href='registrasi.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Ibu Kandung Gagal Ditambahkan!!');";
        }
      }
      header("location:hasil.php");
?>