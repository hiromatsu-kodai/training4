<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>データを受信</title>
</head>
<body>
<?php
  echo "現在の点呼の状況";?>
<table border="1" cellspacing="0">
<tr>
<td>寮生番号</td><td>氏名</td><td>寮にいるか</td>
</tr>
<tr>
<td>0000</td><td>A</td><td><?php
  $a=0;
  if($a==1)
     elseif($_POST["name"]=="A" && $_POST["number"]=="0000")
        echo"○";
        $a=1;
     else
        echo"×";
?></td>
</tr>
<tr> 
<td>0001</td><td>B</td><td><?php  
  $b=0;
  if($b==1)
     elseif($_POST["name"]=="B" && $_POST["number"]=="0001")
        echo"○";
        $b=1;
     else
        echo"×";
  
?></td>
</tr>
<tr>
<td>0002</td><td>C</td><td><?php  
  $c=0;
  if($c==1)
     elseif($_POST["name"]=="C" && $_POST["number"]=="0002")
        echo"○";
        $c=1;
     else
        echo"×";

?></td>
</tr>
</table>
</body>
</html>
