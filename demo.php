<!DOCTYPE html>
<html>
    <body>
        <?php
        include "Function_Dic.php"
        $arrCourse = array();
         $arrCourse[101] =  ['name' => 'Thiết kế web 1',
                            'credits' => 3,
                            'duration' => 60,
                            'instructors' => ['John','Lee','Hai']];
          $arrCourse[201] = ['name' => 'Thiết kế web 2',
                            'credits' => 2,
                            'duration' => 60,
                            'instructors' => ['John']];
          $arrCourse[401] = ['name' => 'Lập trình web 1',
                            'credits' => 3,
                            'duration' => 60,
                            'instructors' => ['John','Lee']];
          $arrCourse[301] = ['name' => 'Lập trình web 2',
                            'credits' => 1,
                            'duration' => 60,
                            'instructors' => ['John','Lee','Hai']];
        ?>
        <table border = "1">
            <thead>
                <tr>
                    <th>Mã môn học</th>
                    <th>Tên môn học</th>
                    <th>Số tín chỉ</th>
                    <th>Số tiết</th>
                    <th>Giảng viên phụ trách</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach(sort_arr($arrCourse) as $k => $v){ ?>
               <tr>
                  <td><?php echo $k?></td>
                  <td><?=$v['name']?></td>
                  <td><?=$v['credits'] ?></td>
                  <td><?=$v['duration']?></td>
                  <td><?=print_arr($v['instructors'],',')?></td>
               </tr>                     
            <?php } ?>
            </tbody>
        </table>
    </body>
</html>