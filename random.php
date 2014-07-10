<?php

$num = rand(1,100);

if($num % 2 == 0)
{
  echo "\$num = $num";
  echo "<br>$num 是偶数。";
}
else
{
  echo "\$num = $num";
  echo "<br>$num 是奇数。"; 
}

/*

注意：
1. rand()函数的返回值是包括边界的，例：rand(1,100)的返回结果集就包括1和100

*/

?>
