<?php

function init_tz() {
	$off = trim(`date +%z`);
	$abbr = trim(`date +%Z`);

	$sign = $off[0] === '+' ? 1 : -1;

	$off = abs((int) $off);
	$off = intdiv($off, 100) * 3600 + ($off % 100) * 60 * $sign;

	$tzname = timezone_name_from_abbr($abbr, $off);
	return date_default_timezone_set($tzname);
}

init_tz();
