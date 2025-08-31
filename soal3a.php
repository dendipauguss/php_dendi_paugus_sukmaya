<?php
$conn = new mysqli("localhost", "dendipauguss", "dendipauguss11", "testdb");

$search = isset($_GET['search']) ? $_GET['search'] : '';

$sql = "SELECT p.id, p.nama, p.alamat, GROUP_CONCAT(h.hobi SEPARATOR ', ') as hobinya
        FROM person p
        LEFT JOIN hobi h ON p.id = h.person_id
        WHERE p.nama LIKE '%$search%' 
           OR p.alamat LIKE '%$search%' 
           OR h.hobi LIKE '%$search%'
        GROUP BY p.id";

$result = $conn->query($sql);

echo "<form method='get'>
        <input type='text' name='search' value='$search' placeholder='Cari nama/alamat/hobi'>
        <button type='submit'>SEARCH</button>
      </form>";

echo "<table border=1 cellpadding=5 cellspacing=0>
        <tr><th>Nama</th><th>Alamat</th><th>Hobi</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['nama']}</td>
            <td>{$row['alamat']}</td>
            <td>{$row['hobinya']}</td>
          </tr>";
}
echo "</table>";
