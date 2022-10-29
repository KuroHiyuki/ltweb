<?php
    function sortCourseArray ( &$arr)
        {
            $key=array();   
            foreach($arr as $k => $val){
                $key[] = $k;
            }
          
            for($i=0 ; $i<count($key)-1 ; $i++){
                for($j=$i+1; $j<count($key);$j++) {

                    if($arr[$key[$i]]['credits'] < $arr[$key[$j]]['credits'])
                            {
                                $tmp =$arr[$key[$j]]['courseid'];
                                $arr[$key[$j]]['courseid'] = $arr[$key[$i]]['courseid'];
                                $arr[$key[$i]]['courseid'] = $tmp;
                              
                                $tmp = $arr[$key[$j]]['name'];
                                $arr[$key[$j]]['name'] = $arr[$key[$i]]['name'];
                                $arr[$key[$i]]['name']= $tmp;
      
                                $tmp = $arr[$key[$j]]['credits'];
                                $arr[$key[$j]]['credits'] = $arr[$key[$i]]['credits'];
                                $arr[$key[$i]]['credits'] = $tmp;
      
                                $tmp = $arr[$key[$j]]['duration'];
                                $arr[$key[$j]]['duration'] = $arr[$key[$i]]['duration'];
                                $arr[$key[$i]]['duration'] = $tmp;
                                
                                $tmp = $arr[$key[$j]]['instructors'];
                                $arr[$key[$j]]['instructors'] = $arr[$key[$i]]['instructors'];
                              $arr[$key[$i]]['instructors'] = $tmp;
                            }

                            
                     if($arr[$key[$i]]['credits'] == $arr[$key[$j]]['credits'])
                            {

                             if($arr[$key[$i]]['courseid'] > $arr[$key[$j]]['courseid'])
                                {
                                    $tmp =$arr[$key[$j]]['courseid'];
                                    $arr[$key[$j]]['courseid'] = $arr[$key[$i]]['courseid'];
                                    $arr[$key[$i]]['courseid'] = $tmp;
                                    
                                    $tmp = $arr[$key[$j]]['name'];
                                    $arr[$key[$j]]['name'] = $arr[$key[$i]]['name'];
                                    $arr[$key[$i]]['name']= $tmp;
        
                                    $tmp = $arr[$key[$j]]['credits'];
                                    $arr[$key[$j]]['credits'] = $arr[$key[$i]]['credits'];
                                    $arr[$key[$i]]['credits'] = $tmp;
        
                                    $tmp = $arr[$key[$j]]['duration'];
                                    $arr[$key[$j]]['duration'] = $arr[$key[$i]]['duration'];
                                    $arr[$key[$i]]['duration'] = $tmp;
                                    
                                    $tmp = $arr[$key[$j]]['instructors'];
                                    $arr[$key[$j]]['instructors'] = $arr[$key[$i]]['instructors'];
                                    $arr[$key[$i]]['instructors'] = $tmp;
                                }
                                 
                             }
                            }
                        }
                return $arr;
        }
?>