<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Data Hasil<h2>
    <table border="1">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $_GET['nama'] ?></td>
        </tr>
        <tr>
            <td>Nomor Induk Mahasiswa</td>
            <td>:</td>
            <td><?php echo $_GET['nim'] ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?php echo $_GET['email'] ?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><?php echo $_GET['password'] ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><?php echo $_GET['tanggal_lahir'] ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $_GET['jk'] ?></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td><?php echo $_GET['check1'] ?>
            <?php echo $_GET['check2'] ?>
            <?php echo $_GET['check3'] ?>
            <?php echo $_GET['check4'] ?></td>
        </tr>
        <tr>
            <td>Kota Asal</td>
            <td>:</td>
            <td><?php echo $_GET['city'] ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $_GET['alamat'] ?></td>
        </tr>
    </table>
</body>
</html>