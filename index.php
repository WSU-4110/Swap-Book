
	<?php 
	ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	require("includes/session.php");  ?>
	

	<?php  require("includes/mainConnection.php");  ?>
		<?php  require("includes/logIn.php");  ?>

<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
	
	<script src="https://kit.fontawesome.com/f262395e7c.js" crossorigin="anonymous"></script>
    <title>Swap-Book</title>
</head>
<body>
    <div id="wrapper">
        <div class="row h-100">
            <div class="col col-12 col-xs-12 col-sm-12 col-md-12  col-lg-3  col-xl-2" id="navCol">
                <nav class="navbar navbar-light purple lighten-4 mb-3 navbar-inverse navbar-expand-lg navbar-expand-xl mainNav h-100 align-items-start">


                    <button class="navbar-toggler alwaysShowHam purple darken-3 order-lg-2 align-top" type="button" data-toggle="collapse"
                            data-target="#hamList" id="MainHamMenu" aria-controls="navbarSupportedContent41" aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="white-text"><i class="fas fa-bars fa-1x"></i></span>
                    </button>

                    <div class="collapse navbar-collapse align-top h-100 order-lg-1" id="hamList">

                        <ul class="navbar-nav mr-auto mainNavBarNav align-top h-100">
                            <li class="nav-item leftNavItem">
                                <a class="nav-link" id="HomeButton" href="#">Home</a>
                            </li>
                            <li class="nav-item leftNavItem">
                                <a class="nav-link" id="AccountButton" href="#">About us</a>
                            </li>
                            <li class="nav-item leftNavItem">
                                <a class="nav-link" id="SwapButton" href="#">Swaps</a>
                            </li>
                        </ul>

                    </div>

                </nav>
            </div>


            <div class="col col-xs-12 col-sm-12 col-md-12 col-lg-9 col-xl-10 mh-100">

                <div class="sectionTop row">
                    <div class="col col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 ">

                        <h1 class="float-left img-fluid" id="PageTitle">Swap Book</h1>
                        <img src="images/logo_xsmall.png" class="float-right logoImg " alt="Home" />

                    </div>
                    <div class="col col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 ">
                        <div class="dropdown float-right">

                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="images/userImage.png" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" />
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#" id="UserDDRightHomeButton">Home</a>

                                <a class="dropdown-item" href="#" id="UserDDRightSwapButton">Swap</a>
                                <a class="dropdown-item" href="#" id="UserDDRightAccountButton">Account</a>
                                <a class="dropdown-item" href="#" id="UserDDRightSignOutButton">Sign Out</a>
								
                                <a class="dropdown-item" href="#" id="UserDDRightSignInButton">Sign In</a>
                            </div>
                        </div>
                    </div>

                </div>


                <div id="sectionMain" class="h-100">
				   <form id="searchForm" action="<?php $_PHP_SELF ?>" method = "POST">
						<div class="sectionTop row">
							<div class="input-group md-form form-sm form-2 pl-0">
								<input class="form-control my-0 py-1 red-border" type="text" name="searchText" id="searchText" placeholder="Search" aria-label="Search">
								<div class="input-group-append">
									<span class="input-group-text red lighten-3" id="basic-text1">
									
									<button type="submit"  id="doSearch" name="doSearch" value="yes" class="btn btn-primary"><i class="fas fa-search text-grey"
										   aria-hidden="true"></i></button>

								

										
									</span>
								</div>
							</div>
						</div>

						<div class="row radio">
							<div class="col">
								<label class="radio-inline">
									<input type="radio" name="type" id="Radios1" value="1">
									New
								</label>
							</div>
							<div class="col">
								<label class="radio-inline">
									<input type="radio" name="type" id="Radios2" value="2">
									Used
								</label>
							</div>
							<div class="col">
								<label class="radio-inline">
									<input type="radio" name="type" id="Radios3" value="3">
									E-Copy
								</label>
							</div>
						</div>
					</form>
				
					<div class="row">
					<div class="row">
					<table>
						
					<?php
					if(isset($SearchResult))
					{
						if ($SearchResult->num_rows > 0) {
							// output data of each row
							//int found = false;
							
							while($row = $SearchResult->fetch_assoc()) {
								echo "<tr>";
								echo "<td>" . $row["book_id"]. "</td><td>" . $row["type"]. "</td><td>" . $row["Title"]."</td><td>". $row["Author"].  "</td>";
							
								echo "</tr>";
							}

						} 
						else {
							echo "no records";
						}
					}
						?>
						</table>
						</div>
					</div>
                    <div class="row">
                        <p>
                            Welcome to Swap-Book.
                            <br>
                            <br>

<?php echo "hello world"; ?>
                            <br>
                            A site which will help you to give back to the Wayne State Community!
                        </p>
                    </div>
                </div>
                <div id="sectionSwaps" class="h-100">
                    <div class="row">
                        <p>
                            Filter Swaps: Last 30 days, Last six months, 2019, 2018, 2017
                            <br>
                            <br>
                            <br>
                            Thinking... TBA
                        </p>
                    </div>
					 <?php if($reviewSuccesfull)
					  {
					  	  echo "<div class=\"row\" style=\"color: red\"><h3>Review has been send </h3></div>";
					  } ?>
					  <div class="row">

					 
                        <h3>Add Review</h3>
						</div>
						  <div class="row">
						<form id="reviewForm" action="<?php $_PHP_SELF ?>" method = "POST">
						 <div class="form-group">
						  <label for="InputEmail1">Rating</label>
						  <div id="Rating" class="form-control" >
						  
						<span class="fa fa-star" id="NewRatingLevel1"></span>
						<span class="fa fa-star" id="NewRatingLevel2"></span>
						<span class="fa fa-star" id="NewRatingLevel3" ></span>
						<span class="fa fa-star" id="NewRatingLevel4"></span>
						<span class="fa fa-star" id="NewRatingLevel5"></span>
						</div>
						 <label for="bookSelect">Book</label>
						<select id="bookSelect" name="bookSelect" class="form-control" >
							<?php 
							foreach ($allBooks as $book){ 
								echo "<option value=\"".$book["book_id"]."\" >".$book["Title"]."</option>";
							} ?>
						</select>
						 <label for="userSelect" name="userSelect"></label>

						 <select id="userSelect" name="userSelect" class="form-control" >
							<?php 
							foreach ($allUsers as $user){ 
								echo "<option value=\"".$user["user_id"]."\" >".$user["username"]."</option>";
							} ?>
						</select>
                     
                         <label for="reviewDescription">Description</label>
						 <textarea rows="4" cols="50" id="reviewDescription" name="reviewDescription" class="form-control" placeholder="Enter Your Text" >
						 </textarea>
        				<input type="hidden" id="hiddenRatingValue" name="hiddenRatingValue" />
                        <input type="hidden" id="hiddenUserID" value="<?php echo $_SESSION["user_id"] ?>" name="hiddenUserID" />
						  
						<button type="submit"  id="doAddReview" name="doAddReview" value="yes" class="btn btn-primary">Submit Review</button>
					
					</div>
					
					</form>
					</div>
                </div>
                <div id="sectionAccount" class="h-100">

                    <div class="row">
                        <p>
                            Personal Info: Name, Email, Phone Number
                            <br>
                            <br>
                            <br>
                            Settings: Upadate Password, Change Username, Change Profile Picture
                            <br>
                            <br>
                            <br>
                            Member Since: 3 years 2 months
                        </p>
					

                    </div>
                </div>
				   <div id="sectionSignIn" class="h-100">
                    <div class="row">
                        <p>You are Signed Out</p>
                    </div>

                    <div class="sectionTop row">
                        <h2>Sign In</h2>
                    </div>

                    <div class="sectionTop row">

                        <form id="emailForm" action="<?php $_PHP_SELF ?>" method = "POST">
                            <div class="form-group">
                                <label for="InputEmail1">Email address</label>
                                <input type="email" id="InputEmail1" name="InputEmail1" />
								<input type="Password" id="InputPassword1" name="InputPassword1" />
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>

                            <button type="submit" class="btn btn-primary">Sign In</button>

                        </form>
                    </div>
					<?php 
					if($LogInFailed )
					{
					
						echo "<p>Invalid username or password</p>";
						
					}
					?>
                </div>
                <div id="sectionSignOut" class="h-100">
                    <div class="row">
					     <form id="signOutForm" action="<?php $_PHP_SELF ?>" method = "POST">
                            <button type="submit" id="signOut" name="signOut" value="yes" class="btn btn-primary">Sign Out</button>

                        </form>
                    </div>
                   
                </div>

            </div>
        </div>
    </div>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
	   <script type = "text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
	 <?php if(isset($_SESSION["lastTab"]))
	 { ?>"
	   <script type = "text/javascript" >
	   var lastTab = "<?php echo $_SESSION["lastTab"] ?>";
	   console.log("lastTab:  "+lastTab);
	 </script>
	 <?php } ?>
    <script src="scripts/main.js"></script>
	<script src="scripts/newRating.js"></script>
	<?php  require("includes/hideBasedOnSession.php");  ?>

</body>
</html>

<?php  require("includes/endMainConnction.php");  ?>