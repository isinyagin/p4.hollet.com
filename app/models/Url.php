<?php

class Url extends Eloquent {
	public $timestamps = false;
	protected $guarded = array();
	public static $rules = ['url' => 'required|url'];

	public static function validate($input) {
		$validation = Validator::make($input, static::$rules); 
		return $validation->fails() ? $validation : true;
	}

	public static function generate_uniq_url() {

		// convert to base 32
		$shortened = base_convert(rand(100000, 1000000), 10, 36);

		// if already in the databse, do recursive call
		if (static::whereshortened($shortened)->first())
			return static::generate_uniq_url();

		return $shortened;
	}
}
