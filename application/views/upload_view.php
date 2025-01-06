<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload CSV File</title>
</head>
<body>
    <h1>Upload CSV File</h1>

    <!-- Flash message untuk status -->
    <?php if ($this->session->flashdata('error')): ?>
        <p style="color: red;"><?php echo $this->session->flashdata('error'); ?></p>
    <?php endif; ?>
    <?php if ($this->session->flashdata('success')): ?>
        <p style="color: green;"><?php echo $this->session->flashdata('success'); ?></p>
    <?php endif; ?>

    <!-- Form untuk upload file -->
    <?php echo form_open_multipart('Upload/upload_file'); ?>
        <label for="triwulan">Triwulan:</label>
        <select name="triwulan" required>
            <option value="">--Pilih--</option>
            <option value="1">Triwulan 1</option>
            <option value="2">Triwulan 2</option>
            <option value="3">Triwulan 3</option>
            <option value="4">Triwulan 4</option>
        </select><br><br>

        <label for="tahun">Tahun:</label>
        <input type="text" name="tahun" maxlength="4" required><br><br>

        <label for="csv_file">File CSV:</label>
        <input type="file" name="csv_file" required><br><br>

        <button type="submit">Upload</button>
    <?php echo form_close(); ?>

    <!-- Tabel Data -->
    <?php if (!empty($records)): ?>
        <h2>Data yang Diupload</h2>

        <!-- Tampilkan keterangan tahun dan triwulan yang di-upload -->
        <p><strong>Tahun:</strong> <?php echo $this->input->post('tahun'); ?></p>
        <p><strong>Triwulan:</strong> <?php echo $this->input->post('triwulan'); ?></p>

        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>HK</th>
                    <th>HD</th>
                    <th>TK</th>
                    <th>TL</th>
                    <th>TB</th>
                    <th>PD</th>
                    <th>DK</th>
                    <th>KN</th>
                    <th>PSW</th>
                    <th>PSW1</th>
                    <th>PSW2</th>
                    <th>PSW3</th>
                    <th>PSW4</th>
                    <th>HT</th>
                    <th>TL1</th>
                    <th>TL2</th>
                    <th>TL3</th>
                    <th>TL4</th>
                    <th>CB</th>
                    <th>CL</th>
                    <th>CM</th>
                    <th>CP</th>
                    <th>CS</th>
                    <th>CT10</th>
                    <th>CT11</th>
                    <th>CT12</th>
                    <th>CST1</th>
                    <th>CST2</th>
                    <th>KJK_HT</th>
                    <th>KJK_PC</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($records as $record): ?>
                    <tr>
                        <td><?php echo $record->NIP; ?></td>
                        <td><?php echo $record->Nama; ?></td>
                        <td><?php echo $record->HK; ?></td>
                        <td><?php echo $record->HD; ?></td>
                        <td><?php echo $record->TK; ?></td>
                        <td><?php echo $record->TL; ?></td>
                        <td><?php echo $record->TB; ?></td>
                        <td><?php echo $record->PD; ?></td>
                        <td><?php echo $record->DK; ?></td>
                        <td><?php echo $record->KN; ?></td>
                        <td><?php echo $record->PSW; ?></td>
                        <td><?php echo $record->PSW1; ?></td>
                        <td><?php echo $record->PSW2; ?></td>
                        <td><?php echo $record->PSW3; ?></td>
                        <td><?php echo $record->PSW4; ?></td>
                        <td><?php echo $record->HT; ?></td>
                        <td><?php echo $record->TL1; ?></td>
                        <td><?php echo $record->TL2; ?></td>
                        <td><?php echo $record->TL3; ?></td>
                        <td><?php echo $record->TL4; ?></td>
                        <td><?php echo $record->CB; ?></td>
                        <td><?php echo $record->CL; ?></td>
                        <td><?php echo $record->CM; ?></td>
                        <td><?php echo $record->CP; ?></td>
                        <td><?php echo $record->CS; ?></td>
                        <td><?php echo $record->CT10; ?></td>
                        <td><?php echo $record->CT11; ?></td>
                        <td><?php echo $record->CT12; ?></td>
                        <td><?php echo $record->CST1; ?></td>
                        <td><?php echo $record->CST2; ?></td>
                        <td><?php echo $record->KJK_HT; ?></td>
                        <td><?php echo $record->KJK_PC; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

</body>
</html>
