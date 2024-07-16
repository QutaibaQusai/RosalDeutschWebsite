<?php
$page_title = 'Free Content';
include '../include/head.php';
include '../include/search.php';



?>

<!-- Main content -->
<section class="content">

  <div class="row">
    <div class="col-12">
      <div class="card card-primary">

        <div class="card-header">
          <h3 class="card-title">Add new content</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="valid-form" method="post" action="process.php" enctype="multipart/form-data">
          <div class="card-body">
            <div class="form-group">
              <label for="contentName">Content Name</label>
              <input type="text" class="form-control reg-req" id="contentName" placeholder="Enter Name" name="name">
            </div>
            <div class="form-group">
              <label for="Description">Description</label>
              <textarea name="description" id="Description" class="form-control reg-req"></textarea>
            </div>
            <div class="form-group">
              <label for="ContentFile">File input</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input reg-req" id="ContentFile" name="file">
                  <label class="custom-file-label" for="ContentFile">Choose file</label>
                </div>

              </div>
            </div>

          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <input type="submit" value="Submit" name="Submit" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>
    <div class="col-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">All contents</h3>

      
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>Content Nme</th>
                <th>Content Description</th>
                <th>Action</th>
               
              </tr>
            </thead>
            <tbody id="search-results">


            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </div>

</section>
<!-- /.content -->

<?php
include '../include/footer.php';

?>