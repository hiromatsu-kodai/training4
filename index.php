<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>データを受信</title>
</head>
<body>
<?php
  echo "現在の点呼の状況";
  echo "寮生番号"$_POST["number"] ."番は". $_POST["name"] ."さんです。";?>
<table border="1" cellspacing="0">
<tr>
<td>寮生番号</td><td>氏名</td><td>寮にいるか</td>
</tr>
<tr>
<td>0000</td><td>A</td><td><?php
  $name1=$_POST["name"] .;
  $number1=$_POST["number"] .;
  if($name1=="A" && $number1=="0000")
     echo"○";
  else
     echo"×";?></td>
</tr>
<tr> 
<td>0001</td><td>B</td><td><?php  
  $name2="B";
  $number2="0001";
  if($name2=="B" && $number2=="0001")
     echo"○";
  else
     echo"×";?></td></td>
</tr>
<tr>
<td>0002</td><td>C</td><td><?php  
  $name3="C";
  $number3="0004";
  if($name3=="C" && $number3=="0002")
     echo"○";
  else
     echo"×";?></td></td>
</tr>
</table>
</body>
</html>
