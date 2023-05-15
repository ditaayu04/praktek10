<?php 
include 'koneksi.php';

    if (isset($_POST['submit'])) {
        $tanggalpengisian= $_POST['tanggalpengisian'];
        $jenispendaftaran = $_POST['jenispendaftaran'];
        $tglmasuk = $_POST['tglmasuk'];
        $nis = $_POST['nis'];
        $no_ujian= $_POST['no_ujian'];
        $paud = $_POST['paud'];
        $tk = $_POST['tk'];
        $no_skhun = $_POST['no_skhun'];
        $no_ijazah = $_POST['no_ijazah'];
        $hobi = $_POST['hobi'];
        $citacita = $_POST['citacita'];

      // Menyimpan ke database
      $sql = mysqli_query($conn, "INSERT INTO registrasi (tanggalpengisian, jenispendaftaran, tglmasuk, nis, no_ujian, paud, tk, no_skhun, no_ijazah, hobi, citacita) VALUES ('$tanggalpengisian', '$jenispendaftaran', '$tglmasuk', '$nis', '$no_ujian', '$paud', '$tk', '$no_skhun', '$no_ijazah', '$hobi', '$citacita')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Selanjutnya Mengisi Form Data Diri!'); window.location.href='datadiri.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Registrasi Gagal Ditambahkan!!');";
        }
      }
?>