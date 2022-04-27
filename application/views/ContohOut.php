<!DOCTYPE html>
<html>
<head>
    <title>FormOutput</title>
</head>
<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Mahasiswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td>
                    <?= $nim; ?>
                </td>
            </tr>
            <tr>
                <td>Nama Mahasiswa</td>
                <td>:</td>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>:</td>
                <td>
                    <?= $Prodi; ?>
                </td>
            </tr>
            <tr>
                <td>Biaya Kuliah</td>
                <td>:</td>
                <td>
                   Rp. <?= $biaya_kuliah; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('mahasiswa'); ?>">Kembali ke Form Input</a>
                </td>
            </tr>
        </table>
    </center>
</body>
</html>