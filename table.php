<body style="background:Red">
<center>
<?php
$x=$_GET['number'];
echo"<h1>Table of $x </h1>"."<br>";
for($i=1;$i<=10;$i++)
echo $x."X".$i. "=".$x*$i."<br>";

?>
</center>
</body>
