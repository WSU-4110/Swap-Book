$("#NewRatingLevel1").click(function() {
    handleRatingInput(1);
});

$("#NewRatingLevel2").click(function() {
    handleRatingInput(2);
});

$("#NewRatingLevel3").click(function() {
    handleRatingInput(3);
});

$("#NewRatingLevel4").click(function() {
    handleRatingInput(4);
});

$("#NewRatingLevel5").click(function() {
    handleRatingInput(5);
});

function handleRatingInput(ratingLevel) {
    $("#hiddenRatingValue").val(ratingLevel);
    $("#NewRatingLevel1").removeClass("StarChecked");
    $("#NewRatingLevel2").removeClass("StarChecked");
    $("#NewRatingLevel3").removeClass("StarChecked");
    $("#NewRatingLevel4").removeClass("StarChecked");
    $("#NewRatingLevel5").removeClass("StarChecked");
    $("#NewRatingLevel1").addClass("StarChecked");

    if (ratingLevel > 1) {
        $("#NewRatingLevel2").addClass("StarChecked");
    }
    if (ratingLevel > 2) {
        $("#NewRatingLevel3").addClass("StarChecked");
    }
    if (ratingLevel > 3) {
        $("#NewRatingLevel4").addClass("StarChecked");
    }
    if (ratingLevel === 5) {
        $("#NewRatingLevel5").addClass("StarChecked");
    }

}
