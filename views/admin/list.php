<?php 
    require_once '../../layout/header.php';
?>
   <div class="container-fluid">
     <div class="row" >
       <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse pt-5" >
         <div class="position-sticky pt-md-5">
           <ul class="nav flex-column" >
             <li class="nav-item" >
               <a class="nav-link active" aria-current="page" href="/index.php">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                   <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                   <polyline points="9 22 9 12 15 12 15 22"></polyline>
                 </svg>
                 <span class="ml-2">Dashboard</span>
               </a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="../orders/list.php">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
                   <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                   <polyline points="13 2 13 9 20 9"></polyline>
                 </svg>
                 <span class="ml-2">Orders</span>
               </a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="../services/list.php">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                   <circle cx="9" cy="21" r="1"></circle>
                   <circle cx="20" cy="21" r="1"></circle>
                   <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                 </svg>
                 <span class="ml-2">Services</span>
               </a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                   <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                   <circle cx="9" cy="7" r="4"></circle>
                   <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                   <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                 </svg>
                 <span class="ml-2">Customers</span>
               </a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2">
                   <line x1="18" y1="20" x2="18" y2="10"></line>
                   <line x1="12" y1="20" x2="12" y2="4"></line>
                   <line x1="6" y1="20" x2="6" y2="14"></line>
                 </svg>
                 <span class="ml-2">Reports</span>
               </a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="../developers/list.php">
                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                   <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                   <polyline points="2 17 12 22 22 17"></polyline>
                   <polyline points="2 12 12 17 22 12"></polyline>
                 </svg>
                 <span class="ml-2">Developers</span>
               </a>
             </li>
           </ul>
         </div>
       </nav>
       <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
         <nav aria-label="breadcrumb">
           <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="#">Home</a></li>
           </ol>
         </nav>

         <h1 class="h2">Customers</h1>
         <!-- <a class="btn btn-secondary" href="./add.php" role="button" style="position: fixed;right:5%">ADD</a> -->
         <p>This is the customers table list</p>
         <div class="row">
           <div class="col-12 col-xl-12 mb-4 mb-lg-0">
             <div class="card">
               <h5 class="card-header">Customers</h5>
               <div class="card-body">
                 <div class="table-responsive">
                   <table class="table">
                     <thead>
                       <tr>
                         <th scope="col">id</th>
                         <th scope="col">Fullname</th>
                         <th scope="col">Username</th>
                         <th scope="col">Email</th>
                         <th scope="col">Phone</th>
                         <th scope="col">Action</th>
                       </tr>
                     </thead>
                     <tbody>
                        <?php 
                            
                            require __DIR__ ."/../../app/controllers/admin/list.php";
                        
                        ?>
                     </tbody>
                   </table>
                 </div>
                 <a href="#" class="btn btn-block btn-light">View all</a>
               </div>
             </div>
           </div>
   
       </main>
     </div>
   </div>
   <?php 
    require_once '../../layout/footer.php';
?>