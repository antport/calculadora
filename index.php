<?php
$resutado=null;


// comprobar si se ha enviado algo //

if (isset($_GET['ope1'])){


$resutado=$_GET['ope1']+$_GET['ope2'];





}

?>


<form>
<input name="ope1"/>

<select name="op"> 
	<option>-</option>
	<option>+</option>
	<option>/</option>
	<option>/</option>
</select>

<input name="ope2"/>

<button>=</button>
</form>

<? echo $resutado;?>

