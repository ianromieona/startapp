<?php
/**
* 
*/
class Rating extends Eloquent
{
	protected $table = 'ratings';
	public $timestamps = false;

	public static function getRatingAverage($params){
		$ave = DB::table('ratings')
		->select(DB::raw('avg(rating_value)'))
		->where('rating_fromid', '=', $params['rating_fromid'])
		->where('rating_toid', '=', $params['rating_toid'])
		->where('rating_totype', '=', $params['rating_totype'])
		->get();

		return $ave;
	}

	public static function getRating($id,$type){
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

	public static function addRating($params){
		$add = new Ratings;
		$add->rating_value = $params['rating_value'];
		$add->rating_toid = $params['rating_toid'];
		$add->rating_fromid = $params['rating_fromid'];
		$add->rating_type = $params['rating_type'];
		$add->save(false);
	}

	public static function deleteRating($id){
		$del = self::where('rating_id', '=', $id)->delete();
		if($del){
			return true;
		}
		return false;
	}

	public static function editRating($params){
		$update = self::where('rating_id', $id)->update($params);
		if($update){
			return true;
		}
		return false;
	}

}