<body style="background:Red">
<center>
<?php
$x=$_GET['number'];
echo"<h1>Factorial of $x </h1>"."<br>";
$a=1;
for($i=1;$i<=$x;$i++)
$a*=$i;
echo "factorial of $x is " .$a."<br>";

?>
</center>
</body>
