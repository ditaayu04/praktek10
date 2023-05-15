<h2> List Mahasiswa </h2>
<table border="1">
    <tr><th> ID </th><th> NAMA </th><th> JENIS KELAMIN </th><th> EMAIL </th>
    <th>ALAMAT</th><th>KOTA</th><th>PESAN</th></tr>
    <?php
    include 'koneksi.php';
    $kontak = mysqli_query($koneksi, "SELECT * from kontak");
    $id=1;
    foreach ($kontak as $row){
        $jkel = $row['jkel']=='P'?'Perempuan':'Laki laki';
        echo "<tr>
                <td>$id</td>
                <td>".$row['nama']."</td>
                <td>".$jkel."</td>
                <td>".$row['email']."</td>
                <td>".$row['alamat']."</td>
                <td>".$row['kota']."</td>
                <td>".$row['pesan']."</td>
                </tr>";
                $id++;
    }
    ?>
    </table>