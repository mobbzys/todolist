<?php

require_once '/app/init.php';

if(isset($_GET['as'], $_GET['tasks'])) {
	$as		= $_GET['as'];
	$tasks	= $_GET['tasks'];

	switch ($as) {
		case 'done':
				$doneQuery = $db->prepare("
					UPDATE tasks
					SET done = 1
					WHERE id = :tasks
					AND user = :root
				");
			break;	
	}
}