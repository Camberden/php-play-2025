<!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
<!DOCTYPE html>

<html class="h-full bg-gray-900">

<?php require __DIR__ . "/../partials/head.php"; ?>
<?php require __DIR__ . "/../partials/nav.php"; ?>
<?php require __DIR__ . "/../partials/banner.php"; ?>

		<main>
			<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
				<p>The selected <i>Note</i> is below:</p><hr>
				
				<p class="mt-6 mb-6" style="font-family:cursive; color:magenta; font-size: 2rem;">"<?= htmlspecialchars($note["body"]); ?>" - <span style="font-size: 1rem;"><?= $username ?></span></p>
				<hr>
				<p class="mt-6">
					<a href="/note/edit?id=<?= $note["id"] ?>" style="color:gold; border:double;" class="hover:underline">Edit Note</a>
				</p>

				<form class="mt-6" method="POST">
					<input type="hidden" name="_method" value="DELETE"> <!-- THIS VALUE SPEAKS TO THE ROUTER! -->
					<input type="hidden" name="id" value="<?= $note["id"] ?>"/>
					<button style="color:goldenrod; border:double;" class="mb-6 hover:underline">Delete</button>
				</form>
				
				<hr>

					<p class="mt-4 hover:text-white">
				<a href="/notes">Return to Notes List</a>
			</p>
			</div>
		</main>

<?php require __DIR__ . "/../partials/footer.php"; ?>