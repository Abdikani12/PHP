<?php
  $mymarks["year 1"] = "55 marks";
  $mymarks["year 2"] = "65 marks";
  $mymarks["year 3"] = "75 marks";
  $mymarks["year 4"] = "80 marks";
?>
<head>
<title>Data in table</title>
</head>
<body>
<table border=1 align="center">
<tr><th>Index</th><th>Grade</th></tr> 
<?php
  foreach($mymarks as $index => $value)
  {
    echo "<tr><td>$index</td><td>$value</td></tr>";     
  }
 
?>
</table>
</body>
</html>

