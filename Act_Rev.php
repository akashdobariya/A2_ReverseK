
<?php
$input=$_GET['input'];
$k=$_GET['k'];
$length=strlen($input);
$arr=array();
$a=0;
$str="";
for( $i=0; $i<$k; $i++ )
{
$arr[$i]="";
}
for( $i=0; $i<$length; $i++ )
{
	if(substr($input,$i,1)==" "){
	$a++;
		if($a==$k){
			$a--;
			while($a>=0)
			{
			$str=$str." ".$arr[$a];
			$arr[$a]="";
			$a--;
			}
			$a=0;
		}
	}
	else{
	$arr[$a]=$arr[$a]."".substr($input,$i,1);

	}
}
if($a==($k-1))
{
while($a>=0)
{
$str=$str." ".$arr[$a];
$arr[$a]="";
$a--;
}
}
else
{
$b=0;
while($b<=$a){
$str=$str." ".$arr[$b];
$b++;
}
}
echo $str;
?>
