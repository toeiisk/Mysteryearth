<?php
include('function.php');
 ?>
<?php
    $sql = "SELECT * FROM `Data` WHERE 1";
    $result = confetch($sql);
    $count = count($result)-1;
    // print_r($result);

    echo "<script type='text/javascript'>

        window.onload = function(){ pushDetail(".json_encode($result[$count]['detail']).", 'headDetial')}
    </script>";
?>


