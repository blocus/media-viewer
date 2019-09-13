<html>
<head>
	<title>list of media @ <?= $_SERVER["HTTP_REFERER"]; ?></title>
	<style>
	html, body{width : 100%; display : block;}
	.container{
		display : flex;
		width : 750px;
	}
	
	.card {
		border : 1px solid #000;
		width : 250px;
		margin : 10px;
	}

	.card img{
		width: 250px;
	}
	</style>
</head>

<body>
	<h1>list of media @ <?= $_SERVER["HTTP_REFERER"]; ?></h1>
	<div class="container">
		<?php
			$EXTIMG = ["JPG", "JPEG", "BMP", "PNG", "SVG"];
			$entries = scandir(".");
			$images = array();
			foreach($entries as $item){
				$tmp = explode(".", $item);
				$ext = $tmp[sizeof($tmp) - 1];
				if(in_array(strtoupper($ext), $EXTIMG)){
					echo "<div class='card'><img src='$item' /><span class='title'>$item</span></div>";
				}
			}
		?>
	</div>
</body>
</html>



