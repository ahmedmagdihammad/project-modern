// Code login used ajax with jquery
$(document).ready(function () {
    $('#login').on('click', function(e){
        e.preventDefault()

        // variable request login
        var email = $('#email').val();
        var password = $('#password').val();

        // condition from email and password
        if(email == "" || password == ""){
            $('.alert').css('display', 'block');
            $('#response').html('<font color="red" margin-bottom="10px">من فضلك تحقق من مدخلاتك</font>');
            $('.login-box-msg, .register-box-msg').css('padding', 0);
        }else{
            // start ajax login
            $.ajax({
                url: 'login.php',
                method: 'POST',
                data:{
                    login: 1,
                    email: email,
                    password: password
                },
                success: function(response) {
                    // return response
                    var msg = "";
                    if(response == 0){
                        msg = '<font color="red" margin-bottom="10px">اسم المستخدم أو كلمة المرور غير صالحة</font>';
                    }else{
                        msg = '<font color="success" margin-bottom="10px">تم تسجيل دخول بنجاح</font>';
                        window.location = "index.php";
                    }
                    $('.alert').css('display', 'block');
                    $('#response').html(msg);
                    $('.login-box-msg, .register-box-msg').css('padding', 0);
                },
                dataType: 'text'
            })
        }
    })
});