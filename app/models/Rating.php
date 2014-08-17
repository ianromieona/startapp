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
		->select(DB::raw('avg(rating_value) as average'))
		->where('rating_fromid', '=', $params['rating_fromid'])
		->where('rating_toid', '=', $params['rating_toid'])
		->where('rating_type', '=', $params['rating_type'])
		->get();

		return $ave[0];
	}

	public static function getRating($id,$type){
		if($type==1){
			$list = DB::table('ratings')
				->leftJoin('users', 'ratings.rating_fromid', '=', 'users.id')
				->leftJoin('users as t1', 'ratings.rating_toid', '=', 't1.id')
				->where('ratings.rating_toid', '=', $id)
				->where('ratings.rating_type', '=', $type)
				->get();
		}else if($type==2){
			$list = DB::table('ratings')
				->leftJoin('users', 'ratings.rating_fromid', '=', 'users.id')
				->leftJoin('posts', 'ratings.rating_toid', '=', 'posts.post_id')
				->where('ratings.rating_toid', '=', $id)
				->where('ratings.rating_type', '=', $type)
				->get();
		}

		return $list;
	}

	public static function addRating($params){
		$add = new Rating;
		$add->rating_id = "id";
		$add->rating_value = $params['rating_value'];
		$add->rating_toid = $params['rating_toid'];
		$add->rating_fromid = $params['rating_fromid'];
		$add->rating_type = $params['rating_type'];
		$add->save();
	}

	public static function deleteRating($id){
		$del = self::where('rating_id', '=', $id)->delete();
		if($del){
			return true;
		}
		return false;
	}

	public static function editRating($params){
		$update = self::where('rating_id', $params['rating_id'])->update($params);
		if($update){
			return true;
		}
		return false;
	}

}