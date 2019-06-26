<?php
$resutado=null;

for ($i=0;$i<4; $i++)
	{
	$sel[$i]=null;
	}

// comprobar si se ha enviado algo //

if (isset($_GET['ope1'])){

	if ($_GET['op']=='+')
		{$resutado=$_GET['ope1']+$_GET['ope2'];
		$sel[0]='selected';}

	if ($_GET['op']=='-')
		{$resutado=$_GET['ope1']-$_GET['ope2'];
		$sel[1]='selected';}

	if ($_GET['op']=='/')
		{$resutado=$_GET['ope1']/$_GET['ope2'];
		$sel[2]='selected';}

	if ($_GET['op']=='*')
		{$resutado=$_GET['ope1']*$_GET['ope2'];
		$sel[3]='selected';}
}

else{
	$_GET['ope1']='';
	$_GET['op']='+';
	$_GET['ope2']='';
	}
?>


<form>
<input name="ope1" value="<?=$_GET['ope1']?>" />

<select name="op"> 
	<option <?=$sel[0]?>>+</option>
	<option <?=$sel[1]?>>-</option>
	<option <?=$sel[2]?>>/</option>
	<option <?=$sel[3]?>>*</option>
</select>

<input name="ope2" value="<?=$_GET['ope2']?>" />

<button>=</button>

<?=$resutado?>

</form>



