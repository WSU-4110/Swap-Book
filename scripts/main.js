$(document).ready(function() {

    $('#MainHamMenu').on('click', function () {
        console.log("Toggle Pressed");
        $('#navCol').toggleClass('active');
        $(this).toggleClass('active');
    });
    $("#sectionAccount").hide();
    $("#sectionSwaps").hide();
    $("#sectionSignOut").hide();
    $("#sectionSignIn").hide();
    $("#sectionMain").hide();
    $("#sectionAboutUs").hide();
    $("#sectionContactUs").hide();
    if (lastTab === "main" || lastTab === "home") {
        $("#PageTitle").html("Home");
        $("#sectionMain").show();
    }
    else if (lastTab === "contactus") {
        $("#PageTitle").html("Contact Us");
        $("#sectionContactUs").show();
    }
    else if (lastTab === "aboutus") {
        $("#PageTitle").html("About Us");
        $("#sectionAboutUs").show();
    }
    else if (lastTab === "account") {
        $("#PageTitle").html("Account");
        $("#sectionAccount").show();
    }
    else if (lastTab === "signOut") {

        $("#PageTitle").html("Sign Out");
        $("#sectionSignOut").show();
    }
    else if (lastTab === "signIn") {

        $("#PageTitle").html("Sign In");
        $("#sectionSignIn").show();
    }
    else if (lastTab === "swaps") {

        $("#PageTitle").html("User Review");
        $("#sectionSwaps").show();
    }
    else {

    }

    if (!signedIn) {
        $("#AccountButton").hide();
        $("#SwapButton").hide();
        $("#UserDDRightSwapButton").hide();
        $("#UserDDRightAccountButton").hide();
        $("#RegisterButton").show();
    }

    console.log("lastTab: " + lastTab);
});


$(".logoImg").click(function () {

    $("#HomeButton").parent().addClass("active");
    $("#AccountButton").parent().removeClass("active");
    $("#SwapButton").parent().removeClass("active");
    $("#SignOutButton").parent().removeClass("active");
    $("#SignInButton").parent().removeClass("active");

    $("#RegisterButton").parent().removeClass("active");
    $("#sectionRegister").slideUp();
    $("#sectionAccount").slideUp();
    $("#sectionMain").slideDown();
    $("#sectionSwaps").slideUp();
    $("#sectionSignOut").slideUp();
    $("#sectionSignIn").parent().slideUp();
    $("#sectionAboutUs").slideUp();
    $("#sectionContactUs").slideUp();
});

$("#UserDDRightHomeButton").click(function () {
    $("#PageTitle").html("Home");
    $("#HomeButton").parent().addClass("active");
    $("#AccountButton").parent().removeClass("active");
    $("#SwapButton").parent().removeClass("active");
    $("#SignOutButton").parent().removeClass("active");
    $("#SignInButton").parent().removeClass("active");

    $("#RegisterButton").parent().removeClass("active");
    $("#sectionRegister").slideUp();
    $("#sectionAccount").slideUp();
    $("#sectionMain").slideDown();
    $("#sectionSwaps").slideUp();
    $("#sectionSignOut").slideUp();
    $("#sectionSignIn").slideUp();
    $("#sectionAboutUs").slideUp();
    $("#sectionContactUs").slideUp();
   // $("#sectionSignIn").parent().slideUp();
});

$("#UserDDRightHomeButton").click(function () {
    $("#PageTitle").html("Home");
    $("#HomeButton").parent().addClass("active");
    $("#AccountButton").parent().removeClass("active");
    $("#SwapButton").parent().removeClass("active");
    $("#SignOutButton").parent().removeClass("active");
    $("#SignInButton").parent().removeClass("active");

    $("#RegisterButton").parent().removeClass("active");
    $("#sectionRegister").slideUp();
    $("#sectionAccount").slideUp();
    $("#sectionMain").slideDown();
    $("#sectionSwaps").slideUp();
    $("#sectionSignOut").slideUp();
    $("#sectionSignIn").slideUp();
    $("#sectionAboutUs").slideUp();
    $("#sectionContactUs").slideUp();

});

$("#UserDDRightAccountButton").click(function () {
    $("#PageTitle").html("Account");
    $("#HomeButton").parent().removeClass("active");
    $("#AccountButton").parent().addClass("active");
    $("#SwapButton").parent().removeClass("active");
    $("#SignOutButton").parent().removeClass("active");
    $("#SignInButton").parent().removeClass("active");

    $("#RegisterButton").parent().removeClass("active");
    $("#sectionRegister").slideUp();
    $("#sectionAccount").slideDown();
    $("#sectionMain").slideUp();
    $("#sectionSwaps").slideUp();
    $("#sectionSignOut").slideUp();
    $("#sectionSignIn").slideUp();
    $("#sectionAboutUs").slideUp();
    $("#sectionContactUs").slideUp();

});

$("#UserDDRightSwapButton").click(function () {
    $("#PageTitle").html("User Review");
    $("#HomeButton").parent().removeClass("active");
    $("#AccountButton").parent().removeClass("active");
    $("#SwapButton").parent().addClass("active");
    $("#SignOutButton").parent().removeClass("active");
    $("#SignInButton").parent().removeClass("active");

    $("#RegisterButton").parent().removeClass("active");
    $("#sectionRegister").slideUp();
    $("#sectionAccount").slideUp();
    $("#sectionMain").slideUp();
    $("#sectionSwaps").slideDown();
    $("#sectionSignOut").slideUp();
    $("#sectionSignIn").slideUp();
    $("#sectionAboutUs").slideUp();
    $("#sectionContactUs").slideUp();

});

$("#UserDDRightSignOutButton").click(function () {
    $("#PageTitle").html("Sign Out");
    $("#HomeButton").parent().removeClass("active");
    $("#AccountButton").parent().removeClass("active");
    $("#SwapButton").parent().removeClass("active");
    $("#SignOutButton").parent().addClass("active");
    $("#SignInButton").parent().removeClass("active");

    $("#RegisterButton").parent().removeClass("active");
    $("#sectionRegister").slideUp();
    $("#sectionAccount").slideUp();
    $("#sectionMain").slideUp();
    $("#sectionSwaps").slideUp();
    $("#sectionSignOut").slideDown();
    $("#sectionSignIn").slideUp();
    $("#sectionAboutUs").slideUp();
    $("#sectionContactUs").slideUp();
});

$("#UserDDRightSignInButton").click(function () {
    $("#PageTitle").html("Sign In");
    $("#HomeButton").parent().removeClass("active");
    $("#AccountButton").parent().addClass("active");
    $("#SwapButton").parent().removeClass("active");
    $("#SignOutButton").parent().addClass("active");
    $("#SignInButton").parent().addClass("active");

    $("#RegisterButton").parent().removeClass("active");
    $("#sectionRegister").slideUp();
    $("#sectionAccount").slideUp();
    $("#sectionMain").slideUp();
    $("#sectionSwaps").slideUp();
    $("#sectionSignOut").slideUp();
    $("#sectionSignIn").slideDown();
    $("#sectionAboutUs").slideUp();
    $("#sectionContactUs").slideUp();
});



$("#HomeButton").click(function () {
    $("#PageTitle").html("Home");
    $("#HomeButton").parent().addClass("active");
    $("#AccountButton").parent().removeClass("active");
    $("#SwapButton").parent().removeClass("active");
    $("#SignOutButton").parent().removeClass("active");
    $("#SignInButton").parent().removeClass("active");
    $("#sectionAccount").slideUp();
    $("#sectionMain").slideDown();
    $("#sectionSwaps").slideUp();
    $("#sectionSignOut").slideUp();
    $("#sectionSignIn").slideUp();
});

$("#AccountButton").click(function () {
    $("#PageTitle").html("Account");
    $("#HomeButton").parent().removeClass("active");
    $("#AccountButton").parent().addClass("active");
    $("#SwapButton").parent().removeClass("active");
    $("#SignOutButton").parent().removeClass("active");
    $("#SignInButton").parent().removeClass("active");
    $("#sectionAccount").slideDown();
    $("#sectionMain").slideUp();
    $("#sectionSwaps").slideUp();
    $("#sectionSignOut").slideUp();
    $("#sectionSignIn").slideUp();
});

$("#ContactUs").click(function () {
    $("#PageTitle").html("Contact Us");
    $("#HomeButton").parent().removeClass("active");
    $("#AccountButton").parent().removeClass("active");
    $("#ContactUs").parent().addClass("active");
    $("#SignOutButton").parent().removeClass("active");
    $("#SignInButton").parent().removeClass("active");
    $("#sectionAccount").slideUp();
    $("#sectionMain").slideUp();
    $("#sectionContactUs").slideDown();
    $("#sectionSignOut").slideUp();
    $("#sectionSignIn").slideUp();
});

$("#SignOutButton").click(function () {
    $("#PageTitle").html("Sign Out");
    $("#HomeButton").parent().removeClass("active");
    $("#AccountButton").parent().removeClass("active");
    $("#SwapButton").parent().removeClass("active");
    $("#SignOutButton").parent().addClass("active");
    $("#SignInButton").parent().removeClass("active");
    $("#sectionAccount").slideUp();
    $("#sectionMain").slideUp();
    $("#sectionSwaps").slideUp();
    $("#sectionSignOut").slideDown();
    $("#sectionSignIn").slideUp();
<<<<<<< HEAD
});

$("#SignInButton").click(function () {
    $("#PageTitle").html("Sign In");
    $("#HomeButton").parent().removeClass("active");
    $("#AccountButton").parent().removeClass("active");
    $("#SwapButton").parent().removeClass("active");
    $("#SignOutButton").parent().removeClass("active");
    $("#SignInButton").parent().addClass("active");
    $("#sectionAccount").slideUp();
    $("#sectionMain").slideUp();
    $("#sectionSwaps").slideUp();
    $("#sectionSignOut").slideUp();
    $("#sectionSignIn").slideDown();
    console.log("what the fuck???");
});

=======
});

$("#SignInButton").click(function () {
    $("#PageTitle").html("Sign In");
    $("#HomeButton").parent().removeClass("active");
    $("#AccountButton").parent().removeClass("active");
    $("#SwapButton").parent().removeClass("active");
    $("#SignOutButton").parent().removeClass("active");
    $("#SignInButton").parent().addClass("active");
    $("#sectionAccount").slideUp();
    $("#sectionMain").slideUp();
    $("#sectionSwaps").slideUp();
    $("#sectionSignOut").slideUp();
    $("#sectionSignIn").slideDown();
    console.log("what the blank??");
});

>>>>>>> d60173acd7f766115cf5bc41383c3ed069a85924


function checkWayneEmail(email) {
    var valid = email.endsWith("@wayne.edu");
    if (!valid) {
        $("#emailHelp").html("Must enter a wayne.edu email address")
    }
    else {
        $("#HomeButton").parent().addClass("active");
        $("#AccountButton").parent().removeClass("active");
        $("#SwapButton").parent().removeClass("active");
        $("#SignOutButton").parent().removeClass("active");
        $("#sectionAccount").slideUp();
        $("#sectionMain").slideDown();
        $("#sectionSwaps").slideUp();
        $("#sectionSignOut").slideUp();
    }
    return valid;
}