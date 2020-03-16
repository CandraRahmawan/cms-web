$(document).ready(function () {
    $("#form_review").validate({
        rules: {
            name: {
                required: true,
                minlength: 3,
                maxlength: 50
            },
            email: {
                required: true,
                minlength: 5,
                maxlength: 60,
                email: true
            },
            phone_number: {
                required: true,
                digits: true,
                minlength: 9
            },
            comment: {
                required: true,
                maxlength: 1024
            }
        },
        messages: {
            name: {
                required: "Name is required",
                minlength: "Name min 3 character",
                maxlength: "Name max 50 character"
            },
            email: {
                required: "Email is required",
                email: "Format Email not valid",
                minlength: "Email min 5 character",
                maxlength: "Email max 60 character"
            },
            phone_number: {
                required: "Phone Number is required",
                minlength: "Phone Number min 9 digit",
                digits: "Phone Number only allow digit"
            },
            comment: {
                required: "Comment is required",
                maxlength: "Comment max 1024 character"
            },
        },
        submitHandler: function (form) {
            $.ajax({
                url: fullBaseAdminUrl + 'comments/api/sendReview',
                type: 'POST',
                data: {
                    name: form[1].value,
                    email: form[2].value,
                    phone_number: form[3].value,
                    comment: form[4].value
                },
                beforeSend: function (xhr) {
                    $(':button').html('Sending...');
                }
            }).done(function (data) {
                $(':button').html('Submit');
                alert(data);
                //location.reload();
            }).fail(function (jqXHR) {
                console.log('error', jqXHR);
            });
        }
    });
});