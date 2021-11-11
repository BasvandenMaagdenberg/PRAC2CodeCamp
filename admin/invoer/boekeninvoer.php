<!doctype html>
<html encoding="utf-8" lang="nl">

<?php require_once'../../head.php'; ?>
<body>
	<?php require_once'../header.php';?>
	<main>
		<div class="form-wrapper">
			<div class="flex-container">
				<div class="form-create">
					<table>
						<form action="../../backend/boekenController.php" method="POST">
							<input type="hidden" name="action" value="create">
							<h1>voer een nieuw boek in</h1>
							<p>vul de onderstaande invoer velden in met de informatie over een boek</p>
							<!-- titel van het boek -->
							<div class="form-group">
								<label for="book_title">titel:</label>
								<input type="text" name="book_title">	
							</div>	
							<!-- autheur  -->
							<div class="form-group">
								<label for="book_autheur">autheur:</label>
								<input type="text" name="book_autheur">		
							</div>	
							<div class="form-group">
								<label for="book_autheur">beschrijving:</label>
								<input type="text" name="book_description">		
							</div>				
								<!-- img_naam/url -->
							<div class="form-group">
								<label for="book_img_url">img_url:</label>
								<input type="file" name="book_img_url">
							</div>
			         <!-- beschrijvings vak van de taak  -->
							<div class="form-group">
								<label for="book_price">boek prijs:</label>
								<input type="decimal" name="book_price">
							</div>	
							<div class="form-group-submit">
								<input type="submit" name="submit" value="aanmaken">
							</div>
					</form>
					</table>
	</main>
	<?php require_once'../../footer.php'?>
</body>
</html>