<?php
include('function.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MYSTERYEARTH Edit</title>

    <script src="../script/script.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet">
</head>
<?php
$sql = "SELECT * FROM `Data` WHERE 1";
$result = confetch($sql);
    // echo "<script type='text/javascript'>
    // window.onload = function(){ showEdit(".json_encode($result).")}
    // </script>";
if (sizeof($_POST) > 0) {
    $data = $_POST;
    $detail = $data['detail'];
    $page = $data['page'];
    // $sql = "INSERT INTO Data (detail, page) VALUES ('$detail', '$page')";
    $sql = "UPDATE `Data` SET `detail` = '$detail' WHERE `Data`.`page` = '$page';";
    $con = con();
    header('Location: ../');
    print_r($sql);
    mysqli_query($con, $sql);
}
?>
<body>
    <div class="m-5">
        <form method="POST">
            <textarea rows="4" cols="50"
            class="form-control mb-3" name="detail" placeholder="detail" id="showEdit" required=""></textarea>
        <!-- <input type="text" class="form-control" name="page" placeholder="page" required> -->
        <div class="form-group">
            <input type="submit" name="form" value="Send" class="btn float-right login_btn">
        </div>
        <select name="page" id="page" onchange="showEdit2()">
            <?php
            for ($i=0; $i < count($result); $i++) {
                echo "<option value='".$result[$i]['page']."'>".$result[$i]['page']."</option>";
            }
            ?>
        </select>

    </form>
</div>

</body>
</html>
<script type="text/javascript">
    function showEdit2() {
        var page = document.getElementById("page").value;
        var arr = <?php echo json_encode($result) ;?>;
        console.log(arr);
        for (let i = 0; i < arr.length; i += 1) {
            if (page == arr[i]['page']){
                console.log(page);
                document.getElementById("showEdit").value = arr[i]['detail'];
            }
        }
    }
</script>


