<HTML>
<HEAD>
 <TITLE>resultado numero</TITLE>
</HEAD>
<BODY bgcolor=#800000 text=#C0FFC0>
<h1>
<center>
<?php
$p = $_POST['p'];
$s = $_POST['s'];
$t = $_POST['t'];
echo " a ordem original e $p , $s , $t <br>";
if ($p<=$s && $s<=$t && $p<=$t)
{echo " pst: a ordem crescente e <br>$p<br>$s<br>$t";}

else if ($p<=$s && $s>=$t && $p<=$t)
{echo " pts: a ordem crescente e <br>$p<br>$t<br>$s";}

else if ($p>=$s && $s<=$t && $p>=$t)
{echo " stp: a ordem crescente e <br>$s<br>$t<br>$p";}

else if ($p>=$s && $s<=$t && $p<=$t)
{echo " spt: a ordem crescente e <br>$s<br>$p<br>$t";}

else if ($p<=$s && $s>=$t && $p>=$t)
{echo " tps: a ordem crescente e <br>$t<br>$p<br>$s";}

else if ($p>=$s && $s>=$t && $p>=$t)
{echo " tsp: a ordem crescente e <br>$t<br>$s<br>$p";}

?>
</center>
</BODY>
</HTML>
