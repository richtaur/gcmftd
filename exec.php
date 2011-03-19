<?php

$file = 'TODO.md';

exec('gdiff', $output);

print_r($output);
