<?php
session_start();
include "mydb.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>learntocode.com</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords"
    content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="home.php"><span> Learn to Code</span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#feature">Features</a></li>
          <li><a href="#courses">Courses</a></li>
          <li><a href="aboutus.php">About us</a></li>
          <li><a href="#contactus">Contact Us</a></li>
          <li class="dropdown show">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo "Welcome " . $_SESSION["username"] . " !"; ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="font-size: 20px; font-weight: 300;">
              <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
          </li>

        </ul>
      </div>
    </div>
  </nav>


  <!--  php for messages  -->
  <style>
    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .cardcontainer {
      padding: 2px 16px;
    }

    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      width: 300px;
      margin: auto;
      text-align: center;
      font-family: arial;
      float: left;
    }

    .title {
      color: grey;
      font-size: 18px;
    }

    img {
      width: 50%;
      height: 150px;
      border-radius: 50%;
    }

    button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
    }

    a {
      text-decoration: none;
      font-size: 22px;
      color: black;
    }

    button:hover,
    a:hover {
      opacity: 0.7;
      color: white;
    }

    .dwnldbtn {
      color: #000;
      cursor: pointer;
      font-size: 15px;
    }

    /* Darker background on mouse-over */
    .dwnldbtn:hover {
      background-color: #282828;
    }

    a,
    a:hover {
      color: #000;
      text-decoration: none;
    }

    /***********************************
Account tables
************************************/
    .tablestyle {
      text-decoration: none;
      padding: 10px;
      border: 5px solid;
      padding: 25px;
      margin-top: 35px;
      margin-left: 15px;
      margin-right: 15px;
      margin-bottom: 20px;
      text-align: center;
    }

  body {

    font-family: Arial, Helvetica, sans-serif;
  }

  .adpg {
    background: url('back1.jpg') no-repeat;
    width: 100%;
    height: 100%;
  }

  .mouse {
    transform: rotate(90deg);
    background-color: black;
  }

  .price-table:hover {
    box-shadow: 5px 5px 5px lightgrey, -5px 0px 5px lightgrey;
  }

  .dashboard {
    background-color: white;
    color: white;
    width: 20%;
    max-width: 300px;
    border: 1px solid grey;
    font-family: serif;
    /*        display: inline;*/
  }

  @media screen and (max-width: 900px) {
    .dashboard {
      display: inline;
    }

    .adminbadges {
      display: none;
    }
  }

  .adminbadges {
    position: absolute;
    float: right;
    top: 150px;
    left: 600px;
  }

  .adminimage {
    border-radius: 50%;
    width: 130px;
    height: 130px;


  }

  .adminhead {
    text-align: center;
    color: white;
    background-color: #be67db;
    width: 100%;
    height: 60px;
    padding-top: 10px;
    font-weight: bolder;
    font-size: 25px;
    text-transform: capitalize;

  }

  .modal-header {
    background-color: #be67db;

  }

  .glyphicon {
    float: left;
    margin-top: -10px;
    margin-right: -10px;
  }

  .links {
    background: white;
    color: #282828;
    /*        border: 0.5px solid #282828;*/
    font-weight: bolder;
    height: 50px;
    width: 100%;
    border-radius: 0px;
    padding-top: 10px;
    font-size: 15px;
  }

  .links:hover {
    /*        background:rgb(230,230,230) ;*/
    border-radius: 50px;
    font-size: 18px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    transition: 0.3s;

    background: #282828;
    color: white;

  }


  .links1:hover {
    background: #333399;

    border: 2px solid #000066;
  }

  .dash1 {
    float: left;
  }

  .dash2 {
    float: right;
    position: absolute;
    top: 75px;
    right: 90px;
  }


  .mybutton {
    border-radius: 0px 40px 40px 0px;
    background-color: #be67db;
    border: none;
    color: #FFFFFF;
    text-align: center;
    font-size: 28px;
    padding: 10px;
    width: 200px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
  }

  .mybutton span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
  }

  .mybutton span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
  }

  .mybutton:hover span {
    padding-right: 25px;
  }

  .mybutton:hover span:after {
    opacity: 1;
    right: 0;
  }

  .badge {
    float: right;
    margin-top: -20px;
    position: relative;
    left: 7px;



  }
</style>

  <section id="courses">
    <h2 style="text-align: center;"> YOUR COURSES </h2>
    <div class="tablestyle">
      <table id="example" class="table table-striped table-bordered"
        style="width:80%; text-align:center; margin: 0 auto;">
        <thead>
          <tr>
            <td>Sno</td>
            <td>Course Name</td>
            <td>Time of Purchase</td>
            <td>Options</td>
          </tr>
        </thead>
        <tbody>
          <?php $fname = $_SESSION["username"];
          $result = mysqli_query($conn, "select * from paymenttable where fname='$fname'")
            or die("FAILED!!");
          $count = 1;
          while ($rows = $result->fetch_assoc()) {
            ?>
            <tr>
              <td>
                <?php echo $count; ?>
              </td>
              <td>
                <?php echo $rows['coursename']; ?>
              </td>
              <td>
                <?php echo $rows['time']; ?>
              </td>
              <td>
                <a download='courses/<?php echo $rows['coursename']; ?>.pdf'
                  href='courses/<?php echo $rows['coursename']; ?>.pdf' class="dwnldbtn">Download
                  <i class='fa fa-download'></i>
                </a>
              </td>
            </tr>
            <?php
            $count++;
          }
          ?>
        </tbody>
      </table>
    </div>
  </section>

  <br><br>

  <!--Footer-->
  <footer id="footer" class="footer">
    <div class="container text-center">

      <h3>Suggestions Are Welcomed</h3>

      <form class="mc-trial row" action="review.php" method="get">
        <div class="form-group col-md-3 col-md-offset-2 col-sm-4">
          <div class=" controls">
            <input name="username" placeholder="Enter Your FullName" class="form-control" type="text">
          </div>
        </div>
        <!-- End email input -->
        <div class="form-group col-md-3 col-sm-4">
          <div class=" controls">
            <input name="comment" placeholder="Enter Your Suggestion" class="form-control" type="text">
          </div>
        </div>
        <!-- End email input -->
        <div class="col-md-2 col-sm-4">
          <p>
            <button name="submit" type="submit" class="btn btn-block btn-submit">
              Suggest this! <i class="fa fa-arrow-right"></i></button>
          </p>
        </div>
      </form>
      <!-- End newsletter-form -->
      <div class="credits">
        Designed by <a href=#>Kritika Manchanda</a>
      </div>
    </div>
  </footer>
</body>