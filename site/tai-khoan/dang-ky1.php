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
                <h1>ĐĂNG KÝ TÀI KHOẢN</h1>
                <ul class="app-poster__breadcrumb">
                    <li><a href="">Trang chủ</a></li>
                    <li>/<a class="app-poster__breadcrumb-active" href=""> Đăng ký tài khoản</a></li>
                </ul>
            </div>
        </section>
     
        <section class="app-login container-fluid">
            <form class="container" id="submit-form" method="POST" action="?btn_register">
               <div class="row">
                    <div class="col">
                       <div class="app-login__form app-login__form-custom-register">
                            <div class="app-login__with-system">
                                <span class="app-login__with-system-title">đăng ký tài khoản</span>
                                <span class="app-login__with-system-alert">Nếu chưa có tài khoản, đăng ký tại đây</span>
                                <div class="app-login__form-detail">
                                    <label> Tên khách hàng:</label>
                                    <input name="ten_khach_hang" id="name" placeholder="Họ và tên*" type="text" class="">
                                    <span id="error-ten-khach-hang" style="font-size : 13px; color : red;" class="">* Bắt buộc nhập</span>
                                </div>
                                <div class="app-login__form-detail">
                                    <label> Tên đăng nhập:</label>
                                    <input name="ma_khach_hang" id="ma-khach-hang" placeholder="Tên đăng nhập*" type="text" class="">
                                    <span id="error-ma-khach-hang" style="font-size : 13px; color : red;" class="">* Bắt buộc nhập</span>
                                </div>
                            </div>
                           
                       </div>
                       
                    </div>
                    <div class="col">
                       <div class="app-login__register-right app-login__register-right-register">
                        <div class="app-login__with-system">
                           
                            <div class="app-login__form-detail">
                                <label> Email:</label>
                                <input name="email" id="email" placeholder="Email đăng nhập*" type="email" class="">
                                <span id="error-email" style="font-size : 13px; color : red;" class="">* Bắt buộc nhập</span>
                            </div>
                            <div class="app-login__form-detail">
                                <label> Mật khẩu:</label>
                                <input name="mat_khau" id="password" placeholder="Mật khẩu*" type="password" class="">
                                <span id="error-password" style="font-size : 13px; color : red;" class="">* Bắt buộc nhập</span>
                            </div>
                        </div>
                       
                     
                       </div>
                    </div>
               </div>
               <div class="clear-fix"></div>
               
               <div class="app-login_form-submit">
                <button type="submit" >Đăng ký</button>
                <span> <a href="<?=$SITE_URL. "/tai-khoan/?dang-nhap"?>"> Đăng nhập</a></span>
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
            </form>
        </section>



<script>
    var errorMaKhachHang = $('#ma-khach-hang').val() == '' ? true : false;
    var errorPassword = $('#password').val() == '' ? true : false;
    var errorEmail = $('#email').val() == '' ? true : false;
    var errorName = $('#name').val() == '' ? true : false;

    $(document).on("input keyup paste", "#ma-khach-hang", function() {
        var text = $(this).val();
        if (text == '') {
            $('#error-ma-khach-hang').text("* Không được để trống");
            $('#ma-khach-hang').addClass("border-danger");
            errorMaKhachHang = true;
        } else if (/^[a-zA-Z0-9]{2,}$/.test(text) && text[0] != ' ') {
            $('#error-ma-khach-hang').text("");
            $('#ma-khach-hang').removeClass("border-danger");
            errorMaKhachHang = false;
        } else {
            $('#error-ma-khach-hang').text("* Mã khách hàng phải từ 2 ký tự và không chứa ký tự đặc biệt");
            $('#ma-khach-hang').addClass("border-danger");
            errorMaKhachHang = true;
        }
    });
    $(document).on("input keyup paste", "#name", function() {
        var text = $(this).val();
        if (text == '') {
            $('#error-ten-khach-hang').text("* Không được để trống");
            $('#name').addClass("border-danger");
            errorName = true;
        } else if (/^[a-zA-Z0-9ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ\s]{2,27}$/.test(text) && text[0] != ' ') {
            $('#error-ten-khach-hang').text("");
            $('#name').removeClass("border-danger");
            errorName = false;
        } else {
            $('#error-ten-khach-hang').text("* Tên khách hàng phải từ 2 đến 27 ký tự trở lên và không chứa ký tự đặc biệt");
            $('#name').addClass("border-danger");
            errorName = true;
        }
    });
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
    $(document).on("input keyup paste", "#email", function() {
        var text = $(this).val();
        if (text == '') {
            $('#error-email').text("* Không được để trống");
            $('#email').addClass("border-danger");
            errorEmail = true;
        } else if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(text) && text[0] != ' ') {
            $('#error-email').text("");
            $('#email').removeClass("border-danger");
            errorEmail = false;
        } else {
            $('#error-email').text("* Email không hợp lệ");
            $('#email').addClass("border-danger");
            errorEmail = true;
        }
    });



    $('#submit-form').submit(function(e) {
        
        if ($('#ma-khach-hang').val() == '') {
            $('#error-ma-khach-hang').text("* Không được để trống");
            $('#ma-khach-hang').addClass("border-danger");
            errorMaKhachHang = true;
        }
        if ($('#password').val() == '') {
            $('#error-password').text("* Không được để trống");
            $('#password').addClass("border-danger");
            errorPassword = true;
        }
        if ($('#name').val() == '') {
            $('#error-ten-khach-hang').text("* Không được để trống");
            $('#name').addClass("border-danger");
            errorName = true;
        }

        if ($('#email').val() == '') {
            $('#error-email').text("* Không được để trống");
            $('#email').addClass("border-danger");
            errorEmail = true;
        }
        if (errorName || errorEmail || errorPassword || errorMaKhachHang) return false;
        return true;
    });
</script>