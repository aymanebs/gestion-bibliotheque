<?php

use App\config\SessionManager;
use App\models\Book;

  require '../../vendor/autoload.php';
  $session=new SessionManager();
  $session->startSession();
  $user_id = $_SESSION['user_id'];

  if(isset($_GET['id'])){
    $book_id=$_GET['id'];
   }

?>

<!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">

   <title></title>
   <!-- insert stylesheets here -->
 </head>
 <body>

<section class="vh-100" style="background-color: #103cbe;">
  <div class="container h-100 w-60 pt-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Reservation</p>
               
               
<form class="mx-1 mx-md-4" method="post" action="/app/controllers/utilisateur/book/add.php" enctype="multipart/form-data">
                
                  <div class="d-flex flex-row align-items-center mb-4">
                    
                    <div class="form-outline flex-fill mb-0">
                      <input type="text"name="reservation_date" id="form3Example1c" class="form-control" value="" pattern="\d{4}-\d{2}-\d{2}" />
                      <label class="form-label"  for="form3Example1c">reservation_date</label>
                    </div>
                  </div>
                  <div class="d-flex flex-row align-items-center mb-4">
                    
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="return_date" id="form3Example1c" class="form-control" value="" pattern="\d{4}-\d{2}-\d{2}" />
                      <label class="form-label"  for="form3Example1c">return_date</label>
                    </div>
                  </div>
                  
                  <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
                  <input type="hidden" name="book_id" value="<?php echo $book_id; ?>">
                  
                  
    
                
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
require_once "../../layout/footer.php"
?>