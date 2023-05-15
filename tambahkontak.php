<!DOCTYPE html>
<html>
<head>
    <title>Form Input</title>
</head>
<body>
    <form method="post" action="simpan.php">
        <table>
            <tr><td> ID </td><td><input type="text" onkeyup="isi_otomatis()" name="id"></td></tr>
            <tr><td> NAMA </td><td> <input type="text"  name="nama"></td></tr>
            <tr><td> JENIS KELAMIN</td><td>
                    <input type="radio" name="jenis_kelamin" value="L"> Laki-Laki
                    <input type="radio" name="jenis_kelamin" value="P"> Perempuan
            </td></tr>
            <tr><td> Email </td><td> <input type="text"  name="email"></td></tr>
            <tr><td> Alamat </td><td> <input type="text"  name="alamat"></td></tr>
            <tr><td> KOTA </td><td>
                <select name="kota">
                    <option value="Surabaya"> SURABAYA</option>
                    <option value="Sampang"> SAMPANG </option>
                    <option value="Lamongan"> LAMONGAN </option>
                </select>
            </td></tr>
            <tr><td> Pesan </td><td> <input type="text"  name="pesan"></td></tr>
            </td></tr>
           
            <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
</table>
        </body>
</html>