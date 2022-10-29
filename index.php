<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            background-color: blanchedalmond;
        }
        table {
            background-color: aquamarine;
            margin-left: 400px;
            margin-top: 100px;
        }
        .file{
            background-color: blue;
        }
        .img{
            padding-right: 40px;
        }
    </style>
</head>
<body>
    <?php
        require_once "config.php";
            $sql ='SELECT * from monhoc';
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){
?>
        <table border="1">
        <tr class="file">
                <td rowspan="6">
                    <img src="image/quynh.png" alt="" width="200px" class="img">
                </td>
                <td>Ma Sinh Vien</td>
            </tr>
            <?php
            while($row = mysqli_fetch_assoc($result)){
                echo 
                " 
                <tr>
                <td>"."Ma mon hoc" . $row["mamonhoc"] ."</td>
                </tr>

                <tr>
                <td>"."Ten mon hoc 1: " . $row["tenmonhoc"] ."</td>
                </tr>

                <tr>
                <td>"."So tin chi: " . $row["sotinchi"] ."</td>
                </tr>

                <tr>
                <td>"."So tiet: " . $row["sotiet"] ."</td>
                </tr>

                <tr>
                <td>"."Giao vien giang day: " . $row["gv"] ."</td>
                </tr>
                ";
            }
            ?>
        </table>
        
        <?php
        }
            else 
                {
                    echo "0 results ";
                }
                mysqli_close($conn);
            
?>
</body>
</html>

