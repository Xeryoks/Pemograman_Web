<html>
<head>
    <title>Input Data Mahasiswa</title>
</head>
<body bgcolor = "green">

    <!-- Form Input Mahasiswa -->
    <form action="Modul_8.php" method="post">
        <b>Pengelolaan Data Mahasiswa</b>
        <br>

        <pre>
            Nama : <input type="text" name="nama" size="25" maxlength="50">
            Alamat : <input type="text" name="alamat" size="25" maxlength="50">
        </pre>

        Jenis Kelamin : <input type="radio" name="jeniskel" value="Laki-Laki"> Laki-Laki
                        <input type="radio" name="jeniskel" value="Perempuan"> Perempuan
        
        <p>
            Pekerjaan :
            <select name="pekerjaan">
                <option value="Pilih">
                <option value="Pelajar">Pelajar
                <option value="Karyawan">Karyawan
                <option value="Wirausaha">Wirausaha
                <option value="Lain-lain">Lain-lain
            </select>
        <p>

        Hobi :  <input type="checkbox" name="hobi1" value="Olahraga">Olahraga
                <input type="checkbox" name="hobi2" value="Musik">Musik
                <input type="checkbox" name="hobi3" value="Jalan-Jalan">Jalan-Jalan
        <p>

        <input type="submit" value="Kirim"> <input type="reset" value="Batal">
    </form>
</body>
</html>



<!-- Tampilan Data Mahasiswa -->
<?php
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jeniskel = $_POST['jeniskel'];
    $pekerjaan = $_POST['pekerjaan'];
    $hobi1 = $_POST['hobi1'];
    $hobi2 = $_POST['hobi2'];
    $hobi3 = $_POST['hobi3'];
?>

<table border=1 bgcolor="Cyan">
    <tr>
        <td colspan=2 align="center"> <b>Data Mahasiswa</b> </td>
    </tr>

    <tr>
        <td>Nama : </td> <td><?php echo $nama; ?></td>
    </tr>

    <tr>
        <td>Alamat : </td> <td><?php echo $alamat; ?></td>
    </tr>

    <tr>
        <td>Jenis Kelamin : </td> <td><?php echo $jeniskel; ?></td>
    </tr>

    <tr>
        <td>Pekerjaan : </td> <td><?php echo $pekerjaan; ?></td>
    </tr>

    <tr>
        <td>Hobi : </td> <td><?php echo $hobi1,",",$hobi2,",",$hobi3; ?></td>
    </tr>
</table>
    <a href="Modul_8.php">INPUT DATA LAGI</a>