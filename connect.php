
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<?php
$con = new mysqli("localhost", "root", "", "iznajmljivanje_auta");
mysqli_set_charset($con,"UTF8");

if ($con->connect_error)
    exit("Nema konekcije");

?>
