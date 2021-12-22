<?php
include('./includes/class-autoload.inc.php');
include('classes/post.class.php');
$post=new Posts();

if(isset($_POST['addpost'])){

  $title=$_POST['post_title'];
   $body=$_POST['post_content'];
   $author=$_POST['post_author'];
 
   $post->addPost($title, $body,$author);
header('location:index.php');

}else if(isset($_POST['UpdatePost'])){
    $id=$_GET['id'];
    $title=$_POST['post_title'];
    $body=$_POST['post_content'];
    $author=$_POST['post_author'];
    $post->UpdatePost($title,$body,$author,$id);
    header('location:index.php');
}else if(isset($_GET['id'])){
    $id=$_GET['id'];
    echo $id;
    $post->DeletePost($id);
    header('location:index.php');
}
