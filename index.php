<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM stok ORDER BY id DESC");
?>

<html>
<head>    
    <title>Produk Data</title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <link rel="stylesheet" type="text/css" href="assets/styletabel.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap">
</head>

<body>
    <nav>
<ul>
     <li><a href="home.html">Beranda</a></li>
    <li><a href="index.php">Data Produk</a></li>
    <li><a href="about.html">Tentang</a></li>
    <li><a href="login.html">Akun</a></li>
</ul>
</nav>
    <div class="tabel">
    <table width='80%' border=1>

    <tr>
        <th>Kode Barang</th> <th>Nama Barang</th> <th>Jumlah Stok</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['kode']."</td>";
        echo "<td>".$user_data['nama_barang']."</td>";
        echo "<td>".$user_data['stok']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</div>
<a href="add.php" class="buttonadd">Tambah Data</a>
</body>
</html>