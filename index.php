<?php 
    require_once 'dbkoneksi.php';

    $sql = "SELECT * FROM pelanggan ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="form.php">Tambah Pelanggan</a>
    <hr>
    <table border="1">
        <thead>
            <tr>
                <th>NO</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat, Tanggal Lahir</th>
                <th>Email</th>
                <th>ID Kartu</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php 
                $number = 1;
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)):
            ?>

            <tr>
                <td>   <?= $number ?>                                       </td>
                <td> <?= $row['kode']  ?>                                   </td>
                <td> <?= $row['nama'] ?>                                    </td>
                <td> <?= $row['jk'] ?>                                      </td>
                <td> <?= $row['tmp_lahir'] ?> , <?= $row['tgl_lahir'] ?>    </td>
                <td> <?= $row['email'] ?>                                   </td>
                <td> <?= $row['kartu_id'] ?>                                </td>
                <td>
                    <a href="view.php?id=<?= $row['id']     ?>">VIEW</a>
                    <a href="edit.php?id=<?= $row['id']     ?>">EDIT</a>
                    <a href="delete.php?id=<?= $row['id']    ?>">DELETE</a>
                </td>
            </tr>

            <?php 
                $number++;
                endwhile;
            ?>

        </tbody>
    </table>
</body>
</html>