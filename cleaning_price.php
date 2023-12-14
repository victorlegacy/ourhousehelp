<?php

      $room = $_POST['room'];
    echo  $parlor =  $_POST['parlor'];
    echo  $toilet = $_POST['toilet'];
    echo $kitchen = $_POST['kitchen'];
     $veranda = $_POST['veranda'];
     $passage =  $_POST['passage'];
     $staircase =  $_POST['staircase'];
     $a_parlor =  $_POST['a_parlor'];
     $s_room =  $_POST['s_room'];
     // echo 'kitchenette'.' - '. $kitchenette =  $_POST['kitchenette'];
     $compound =  $_POST['compound'];
     $g_room =  $_POST['g_room'];
     if($room == 1500){
     $h_keeping = 4000;
    }else{
      $h_keeping = 3000;
    }
     $c_price = $room + $parlor + $toilet + $kitchen + $veranda + $passage+ $staircase + $a_parlor + $s_room + $compound +$g_room + $h_keeping+$add;
     $sql = "INSERT INTO ap_desc(parlor,room,toilet,kitchen,veranda,passage,staircase,a_parlor,study,compound,g_room) VALUES('$parlor','$room','$toilet','$kitchen','$veranda','$passage','$staircase','$a_parlor','$s_room','$compound','$g_room')";
           mysqli_query($conn,$sql);
           $ap_id = mysqli_insert_id($conn);
           
        //   echo $c_price;

     ?>