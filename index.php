<!doctype html>
<html lang="en">

<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
            integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />


      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

      <link rel="shortcut icon" href="img/fav.jpg" type="image/x-icon" />

      <style>
      /* #ques{
        min-height: 433px;
      } */
      .card {
            margin: 50px;
      }
      </style>

      <title>Welcome to myDiscuss</title>
</head>

<body>

      <?php include 'partials/_dbconnect.php';?>
      <?php include 'partials/_header.php';?>

      <!-- slider start here -->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                  <div class="carousel-item active">
                        <img src="img/slider/slide1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                        <img src="img/slider/slide2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                        <img src="img/slider/slide3.jpg" class="d-block w-100" alt="...">
                  </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
            </a>
      </div>

      <!-- Category container starts here -->
      <div class="container my-3" id="ques">
            <h2 class="text-center my-3">myDiscussion - Categories</h2>
            <div class="row">
                  <!-- Fetch all the categories and use a loop to iterate through categories -->

                  <?php 
        // $sql = "SELECT * FROM `categories`";
        // $result = musqli_query($con, $sql);
        $result = mysqli_query($con, "SELECT * FROM categories");
        // $brand = $con->query("SELECT * FROM categories");     // you can also uncomment and use $brand in fetch assoc in next line
        while($row = mysqli_fetch_assoc($result)){    //here you can use mssqli also.
          $idd = $row['category_id'];
          $id = base64_encode(base64_encode($idd));
          $cat = $row['category_name'];
          $desc = $row['category_discription'];
          echo         
          '<div class="col-md-4 my-3">
            <div class="card" style="width: 18rem;">
            <img src="img/card/'.$cat.'.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><a href="threadlist.php?catid=' . $id. '">' . $cat . '</a></h5>
                <p class="card-text">' . substr($desc, 0, 100) . ' ...</p>
                <a href="threadlist.php?catid=' . $id. '" class="btn btn-primary">View Threads</a>
              </div>
            </div>
          </div>';
                      // https://source.unsplash.com/500x400/?' . $cat . ',coding in line number 70.
                      // <img src="img/card/' .$cat. '.jpg" class="card-img-top" alt="...">
        }
        ?>


                  <!-- Use a for loop to iterate through categories -->


            </div>
      </div>

      <?php include 'partials/_footer.php';?>



      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
      </script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
      </script>
</body>

</html>