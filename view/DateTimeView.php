<?php

namespace view;

class DateTimeView {

	//Retrieve server time and display in correct format
	public function show() {

		$timeString = date('l, \t\h\e jS \o\f F Y, \T\h\e \t\i\m\e \i\s G:i:s');

		return '<p>' . $timeString . '</p>';
	}
}