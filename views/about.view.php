<!DOCTYPE html>

<html class="h-full bg-gray-900">

<?php require base_path("views/partials/head.php"); ?>
<?php require base_path("views/partials/nav.php"); ?>
<?php require base_path("views/partials/banner.php"); ?>

		<main>
			<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
				<p>Welcome to your about page, <?= $username ?>.</p>
			</div>

			<div style="text-align:center;font-size:larger;">
				<p style="color:cadetblue;font-size:larger;">Quick Calculations:</p>
				<br>
				<div style="font-family:monospace; color:burlywood;">
				<?php 
				
				$people = [
					['name' => 'John', 'age' => 25],
					['name' => 'Jane', 'age' => 30],
					['name' => 'Doe', 'age' => 22],
				];
				
				usort($people, function($a, $b) {
					return $a['age'] <=> $b['age']; // Sort by age
				});
				
				print_r($people);
				?>
				<hr>
				<?php
				$numbers = [1, 2, 3, 4, 5];
				$squared = array_map(function($num) {
					return $num ** 2;
				}, $numbers);
				
				print_r($squared); // Outputs: [1, 4, 9, 16, 25]

				?>
				<hr>
				</div>


			</div>
		</main>
		
<?php require base_path("views/partials/footer.php"); ?>
