<!DOCTYPE html>

<html>
	<head>
		<title>Admin</title>
	</head>
	 <link rel="stylesheet" type="text/css" href="/~ccit1565/CI/assets/style.css">
	 

	
	<body>
	<header> <p style="text-align:left"><a href="http://phoenix.sheridanc.on.ca/~ccit1565/CI/index.php/Admin"> My Admin </a></p></header>
	
<?php foreach($post as $p): ?>
	<h1><?php echo $title; ?> | Admin</h1>
  <?php echo form_open('admin/update_post/' . $p['ID']) ?> 
    <label>Title</label>
    <input type="text" name="title" value="<?php echo $p['TITLE']; ?>">
      <label>Content</label>
    <textarea name="content"><?php echo $p['CONTENT']; ?></textarea>
    <label>Categories</label>
    <textarea name="categories"><?php echo $p['categories']; ?></textarea>
    
    
    
    <input type="submit" name="submit" value="Save">
  </form>


  
<?php endforeach; ?> 


	</body>
</html>