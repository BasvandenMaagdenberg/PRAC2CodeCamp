<!doctype html>
<html encoding="utf-8" lang="nl">

<?php require_once'../head.php'; ?>
<body>
<?php require_once'header.php';?>
<main>
	<div class="container">
		<div class="table-container">
			<div class="listview">
				<div class="boeken-list">
					<h3>- dashboard overzicht - </h3>
						<div class="boekenlijst">
							<?php 
								require_once "../backend/conn.php";
								$query ="SELECT * FROM boeken ORDER BY id desc";
								$statement = $conn -> prepare($query);
								$statement->execute();
								$boeken = $statement -> fetchAll(PDO::FETCH_ASSOC);            
							?>
							<h4> - boeken overzicht - </h4>
							<table>
								<tr>
									<th>Titel</th>
									<th>autheur</th>
									<th>img naam</th>
									<th>prijs</th>
									<th>Aanpassen</th>
									<th>verwijderen</th>
								</tr>
								<?Php foreach($boeken as $boek):?>
								<tr>
									<td>
										<div class="boek-info">
											<?php echo "<p>" . $boek['book_title']. "</p>"?>
										</div>
									</td>
									<td>
										<div class="boek-info">
											<?php echo "<p>" . $boek['book_autheur']. "</p>"?>
										</div>
									</td>
									<td>
										<div class="boek-info">
											<?php echo "<p>" . $boek['book_img_url']. "</p>"?>
										</div>
									<td>
										<div class="boek-info">
											<?php echo "<p>" . $boek['book_price']. "</p>"?>
										</div>
									</td>
									<td>
										<div class="boek-info">
											<?php 
											 echo "<a href='edit.php?id={$boek['id']}'>Aanpassen</a>";
											?>
										</div>
									</td>
									<td>
										<div class="boek-info">
											<?php 
											 echo "<a href='delete.php?id={$boek['id']}'>verwijderen</a>";
											?>
										</div>
									</td>
								</tr>
									<?php endforeach;?>
							</table>
						</div>
					</div>
				</div>
			</div>
		<!-- hier onder komen mogelijk nog listview voor songtexten -->

		<!-- hier onder komen mogelijk nog listview voor infopaginas -->
		<!-- netaspect -->
	</div>
</main>
<?php require_once '../footer.php'?>