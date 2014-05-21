<?php

class Modifier_daytime extends Modifier {

	public function index($value, $parameters=array()) {
	
		$hour = date("H", strtotime($value));
		
		if ( $hour < "12" ) {
			return "morning";
		} else if ( $hour >= "12" && $hour < "17" ) {
			return "afternoon";
		} else if ( $hour >= "17" && $hour < "19" ) {
			return "evening";
		} else if ( $hour >= "19" ) {
			return "night";
		}

	}
}