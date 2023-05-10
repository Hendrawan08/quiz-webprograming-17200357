<!-- input_form.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Form Input Data Siswa</title>
</head>
<body>
    <h2>Form Input Data Siswa</h2>
    <form method="post" action="<?php echo site_url('siswa/submit_form'); ?>">
        <label>Nama Siswa:</label>
        <input type="text" name="nama" required><br><br>
        
        <label>NIS:</label>
        <input type="text" name="nis" required><br><br>
        
        <label>Kelas:</label>
        <input type="text" name="kelas" required><br><br>
        
        <label>Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" required><br><br>
        
        <label>Tempat Lahir:</label>
        <input type="text" name="tempat_lahir" required><br><br>
        
        <label>Alamat:</label>
        <textarea name="alamat" required></textarea><br><br>
        
        <label>Jenis Kelamin:</label>
        <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
        <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan<br><br>
        
        <label>Agama:</label>
        <select name="agama" required>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Budha">Budha</option>
            <option value="Hindu">Hindu</option>
            <option value="Protestan">Protestan</option>
            <option value="Khonghucu">Khonghucu</option>
        </select><br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
