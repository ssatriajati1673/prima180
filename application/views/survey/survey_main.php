<!DOCTYPE html>
<html>
<head>
    <title>Survei Penilaian Pegawai</title>
</head>
<body>
    <h1>Daftar Pegawai untuk Penilaian</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Action</th>
        </tr>
        <?php foreach ($pegawai_list as $key => $pegawai): ?>
        <tr>
            <td><?= $key + 1; ?></td>
            <td><?= $pegawai['nama']; ?></td>
            <td><?= $pegawai['role']; ?></td>
            <td><a href="<?= base_url('survey/penilaian/'.$pegawai['id']); ?>">Mulai Penilaian</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
