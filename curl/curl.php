<?php
      $r = 1;
     $ch = curl_init();

     curl_setopt($ch,CURLOPT_URL,'http://localhost/rest/curl/file.php?r='.$r);
     curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
     //curl_setopt($ch,CURLOPT_HEADER,0);

     $output = curl_exec($ch);
     echo '<pre>';
     echo $output;
     curl_close($ch);


 ?>
