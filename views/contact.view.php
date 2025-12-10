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
			<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
				<h2 class="mb-20" style="font-family:monospace; font-size:2rem; text-decoration:underline; color:blanchedalmond;">Session Observer</h2>
				&emsp;&emsp;&emsp;&emsp;<span style="font-family:monospace; color:aqua; font-size:1rem;"><?= print_r($processedArray); ?></span>
			</div>
		</main>

<?php require base_path("views/partials/footer.php"); ?>
