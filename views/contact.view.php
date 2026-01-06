<!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
<!DOCTYPE html>

<html class="h-full bg-gray-900">

<?php require base_path("views/partials/head.php"); ?>
<?php require base_path("views/partials/nav.php"); ?>
<?php require base_path("views/partials/banner.php"); ?>

		<main>
			<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
				<p>Welcome to the contact page, silly peep.</p>
				<p>Here I can observe the Session people</p>
				<p>and make contact</p>
			</div>
			<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8" style="font-family:monospace;">
				<h2 class="mb-20" style="font-family:monospace; font-size:2rem; text-decoration:underline; color:cadetblue;">Session Observer</h2>
				<div class="ml-20" style="font-size:1rem;">
					<span style="color:aqua;"><?= print_r($processedArray); ?></span><br>
					
					<span style="color:burlywood;">Session User is the Array. Observe:</span> <span style="color:orangered;"> <?= print_r($_SESSION["user"]) ?> </span><br>
					<span style="color:burlywood;">Session User [Name]: <?= $_SESSION["user"]["name"] ?> </span><br>
					<span style="color:burlywood;"> Session User [Email]: <?= $_SESSION["user"]["email"] ?> </span><br>
				</div>	
			</div>
			
		</main>

<?php require base_path("views/partials/footer.php"); ?>
