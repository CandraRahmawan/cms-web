grecaptcha.ready(function () {
    grecaptcha.execute(captchaSiteKey, {action: 'form_submit'}).then(function (token) {
        $('#g-recaptcha-response').val(token);
    });
});

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
                url: fullBaseAdminUrl + 'api/sendReview',
                type: 'POST',
                data: {
                    name: form[1].value,
                    email: form[2].value,
                    phone_number: form[3].value,
                    comment: form[4].value,
                    secret: captchaSecretKey,
                    response: $("#g-recaptcha-response").val()
                },
                beforeSend: function (xhr) {
                    $(':button').html('Sending...');
                }
            }).done(function (data) {
                alert(data);
                location.reload(true);
            }).fail(function (jqXHR) {
                $(':button').html('Submit');
                alert('Error Internal Client');
                console.log('error : ', jqXHR);
            });
        }
    });

    $("#form_contact").validate({
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
            message: {
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
            message: {
                required: "Message is required",
                maxlength: "Message max 1024 character"
            },
        },
        submitHandler: function (form) {
            $.ajax({
                url: fullBaseAdminUrl + 'api/sendMailbox',
                type: 'POST',
                data: {
                    name: form[1].value,
                    email: form[2].value,
                    phone_number: form[3].value,
                    message: form[4].value,
                    secret: captchaSecretKey,
                    response: $("#g-recaptcha-response").val()
                },
                beforeSend: function (xhr) {
                    $(':button').html('Sending...');
                }
            }).done(function (data) {
                alert(data);
                location.reload(true);
            }).fail(function (jqXHR) {
                $(':button').html('Book Consultation');
                alert('Error Internal Client');
                console.log('error : ', jqXHR);
            });
        }
    });
});

function callbackValid(id_form) {
    const isValid = $(`#${id_form}`).valid();

    if (!isValid) {
        grecaptcha.execute(captchaSiteKey, {action: 'form_submit'}).then(function (token) {
            $('#g-recaptcha-response').val(token);
        });
    }
}

function createLinkOpenNewTab(linkUrl) {
    if (linkUrl) {
        window.open(linkUrl)
    }
    return false;
}

function backButtonDetailPage(url) {
    const referrerUrl = window.document.referrer;
    if (referrerUrl == "" || referrerUrl == window.location.origin + '/') {
        window.location.href = url;
    } else {
        window.location.href = referrerUrl;
    }
}
