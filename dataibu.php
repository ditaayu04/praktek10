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
    $error_nama_ibu = "";
    $error_tahun_lahir = "";
    $error_pendidikan = "";
    $error_pekerjaan = "";
    $error_penghasilan = "";
    $error_berkebutuhan = "";

    $nama_ibu = "";
    $tahun_lahir = "";
    $pendidikan = "";
    $pekerjaan = "";
    $penghasilan = "";
    $berkebutuhan = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["tahun_lahir"])) {
            $error_tahun_lahir = "Tanggal Lahir Tidak Boleh Kosong";
        } else {
            $tlayah = cek_input($_POST["tahun_lahir"]);
            if (!is_numeric($tahun_lahir)) {
                $error_tahun_lahir = "Tanggal Lahir Hanya Boleh Angka";
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
                    4. FORM DATA IBU KANDUNG
                </div>
                <div class="card-body">
                    <form method="post" action="prosesdataibu.php">

                    <div class="form-group row">
                        <label for="nama_ibu" class="col-sm-2 col-form-label">Nama Ibu Kandung</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_ibu" id="nama_ibu" class="form-control <?php echo ($error_nama_ibu !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $nama_ibu; ?>"> <span class="warning"><?php echo $error_nama_ibu ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label for="tahun_lahir" class="col-sm-2 col-form-label">Tahun Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" name="tahun_lahir" id="tahun_lahir" class="form-control <?php echo ($error_tahun_lahir !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $tahun_lahir; ?>"> <span class="warning"><?php echo $error_tahun_lahir?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label for="pendidikan" class="col-sm-2 col-form-label "> Pendidikan </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="pendidikan">
                            <option value=""></option>
                            <option value="Tidak Sekolah"> Tidak Sekolah </option>
                            <option value="Putus SD"> Putus SD </option>
                            <option value="SD Sederajat"> SD Sederajat </option>
                            <option value="SMP Sederajat"> SMP Sederajat </option>
                            <option value="SMA Sederajat"> SMA Sederajat </option>
                            <option value="D1"> D1 </option>
                            <option value="D2"> D2 </option>
                            <option value="D3"> D3 </option>
                            <option value="D4/S1"> D4/S1 </option>
                            <option value="S2"> S2 </option>
                            <option value="S3"> S3 </option>
                            </select>
                            <span class="warning" ><?php echo $error_pendidikan; ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label for="pekerjaan" class="col-sm-2 col-form-label "> Pekerjaan </label>
                        <div class="col-sm-10">
                            <select class="col-sm-2 form-select" name="pekerjaan">
                            <option value=""></option>
                            <option value="Tidak Bekerja"> Tidak Bekerja </option>
                            <option value="Nelayan"> Nelayan </option>
                            <option value="Petani"> Petani </option>
                            <option value="Peternak"> Peternak </option>
                            <option value="PNS/TNI/POLRI"> PNS/TNI/POLRI </option>
                            <option value="Karyawan Swasta"> Karyawan Swasta </option>
                            <option value="Pedagang Kecil"> Pedagang Kecil </option>
                            <option value="Pedagang Besar"> Pedagang Besar </option>
                            <option value="Wiraswasta"> Wiraswasta </option>
                            <option value="Wirausaha"> Wirausaha </option>
                            <option value="Buruh"> Buruh </option>
                            <option value="Pensiunan"> Pensiunan </option>
                            <option value="Lainnya"> Lainnya </option>
                            </select>
                            <span class="warning" ><?php echo $error_pekerjaan; ?></span>
                        </div>
                    </div><br>

                    <div class="form-group row">
                        <label for="penghasilan" class="col-sm-2 col-form-label">Penghasilan Bulanan</label>
                        <div class="col-sm-10">
                            <input type="radio" name="penghasilan" value="< 500.000"> < 500.000 </label> <br>
                            <input type="radio" name="penghasilan" value="500.000 - 999.9999"> 500.000 - 999.9999 </label><br>
                            <input type="radio" name="penghasilan" value="1.000.000 - 1.999.999"> 1.000.000 - 1.999.999 </label><br>
                            <input type="radio" name="penghasilan" value="2.000.000 - 4.999.999"> 2.000.000 - 4.999.999 </label><br>
                            <input type="radio" name="penghasilan" value="5.0000.000 - 20.000.000"> 5.0000.000 - 20.000.000 </label> <br>
                            <input type="radio" name="penghasilan" value="20.000.000"> > 20.000.000 </label>
                            <span class="warning" ><?php echo $error_penghasilan; ?></span>
                        </div>
                    </div><br>

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

                    <br>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>