<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftaran</title>
</head>

<body>
	<h1>Data Pendaftaran Peserta Didik</h1>
	<h4>Data Registrasi</h4>

	<?php
		include 'koneksi.php';
		$registrasi = mysqli_query($conn, "SELECT * from registrasi");
	?>

	<?php foreach ($registrasi as $data): ?>
		<ul>
    <li>Tanggal pengisian formulir: <?= $data['tanggalpengisian'] ?></li>
     
			<li>Jenis Pendaftaran : <?= $data['jenispendaftaran'] ?></li>
			<li>Tanggal Masuk Sekolah : <?= $data['tglmasuk'] ?></li>
			<li>NIS : <?= $data['nis'] ?></li>
			<li>Nomor Peserta Ujian : <?= $data['no_ujian'] ?></li>
			<li>Apakah Pernah PAUD? : <?= $data['paud'] ?></li>
			<li>Apakah Pernah TK? : <?= $data['tk'] ?></li>
			<li>No. Seri SKHUN Sebelumnya : <?= $data['no_skhun'] ?></li>
			<li>No. Seri Ijazah Sebelumnya : <?= $data['no_ijazah'] ?></li>
			<li>Hobi : <?= $data['hobi'] ?></li>
			<li>Cita-cita : <?= $data['citacita'] ?></li>
    
		</ul>
	<?php endforeach; ?>

    <h4>Data Pribadi</h4>

    <?php
    include 'koneksi.php';
    $datadiri = mysqli_query($conn, "SELECT * from datadiri");
    ?>

    <?php foreach ($datadiri as $data): ?>
    <ul>
        <li>Nama Lengkap : <?= $data['namalgkp'] ?></li>
        <li>Jenis Kelamin : <?= $data['jeniskelamin'] ?></li>
        <li>NISN : <?= $data['nisn'] ?></li>
        <li>NIK : <?= $data['nik'] ?></li>
        <li>Tempat Lahir : <?= $data['tempatlahir'] ?></li>
        <li>Tanggal Lahir : <?= $data['tgllahir'] ?></li>
        <li>Agama : <?= $data['agama'] ?></li>
        <li>Berkebutuhan Khusus : <?= $data['berkebutuhan'] ?></li>
        <li>Alamat Jalan : <?= $data['jalan'] ?></li>
        <li>RT : <?= $data['rt'] ?></li>
        <li>RW : <?= $data['rw'] ?></li>
        <li>Nama Dusun : <?= $data['namadusun'] ?></li>
        <li>Nama Kelurahan/Desa : <?= $data['namakel'] ?></li>
        <li>Kecamatan : <?= $data['kecamatan'] ?></li>
        <li>Kode Pos : <?= $data['kodepos'] ?></li>
        <li>Tempat Tinggal : <?= $data['tempattgl'] ?></li>
        <li>Moda Transportasi : <?= $data['transport'] ?></li>
        <li>Nomor HP : <?= $data['nohp'] ?></li>
        <li>Nomor Telepon : <?= $data['notelp'] ?></li>
        <li>Email Pribadi : <?= $data['email'] ?></li>
        <li>Penerima KPS/PKH/KIP : <?= $data['kps'] ?></li>
        <li>No. KPS/KKS/PKH/KIP : <?= $data['no_kps'] ?></li>
        <li>Kewarganegaraan : <?= $data['kwn'] ?></li>
        <li>Nama Negara : <?= $data['namanegara'] ?></li>
    </ul>
    <?php endforeach; ?>

    <h4>Data Ayah Kandung</h4>
    <?php
    include 'koneksi.php';
    $dbayah = mysqli_query($conn, "SELECT * from dbayah");
    ?>

    <?php foreach ($dbayah as $data): ?>
    <ul>
        <li>Nama Ayah Kandung : <?= $data['nama'] ?></li>
        <li>Tahun Lahir : <?= $data['tahun_lahir'] ?></li>
        <li>Pendidikan : <?= $data['pendidikan'] ?></li>
        <li>Pekerjaan : <?= $data['pekerjaan'] ?></li>
        <li>Penghasilan Bulanan : <?= $data['penghasilan'] ?></li>
        <li>Berkebutuhan Khusus : <?= $data['berkebutuhan'] ?></li>
        
    </ul>
    <?php endforeach; ?>


    <h4>Data Ibu Kandung</h4>
    <?php
    include 'koneksi.php';
    $dbibu = mysqli_query($conn, "SELECT * from dbibu");
    ?>

    <?php foreach ($dbibu as $data): ?>
    <ul>
        <li>Nama Ibu Kandung : <?= $data['nama_ibu'] ?></li>
        <li>Tahun Lahir : <?= $data['tahun_lahir'] ?></li>
        <li>Pendidikan : <?= $data['pendidikan'] ?></li>
        <li>Pekerjaan : <?= $data['pekerjaan'] ?></li>
        <li>Penghasilan Bulanan : <?= $data['penghasilan'] ?></li>
        <li>Berkebutuhan Khusus : <?= $data['berkebutuhan'] ?></li>
    
    </ul>
    <?php endforeach; ?>

</body>
</html>