<html>
<head>
    <title>Tambah Stok</title>
    <link rel="stylesheet" type="text/css" href="assets/styleform.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap">
</head>

<body>
    <div class="tabel">
    <form action="add.php" method="post" name="form1" class="formadd">
        <table width="40%">
            <tr> 
                <td>Kode</td>
                <td><input type="text" name="kode"></td>
            </tr>
            <tr> 
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang"></td>
            </tr>
            <tr> 
                <td>Stok</td>
                <td><input type="text" name="stok"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
</div>
    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $kode = $_POST['kode'];
        $nama_barang = $_POST['nama_barang'];
        $stok = $_POST['stok'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO stok(kode,nama_barang,stok) VALUES('$kode','$nama_barang','$stok')");

        header("location: index.php");
    }
    ?>
</body>
</html>