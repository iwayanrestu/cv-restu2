<?php
include 'database.php';

$sql = "SELECT * FROM barang";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css" />
    <title>Catalog Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f4f4f9;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: white;
        }

        table th,
        table td {
            border: 1px solid #ddd;
            text-align: left;
            padding: 10px;
        }

        table th {
            background-color: #f2f2f2;
        }

        h1 {
            margin-top: 100px;
            text-align: center;
        }
    </style>
</head>

<body>
    <header class="header">
        <a href="index.html" class="logo">iwrmt</a>
        <input type="checkbox" id="check" />
        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="projects.html">Projects</a>
            <a href="education.html">Education</a>
            <a href="catalog.php" class="active">Catalog</a>
            <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
        </nav>
        <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>

        <a href="contact.html" class="contact">Contact Me</a>
    </header>
    <h1>Daftar Barang</h1>
    <table>
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Deskripsi</th>
                <th>Harga Barang</th>
                <th>Stock Barang</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Periksa apakah ada hasil dari query
            if ($result->num_rows > 0) {
                // Looping untuk menampilkan data
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['kode_barang']}</td>
                        <td>{$row['nama_barang']}</td>
                        <td>{$row['deskripsi']}</td>
                        <td>Rp " . number_format($row['harga_barang'], 2, ',', '.') . "</td>
                        <td>{$row['stock_barang']}</td>
                    </tr>";
                }
            } else {
                // Jika tidak ada data
                echo "<tr><td colspan='5'>Tidak ada data barang.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>

<?php
// Tutup koneksi database
$conn->close();
?>