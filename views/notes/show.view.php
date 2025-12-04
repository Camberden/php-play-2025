<!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
<!DOCTYPE html>

<html class="h-full bg-gray-900">

<?php require __DIR__ . "/../partials/head.php"; ?>
<?php require __DIR__ . "/../partials/nav.php"; ?>
<?php require __DIR__ . "/../partials/banner.php"; ?>

		<main>
			<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
				<p>The selected <i>Note Title</i> is below:</p><hr>
				
				<p style="color:magenta;"><?= $note["body"]; ?></p><hr>
				<p><a href="/notes" class="text-blue-500 hover:underline">Return...</a></p>
			</div>
		</main>

<?php require __DIR__ . "/../partials/footer.php"; ?>