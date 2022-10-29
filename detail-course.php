<!doctype html>
<html>
    <head>
        <style>
            <meta charset = "utf-8">
            img {
                width: 200px;
                height: 200px;
                 }
        </style>
    </head>
    <body>
    <?php include ("data.php") ?>
        <h1>Danh sách môn học </h1>
            <table border="1" width=35%>
                    <tr>
                        <td rowspan ="6">
                            <img src="<?php echo $arrCourse[$_GET['id']]['avatar']; ?> " 
                                alt="<?php echo $arrCourse[$_GET['id']]['avatar']; ?>" >
                        </td>
                    </tr>
                    <tr>
                        <td><b>Mã môn học:</b> <?php echo $arrCourse[$_GET['id']]['subjectId']; ?> </td>
                    </tr>
                    <tr>
                        <td><b>Tên môn học:</b> <?php echo $arrCourse[$_GET['id']]['name']; ?> </td>
                    </tr>
                    <tr>
                        <td><b>Số tín chỉ:</b> <?php echo $arrCourse[$_GET['id']]['credits']; ?>  </td>
                    </tr>
                    <tr>
                        <td><b>Số tiết:</b> <?php echo $arrCourse[$_GET['id']]['duration']; ?> </td>
                    </tr>  
                    <tr>
                    
               <br/><td><b>Danh sách giảng viên:</b> <?php echo implode (", ",$arrCourse[$_GET['id']]['instructors']); ?> </td>
                    </tr>   
                    </tbody>
                    </table>            
       
    </body>
</html>