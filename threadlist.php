<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <link rel="shortcut icon" href="img/fav.jpg" type="image/x-icon"/>


    <style>
      #ques{
        min-height: 433px;
      }
      .navbar{
        position: fixed;
        top: 0;
        width: 100%;
      }
      .container{
        padding-top: 66px;
      }
      @media(max-width: 768px){
        .navbar{
        position: absolute;
        top: 0;
        width: 100%;
      }
      }
    </style>
     

    <title>Welcome to myDiscussion</title>
  </head>
  <body>
    
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?> 
    <?php
    $idd = $_GET['catid'];
    $id = base64_decode(base64_decode($idd));
    // $sql = "SELECT * FROM `categories` WHERE category_id = $id";
    $result = mysqli_query($con, "SELECT * FROM `categories` WHERE category_id=$id");
        // $brand = $con->query("SELECT * FROM categories");     // you can also uncomment and use $brand in fetch assoc in next line
        while($row = mysqli_fetch_assoc($result)){
          $noResult = false;
          $catname = $row['category_name'];
          $catdesc = $row['category_discription'];
        }  
    ?>

    <?php
    $showAlert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method=='POST') {
      # Insert into thread database
      $th_title = $_POST['title'];
      $th_desc = $_POST['desc'];

      $th_title = str_replace("<", "&lt;", $th_title);
      $th_title = str_replace(">", "&gt;", $th_title);

      $th_desc = str_replace("<", "&lt;", $th_desc);
      $th_desc = str_replace(">", "&gt;", $th_desc);

      $sno = $_POST['sno'];
      $result = mysqli_query($con, "INSERT INTO `threads` (`thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES ('$th_title', '$th_desc', '$id', '$sno', CURRENT_TIME())");
      $showAlert = true;
      if($showAlert){
        echo '
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your thread has been added! Please wait for community to respond.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
        ' ;
      }
    }
    ?>


    <!-- Category container starts here -->
    <div class="container my-4">
      <div class="jumbotron">
        <h1 class="display-4">Welcome to <?php echo $catname;?> forums!</h1>
        <p class="lead"><?php echo $catdesc;?></p>
        <hr class="my-4">
        <p>This is a peer to peer forum.<br>
          1) No Spam / Advertising / Self-promote in the forums is not allowed.<br>
          2) Do not post copyright-infringing material.<br>
          3) Do not post “offensive” posts, links or images.<br>
          4) Do not cross post questions.<br>
          5) Remain respectful of other members at all times</p>
        <a class="btn btn-success btn-lg" href="#" role="button">Learn more</a>
      </div>
    </div>

    <?php
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
      echo '<div class="container">
        <h1 class="py-2">Start Discussion</h1>

        <form action="'. $_SERVER["REQUEST_URI"] . '"method="post"?>
          <div class="form-group">
            <label for="exampleInputProblem">Problem Title</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="title">
            <small id="title" class="form-text text-muted">Keep your title as short as crisp as possible.</small>
          </div>
          <input type="hidden" name="sno" value="'. $_SESSION["sno"]. '">
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Elaborate Your Concern</label>
            <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>';
    }
    else{
      echo '
        <div class="container">
          <h1 class="py-2">Start Discussion</h1>
          <p class="lead">You are not logged in. Please login to be able to start a Discussion.</p>
        </div>
      ';
    }
    ?>

    <div class="container mb-5" id="ques">
      <h1 class="py-2">Browse Questions</h1>
      <?php
        $id = $_GET['catid'];
        $id = base64_decode(base64_decode($idd));
        // $sql = "SELECT * FROM `threads` WHERE thread_cat__id = $id";
        $result = mysqli_query($con, "SELECT * FROM `threads` WHERE thread_cat_id=$id");
            // $brand = $con->query("SELECT * FROM categories");     // you can also uncomment and use $brand in fetch assoc in next line
        $noResult = true;
            while($row = mysqli_fetch_assoc($result)){
              $noResult = false;
              $idd = $row['thread_id'];
              $id = base64_encode(base64_encode($idd));
              $title = $row['thread_title'];
              $desc = $row['thread_desc'];
              $thread_time = $row['timestamp'];
              $thread_user_id = $row['thread_user_id'];
              
              $sql2 = "SELECT user_first_name FROM `users` WHERE sno='$thread_user_id'";
              $result2 = mysqli_query($con, $sql2);
              $row2 = mysqli_fetch_assoc($result2);

              $sql3 = "SELECT user_last_name FROM `users` WHERE sno='$thread_user_id'";
              $result3 = mysqli_query($con, $sql3);
              $row3 = mysqli_fetch_assoc($result3);


              echo '
              <div class="border-bottom">
              <div class="media my-3">
                <img src="img/userdefault.png" width="54px" class="mr-3" alt="...">
                <div class="media-body">'.
                   '<h5 class="mt-0"> <a class="text-dark" href="thread.php?threadid=' . $id. '">' .$title . '</a></h5>
                  ' .$desc. '<br><br><br><br><div class="font-weight-bold my-0" id="thlist"> Shared by : : '. $row2['user_first_name'] .' '. $row3['user_last_name'] .' at '. $thread_time. '</div></div>'.''.
              '</div>
              </div>';
            }

            // echo var_dump($noResult);
            if($noResult){
              echo 
              '<div class="jumbotron jumbotron-fluid">
                <div class="container">
                  <h1 class="display-4">No Threads Found!</h1>
                  <p class="lead">Be the first person to ask a Questions</p>
                </div>
              </div>';
            }
      ?>
    </div>

    <?php include 'partials/_footer.php';?> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>