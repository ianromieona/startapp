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
		$add->comment_message = $params['comment_message'];
		$add->comment_toid = $params['comment_toid'];
		$add->comment_fromid = $params['comment_fromid'];
		$add->comment_type = $params['comment_type'];
		$add->comment_date = date('Y-m-d h:m:i');
		$add-> save(false);
	}

	public static function deleteComment($id){
		$del = self::where('comment_id', '=', $id)->delete();
		if($del){
			return true;
		}
		return false;
	}

	public static function editComment($params){
		$update = self::where('comment_id', $id)->update($params);
		if($update){
			return true;
		}
		return false;
	}

}