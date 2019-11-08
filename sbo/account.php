<!DOCTYPE html>
<html lang="en">

<head>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
    </script>
    <! [endif]-->
    <title>Swap Book :: Textbook Trades for WSU Students</title>
    <meta charset="UTF-8">
    <!-- If IE use the latest rendering engine -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Set the page to the width of the device and set the zoon level -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
</head>

    <?php include('sitenav.php'); ?>
    <body>
        <main>
        <hr>
            <div class="container bootstrap snippet">
                <div class="row">
                    <div class="col-sm-10"><h3>bb8648@wayne.edu</h3></div>
                </div>
                <div class="row">
                    <div class="col-sm-3"><!--left col-->
                        <div class="text-center">
                            <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar"><h6>Upload a photo...</h6>
                            <input type="file" class="text-center center-block file-upload">
                        </div></hr><br>
                    
                    <div class="panel panel-default">
                    </div>
                    
                    <ul class="list-group">
                        <li class="list-group-item text-muted">Activity<i class="fa fa-dashboard fa-1x"></i></li>
                        <li class="list-group-item text-right"><span class="pull-left"><strong>Swaps</strong></span>5</li>
                        <li class="list-group-item text-right"><span class="pull-left"><strong>Reviews</strong></span>4.97 &#x2605</li>
                        <li class="list-group-item text-right"><span class="pull-left"><strong>Faves</strong></span>17</li>
                    </ul>
                </div><!--/col-3-->
                <div class="col-sm-9">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">Profile</a></li>
                        <li><a data-toggle="tab" href="#settings">Security</a></li>
                    </ul>
                    
                    <div class="tab-content">
                        <div class="tab-pane active" id="home">
                            
                            <h3>Profile Information</h3>
                            <p>Your name and phone number will not appear anywhere else on SwapBook.</p>
                            <hr>
                            
                            <form class="form" action="##" method="post" id="registrationForm">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="first_name"><h4>First Name</h4></label>
                                        <input type="text" class="form-control" name="first_name" id="first_name" placeholder="// will display first name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="last_name"><h4>Last Name</h4></label>
                                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="// will display last name">
                                    </div>
                                </div>
                                <div class="form-group">
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="// will display phone">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="// will display email - read only" readonly>
                          </div>
                      </div>

                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit" style="background-color:#5085a5; border:none"><i class="glyphicon glyphicon-ok-sign"></i> Update Profile</button>
                               	<button class="btn btn-lg" type="reset" style="border:none"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
              
              <hr>
              
             </div><!--/tab-pane-->
             
             <div class="tab-pane" id="settings">
                 <h3>Change Password</h3>
                 <p>Password must be at least 8 characters including a number and a uppercase letter.</p>
                 <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          <div class="col-md-7">
                              <label for="currPw"><h4>Current Password</h4></label>
                              <input type="password" class="form-control" name="currPw" id="password" title="Required field">
                          </div>
                      </div>
                      
                      <div class="form-group">
                          <div class="col-md-7">
                              <label for="newPw"><h4>New Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" title="Required field">
                          </div>
                      </div>
                      
                      <div class="form-group">
                          <div class="col-md-7">
                            <label for="password2"><h4>Confirm New Password</h4></label>
                              <input type="password" class="form-control" name="password2" id="password2" title="Required field">
                          </div>
                      </div>
                      
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit" style="background-color:#5085a5; border:none"><i class="glyphicon glyphicon-ok-sign"></i> Update Password</button>
                            </div>
                      </div>
              	</form>
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
                                                      
            
            
            
            
        </main>
    </body>
</html>

