<aside>
	<nav>
		<h3>Accueil</h3>
		<ul>
			<?php if(isset($isInIndex)):?>
				<li><a href=<?php if($isInIndex == true){echo "index.php#Presentations";}else{echo "../index.php#Presentations";}?>>Présentation</a></li>
				<li><a href=<?php if($isInIndex == true){echo "index.php#Photos";}else{echo "../index.php#Photos";}?>>Photos</a></li>
				<li><a href="">Lien 3</a></li>
				<li><a href="">Lien 4</a></li>
			<?php endif ?>
		</ul>
		<h3>Actualités</h3>
		<ul>
			<li><a href="">Lien 1</a></li>
			<li><a href="">Lien 2</a></li>
			<li><a href="">Lien 3</a></li>
			<li><a href="">Lien 4</a></li>
		</ul>
		<h3>Informations</h3>
		<ul>
			<li><a href="">Lien 1</a></li>
			<li><a href="">Lien 2</a></li>
			<li><a href="">Lien 3</a></li>
			<li><a href="">Lien 4</a></li>
		</ul>
		<h3>Contact</h3>
		<ul>
			<li><a href="">Lien 1</a></li>
			<li><a href="">Lien 2</a></li>
			<li><a href="">Lien 3</a></li>
			<li><a href="">Lien 4</a></li>
		</ul>

	</nav>
</aside>