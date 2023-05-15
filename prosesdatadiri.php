<?php 
include 'koneksi.php';


    if (isset($_POST['submit'])) {
    $namalgkp = $_POST['namalgkp'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $nisn = $_POST['nisn'];
    $nik = $_POST['nik'];
    $tempatlahir = $_POST['tempatlahir'];
    $tgllahir = $_POST['tgllahir'];
    $agama = $_POST['agama'];
    $berkebutuhan = $_POST['berkebutuhan'];
    $jalan = $_POST['jalan'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $namadusun = $_POST['namadusun'];
    $namakel = $_POST['namakel'];
    $kecamatan = $_POST['kecamatan'];
    $kodepos = $_POST['kodepos'];
    $tempattgl = $_POST['tempattgl'];
    $transport = $_POST['transport'];
    $nohp = $_POST['nohp'];
    $notelp = $_POST['notelp'];
    $email = $_POST['email'];
    $kps = $_POST['kps'];
    $no_kps = $_POST['no_kps'];
    $kwn = $_POST['kwn'];
    $namanegara = $_POST['namanegara'];

      // Menyimpan ke database
      $sql = mysqli_query($conn, "INSERT INTO datadiri(namalgkp, jeniskelamin, nisn, nik, tempatlahir, tgllahir, agama, berkebutuhan, jalan, rt, rw, namadusun, namakel, kecamatan, kodepos, tempattgl, transport, nohp, notelp, email, kps, no_kps, kwn, namanegara) VALUES ('$namalgkp', '$jeniskelamin', '$nisn', '$nik', '$tempatlahir', '$tgllahir', '$agama', '$berkebutuhan', '$jalan', '$rt', '$rw', '$namadusun', '$namakel', '$kecamatan', '$kodepos', '$tempattgl', '$transport', '$nohp', '$notelp', '$email', '$kps', '$no_kps', '$kwn', '$namanegara')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Selanjutnya Mengisi Form Data Ayah!'); window.location.href='dataayah.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Diri Gagal Ditambahkan!!');";
        }
      }
?>