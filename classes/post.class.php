<?php

class Posts  extends Db{

 public function getPost(){

    $sql="SELECT * FROM posts";
      $stement= $this->connect()->prepare($sql);
      $stement->execute();

      while($result= $stement->fetchAll()){
          return $result;

    } 
 }
 public function addPost($title,$body,$author){
    $sql ="INSERT INTO posts(title,body,author) VALUES(?,?,?)";
    $stement= $this->connect()->prepare($sql);
    $stement->execute([$title,$body,$author]);

 }
 public function EditPost($id){
   $sql="SELECT * FROM posts WHERE id=?";
   $stement=$this->connect()->prepare($sql);
   $stement->execute([$id]);
   $result= $stement->fetch();
   return $result;

 }
 public function UpdatePost($title,$body,$author,$id){
   $sql="UPDATE posts SET title= ?, body= ?, author= ? WHERE id=?";
   $stement= $this->connect()->prepare($sql);
   $stement->execute([$title,$body,$author,$id]);
 
 }
 public function DeletePost($id){
   $sql="DELETE FROM posts WHERE id=?";
   $stement = $this->connect()->prepare($sql);
   $stement->execute([$id]);
 }

}