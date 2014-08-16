<?php
	class PostController extends BaseController{
		public function getIndex(){
			$list = Post::listAll();
			return View::make('posts.list', array('posts'=> $list));
		}
		public function getRecentList(){
			$params = array('field'=>'post_date','order'=>'desc'); 
			$list   = Post::listAllSorted($params);
			return View::make('posts.list', array('posts'=> $list));
		}
		public function addPost(){
			$params   = Input::except("_token");
			$errcode  = 0;
			if(Post::insert($params)){
				$err_code = 1;
			}
			return Redirect::to('/post/add')->with("params",array("errcode"=>$errcode, "params"=>$params));
		}
	}
?>