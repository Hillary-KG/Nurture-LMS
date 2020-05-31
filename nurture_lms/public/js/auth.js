$(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //user login
    $("#login_form").submit(function (e) {
        e.preventDefault();
        var $data = $(this).serializeArray();
        console.log("sub data", $data);
        
        $.ajax({
            type: 'POST',
            url: '/api/auth/login',
            data: $data,
            dataType: 'json',
            beforeSend: function () {
                $("#ajax_loader").css('display', 'block');
            },

            success: function (response) {
                var $expTime = new Date(new Date().getTime() + 15 * 60 * 1000);
                console.log("success res is===>", response);
                // console.log("");
                $("#ajax_loader").css('display', 'none');
                if (!response.success) {
                    $("#login_errors").text(response.message).delay(3000).fadeOut();
                    // $(".alert").css('display', 'block');
                    location.reload();
                }
                Cookies.set('token', response.access_token, {
                    expires: $expTime
                });
                console.log("success!!!!!!!!!!!!!!!!");
                if (response.user_type == 0) {
                    location.href = '/admin';
                } else if (response.user_type == 1) {
                    location.href = '/tutor';
                }else{
                    location.href = '/student';
                }

                // location.href = '/';
            },
            error: function (jqXHR) {
                $("#ajax_loader").css('display', 'none');
                var response = $.parseJSON(jqXHR.responseText);
                console.log("res is===>", response);

                $("#login_errors").css('display', 'block').html('<div class="">' + response.error + '</div>').delay(3000).fadeOut();
            }

        });
    });

    //register tutor
    $("#register_tutor").submit(function (e) {
        e.preventDefault();
        var $data = $(this).serializeArray();
        console.log("sub data", $data);
        
        $.ajax({
            type: 'POST',
            url: '/api/auth/registerTutor',
            data: $data,
            dataType: 'json',
            beforeSend: function () {
                $("#ajax_loader").css('display', 'block');
            },

            success: function (response) {
                var $expTime = new Date(new Date().getTime() + 15 * 60 * 1000);
                console.log("success res is===>", response);
                // console.log("");
                $("#ajax_loader").css('display', 'none');
                if (!response.success) {
                    $("#login_errors").text(response.message).delay(3000).fadeOut();
                    // $(".alert").css('display', 'block');
                    location.reload();
                }
                Cookies.set('token', response.access_token, {
                    expires: $expTime
                });
                // console.log("success!!!!!!!!!!!!!!!!");

                location.href = '/';
            },
            error: function (jqXHR) {
                $("#ajax_loader").css('display', 'none');
                var response = $.parseJSON(jqXHR.responseText);
                console.log("res is===>", response);

                $("#login_errors").css('display', 'block').html('<div class="">' + response.error + '</div>').delay(3000).fadeOut();
            }

        });
    });

    //register student
    $("#register_student").submit(function (e) {
        e.preventDefault();
        var $data = $(this).serializeArray();
        console.log("sub data", $data);
        
        $.ajax({
            type: 'POST',
            url: '/api/auth/registerStudent',
            data: $data,
            dataType: 'json',
            beforeSend: function () {
                $("#ajax_loader").css('display', 'block');
            },

            success: function (response) {
                var $expTime = new Date(new Date().getTime() + 15 * 60 * 1000);
                console.log("success res is===>", response);
                // console.log("");
                $("#ajax_loader").css('display', 'none');
                if (!response.success) {
                    $("#login_errors").text(response.message).delay(3000).fadeOut();
                    // $(".alert").css('display', 'block');
                    location.reload();
                }
                Cookies.set('token', response.access_token, {
                    expires: $expTime
                });
                // console.log("success!!!!!!!!!!!!!!!!");

                location.href = '/';
            },
            error: function (jqXHR) {
                $("#ajax_loader").css('display', 'none');
                var response = $.parseJSON(jqXHR.responseText);
                console.log("res is===>", response);

                $("#login_errors").css('display', 'block').html('<div class="">' + response.error + '</div>').delay(3000).fadeOut();
            }

        });
    });

    //register admin
    $("#register_admin").submit(function (e) {
        e.preventDefault();
        var $data = $(this).serializeArray();
        console.log("sub data", $data);
        
        $.ajax({
            type: 'POST',
            url: '/api/auth/registerAdmin',
            data: $data,
            dataType: 'json',
            beforeSend: function () {
                $("#ajax_loader").css('display', 'block');
            },

            success: function (response) {
                var $expTime = new Date(new Date().getTime() + 15 * 60 * 1000);
                console.log("success res is===>", response);
                // console.log("");
                $("#ajax_loader").css('display', 'none');
                if (!response.success) {
                    $("#login_errors").text(response.message).delay(3000).fadeOut();
                    // $(".alert").css('display', 'block');
                    location.reload();
                }
                Cookies.set('token', response.access_token, {
                    expires: $expTime
                });
                // console.log("success!!!!!!!!!!!!!!!!");

                location.href = '/';
            },
            error: function (jqXHR) {
                $("#ajax_loader").css('display', 'none');
                var response = $.parseJSON(jqXHR.responseText);
                console.log("res is===>", response);

                $("#login_errors").css('display', 'block').html('<div class="">' + response.error + '</div>').delay(3000).fadeOut();
            }

        });
    });

});