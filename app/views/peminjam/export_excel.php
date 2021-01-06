<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <style type="text/css">
            body{
                font-family: sans-serif;
                text-align: center;
            }
        </style>

        <?php
            $namaFile = "Data Peminjam";
            header('Content-type: application/vnd-ms-excel');
            header('Content-Disposition: attechment; filename=' . $namaFile . '.xls');
        
        ?>

        <table border="1" align="center" width="100%">
            <thead style="background-color: blue;color:white;">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Buku</th>
                    <th>Tgl Pinjam</th>
                    <th>Tgl Mengembalikan</th>
                </tr>
            </thead>
            <tbody>
            <?php $i=1; foreach($data as $dt): ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $dt['nama'] ?></td>
                    <td><?= $dt['kelas'] ?></td>
                    <td><?= $dt['nama_buku'] ?></td>
                    <td><?= date('d F Y', strtotime($dt['tgl_pinjam'])) ?></td>
                    <td><?= date('d F Y', strtotime($dt['tgl_mengembalikan'])) ?></td>
                </tr>
            <?php $i++; endforeach; ?>
            </tbody>
        </table>
    
    </body>
</html>