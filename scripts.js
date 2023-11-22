$(document).ready(function () {
    $("#submitBtn").click(function () {
        // Gather data from the form
        var petName = $("#petName").val();
        var petType = $("#petType").val();
        var petPrice = $("#petPrice").val();

        // AJAX request to save data in the database
        $.ajax({
            type: "POST",
            url: "save_pet.php",
            data: { petName: petName, petType: petType, petPrice: petPrice },
            success: function (response) {
                alert(response); // Show success or error message
                // You can also update the pet list on the page here
            }
        });
    });
});
