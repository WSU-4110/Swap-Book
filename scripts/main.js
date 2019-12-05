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

    $("#RegisterButton").parent().removeClass("active");
    $("#sectionRegister").slideUp();
    $("#sectionAccount").slideUp();
    $("#sectionMain").slideDown();
    $("#sectionSwaps").slideUp();
    $("#sectionSignOut").slideUp();
    $("#sectionAboutUs").slideUp();
    $("#sectionSignIn").slideUp();
    $("#sectionContactUs").slideUp();
});


$("#RegisterButton").click(function () {
    $("#PageTitle").html("Register");
    $("#RegisterButton").parent().addClass("active");
    $("#HomeButton").parent().removeClass("active");
    $("#AboutUsButton").parent().removeClass("active");
    $("#AccountButton").parent().removeClass("active");
    $("#SwapButton").parent().removeClass("active");
    $("#SignOutButton").parent().removeClass("active");
    $("#SignInButton").parent().removeClass("active");

    $("#sectionRegister").slideDown();
    $("#sectionAboutUs").slideUp();
    $("#sectionAccount").slideUp();
    $("#sectionMain").slideUp();
    $("#sectionSwaps").slideUp();
    $("#sectionSignOut").slideUp();
    $("#sectionSignIn").slideUp();
    $("#sectionContactUs").slideUp();
});

$("#AboutUsButton").click(function () {
    $("#PageTitle").html("About Us");
    $("#HomeButton").parent().removeClass("active");
    $("#AboutUsButton").parent().addClass("active");
    $("#AccountButton").parent().removeClass("active");
    $("#SwapButton").parent().removeClass("active");
    $("#SignOutButton").parent().removeClass("active");
    $("#SignInButton").parent().removeClass("active");

    $("#RegisterButton").parent().removeClass("active");
    $("#sectionRegister").slideUp();
    $("#sectionAboutUs").slideDown();
    $("#sectionAccount").slideUp();
    $("#sectionMain").slideUp();
    $("#sectionSwaps").slideUp();
    $("#sectionSignOut").slideUp();
    $("#sectionSignIn").slideUp();
    $("#sectionContactUs").slideUp();
});

$("#ContactUs").click(function () {
    $("#PageTitle").html("Contact Us");
    $("#HomeButton").parent().removeClass("active");
    $("#AccountButton").parent().removeClass("active");
    $("#ContactUs").parent().addClass("active");
    $("#SignOutButton").parent().removeClass("active");
    $("#SignInButton").parent().removeClass("active");

    $("#RegisterButton").parent().removeClass("active");
    $("#sectionRegister").slideUp();
    $("#sectionAccount").slideUp();
    $("#sectionMain").slideUp();
    $("#sectionContactUs").slideDown();
    $("#sectionSignOut").slideUp();
    $("#sectionSignIn").slideUp();
    $("#sectionAboutUs").slideUp();
});

$("#SignOutButton").click(function () {
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
    $("#sectionContactUs").slideUp();
    $("#sectionAboutUs").slideUp();
});

$("#SignInButton").click(function () {
    $("#PageTitle").html("Sign In");
    $("#HomeButton").parent().removeClass("active");
    $("#AccountButton").parent().removeClass("active");
    $("#SwapButton").parent().removeClass("active");
    $("#SignOutButton").parent().removeClass("active");
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

$("#SignInButton").click(function () {
    $("#PageTitle").html("Sign In");
    $("#HomeButton").parent().removeClass("active");
    $("#AccountButton").parent().removeClass("active");
    $("#SwapButton").parent().removeClass("active");
    $("#SignOutButton").parent().removeClass("active");
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
        $("#sectionAboutUs").slideUp();
        $("#sectionContactUs").slideUp();
        $("#sectionRegister").slideUp();
    }
	
    return valid;
}

const img = "images\logo_xsmall.png";
const text = "Swap Request granted!";
const title = "Swap Book";
const options = {
    body: text,
    icon: "images\logo_xsmall.png",
    vibrate: [200, 100, 200],
    tag: "NEW SWAP!",
    image: img,
    badge: "https://swap-book.com",
    actions: [{ action: "Detail", title: "View", icon: "https://via.placeholder.com/128/ff0000" }]
};

navigator.serviceWorker.ready.then(function (serviceWorker) {
    serviceWorker.showNotification(title, options);
});
}

import {
    isPushNotificationSupported,
    sendNotification,
    initializePushNotifications,
    registerServiceWorker
} from "./push-notifications.js";
const pushNotificationSuported = isPushNotificationSupported();
if (pushNotificationSuported) {
    registerServiceWorker();
    initializePushNotifications().then(function (consent) {
        if (consent === 'granted') {
            sendNotification();
        }
    });
}