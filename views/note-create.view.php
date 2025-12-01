<!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
<!DOCTYPE html>

<html class="h-full bg-gray-900">

<?php require "partials/head.php"; ?>

<?php require "partials/nav.php"; ?>

<?php require "partials/banner.php"; ?>
<main>
	<form method="POST">
		<div class="space-y-12">
			<div class="border-b border-white/10 pb-12">

				<div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
				
				</div>
				<div class="col-span-full ml-60 mr-60">
					<label for="body" class="block text-sm/6 font-medium text-white">Create below:</label>
					<div class="mt-2">
						<textarea 
						id="body" 
						name="body" 
						rows="3" 
						class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" 
						placeholder="It goes right here, heheh..."><?= $_POST["body"] ?? "" ?></textarea>
						<?php if (isset($errors["body"])) : ?>
							<p style="color:magenta;"><?= $errors["body"] ?></p>
						<?php endif ?>
					</div>
					<p class="mt-3 text-sm/6 text-gray-400">Write a good ol' daggone note.</p>
				</div>
			</div>
		</div>
		<div class="mt-6 ml-60 mr-60 flex items-center gap-x-6">
			<button type="button" class="text-sm/6 font-semibold text-white hover:underline">Cancel</button>
			<button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 hover:bg-white/5">Save</button>
		</div>
	</form>

	<?php require "partials/footer.php"; ?>