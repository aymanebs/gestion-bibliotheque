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
   <!-- navbar -->
   <nav class="navbar navbar-light bg-light p-3">
     <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
       <a class="navbar-brand" href="#">
         <img src="/public/images/logo.png" alt="" height="55px">
       </a>
       <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
     </div>
     <form method="post">
     <form method="post" action="your_action_url.php" class="form-inline">
    <div class="input-group">
        <input class="form-control form-control-dark" type="text" name="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-dark" type="submit" name="submit">Search</button>
        </div>
    </div>
</form>
     </form>
     <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">

       <div class="dropdown">

         <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
           Menu
         </button>
         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
           <li><a class="dropdown-item" href="#">Settings</a></li>
           <li><a class="dropdown-item" href="#">Messages</a></li>
           <li><a class="dropdown-item" href="/controller/auth/logout.php">Sign out</a></li>
         </ul>
       </div>
     </div>
   </nav>
   <!-- navbar end -->