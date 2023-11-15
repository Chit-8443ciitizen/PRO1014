<style class="">
    .popup-wrong-user {
        background: red;
        color : white;
        padding : 20px;
        text-align: center;
        margin : 20px 0px;
    }
</style>
<section class="app-poster container-fluid">
            <div class="container">
                <h1>ĐĂNG NHẬP TÀI KHOẢN</h1>
                <ul class="app-poster__breadcrumb">
                    <li><a href="">Trang chủ</a></li>
                    <li>/<a class="app-poster__breadcrumb-active" href=""> Đăng nhập tài khoản</a></li>
                </ul>
            </div>
        </section>
     
        <section class="app-login container-fluid">
            <div class="container">
               <div class="row">
                    <div class="col">
                       <div class="app-login__form">
                            <form class="app-login__with-system" id="submit-form" action="?btn_login" method="POST">
                                <span class="app-login__with-system-title">đăng nhập tài khoản</span>
                                <span class="app-login__with-system-alert">Nếu bạn đã có tài khoản, đăng nhập tại đây</span>
                                <div class="app-login__form-detail">
                                    <label> Tên đăng nhập:</label>
                                    <input value="<?=(get_cookie("user")) ? get_cookie("user")->username : "" ?>" name="username" id="username" placeholder="Username đăng nhập*" type="text" class="">
                                    <span id="error-username" style="font-size : 13px; color : red;" class="">* Bắt buộc nhập</span>
                                </div>
                                <div class="app-login__form-detail">
                                    <label> Mật khẩu:</label>
                                    <input value="<?=(get_cookie("user")) ? get_cookie("user")->password : "" ?>" name="password" id="password" placeholder="Mật khẩu*" type="password" class="">
                                    <span id="error-password" style="font-size : 13px; color : red;" class="">* Bắt buộc nhập</span>
                                </div>
                                <div class="app-login_form-submit">
                                     <button type="submit">Đăng nhập</button>
                                     <span> <a href="<?=$SITE_URL. "/tai-khoan/?dang-ky"?>"> Đăng ký</a></span>
                                     <span> <a href="#"> Quên mật khẩu ?</a></span>
                                </div>
                               
                                <?php 
                                 if (isset($MESSAGE) && is_array($MESSAGE) && count($MESSAGE) != 0) {
                                    echo '<div class="popup-wrong-user">';
                                    foreach ($MESSAGE as $value) {
                                        echo ' <span class=""> ' . $value . '</span> <br/>';
                                    }
                                    echo '</div>';
                                }
                                ?>
                            </form>
                            <div class="app-login__with-socialite">
                                 <span> Hoặc đăng nhập bằng</span>
                                 <div class="app-login__with-socialite-icon">
                                   <a href="">
                                    <img src="https://bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg" alt="" />
                                   </a>
                                   <a href="">
                                    <img src="https://bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg" alt="" />
                                   </a>
                                    
                                 </div>
                            </div>
                       </div>
                       
                    </div>
                    <div class="col">
                       <div class="app-login__forgot-password">
                       <div class="app-login__forgot-password-title">
                        <span> Bạn quên mật khẩu? Nhập địa chỉ email để lấy lại mật khẩu qua email.</span>
                       </div>
                        <div class="app-login__form-detail">
                            <label> Email:</label>
                            <input type="email" placeholder="Email" />
                        </div>
                        <div class="btn-forgot app-login_form-submit">
                            <button>Lấy lại mật khẩu</button>     
                       </div>
                       </div>
                    </div>
               </div>
            </div>
        </section>


        <script>
    var errorPassword = $('#password').val() == '' ? true : false;
    var errorUsername = $('#username').val() == '' ? true : false;


    $(document).on("input keyup paste", "#password", function() {
        var text = $(this).val();
        if (text == '') {
            $('#error-password').text("* Không được để trống");
            $('#password').addClass("border-danger");
            errorPassword = true;
        } else if (/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/.test(text) && text[0] != ' ') {
            $('#error-password').text("");
            $('#password').removeClass("border-danger");
            errorPassword = false;
        } else {
            $('#error-password').text("* Mật khẩu phải từ 8 kí tự và bao gồm chữ cái in hoa, thường và số");
            $('#password').addClass("border-danger");
            errorPassword = true;
        }
    });
    $(document).on("input keyup paste", "#username", function() {
        var text = $(this).val();
        if (text == '') {
            $('#error-username').text("* Không được để trống");
            $('#username').addClass("border-danger");
            errorUsername = true;
        } else if (/^[a-zA-Z0-9]{2,}$/.test(text) && text[0] != ' ') {
            $('#error-username').text("");
            $('#username').removeClass("border-danger");
            errorUsername = false;
        } else {
            $('#error-username').text("* Mã khách hàng phải từ 2 ký tự và không chứa ký tự đặc biệt");
            $('#username').addClass("border-danger");
            errorUsername = true;
        }
    });



    $('#submit-form').submit(function(e) {

        if ($('#password').val() == '') {
            $('#error-password').text("* Không được để trống");
            $('#password').addClass("border-danger");
            errorPassword = true;
        }

        if ($('#username').val() == '') {
            $('#error-username').text("* Không được để trống");
            $('#username').addClass("border-danger");
            errorUsername = true;
        }
        if (errorUsername || errorPassword) return false;
        return true;
    });



    ////////////////////////////////////////////////////////
    var errorInputEmail = true;
    var errorInputOTP = true;
    var errorPasswordForgot = true;
    var emailOTP = '';

    $(document).on("input keyup paste", ".password-force-input", function() {


        var text = $(this).val();

        if (/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/.test(text)) {
            $('.error-password-force').text('');
            errorPasswordForgot = false;
        } else {
            $('.error-password-force').text('* Mật khẩu phải bao gồm chữ cái in hoa, thường và số');
            errorPasswordForgot = true;

        }
    });




    $(document).on("input keyup paste", ".otp-input", function() {


        var text = $(this).val();

        if (/^[0-9]{6}$/.test(text)) {
            $('.error-otp-force').text('');
            errorInputOTP = false;
        } else {
            $('.error-otp-force').text('* Mã OTP chỉ bao gồm 6 số');
            errorInputOTP = true;

        }
    });



    $(document).on("input keyup paste", ".force-input", function() {


        var text = $(this).val();

        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(text)) {
            $('.error-email-force').text('');
            errorInputEmail = false;
        } else {
            $('.error-email-force').text('* Email không hợp lệ');
            errorInputEmail = true;

        }
    });

    $(document).on("click", ".auth-otp", function() {
        if (errorPasswordForgot == false && errorInputOTP == false) {
            $.ajax({
                    method: "POST",
                    url: "index.php?send-otp",
                    data: {
                        type: "send-otp",
                        password: $('.password-force-input').val(),
                        otp: $('.otp-input').val(),
                        email: emailOTP
                    }
                })
                .done(function(msg) {
                    msg = JSON.parse(msg);
                    console.log(msg);
                    if (msg.status == 'error') {
                        $('.error-otp-force').text(msg.message);
                    } else {
                        window.location.replace("index.php?dang-nhap");
                    }

                });
        }
    });


    $(document).on("click", ".ajax-force", function() {
        var that = this;

        if (errorInputEmail == false) {
            $(this).html(`<i style="font-size : 23px !important" class=" fa fa-spinner fa-spin"></i>`);
            $(this).css('pointer-events', 'none');
            $.ajax({
                    method: "POST",
                    url: "index.php?authentication",
                    data: {
                        type: "authentication",
                        email: $('.force-input').val(),

                    }
                })
                .done(function(msg) {
                    $(that).html(`Xác thực`);
                    $(that).css('pointer-events', 'auto');
                    msg = JSON.parse(msg);

                    if (msg.status == 'error') {
                        $('.error-email-force').text(msg.message);
                    } else {

                        $('.ajax-force').addClass('auth-otp');
                        $('.ajax-force').removeClass('ajax-force');


                        emailOTP = $('.force-input').val();
                        $('.show-input-list').empty();
                        var template = `  <div class="app-form-container__right-form-item">
                                 <input  placeholder="Mã OTP*" type="number" class="otp-input" >
                               
 
                                 <span style="font-size : 13px; color : red;" class="error-otp-force">* Bắt buộc nhập</span>
                            </div> <br/>
                            <div class="app-form-container__right-form-item">
                                 <input  placeholder="Mật khẩu*" type="password" class="password-force-input" >
                               
 
                                 <span style="font-size : 13px; color : red;" class="error-password-force">* Bắt buộc nhập</span>
                            </div> `;
                        $('.show-input-list').append(template);
                    }

                });


        }
    });


    $(document).on("click", ".onclick-force", function() {
        $('.show-force').after(`<div class="popup-force">
                  
                  <div class="app-form-container__right-form">
                    
                    <form class="force-background" action="" >
                       <div class="popup-force-tab">
                          <span class="">Quên mật khẩu</span>
                          <span class="close-force">&times;</span>
                       </div>
                     
                        <div class="app-form-container__right-form-content">
                         <div class="show-input-list">
                         <div class="app-form-container__right-form-item">
                                 <input  placeholder="Email khôi phục*" type="email" class="force-input" name="email">
                               
 
                                 <span style="font-size : 13px; color : red;" class="error-email-force">* Bắt buộc nhập</span>
                            </div>
                         </div>
                
                        
                         
                           
                           
 
                       <div class="app-form-container__right-form-item">
                       <button type="button" class="bg-login ajax-force"> Xác thực</button>
                   </div>
 
                        </div>
                    </form>
 
                   
                </div>
                  </div>`);
    });
    $(document).on("click", ".close-force", function() {
        $('.popup-force').remove();
    });
</script>