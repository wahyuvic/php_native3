<?php
include "koneksi.php";
$query  ="SELECT * FROM view";
$result = mysqli_query($conn,$query);
while ($r = mysqli_fetch_assoc($result)) {
$rows[] = $r;
}
echo json_encode($rows);

?>
