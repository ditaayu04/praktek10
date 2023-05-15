<?php
    include 'koneksi.php';
?>
<html lang="en">
<head>
    <title>FORMULIR PESERTA DIDIK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .warning {color: #FF0000;}
    </style>
</head>
<body>

<?php
    $error_namalgkp = "";
    $error_jeniskelamin = "";
    $error_nisn = "";
    $error_nik = "";
    $error_tempatlahir = "";
    $error_tgllahir = "";
    $error_agama = "";
    $error_berkebutuhan = "";
    $error_jalan = "";
    $error_rt = "";
    $error_rw = "";
    $error_namadusun = "";
    $error_namakel = "";
    $error_kecamatan = "";
    $error_kodepos = "";
    $error_tempattgl = "";
    $error_transport = "";
    $error_nohp = "";
    $error_notelp = "";
    $error_email = "";
    $error_kps= "";
    $error_no_kps = "";
    $error_kwn = "";
    $error_namanegara = "";

    $namalgkp = "";
    $jeniskelamin = "";
    $nisn = "";
    $nik = "";
    $tempatlahir = "";
    $tgllahir = "";
    $agama = "";
    $berkebutuhan = "";
    $jalan = "";
    $rt = "";
    $rw = "";
    $namadusun = "";
    $namakel = "";
    $kecamatan = "";
    $kodepos = "";
    $tempattgl = "";
    $transport = "";
    $nohp = "";
    $notelp = "";
    $email = "";
    $kps = "";
    $no_kps = "";
    $kwn = "";
    $namanegara = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["nisn"])) {
            $error_nisn = "NISN Tidak Boleh Kosong";
        } else {
            $nisn = cek_input($_POST["nisn"]);
            if (!is_numeric($nisn)) {
                $error_nisn = "NISN Hanya Boleh Angka";
            }
        }

        if (empty($_POST["nik"])) {
            $error_nik = "NIK Tidak Boleh Kosong";
        } else {
            $nik = cek_input($_POST["nik"]);
            if (!is_numeric($nik)) {
                $error_nik = "NIK Hanya Boleh Angka";
            }
        }

        if (empty($_POST["nohp"])) {
            $error_nohp = "Nomor HP Tidak Boleh Kosong";
        } else {
            $nohp = cek_input($_POST["nohp"]);
            if (!is_numeric($nohp)) {
                $error_nohp = "Nomor HP Hanya Boleh Angka";
            }
        }

        if (empty($_POST["email"])) {
            $error_email = "Email Tidak Boleh Kosong";
        } else {
            $email = cek_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error_email = "Format Email Invalid";
            }
        }

    }

    function cek_input($data) {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <b> FORMULIR PESERTA DIDIK </b> 
                </div>
                <div class="card-footer">
                    2. FORM DATA PRIBADI
                </div>
                <div class="card-body">
                    <form method="post" action="prosesdatadiri.php">

                    <div class="form-group row">
                        <label for="namalgkp" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" name="namalgkp" id="namalgkp" class="form-control" <?php echo ($error_namalgkp !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $namalgkp; ?>"> <span class="warning"><?php echo $error_namalgkp ?></span>
                        </div>
                    </div>
                    
                    <br>
                    <div class="form-group row">
                        <label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <input type="radio" name="jkelamin" value="Laki-Laki">Laki-Laki</label>
                            <input type="radio" name="jkelamin" value="Perempuan">Perempuan</label> 
                            <span class="warning" ><?php echo $error_jeniskelamin; ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                        <div class="col-sm-10">
                            <input type="text" name="nisn" id="nisn" class="form-control" <?php echo ($error_nisn !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $nisn; ?>"> <span class="warning"><?php echo $error_nisn ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" name="nik" id="nopesunikjian" class="form-control" <?php echo ($error_nik !="" ? "is-invalid" : ""); ?>" placeholder="3524xxxxxxxx" value="<?php echo $nik; ?>"> <span class="warning"><?php echo $error_nik ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="tempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" name="tempatlahir" id="tempatlahir" class="form-control" <?php echo ($error_tempatlahir !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $tempatlahir; ?>"> <span class="warning"><?php echo $error_tempatlahir ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="tgllahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" name="tgllahir" id="tgllahir" class="form-control" <?php echo ($error_tgllahir !="" ? "is-invalid" : ""); ?>" placeholder="YYYY-MM-DD" value="<?php echo $tgllahir; ?>"> <span class="warning"><?php echo $error_tgllahir ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="agama" class="col-sm-2 col-form-label "> Agama </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="agama">
                            <option value=""></option>
                            <option value="Islam"> Islam </option>
                            <option value="Kristen/Protestan"> Kristen/Protestan </option>
                            <option value="Katholik"> Katholik </option>
                            <option value="Hindu"> Hindu </option>
                            <option value="Budha"> Budha </option>
                            <option value="Konghucu"> Konghucu </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_agama; ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="berkebutuhan" class="col-sm-2 col-form-label "> Berkebutuhan Khusus </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="berkebutuhan">
                            <option value=""></option>
                            <option value="Tidak"> Tidak </option>
                            <option value="Netra (A)"> Netra (A) </option>
                            <option value="Rungu (B)"> Rungu (B) </option>
                            <option value="Grahita Ringan (C)"> Grahita Ringan (C) </option>
                            <option value="Grahita Sedang (C1)"> Grahita Sedang (C1) </option>
                            <option value="Daksa Ringan (D)"> Daksa Ringan (D) </option>
                            <option value="Laras (E)"> Laras (E) </option>
                            <option value="Wicara (F)"> Wicara (F) </option>
                            <option value="Tuna Ganda (G)"> Tuna Ganda (G) </option>
                            <option value="Hiper Aktif (H)"> Hiper Aktif (H) </option>
                            <option value="Cerdas Istimewa (I)"> Cerdas Istimewa (I) </option>
                            <option value="Bakat Istimewa (J)"> Bakat Istimewa (J) </option>
                            <option value="Kesulitan Belajar (K)"> Kesulitan Belajar (K) </option>
                            <option value="Narkoba (N)"> Narkoba (N) </option>
                            <option value="Indigo (O)"> Indigo (O) </option>
                            <option value="Down Syndrom (P)"> Down Syndrom (P) </option>
                            <option value="Autis (Q)"> Autis (Q) </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_berkebutuhan; ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="jalan" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" name="jalan" id="jalan" class="form-control" <?php echo ($error_jalan!="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $jalan; ?>"> <span class="warning"><?php echo $error_jalan ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="rt" class="col-sm-2 col-form-label">RT</label>
                        <div class="col-sm-10">
                            <input type="text" name="rt" id="rt" class="form-control" <?php echo ($error_rt !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $rt; ?>"> <span class="warning"><?php echo $error_rt ?></span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="rw" class="col-sm-2 col-form-label">RW</label>
                        <div class="col-sm-10">
                            <input type="text" name="rw" id="rw" class="form-control" <?php echo ($error_rw !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $rw; ?>"> <span class="warning"><?php echo $error_rw ?></span>
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <label for="namadusun" class="col-sm-2 col-form-label">Nama Kelurahan/Desa</label>
                        <div class="col-sm-10">
                            <input type="text" name="namadusun" id="namadusun" class="form-control" <?php echo ($error_namadusun !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $namadusun; ?>"> <span class="warning"><?php echo $error_namadusun ?></span>
                        </div>
                    </div> <br>

                    
                    <div class="form-group row">
                        <label for="namakel" class="col-sm-2 col-form-label">Nama Kelurahan</label>
                        <div class="col-sm-10">
                            <input type="text" name="namakel" id="namakel" class="form-control" <?php echo ($error_namakel !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $namakel; ?>"> <span class="warning"><?php echo $error_namakel ?></span>
                        </div>
                    </div> <br>

                    
                    <div class="form-group row">
                        <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                        <div class="col-sm-10">
                            <input type="text" name="kecamatan" id="kecamatan" class="form-control" <?php echo ($error_kecamatan !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $kecamatan; ?>"> <span class="warning"><?php echo $error_kecamatan ?></span>
                        </div>
                    </div> <br>

                    
                    <div class="form-group row">
                        <label for="kodepos" class="col-sm-2 col-form-label">Kode Pos</label>
                        <div class="col-sm-10">
                            <input type="text" name="kodepos" id="kodepos" class="form-control" <?php echo ($error_kodepos !="" ? "is-invalid" : ""); ?>" placeholder="xxxxxx" value="<?php echo $kodepos; ?>"> <span class="warning"><?php echo $error_kodepos ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="tempattgl" class="col-sm-2 col-form-label "> Tempat Tinggal </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="tempattgl">
                            <option value=""></option>
                            <option value="Bersama Orang Tua"> Bersama Orang Tua </option>
                            <option value="Wali"> Wali </option>
                            <option value="Kos"> Kos </option>
                            <option value="Asrama"> Asrama </option>
                            <option value="Panti Asuhan"> Panti Asuhan </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_tempattgl; ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="transport" class="col-sm-2 col-form-label "> Moda Transportasi </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="transport">
                            <option value=""></option>
                            <option value="Jalan Kaki"> Jalan Kaki </option>
                            <option value="Kendaraan Pribadi"> Kendaraan Pribadi </option>
                            <option value="Kendaraan Umum/Angkot/Pete-Pete"> Kendaraan Umum/Angkot/Pete-Pete </option>
                            <option value="Jemputan Sekolah"> Jemputan Sekolah </option>
                            <option value="Kereta Api"> Kereta Api </option>
                            <option value="Ojek"> Ojek </option>
                            <option value="Andong/Bedi/Sado/Dokar/Delman/Becak"> Andong/Bedi/Sado/Dokar/Delman/Becak </option>
                            <option value="Perahu Penyebrangan/Rakit/Getek"> Perahu Penyebrangan/Rakit/Getek </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_transport; ?></span>
                        </div>
                    </div> <br>
                    
                    <div class="form-group row">
                        <label for="nohp" class="col-sm-2 col-form-label">Nomor HP</label>
                        <div class="col-sm-10">
                            <input type="text" name="nohp" id="nohp" class="form-control" <?php echo ($error_nohp !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $nohp; ?>"> <span class="warning"><?php echo $error_nohp ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="notelp" class="col-sm-2 col-form-label">Nomor Telp</label>
                        <div class="col-sm-10">
                            <input type="text" name="notelp" id="notelp" class="form-control" <?php echo ($error_notelp !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $notelp; ?>"> <span class="warning"><?php echo $error_notelp ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email Pribadi</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" id="email" class="form-control" <?php echo ($error_email !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $email; ?>"> <span class="warning"><?php echo $error_email ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="kps" class="col-sm-2 col-form-label">Penerima KPS/PKH/KIP</label>
                        <div class="col-sm-10">
                            <input type="radio" name="kps" value="y">Ya</label>
                            <input type="radio" name="kps" value="t">Tidak</label> 
                            <span class="warning" ><?php echo $error_kps; ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="no_kps" class="col-sm-2 col-form-label">Nomor KPS/PKH/KIP</label>
                        <div class="col-sm-10">
                            <input type="text" name="no_kps" id="nobantuan" class="form-control" <?php echo ($error_no_kps !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $no_kps; ?>"> <span class="warning"><?php echo $error_no_kps ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="kwn" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                        <div class="col-sm-10">
                            <input type="radio" name="kwn" value="wni">Indonesia (WNI)</label>
                            <input type="radio" name="kwn" value="wna">Asing (WNA)</label> 
                            <span class="warning" ><?php echo $error_kwn; ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="namanegara" class="col-sm-2 col-form-label">Nama Negara</label>
                        <div class="col-sm-10">
                            <input type="text" name="namanegara" id="namanegara" class="form-control" <?php echo ($error_namanegara !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $namanegara; ?>"> <span class="warning"><?php echo $error_namanegara ?></span>
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary">Next</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>