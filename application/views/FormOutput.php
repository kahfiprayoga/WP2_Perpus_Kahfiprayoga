<!doctype html>
<html>
    <head>
        <title>Form Output Siswa</title>
    </head>

    <body>
        <center>
            <table>
                <tr>
                    <th colspan="3">
                        Tampil Data Siswa
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>Nama Siswa</td>
                    <td>:</td>
                    <td>
                        <?= $nama; ?>
                    </td>
                </tr>
                <tr>
                    <td>NIS</td>
                    <td>:</td>
                    <td>
                        <?= $nis; ?>
                    </td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td>
                        <?= $kelas; ?>
                    </td>
                </tr>
                <tr>
                    <td>Tempat/Tanggal lahir</td>
                    <td>:</td>
                    <td>
                        <?= $ttl; ?>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                        <?= $alamat; ?>
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <?= $jeniskel; ?>
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <?= $agama; ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <a href="<?= base_url('mahasiswa'); ?>">Kembali Ke Form Input</a>
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>