<?php 
require_once('templetes/header.php');
include('./includes/class-autoload.inc.php');


?>
    

    <!-- Button trigger modal -->
    <div class="text-center">
    <button type="button" class=" my-5 btn btn-primary" data-toggle="modal" data-target="#AddPosModal">
 create a post 
</button>
    </div>


<!-- Modal -->
<div class="modal fade" id="AddPosModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new post </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
       <form action="post.process.php" method="post" >
           <div class="form-group">
           <label for="post_title">Title:</label>
           <input type="text" class="form-control" name="post_title">
           </div>
           <div class="form-group">
           <label for="post_content">content:</label>
           <input type="text" class="form-control" name="post_content">
           </div> 
           <div class="form-group">
           <label for="post_title">Author:</label>
           <input type="text" class="form-control" name="post_author">
           </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal ">Close</button>
        <button type="submit" class="btn btn-primary" name="addpost">add post</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="row">
  
    
  <?php include('classes/post.class.php');
$posts= new Posts();
if($posts->getPost()){
foreach($posts->getPost() as $post){




   echo "<div class='col-md-6'>
        <div class='card'>
            <div class='card-body'>
                <h5 class='card-title'>$post[title]</h5>   
                <p class='cart-text'>
                    $post[body] 
                </p>
                <h6 class='card-subtitle text-muted text-right '>
                   Author: $post[author]
                </h6> 
                <a href='editForm.php?id=$post[id]'class='btn btn-warning '>Edite</a>   
                <a href='post.process.php?id=$post[id]'class='btn btn-danger '>Delete</a>        
            </div>
        </div><br>
    </div> ";
}
}
else{
    echo"ther is no post";
}
    
    ?>  
<?php require_once('templetes/footer.php');?>