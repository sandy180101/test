$(document).ready(function () {
    $("#registeration_form").validate({
        rules: {
            name: {
                required: true,
            },
            personal_email: {
                required: true,
                email: true,
            },
            company_name: {
                required: true,
            },
            official_email: {
                required: true,
                email: true,
            },
            linkedin_profile: {
                required: true,
                url: true, 
            },
            city: {
                required: true,
            },
            association_preference: {
                required: true,
            },
            iamai_member: {
                required: true,
            },
            "sectors[]": {
                required: true,
                minlength: 1,
            },
        },
        messages: {
            name: {
            required: "<span class='error-message'>Please enter a name.</span>",
        },
        personal_email: {
            required: "<span class='error-message'>Please enter an email.</span>",
            email: "<span class='error-message'>Please enter a valid email.</span>",
        },
        company_name: {
            required: "<span class='error-message'>Please enter a company name.</span>",
        },
        official_email: {
            required: "<span class='error-message'>Please enter an official email.</span>",
            email: "<span class='error-message'>Please enter a valid email.</span>",
        },
        linkedin_profile: {
            required: "<span class='error-message'>Please enter a LinkedIn profile link.</span>",
            url: "<span class='error-message'>Please enter a valid URL.</span>",
        },
        city: {
            required: "<span class='error-message'>Please enter a city.</span>",
        },
        association_preference: {
            required: "<span class='error-message'>Please select an association preference.</span>",
        },
        iamai_member: {
            required: "<span class='error-message'>Please select if you are an IAMAI member.</span>",
        },
        "sectors[]": {
            required: "<span class='error-message'>Please select at least one sector.</span>",
        },

        },

        submitHandler: function (form) {
            $("#submitbutton").hide();
            $("#display_processing").css('display', 'block');
            var data = new FormData(form);

            $.ajax({
                type: 'POST',
                url: SITE_URL + 'registeration/save',
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    var result = $.parseJSON(response);
                    if (result.status == 'error' || result.status == 'exist') {
                        $("#submitbutton").show();
                        $("#display_processing").css('display', 'none');
                    }
                    location.reload();
                },
                error: function () {
                }
            });
        },
    });
});
