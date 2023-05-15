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
    $error_tanggalpengisian ="";
    $error_jenispendaftaran = "";
    $error_tglmasuk = "";
    $error_nis = "";
    $error_no_ujian = "";
    $error_paud = "";
    $error_tk = "";
    $error_no_skhun = "";
    $error_no_ijazah = "";
    $error_hobi = "";
    $error_citacita = "";
    


    $tanggalpengisian ="";
    $jenispendaftaran = "";
    $tglmasuk = "";
    $nis = "";
    $no_ujian = "";
    $paud = "";
    $tk = "";
    $no_skhun = "";
    $no_ijazah = "";
    $hobi = "";
    $citacita = "";
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["nis"])) {
            $error_nis = "NIS Tidak Boleh Kosong";
        } else {
            $nis = cek_input($_POST["nis"]);
            if (!is_numeric($nis)) {
                $error_nis = "NIS Hanya Boleh Angka";
            }
        }

        if (empty($_POST["no_ujian"])) {
            $error_no_ujian = "No Peserta Ujian Tidak Boleh Kosong";
        } else {
            $no_ujian = cek_input($_POST["no_ujian"]);
            if (!is_numeric($no_ujian)) {
                $error_no_ujian = "Nomor Peserta Ujian Hanya Boleh Angka";
            }
        }

        if (empty($_POST["no_skhun"])) {
            $error_no_skhun = "Nomor Seri SKHUN Tidak Boleh Kosong";
        } else {
            $noskhun = cek_input($_POST["no_skhun"]);
            if (!is_numeric($no_skhun)) {
                $error_no_skhun = "Nomor Seri SKHUN Hanya Boleh Angka";
            }
        }

        if (empty($_POST["noijazah"])) {
            $error_no_ijazah = "No Seri Ijazah Tidak Boleh Kosong";
        } else {
            $no_ijazah = cek_input($_POST["no_ijazah"]);
            if (!is_numeric($no_ijazah)) {
                $error_no_ijazah = "Nomor Seri Ijazah Hanya Boleh Angka";
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

                <div class="card-header ">
                <b>FORMULIR PESERTA DIDIK</b> 
                </div>
                <p>Tanggal: <?php echo $tanggalpengisian = date("Y-m-d"); ?></p>
                <div class="card-footer ">
                    1. REGISTRASI PESERTA DIDIK
                </div>
                <div class="card-body">
                    <form method="post" action="prosesregist.php">

                    
                    <br>
                    <div class="form-group row">
                        <label for="jenispendaftaran" class="col-sm-2 col-form-label">Jenis Pendaftaran</label>
                        <div class="col-sm-10">
                            <input type="radio" name="jenispendaftaran" value="01">Siswa Baru</label>
                            <input type="radio" name="jenispendaftaran" value="02">Pindahan</label> 
                            <span class="warning" ><?php echo $error_jenispendaftaran; ?></span>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="web" class="col-sm-2 col-form-label">Tanggal Masuk Sekolah</label>
                        <div class="col-sm-10">
                            <input type="text" name="tglmasuk" id="tglmasuk" class="form-control <?php echo ($error_tglmasuk !="" ? "is-invalid" : ""); ?>" placeholder="YYYY-MM-DD" value="<?php echo $tglmasuk; ?>"> <span class="warning"><?php echo $error_tglmasuk ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                        <div class="col-sm-10">
                            <input type="text" name="nis" id="nis" class="form-control <?php echo ($error_nis !="" ? "is-invalid" : ""); ?>" placeholder="Nomor Induk Siswa" value="<?php echo $nis; ?>"> <span class="warning"><?php echo $error_nis ?></span>
                        </div>
                    </div> <br>

                    <div class="form-group row">
                        <label for="no_ujian" class="col-sm-2 col-form-label">Nomor Peserta Ujian</label>
                        <div class="col-sm-10">
                            <input type="text" name="no_ujian" id="no_ujian" class="form-control <?php echo ($error_no_ujian !="" ? "is-invalid" : ""); ?>" placeholder="No Peserta Ujian adalah 20 Digit yang tertera dalam sertifikat SKHUN SD, diisi bagi peserta didik jenjang SMP" value="<?php echo $no_ujian; ?>"> <span class="warning"><?php echo $error_no_ujian ?></span>
                        </div>
                    </div>
                    
                    <br>
                    <div class="form-group row">
                        <label for="paud" class="col-sm-2 col-form-label">Apakah Pernah Paud</label>
                        <div class="col-sm-10">
                            <input type="radio" name="paud" value="y">Ya</label>
                            <input type="radio" name="paud" value="t">Tidak</label> 
                            <span class="warning" ><?php echo $error_paud; ?></span>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="tk" class="col-sm-2 col-form-label">Apakah Pernah TK</label>
                        <div class="col-sm-10">
                            <input type="radio" name="tk" value="y">Ya</label>
                            <input type="radio" name="tk" value="t">Tidak</label> 
                            <span class="warning" ><?php echo $error_tk; ?></span>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="no_skhun" class="col-sm-2 col-form-label">No. Seri SKHUN Sebelumnya</label>
                        <div class="col-sm-10">
                            <input type="text" name="no_skhun" id="no_skhun" class="form-control <?php echo ($error_no_skhun !="" ? "is-invalid" : ""); ?>" placeholder="Diisi 16 Digit yang tertera di SKHUN SD - diisi bagi peserta didik jenjang SMP" value="<?php echo $no_skhun; ?>"> <span class="warning"><?php echo $error_no_skhun ?></span>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="noijazah" class="col-sm-2 col-form-label">No. Seri Ijazah Sebelumnya</label>
                        <div class="col-sm-10">
                            <input type="text" name="no_ijazah" id="no_ijazah" class="form-control <?php echo ($error_no_ijazah !="" ? "is-invalid" : ""); ?>" placeholder="Diisi 16 Digit yang tertera di Ijazah SD - diisi bagi peserta didik jenjang SMP" value="<?php echo $no_ijazah; ?>"> <span class="warning"><?php echo $error_no_ijazah ?></span>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row">
                        <label for="hobi" class="col-sm-2 col-form-label "> Hobi </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="hobi">
                            <option value=""></option>
                            <option value="Olahraga"> Olahraga </option>
                            <option value="Kesenian"> Kesenian</option>
                            <option value="Membaca"> Membaca</option>
                            <option value="Menulis"> Menulis </option>
                            <option value="Traveling"> Traveling </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_hobi; ?></span>
                        </div>
                    </div>

                    <br>
                    <div class="form-group row">
                        <label for="citacita" class="col-sm-2 col-form-label "> Cita Cita </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="citacita">
                            <option value=""></option>
                            <option value="PNS"> PNS </option>
                            <option value="TNI/POLRI"> TNI/POLRI</option>
                            <option value="Guru/Dosen"> Guru/Dosen</option>
                            <option value="Dokter"> Dokter </option>
                            <option value="Politikus"> Politikus </option>
                            <option value="Wiraswasta"> Wiraswasta </option>
                            <option value="Seni/Lukis/Artis/Sejenis"> Seni/Lukis/Artis/Sejenis </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_citacita; ?></span>
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