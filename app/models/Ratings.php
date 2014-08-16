<?php
/**
* 
*/
class Ratings extends Eloquent
{
	protected $table = 'ratings';
	public $timestamps = false;

	public static function getRatingsAverage($params){
		$ave = DB::table('ratings')
		->select(DB::raw('avg(rating_value)'))
		->where('rating_fromid', '=', $params['rating_fromid'])
		->where('rating_toid', '=', $params['rating_toid'])
		->where('rating_totype', '=', $params['rating_totype'])
		->get();

		return $ave;
	}

	public static function getRatings($id,$type){
		$list = self::select('*')->leftJoin('users', 'users.user_id','=','ratings.rating_fromid')
			->leftJoin('users', 'users.user_id','=','ratings.rating_toid')
			->leftJoin('projects', 'projects.project_id','=','ratings.rating_toid')
			->leftJoin('posts', 'posts.post_id','=','ratings.rating_toid')
			->where('ratings.rating_toid', '=', $id)
			->where('ratings.rating_type', '=', $type)
			->get();
		}

		return $list;
	}

	public static function addRatings($params){
		$add = new Ratings;
		$add -> $params['rating_value'];
		$add -> $params['rating_toid'];
		$add -> $params['rating_fromid'];
		$add -> $params['rating_type'];
		$add -> save(false);
	}

	public static function deleteRatings($id){
		$del = self::where('id', '=', $id)->delete();
		if($del){
			return true;
		}
		return false;
	}

	public static function editRatings($params){
		$update = self::where('id', $id)->update($params);
		if($update){
			return true;
		}
		return false;
	}

}