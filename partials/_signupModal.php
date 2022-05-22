<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel"
      aria-hidden="true">
      <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                        <h5 class="modal-title" id="signupModalLabel">Signup to myDiscussio</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                        </button>
                  </div>
                  <div class="modal-body">
                        <form action="/partials/_handleSignup.php" method="post">
                              <div class="form-group">
                                    <label for="exampleInputFirstName1">First Name</label>
                                    <input type="text" class="form-control" id="signupFirstName" name="signupFirstName">
                              </div>
                              <div class="form-group">
                                    <label for="exampleInputLastName1">Last Name</label>
                                    <input type="text" class="form-control" id="signupLastName" name="signupLastName">
                              </div>
                              <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="signupEmail" name="signupEmail"
                                          aria-describedby="emailHelp">
                                    <!--             <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small  -->
                              </div>
                              <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="signupPassword"
                                          name="signupPassword">
                              </div>
                              <div class="form-group">
                                    <label for="exampleInputPassword1">Confirm Password</label>
                                    <input type="password" class="form-control" id="signupcPassword"
                                          name="signupcPassword">
                              </div>
                              <button type="submit" class="btn btn-primary">Signup</button>
                        </form>
                  </div>
                  <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
            </div>
      </div>
</div>