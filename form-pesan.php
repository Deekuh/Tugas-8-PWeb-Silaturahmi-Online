<!DOCTYPE html>
<html>
<head>
    <title>Formulir Silaturahmi Online</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="box">

    <header>
        <h2>Kirim Pesan Untuk Cak Eri</h2>
    </header>

    <form action="proses-pesan.php" method="POST">
        <fieldset>
            <table>
            <tr>
                <td><label for="nama">Nama: </label></td>
                <td><input type="text" name="nama"/></td>
            </tr>
            <tr>
                <td><label for="no_telp">No. Telp: </label></td>
                <td><input type="text" name="no_telp"/></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat: </label></td>
                <td><select name="alamat">
                    <optgroup label="Surabaya Pusat">
                        <option>Bubutan</option>
                        <option>Genteng</option>
                        <option>Simokerto</option>
                        <option>Tegalsari</option>
                    </optgroup>
                    <optgroup label="Surabaya Timur">
                        <option>Gubeng</option>
                        <option>Gunung Anyar</option>
                        <option>Mulyorejo</option>
                        <option>Rungkut</option>
                        <option>Sukolilo</option>
                        <option>Tambaksari</option>
                        <option>Tenggilis Mejoyo</option>
                    </optgroup>
                    <optgroup label="Surabaya Barat">
                        <option>Asemrowo</option>
                        <option>Benowo</option>
                        <option>Lakarsantri</option>
                        <option>Pakal</option>
                        <option>Sambikerep</option>
                        <option>Sukomanunggal</option>
                        <option>Tandes</option>
                    </optgroup>
                    <optgroup label="Surabaya Utara">
                        <option>Bulak</option>
                        <option>Kenjeran</option>
                        <option>Krembangan</option>
                        <option>Pabean Cantian</option>
                        <option>Semampir</option>
                    </optgroup>
                    <optgroup label="Surabaya Selatan">
                        <option>Dukuh Pakis</option>
                        <option>Gayungan</option>
                        <option>Jambangan</option>
                        <option>Karang Pilang</option>
                        <option>Sawahan</option>
                        <option>Wiyung</option>
                        <option>Wonocolo</option>
                        <option>Wonokromo</option>
                    </optgroup>
                </select></td>
            </tr>
            <tr>
                <td><label for="pesan">Pesan: </label></td>
                <td><textarea name="pesan"></textarea></td>
            </tr>
            </table>
        
            <div class="daftar">
                <input type="submit" value="Kirim" name="kirim" />
            </div>
            
        </fieldset>
    </form>
</div>

    </body>
</html>