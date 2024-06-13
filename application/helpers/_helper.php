<?php

function DateFormat($date, $format = '') {
	date_default_timezone_set("Asia/Jakarta");

	if ($format == '') {
		$format = 'd/m/Y';
	}

	$date = str_replace("/", "-", $date);

	return date($format, strtotime($date));
}
