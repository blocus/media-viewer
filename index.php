<html>
<head>
	<title>list of media @ <?= $_SERVER["HTTP_HOST"]; ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>

	</style>
</head>

<body>
	<div class="container-fluid">
		<h1>list of media @ <?= $_SERVER["HTTP_HOST"]; ?></h1>
		<div class="row">
			<?php
			$EXTIMG = ["JPG", "JPEG", "BMP", "PNG", "SVG"];
			$entries = scandir(".");
			foreach($entries as $item){
				$tmp = explode(".", $item);
				$ext = $tmp[sizeof($tmp) - 1];
				if(in_array(strtoupper($ext), $EXTIMG)){
				?>
					<div class="col-md-4 col-lg-3 col-sm-6 col-12 col-xl-2">
						<div class="card">
							<img src="<?= $item; ?>" class="card-img-top" alt="<?= $item; ?>">
							<div class="card-body">
								<p class="card-text"><?= $item; ?></p>
							</div>
						</div>
					</div>
				<?php
				}
			}
			?>
		</div>
	</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>