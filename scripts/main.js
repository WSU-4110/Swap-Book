
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
<<<<<<< HEAD
    $("#sectionMain").hide();
    if (lastTab === "main") {
        $("#sectionMain").show();
    }
    else if (lastTab === "account") {
        $("#sectionAccount").show();
    }
    else if (lastTab === "signOut") {
        $("#sectionSignOut").show();
    }
    else if (lastTab === "signIn") {
        $("#sectionSignIn").show();
    }
    else if (lastTab === "swaps") {
        $("#sectionSwaps").show();
    }
    else {

    }

    console.log("lastTab: " + lastTab);
=======
>>>>>>> d60173acd7f766115cf5bc41383c3ed069a85924
});

$(".logoImg").click(function () {

    $("#HomeButton").parent().addClass("active");
    $("#AccountButton").parent().removeClass("active");
    $("#SwapButton").parent().removeClass("active");
    $("#SignOutButton").parent().removeClass("active");
    $("#SignInButton").parent().removeClass("active");
<<<<<<< HEAD
    $("#sectionAccount").slideUp();
    $("#sectionMain").slideDown();
    $("#sectionSwaps").slideUp();
    $("#sectionSignOut").slideUp();
    $("#sectionSignIn").parent().slideUp();
});

$("#UserDDRightHomeButton").click(function () {
    $("#PageTitle").html("Home");
    $("#HomeButton").parent().addClass("active");
    $("#AccountButton").parent().removeClass("active");
    $("#SwapButton").parent().removeClass("active");
    $("#SignOutButton").parent().removeClass("active");
    $("#SignInButton").parent().removeClass("active");
=======
>>>>>>> d60173acd7f766115cf5bc41383c3ed069a85924
    $("#sectionAccount").slideUp();
    $("#sectionMain").slideDown();
    $("#sectionSwaps").slideUp();
    $("#sectionSignOut").slideUp();
<<<<<<< HEAD
    $("#sectionSignIn").slideUp();
});
=======
    $("#sectionSignIn").parent().slideUp();
});

$("#UserDDRightHomeButton").click(function () {
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

>>>>>>> d60173acd7f766115cf5bc41383c3ed069a85924
$("#UserDDRightAccountButton").click(function () {
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

$("#UserDDRightSwapButton").click(function () {
    $("#PageTitle").html("Swap");
    $("#HomeButton").parent().removeClass("active");
    $("#AccountButton").parent().removeClass("active");
    $("#SwapButton").parent().addClass("active");
    $("#SignOutButton").parent().removeClass("active");
    $("#SignInButton").parent().removeClass("active");
    $("#sectionAccount").slideUp();
    $("#sectionMain").slideUp();
    $("#sectionSwaps").slideDown();
    $("#sectionSignOut").slideUp();
    $("#sectionSignIn").slideUp();

});

$("#UserDDRightSignOutButton").click(function () {
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
});

$("#UserDDRightSignInButton").click(function () {
    $("#PageTitle").html("Sign In");
    $("#HomeButton").parent().removeClass("active");
    $("#AccountButton").parent().addClass("active");
    $("#SwapButton").parent().removeClass("active");
    $("#SignOutButton").parent().addClass("active");
    $("#SignInButton").parent().addClass("active");
    $("#sectionAccount").slideUp();
    $("#sectionMain").slideUp();
    $("#sectionSwaps").slideUp();
    $("#sectionSignOut").slideUp();
    $("#sectionSignIn").slideDown();
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