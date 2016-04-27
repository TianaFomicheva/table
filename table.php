
 <?php
$number = $_POST['number'];
$n = (int)$number;
$OP=$_POST['OP'];
if($OP == "-"){
  echo "-"." | ";
  for($i=0; $i<=$n-1; $i++){
     echo $i." | ";
     }
   echo $n;
   echo '<br>';
   echo "-------------------".'<br>';
   for($i=0; $i<=$n; $i++){
     echo $i." | ";
        for($j=0; $j<=$n-1; $j++)
         {echo $i-$j." | ";
    }
   echo $i-$n;
   echo '<br>';
   }
}
 if($OP == "+"){
    echo "+"." | ";
     for($i=0; $i<=$n-1; $i++){
        echo $i." | ";
        }
  echo $n;
  echo '<br>';
  echo "-------------------".'<br>';
  for($i=0; $i<=$n; $i++){
      echo $i." | ";
      for($j=0; $j<=$n-1; $j++){
	      echo $i+$j." | ";
          }
  echo $i+$n;
  echo '<br>';
  }
}
if($OP == "*"){
  echo "*"." | ";
  for($i=0; $i<=$n-1; $i++){
      echo $i." | ";
  }
  echo $n;
  echo '<br>';
  echo "-------------------".'<br>';
  for($i=0; $i<=$n; $i++){
      echo $i." | ";
  for($j=0; $j<=$n-1; $j++){
      echo $i*$j." | ";
   }
   echo $i*$n;
   echo '<br>';
 }
}

if($OP == "/"){
    echo "/"." | ";
      for($i=0; $i<=$n-1; $i++){
        echo $i." | ";
      }
     echo $n;
     echo '<br>';
     echo "--------------------".'<br>';
     echo "0"." | "."NaN"." | ";
  for($i=1; $i<=$n-1; $i++){
     echo $j/$i." | ";
     }
  echo $j/$i;
  echo '<br>';
  for($i=1; $i<=$n; $i++){
      echo $i." | ";
      echo "Infinyty"." | ";
  for($j=1; $j<=$n-1; $j++){
       echo $i/$j." | ";
       }
  echo $i/$n;
  echo '<br>';
}
}
?>
