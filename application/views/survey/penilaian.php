<!DOCTYPE html>
<html>
<head>
    <title>Penilaian Pegawai</title>
</head>
<body>
    <h1>Penilaian Pegawai: <?= $pegawai['nama'] ?></h1>
    
    <form action="<?= base_url('survey/simpan_penilaian') ?>" method="POST">
        <!-- Data Pegawai yang dinilai -->
        <input type="hidden" name="pegawai_id" value="<?= $pegawai['id'] ?>">
        
        <label>1. Disiplin dan tepat waktu dalam mengikuti kegiatan rutin</label><br>
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <label>
                <input type="radio" name="nilai_1" value="<?= $i; ?>" required> <?= $i; ?>
            </label>
        <?php endfor; ?><br>

        <label>2. Selalu berusaha untuk melaksanakan tugas dengan kualitas terbaik</label><br>
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <label>
                <input type="radio" name="nilai_2" value="<?= $i; ?>" required> <?= $i; ?>
            </label>
        <?php endfor; ?><br>

        <label>3. Menggunakan kekayaan dan barang milik negara secara bertanggung jawab</label><br>
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <label>
                <input type="radio" name="nilai_3" value="<?= $i; ?>" required> <?= $i; ?>
            </label>
        <?php endfor; ?><br>

        <label>4. Melaksanakan tugas dengan jujur dan berintegritas tinggi</label><br>
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <label>
                <input type="radio" name="nilai_4" value="<?= $i; ?>" required> <?= $i; ?>
            </label>
        <?php endfor; ?><br>

        <label>5. Selalu berinisiatif untuk meningkatkan kompetensi diri</label><br>
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <label>
                <input type="radio" name="nilai_5" value="<?= $i; ?>" required> <?= $i; ?>
            </label>
        <?php endfor; ?><br>

        <label>6. Suka memberikan motivasi dan dukungan serta menolong rekan kerja</label><br>
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <label>
                <input type="radio" name="nilai_6" value="<?= $i; ?>" required> <?= $i; ?>
            </label>
        <?php endfor; ?><br>

        <label>7. Tidak segan-segan memberikan kritik yang membangun</label><br>
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <label>
                <input type="radio" name="nilai_7" value="<?= $i; ?>" required> <?= $i; ?>
            </label>
        <?php endfor; ?><br>

        <button type="submit">Simpan Penilaian</button>
    </form>
</body>
</html>
