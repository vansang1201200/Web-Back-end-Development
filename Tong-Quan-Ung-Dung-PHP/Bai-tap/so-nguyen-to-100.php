<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
      function Prime($n){
          if($n < 2){
              return false;
          
          for($i=2 ; $i <= count($n);$i++ ){
              $n % $i == 0;
              return false;
          }
        }
        return true;
      }
      echo ("các số nguyên tố nhỏ hơn 100 là : </br> ");
      for($i=0 ; $i<100; $i++){
          if(Prime($i)){
              echo $i . ',';
          }
      }
      

    
    
    ?>
</body>
</html>