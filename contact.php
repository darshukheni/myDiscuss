<!doctype html>
<html lang="en">

<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

      <link rel="shortcut icon" href="img/fav.jpg" type="image/x-icon" />


      <title>Welcome to myDiscuss Contact</title>

      <style>
      .container {
            min-height: 83.20vh;
      }
      </style>

</head>

<body>

      <?php include 'partials/_dbconnect.php';?>
      <?php include 'partials/_header.php';?>

      <div class="container my-5">
            <h1 class="text-left">Contact Us</h1>
            <form id="contact-info" method="post" role="form">
                  <div class="messages"></div>

                  <div class="controls">

                        <div class="row">
                              <div class="col-md-6">
                                    <div class="form-group">
                                          <label for="form_name">Firstname *</label>
                                          <input id="form_name" type="text" name="name" class="form-control"
                                                placeholder="Please enter your firstname *" required="required"
                                                data-error="Firstname is required.">
                                          <div class="help-block with-errors"></div>
                                    </div>
                              </div>
                              <div class="col-md-6">
                                    <div class="form-group">
                                          <label for="form_lastname">Lastname *</label>
                                          <input id="form_lastname" type="text" name="surname" class="form-control"
                                                placeholder="Please enter your lastname *" required="required"
                                                data-error="Lastname is required.">
                                          <div class="help-block with-errors"></div>
                                    </div>
                              </div>
                        </div>
                        <div class="row">
                              <div class="col-md-6">
                                    <div class="form-group">
                                          <label for="form_email">Email *</label>
                                          <input id="form_email" type="email" name="email" class="form-control"
                                                placeholder="Please enter your email *" required="required"
                                                data-error="Valid email is required.">
                                          <div class="help-block with-errors"></div>
                                    </div>
                              </div>
                              <div class="col-md-6">
                                    <div class="form-group">
                                          <label for="form_phone">Phone</label>
                                          <input id="form_phone" type="tel" name="phone" class="form-control"
                                                placeholder="Please enter your phone"
                                                data-error="Valid phone number is required.">
                                          <div class="help-block with-errors"></div>
                                    </div>
                              </div>
                        </div>
                        <div class="row">
                              <div class="col-md-12">
                                    <div class="form-group">
                                          <label for="form_message">Message *</label>
                                          <textarea id="form_message" name="message" class="form-control"
                                                placeholder="Message for me *" rows="4" required="required"
                                                data-error="Please,leave us a message."></textarea>
                                          <div class="help-block with-errors"></div>
                                    </div>
                              </div>
                              <div class="col-md-12">
                                    <input type="submit" name="ok" class="btn btn-success btn-send"
                                          value="Send message">
                              </div>
                        </div>
                        <br>
                        <div class="row">
                              <div class="col-md-12">
                                    <p class="text-muted"><strong>*</strong> These fields are required. Contact form by
                                          <a href="index.php" target="_blank">myDiscuusion</a>.
                                    </p>
                              </div>
                        </div>
                        <div class="row">
                              <div class="col-md-12">
                                    <p class="text-muted"><strong>*</strong> Fill the email box of the same email from
                                          which you are logged in. So that we can make your contact easier.</p>
                              </div>
                        </div>
                  </div>

            </form>
            <?php 
        if(isset($_POST['ok'])){
          include_once 'partials/_handleContact.php';
          $obj=new Contact();
          $res=$obj->contact_us($_POST);
          if($res==true){
            echo "<script>alert('Query successfully Submitted.Thank you')</script>";
          }
          else{
            echo "<script>alert('Something Went wrong!!')</script>";
          }
          }
      ?>
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