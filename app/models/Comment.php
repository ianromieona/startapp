<?php
/**
* 
*/
class Comment extends Eloquent
{
	protected $table = 'comments';
	public $timestamps = false;

	public static function addComment($params){
		$add = new Ratings;
		$add->comment_id = 'id';
		$add->comment_message = $params['comment_message'];
		$add->comment_toid = $params['comment_toid'];
		$add->comment_fromid = $params['comment_fromid'];
		$add->comment_type = $params['comment_type'];
		$add->comment_date = date('Y-m-d h:m:i');
		$add-> save();
	}

	public static function deleteComment($id){
		$del = self::where('comment_id', '=', $id)->delete();
		if($del){
			return true;
		}
		return false;
	}

	public static function editComment($params){
		$update = self::where('comment_id', $params['comment_id'])->update($params);
		if($update){
			return true;
		}
		return false;
	}
	public static function getComments($id){
		$query = self::where('post_id', '=', $id)->get();
		$comments = array();
		$i = 0;
		if($query){
			foreach ($comments as $key => $value) {
				
			}
		}
		return $query;
		
	}
	// public static function getChildComments($id){
	// 	if($parent){
	// 		$query = self::where('post_id', '=', $id)->where('parent')->get();
			
	// 	}
	// }  

}