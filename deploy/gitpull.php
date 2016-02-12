<?php

	$dir = "/home/bitrix/ext_www/rus.expertit.kh.ua/";
	$log = "/home/bitrix/ext_www/rus.expertit.kh.ua/zhekan/inbox/deploy/pull.logs";
	$branch = "master";


	// log
	echo shell_exec("date >> {$log}");
	echo shell_exec("echo \ >> {$log}");

	echo shell_exec("cd {$dir}; /usr/bin/git reset --hard HEAD 2>&1 >> {$log};");
	echo shell_exec("cd {$dir}; /usr/bin/git checkout {$branch} 2>&1 >> {$log};");
	echo shell_exec("cd {$dir}; /usr/bin/git pull origin {$branch} 2>&1 >> {$log};");

	file_put_contents('payload.logs', serialize($_POST['payload']), FILE_APPEND);
	// echo shell_exec("cd {$dir}; /usr/bin/git checkout master 2>&1 >> {$log};");
	// echo shell_exec("cd {$dir}; /usr/bin/git pull 2>&1 >> {$log};");
	// echo shell_exec("cd {$dir}; /usr/bin/git fetch 2>&1 >> {$log};");
	// echo shell_exec("cd {$dir}; /usr/bin/git reset --hard origin/{$branch} 2>&1 >> {$log};");

	// log
	echo shell_exec("echo \ >> {$log}");

	?>