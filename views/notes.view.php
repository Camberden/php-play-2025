<!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
<!DOCTYPE html>

<html class="h-full bg-gray-900">

	<?php require "partials/head.php"; ?>

	<?php require "partials/nav.php"; ?>

	<?php require "partials/banner.php"; ?>

		<main>
			<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
				<p>Welcome to the <i>notetaking page</i>, silly peep.</p><hr>
				<?php foreach ($notes as $note) : ?> 
					<li>
						<a href="/note?id=<?= $note["id"] ?>" class="text-blue-500 hover:underline">
							<?= $note["body"] ?>
						</a>
					</li><br>
				<?php endforeach; ?>
			</div>
		</main>

	<?php require "partials/footer.php"; ?>
