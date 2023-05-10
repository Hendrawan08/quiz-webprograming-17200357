<!-- hasil_form.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Hasil Form Input Data Siswa</title>
</head>
<body>
    <h2>Data Siswa</h2>
    <table>
        <tr>
            <th>Nama</th>
            <th>NIS</th>
            <th>Kelas</th>
            <th>Tanggal Lahir</th>
            <th>Tempat Lahir</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
        </tr>
        <?php foreach ($siswa as $row): ?>
        <tr>
            <td><?php echo $row->nama; ?></td>
            <td><?php echo $row->nis; ?></td>
            <td><?php echo $row->kelas; ?></td>
            <td><?php echo $row->tanggal_lahir; ?></td>
            <td><?php echo $row->tempat_lahir; ?></td>
            <td><?php echo $row->alamat; ?></td>
            <td><?php echo $row->jenis_kelamin; ?></td>
            <td><?php echo $row->agama; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br>
    <a href="<?php echo site_url('siswa'); ?>">Kembali ke Form Input</a>
</body>
</html>
