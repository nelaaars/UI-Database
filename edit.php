<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $kode=$_POST['kode'];
    $nama_barang=$_POST['nama_barang'];
    $stok=$_POST['stok'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE stok SET kode='$kode', nama_barang='$nama_barang', stok='$stok' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM stok WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $kode = $user_data['kode'];
    $nama_barang = $user_data['nama_barang'];
    $stok = $user_data['stok'];
}
?>
<html>
<head>  
    <title>Edit Data Produk</title>
    <link rel="stylesheet" type="text/css" href="assets/styleform.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap">
</head>

<body>
    <div class="tabel">
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Kode Barang</td>
                <td><input type="text" name="kode" value=<?php echo $kode;?>></td>
            </tr>
            <tr> 
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang" value=<?php echo $nama_barang;?>></td>
            </tr>
            <tr> 
                <td>Stok</td>
                <td><input type="text" name="stok" value=<?php echo $stok;?>></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>