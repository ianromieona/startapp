<?php 
// $arr = array();
// $arr['rating_id'] = 2;
// $arr['rating_fromid'] = 3;
// $arr['rating_toid'] = 2;
// $arr['rating_type'] = 1;
// $arr['rating_value'] = 3;
?>
<div>
	<form method="post" action="/post/add">
		<input type="text" name="title" placeholder="Title"><br>
		<textarea name="description"></textarea><br>
		<input type="text" name="tag" placeholder="Tag"><br>
		Note: Comma-separated.<br>
		<input type="submit" value="Share">
	</form>
</div>