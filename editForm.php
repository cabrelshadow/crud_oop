<?php require_once('templetes/header.php');

include('./includes/class-autoload.inc.php');

include('classes/post.class.php');
$posts= new Posts();
$post=$posts->EditPost($_GET['id']);
$id=$post['id'];
$title=$post['title'];
$body=$post['body'];

$author=$post['author'];
?>

<div class="text-center p-4">
  <h3>edit post</h3>
</div>

<form action="post.process.php?id=<?= $id;?>" method="POST">
<center>
  <div class="form-group">
    
    <input type="text" class="form-control col-lg-6" placeholder="post title" value="<?=$title;?>" name="post_title">
   
  </div>
  <div class="form-group">
    <textarea name="post_content" id="" cols="2" rows="2"  name="post_content"class="form-control col-lg-6">
    <?=$body;?>
    </textarea>
  
  </div>
  
  <div class="form-group">
    
  <input type="text" class="form-control col-lg-6" value="<?=$author;?>" name="post_author">
  </div>

  <button type="submit" class="btn btn-primary" name="UpdatePost">update Post</button>
  <center>
</form>
