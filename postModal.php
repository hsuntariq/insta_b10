<!-- Button trigger modal -->
<span type="button" class="" data-bs-toggle="modal" data-bs-target="#postModal">
  <i class="bi bi-chat"></i> Posts 
</span>

<!-- Modal -->
<div class="modal fade" id="postModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Create Post</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="./upload_post.php" method="POST" enctype="multipart/form-data">
            <label for="">Caption</label>
            <input type="text" name="caption" placeholder="Enter a caption..." class="form-control">
            <label for="">Post</label>
            <input type="file" name="image" placeholder="Enter a caption..." class="form-control">
            <button class="btn text-white w-100 my-2 fw-bolder" style="background:linear-gradient(to right,red,orange,purple)">Create Story</button>
        </form>
      </div>
      
    </div>
  </div>
</div>