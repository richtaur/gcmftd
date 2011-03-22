#!/usr/bin/php
<?php

$file = 'TODO.md';
$found = false;
$messages = array();

exec('git diff', $output);

foreach ($output as $line) {
	if (substr($line, 0, 4) == 'diff') {
		// This line marks a new file
		if ($found) {
			break;
		}
		$found = true;
	}

	if ($found) {
		// Is this the removal of a line from the $file markdown?
		if (substr($line, 0, 3) == '-* ') {
			$messages[] = str_replace('"', '\\"', substr($line, 3));
		}
	}
}

if ($messages) {
	$message = implode('; ', $messages);
	exec('git commit -a -m "' . $message . '"');
} else {
	echo "[NOTICE] No lines removed from $file.\n";
}
