<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>PackyTechInc | Police</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Police <em>Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="panel.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="cases.php">Cases</a></li>
                
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading contact-heading header-text" >
     
    </div>


    <div class="find-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>OFFICERS</h2>
            </div>
          </div>
          <div class="col-md-8">
      
         
        </div>
      </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
                <div class="row">
                <?php
                    $connection = mysqli_connect('localhost','root','','regista');
                    if(isset($_POST['search'])) {
                        $searchKey = $_POST['search'];
                        $sql = "SELECT * FROM usertable WHERE word LIKE '%$searchKey%'";
                    }else{
                    $sql = "SELECT * FROM usertable";
                    $searchKey ="";
                    }
                    $result = mysqli_query($connection,$sql);
                ?>
                <form action="" method="POST">

                <div class="col-md-6">
                    <input type="text" name ="search" class='form-control' placeholder="Search By Word" value="<?php echo $searchKey; ?>">
                </div>
                <div class="col-md-6 text-left">
                    <button class="btn">Search</button>
                </div>
                 
                </form>
                <br>
                <br>
                </div>
                <table class="table table-bordered">
                    <tr>
                        <th>NAME</th>
                        <th>CODE</th>
                        <th>GENDER</th>
                    </tr>
                    <?php while($row = mysqli_fetch_object($result)) { ?>
                    <tr>
                        <td><?php echo $row->name ?></td>
                        <td><?php echo $row->code ?></td>
                        <td><?php echo $row->sex ?></td>
                    </tr>
                    <?php }?>
                    </table>
            </div>
        </div>
    </div>

    
       <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2020 Police: <a href="#">Police</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>
