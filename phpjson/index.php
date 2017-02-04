<?php
     $ip = $_SERVER['REMOTE_ADDR'];
     echo $ip;
    // convert string to array.
     $string = "brijesh kumar singh";

      $arr = explode(" ",$string);
      echo '<pre>';
      print_r($arr);

      // convert array to string

      $arr1 =array('brijesh','kumar','singh!');
        $string = implode(" ",$arr1);

        echo $string.'</br>';

        $a=array("item1"=>"object1", "item2"=>"object2");
  $b= http_build_query($a,'',', ');

  print_r($b);

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP with json</title>
    <style media="screen">
        .temp{
              border: 1px solid green;
        }
    </style>
    <script type="text/javascript">
        // convert json string to javascript object
      //  var jsonString = '[{"name":"brijesh kumar","age":"23"},{"name":"pratap singh","age":"22"}]';
      //
      // var javascriptObject = JSON.parse(jsonString);
      // //var javascriptObject = $.parseJSON(jsonString);
      //
      //  alert(javascriptObject[0]["name");

       var JSONObject = [
    {
      "name": "Jonathan Suh",
      "gender": "male"
    },
    {
      "name": "William Philbin",
      "gender": "male"
    },
    {
      "name": "Allison McKinnery",
      "gender": "female"
    }
  ];

  var JSONString = JSON.stringify(JSONObject);
  alert(JSONString);


    </script>
  </head>
  <body>
        <div class="temp">
           <h3>Convert Json string to Array and Object</h3>
          <?php
               // json string
               $jsonString = '[{"name":"brijesh kumar","age":"23"},{"name":"pratap singh","age":"22"}]';

               // convert json string to Array

               $pArray = json_decode($jsonString,true);
               echo '<pre>';
               print_r($pArray);
               echo $pArray[0]["name"]."<br>";
               foreach ($pArray as $key) {
                 echo $key["name"].','. $key["age"]."<br>";
               }

               // convert json string to object

               $pObject = json_decode($jsonString);

               echo "<pre>";
               print_r($pObject);

               echo $pObject[0]->name;


           ?>
        </div>

        <div class="temp">
           <h3>Convert PHP array to json string</h3>
          <?php
               // php array
               $phpArray = [
                 [
                   "name"=>"brijesh kuamr",
                   "age" =>"23"
                 ],
                 [
                   "name"=>"pratap singh",
                   "age"=>"22"
                 ]

               ];

               $jsonString = json_encode($phpArray);
               echo $jsonString;
               //print_r($jsonString);




           ?>
        </div>
  </body>
</html>
