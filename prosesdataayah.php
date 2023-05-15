
<?php 
include 'koneksi.php';
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $tahun_lahir = $_POST['tahun_lahir'];
        $pendidikan = $_POST['pendidikan'];
        $pekerjaan = $_POST['pekerjaan'];
        $penghasilan = $_POST['penghasilan'];
        $berkebutuhan = $_POST['berkebutuhan'];

      // Menyimpan ke database
      $sql = mysqli_query($conn, "INSERT INTO dbayah (nama, tahun_lahir, pendidikan, pekerjaan, penghasilan, berkebutuhan) VALUES ('$nama', '$tahun_lahir', '$pendidikan', '$pekerjaan', '$penghasilan', '$berkebutuhan')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Selanjutnya Mengisi Form Data Ibu Kandung!'); window.location.href='dataibu.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Ayah Kandung Gagal Ditambahkan!!');";
        }
      }
?>