<html>
	<head>
		<title>vivalaluz.net</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="container">
		<div class="header">
			<h1 class="link"><a href="/">vivalaluz</a></h1>
		</div>
		<div class="main">
			<?php
					$root = "content";
					if (file_exists($root))
						{
						$albums = scandir($root);
						sort($albums);
						$count = 1;
						foreach ($albums as $album)
						{
							$albumPath = $root."/".$album;
							if(is_dir($albumPath) && $album != "." && $album != "..")
							{
								$albumName = preg_replace("~_~", "/", $album);
								$albumName = preg_replace("~-~", " ", $albumName);
								echo "<p>$albumName<p>";
								$pics = scandir($albumPath);
								foreach ($pics as $pic)
								{
									if(preg_match('/.jpg/', $pic) OR preg_match('/.png/', $pic))
									{
										if($pic != "." && $pic != ".." &&  !is_dir($pic))
										{
											echo "<td><img src=$albumPath/$pic border='0' height='450'>&nbsp;</td>";
											if($count%2==0)
											{
												echo "<br>";
											}
											$count = $count + 1;
										}
									}
								}
								echo "<br>";
							}
						}
					}
			?>
		</div>
		<div class="footer-left"><div class=copyright>&copy; 2019 Rasmus von Schwerdtner</div></div>
		<div class="footer-right"><div class="link"><a href="./impressum.php">Impressum</a></div></div>
		</div>
	</body>
</html>
