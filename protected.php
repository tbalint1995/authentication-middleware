<?php require("functions.php") ?>
<?php checkAccess()  ?>

<?php
if (isset($_GET['logout'])) {
	logout();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Az oldal karakterkódolásának beállítása -->
	<meta charset="UTF-8">

	<!-- A "meta viewport" beállítja a tartalmamat bármely eszköz szélességére -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Hivatkozás a stíluslapomra -->
	<link rel="stylesheet" href="styles.css">
	<title>Védett oldal</title>
</head>

<body>
	<div class="page">

		<nav>
			<a href="index.php">Kezdőoldal</a>
			<a href="public.php">Nyilvános oldal</a>
			<a class="active" href="protected.php">Védett oldal</a>
		</nav>

		<header>
			<p>
				<span>Üdvözöllek <?php echo $_SESSION['member'] ?></span>
				<button onclick="location.href = '?logout'">Kijelentkezés</button>
			</p>
			<h1>Védett oldal</h1>
			<h2>Csak a tagok láthatják ezt az oldalt.</h2>
		</header>

		<div class="content">
			<h3>Ez egy védett tartalom.</h3>

			<div class="text-block">
				Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos aperiam tenetur dicta qui error ipsam quis, quos ipsum labore ea id quibusdam blanditiis eum eius ut architecto fugiat, sed inventore quaerat laboriosam optio velit? Sequi nostrum, non. Porro nesciunt modi ipsam, facilis ut hic quia deserunt odio cumque. Praesentium, pariatur.
			</div>

			<div class="text-block">
				Lorem ipsum dolor sit amet consectetur adipisicing, elit. Nulla, dolor eum mollitia labore, voluptas magni necessitatibus doloremque voluptatem vero exercitationem velit, sunt sapiente blanditiis nemo neque, iure pariatur qui fugiat.
			</div>

			<div class="text-block">Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Tempore repudiandae iure, eum, quaerat ducimus vel, eius libero magnam rem, atque at provident odio quae eaque voluptates. Dolores fugit blanditiis, temporibus. Molestiae, alias dolorum ipsum itaque veritatis vero repudiandae, corrupti dignissimos.</div>
		</div>
	</div> <!-- Az oldal vége. -->
</body>

</html>