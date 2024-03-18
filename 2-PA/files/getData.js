$(document).ready(function(){
    $("#left").change(function() {
        var id = $(this).find(":selected").val();
        var dataString = 'empid='+ id;
        $.ajax({
            url: 'getData.php',
            dataType: "json",
            data: dataString,
            cache: false,
            success: function(empData) {
                if(empData) {
                    $("#errorMassage").addClass('d-none').text("");
                    $("#recordListing").removeClass('d-none');
                    $("#empId").text(empData.id);
                    $("#empName").text(empData.name);
                    $("#empDisplay").text(empData.display);
                    $("#empProzessor").text(empData.prozessor);
                } else {
                    $("#recordListing").addClass('d-none');
                    $("#errorMassage").removeClass('d-none').text("No record found!");
                }
            }
        });
    })
});

$(document).ready(function(){
    $("#right").change(function() {
        var id = $(this).find(":selected").val();
        var dataString = 'empid='+ id;
        $.ajax({
            url: 'getData.php',
            dataType: "json",
            data: dataString,
            cache: false,
            success: function(empData) {
                if(empData) {
                    $("#errorMassageR").addClass('d-none').text("");
                    $("#recordListingR").removeClass('d-none');
                    $("#empIdR").text(empData.id);
                    $("#empNameR").text(empData.name);
                    $("#empDisplayR").text(empData.display);
                    $("#empProzessorR").text(empData.prozessor);
                } else {
                    $("#recordListingR").addClass('d-none');
                    $("#errorMassageR").removeClass('d-none').text("No record found!");
                }
            }
        });
    })
});

$(document).ready(function(){
    $("#right").change(function() {
        var id = $(this).find(":selected").val();
        var dataString = 'empid='+ id;
        $.ajax({
            url: 'getData.php',
            dataType: "json",
            data: dataString,
            cache: false,
            success: function(empData) {
                if(empData) {
                    $("#errorMassageR").addClass('d-none').text("");
                    $("#recordListingR").removeClass('d-none');
                    $("#empIdR").text(empData.id);
                    $("#empNameR").text(empData.name);
                    $("#empDisplayR").text(empData.display);
                    $("#empProzessorR").text(empData.prozessor);
                } else {
                    $("#recordListingR").addClass('d-none');
                    $("#errorMassageR").removeClass('d-none').text("No record found!");
                }
            }
        });
    })
});