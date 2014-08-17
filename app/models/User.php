<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	protected $fillable = array('username','password');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	public static function add($params){
		if(self::insert($params)){
			return true;
		}
		return false;
	}

	public static function get($param = null){
		if(Session::has('userDetails')){
			$details = Session::get('userDetails');
			if($param){
				return $details[$param];	
			}else{
				return $details;
			}
			return false;
		}
	} 
}
