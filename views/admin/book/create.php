<?php
require_once "../../../layout/header.php";
require __DIR__ ."/../../../app/controllers/admin/book/create.php";
?>

<body>
<section class="vh-150" style="background-color: #103cbe;">
  <div class="container h-100 w-60 pt-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Insert</p>
               
            
<!-- form start -->
                <form class="mx-1 mx-md-4" method="post" action="/app/controllers/admin/book/create.php" enctype="multipart/form-data">
                
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text"name="title" id="form3Example1c" class="form-control" value="" />
                      <label class="form-label"  for="form3Example1c">title</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="author" id="form3Example1c" class="form-control" value="" />
                      <label class="form-label"  for="form3Example1c">author</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="genre" id="form3Example1c" class="form-control" value="" />
                      <label class="form-label" for="form3Example1c">genre</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text"  name="description" id="form3Example3c" class="form-control" value="" />
                      <label class="form-label" for="form3Example3c">description</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text"  name="publication_year" id="form3Example3c" class="form-control" value="" />
                      <label class="form-label" for="form3Example3c">publication_year</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text"  name="total_copies" id="form3Example3c" class="form-control" value="" />
                      <label class="form-label" for="form3Example3c">total_copies</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text"  name="avaible_copies" id="form3Example3c" class="form-control" value="" />
                      <label class="form-label" for="form3Example3c">avaible_copies</label>
                    </div>
                  </div>
    
                  <input type="file"  name="image"   value="" />
                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                  
                    <button type="submit" name="submit" class="btn btn-primary btn-lg m-3">Register</button>
                  </div>

                </form>

              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
require_once "../../../layout/footer.php"
?>
 