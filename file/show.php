<?php
if (!session_status() == 1) {
    session_start();
}
include('function.php');
 ?>
<?php
    $sql = "SELECT * FROM `Data` WHERE 1";
    $result = confetch($sql);
    $count = count($result);
    $_SESSION['arr'] = $result;
    echo "<script type='text/javascript'>
        window.onload = function() {pushDetail(".json_encode($result).", ".json_encode($_SESSION['page']).");}
        </script>";

?>


