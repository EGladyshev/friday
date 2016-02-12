<!DOCTYPE html>
<html>
	<head>
		<title>Zhekan</title>
	</head>
	<body style="background-color: #000000; color: #FFFFFF; font-weight: bold; padding: 0 10px;">
		<h1>HELLO </h1>

		<form action="/zhekan/inbox/deploy/gitbranch.php" method="get">
			<input type="text" name="NEW_BRANCH">
			<input type="submit" value="Создать ветку">
		</form>
		<h2>Список веток:</h2>
		<?
		$commands = array(
			'',
			'git branch',
		);
		$output = '';
		foreach($commands AS $command){
			// Run it
			$tmp = shell_exec($command);
			// Output
			$output .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$command}\n</span>";
			$output .= htmlentities(trim($tmp)) . "\n";
		}
		?>
		<pre>
		<?php echo $output; ?>
		</pre>
		<form action="/zhekan/inbox/deploy/gitbranch.php" method="get">
			<input type="text" name="CHEKOUT_BRANCH" placeholder="Укажите название нужной ветки">
			<input type="submit" value="Сменить ветку">
		</form>
	</body>
</html>