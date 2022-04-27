<!doctype html>
<html>

<head>
    <title>Form Input Siswa</title>
</head>

<body>
    <center>
        <form action="<?= base_url('mahasiswa/proses'); ?>" method="post">
        <table>
            <tr>
                <th colspan="3">
                    Form Input Siswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Nama Siswa</th>
                <td>:</td>
                <td>
                    <input type="text" name="nama" id="nama" placeholder="Input Nama Siswa">
                </td>
            </tr>
            <tr>
                <th>NIS</th>
                <td>:</td>
                <td>
                    <input type="text" name="nis" id="nis" placeholder="Input NIS">
                </td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>:</td>
                <td>
                    <select name="kelas" id="kelas">
                        <option value="">Pilih Kelas</option>
                        <option value="1 SMA">1 SMA</option>
                        <option value="2 SMA">2 SMA</option>
                        <option value="3 SMA">3 SMA</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Tempat/Tanggal Lahir</th>
                <td>:</td>
                <td>
                    <input type="text" name="ttl" id="ttl" placeholder="Input Tempat/Tanggal lahir">
                </td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td>:</td>
                <td>
                    <input type="text" name="alamat" id="alamat" placeholder="Input Alamat">
                </td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>:</td>
                <td>
                <input type="radio" name="jeniskel" id="jeniskel" value="Laki-laki"> Laki-laki<br>
                <input type="radio" name="jeniskel" id="jeniskel" value="Perempuan"> Perempuan<br>
                </td>
            </tr>
            <tr>
                <th>Agama</th>
                <td>:</td>
                <td>
                    <select name="agama" id="agama">
                        <option value="">Pilih Agama</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katolik">Katolik</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Khonghucu">Khonghucu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="Proses">
                    <input type="reset" value="Cancel">
                </td>
            </tr>
        </table>
        </form>
    </center>
</body>
</html>