<?php if(!isset($isInIndex)){
	$isInIndex = false;
} 
?>

<header>
	<img src= <?php if($isInIndex == true){echo "Ressources/Images/Logo_Ane.png";}else{echo "../Ressources/Images/Logo_Ane.png";}?> alt="logo de la fete de l'ane" style  = "height: 120px ; width: 100px; margin-left: 100px ; float: left;">
	<h1>La fête de l'âne</h1>
	<img src= <?php if($isInIndex == true){echo "Ressources/Images/Logo_Ane.png";}else{echo "../Ressources/Images/Logo_Ane.png";}?> alt="logo de la fete de l'ane" style  = "float height: 120px ; width: 100px; margin-right: 100px; float : right">
	<div style = "clear: both;">
</header>