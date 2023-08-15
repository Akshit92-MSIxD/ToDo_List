
<?php
 
 session_start();

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">iNotes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ToDo-List/about.php">About</a>
        </li>';


    echo'    
        <li class="nav-item">
          <a class="nav-link" href="/ToDo-List/contact.php">Contact</a>
        </li>
      </ul>';



  if( isset($_SESSION['loggedin']) && $_SESSION['loggedin'])
  {
                  echo' 
               <div class="mr-0 ml-2">
                   <p class="text-light my-0">' . $_SESSION['loggedin_email'] . ' </p>
              </div>

                <div class="mx-2 pl-0">
                    <button class="btn btn-outline-success mx-2"  data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</button>
                </div>';

  }
  else
  {
    echo'
      <div class="mx-2">
      <button class="btn btn-outline-success mx-2"  data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
      <button class="btn btn-outline-success " data-bs-toggle="modal" data-bs-target="#signupModal">Signup</button>
    </div>';
  }

echo' </div>
</div>
</nav>';

require '_loginModal.php';
require '_logoutModal.php';
require '_signupModal.php';

require '_alerts.php';

?>