<?php
$jml = isset($_GET['jml']) ? (int)$_GET['jml'] : 0;

echo "<table border=1 cellpadding=5 cellspacing=0>\n";

for ($a = $jml; $a > 0; $a--) {
    // Hitung total tiap row
    $total = 0;
    for ($b = $a; $b > 0; $b--) {
        $total += $b;
    }

    // Cetak total di atas row
    echo "<tr><td colspan='$a'><b>Total: $total</b></td></tr>\n";

    // Cetak isi row
    echo "<tr>\n";
    for ($b = $a; $b > 0; $b--) {
        echo "<td>$b</td>";
    }
    echo "</tr>\n";
}

echo "</table>";
