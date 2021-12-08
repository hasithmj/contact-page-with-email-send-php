$(document).ready(function () {

    $.validator.addMethod("phoneValidater", function(phone_number, element) {
        phone_number = phone_number.replace(/\s+/g, "");
        return this.optional(element) || phone_number.length > 9 && 
        phone_number.match(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/);
    }, "Please specify a valid phone number");

    $.validator.addMethod("emailValidator", function(email, element) {
        return email.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)
    }, "Please specify a valid email");

    $.validator.addMethod("numberValidator", function(an1, element) {
        var num1 = $("#cn1").text();
        var num2 = $("#cn2").text();
        var sum = parseInt(num1) + parseInt(num2);
        var ans = parseInt(an1);

        if (sum === ans){
            return true;
        } else {
            return false;
        }
    }, "Please enter correct answer");

    
    var contactValidate = $('#contact-form').validate({
        errorClass: "small text-danger",
        rules : {
            phone: { phoneValidater : true },
            email: { required: true, emailValidator: true },
            an1: { required: true, numberValidator: true }

        }
    }); 

    $('#contact-form').submit(function (e) { 
        e.preventDefault();
        if ($('#contact-form').valid()) {
            var fromData = $(this).serializeArray();
            var formDataObj = {};
            var info = $('#info');

            $.map(fromData, function(fieldData, i){
                formDataObj[fieldData.name] = fieldData.value;
            });
            $.ajax({
                type: "POST",
                url: "send.php",
                data: formDataObj,
                dataType: "JSON",
                success: function (response) {
                    if (response.success) {
                        info.html(response.msg).css('color', 'green').slideDown('slow');
                        // alert('YAY!! '+response.msg);
                    } else {
                        info.html(response.msg).css('color', 'green').slideDown('slow');
                        // alert('OOPS!! '+response.msg);
                    }
                },
                error : function (errorResponse) {
                    console.error(errorResponse);
                }
            });
        }

    });
});