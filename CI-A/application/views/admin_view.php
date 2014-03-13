 <link rel="stylesheet" type="text/css" href="/~ccit1565/CI/assets/style.css">
		
		
		<h1><?php echo $title; ?> | Admin</h1>
		<?php echo form_open('Admin/create') ?>
		<label> Title </label>
		<input type="text" name="title">
		<label> Content </label>
		<textarea name="content"></textarea>
		<label> Categories / Tags </label>
		<textarea name="categories"></textarea>
		<input type="submit" name="submit" value="Create">
			
		</form>			
		
		<h2>Edit Posts</h2>
		<ul>
  			<?php foreach($posts as $post): ?>
    		<li><a href="/~ccit1565/CI/index.php/Admin/update/<?php echo $post['ID']; ?>"><?php echo $post['TITLE']; ?></a> | <a href="/~ccit1565/CI/index.php/Admin/delete/<?php echo $post['ID']; ?>">delete post</a></li>
  			<?php endforeach; ?>
		</ul> 