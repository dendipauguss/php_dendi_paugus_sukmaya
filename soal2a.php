<?php
$step = isset($_POST['step']) ? (int)$_POST['step'] : 1;

if ($step == 1) {
    // Tampilan awal
    echo "<form method='post'>
            Nama: <input type='text' name='nama'><br>
            <input type='hidden' name='step' value='2'>
            <button type='submit'>Submit</button>
          </form>";
} elseif ($step == 2) {
    // Tampilan kedua
    $nama = $_POST['nama'];
    echo "Halo, $nama!<br>";
    echo "<form method='post'>
            Umur: <input type='number' name='umur'><br>
            <input type='hidden' name='nama' value='$nama'>
            <input type='hidden' name='step' value='3'>
            <button type='submit'>Submit</button>
          </form>";
} elseif ($step == 3) {
    // Tampilan ketiga
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    echo "Nama: $nama, Umur: $umur<br>";
    echo "<form method='post'>
            Alamat: <input type='text' name='alamat'><br>
            <input type='hidden' name='nama' value='$nama'>
            <input type='hidden' name='umur' value='$umur'>
            <input type='hidden' name='step' value='4'>
            <button type='submit'>Submit</button>
          </form>";
} elseif ($step == 4) {
    // Tampilan keempat (final)
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];

    echo "<h3>Data Akhir</h3>";
    echo "Nama: $nama <br> Umur: $umur <br> Alamat: $alamat";
}
