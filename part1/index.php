
<?php

// Connecting to MYSQL DB :
   require 'DBconnect.php';

// Insert into table  of "akshit" DB in MYSQL :
   require 'insert_record.php';

// Updating existing record/note into MYSQL DB
   require 'update_record.php';

// Deleting existing record from MYSQL DB
   require 'delete_record.php'

?>



<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> iNotes App </title>

     <!-- Including CSS provided by Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
     
    <!-- Including CSS for datatables provided by jquery -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" >

  </head>



  <body>
  
  <!-- Modal(visible only when it is triggered by a button!!!) for Edit button -->

  <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="editModalLabel">Edit info</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        <div class="container my-2">
        <h2> Add a Note </h2>
        <form my-4 action="index.php" method="post">

          <input type="hidden" id="SnoEdit" name="SnoEdit">

          <div class="mb-3">
            <label for="title" class="form-label">Edit Note title</label>
            <input type="text" class="form-control" id="editTitle" name="editTitle" required>
          </div>
          
          <div class="mb-3">
            <label for="desc" class="form-label"> Edit Note Description</label><br>
              <textarea class=" form-floating form-control"  id="editdesc" name="editdesc" required></textarea>
          </div>

          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>

        </form>

    </div>

    </div>
    </div>
    </div>
    </div>



   <!-- Modal(visible only when it is triggered by a button!!!) for Delete button -->

   <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="deleteModalLabel">Delete Note!!!</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

        <div class="container my-2">
        <h2> Are you sure you want to delete this note ?</h2>
        <form my-4 action="index.php" method="post">

          <input type="hidden" id="SnoDelete" name="SnoDelete">

          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Confirm</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>

        </form>

    </div>

    </div>
    </div>
    </div>
    </div>


      


     

  <!-- Navigation -->

   <?php  require('./partials/_nav.php') ;  ?>

    <!-- <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">iNotes</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>

            </ul>

            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

          </div>
        </div>
      </nav> -->





   <!-- Form taking notes -->

      <div class="container my-4">
        <h2> Add a Note </h2>
        <form my-4 action="index.php" method="post">

          <div class="mb-3">
            <label for="title" class="form-label">Note title</label>
            <input type="text"  id="title" name="title"  class=" form-floating form-control" required >
          </div>
          
          <div class="mb-3">
            <label for="desc" class="form-label">Note Description</label><br>
              <textarea class=" form-floating form-control"  id="desc" name="desc" required></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Add Note</button>
        </form>

      </div>





    <!-- Table representing  the notes and its description -->

<div class="container">


  <table class="table my-4" id="myTable" >


            <thead>
              <tr>
                <th scope="col">S.no</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>


            <tbody>

                <?php
                  
                  // Selecting records from MYSQL DB and display it in a table
                     require "fetch-display_record.php";

                  ?>
          
          </tbody>

  </table>

</div>



  <!-- Including jquery -->
 <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>



  <!-- Including Js for datatables provided by jquery -->
  <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>



  <!-- Including Js provided by Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>



   <!-- Making normal table in the form of datatable -->

    <script>

       let table = new DataTable('#myTable');  // myTable is id of above table used!!!! 

    </script> 

  <!-- Script containing Edit button functionality-->
  <script src = "/ToDo-List/Javascript/Edit_btn.js"> </script>


  <!-- Script containing Delete button functionality-->
  <script src = "/ToDo-List/Javascript/Delete_btn.js"> </script>


  </body>
</html>