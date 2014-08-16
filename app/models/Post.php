<?php
	
	class Post extends Eloquent{
		protected $table = "Posts";
		public $timestamps = false;

		public static function listAll(){
			$list = self::select('*')->orderBy('post_date','asc')->get();
			return $list;
		}

		public static function findById($id){
			$result = null;
			$list 	= self::select('*')->where('post_id', '=', $id)->get();
			if(sizeof($list) > 0){
				$result = $list[0];
			}
			return $result;
		}

		public static function listAllSorted($params){
			$result = self::select('*')->orderBy('post_date','asc')->get();
			return $result;
		}

	}
?>