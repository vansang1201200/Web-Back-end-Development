<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Từ Điển Anh - Việt</h2>
       <form method="POST">
          <input type="text" name="search" placeholder="Nhập từ cần tìm"/>
          <input type = "submit" id = "submit" value = "Tìm"/>
       </form>
       <?php
       $dictionary = array(
           "heloo" => "xin chao",
           "how" => "the nao",
           "book" => "quyen vo",
           "computer" => "may tinh" 
       );
       if ($_SERVER["REQUEST_METHOD"] == "POST"){
           $searchword = $_POST["search"];
           $flag = 0;
           foreach($dictionary as $word => $description) {
               if($word == $searchword) {
                   echo "tu: " . $word ." . <br/>Nghia cua tu:" . $description;
                   echo "<br/>";
                   $flag = 1;
               }
           }
           if($flag==0){
               echo "khong tim thay.";
           }
       }
       ?>
</body>
</html>