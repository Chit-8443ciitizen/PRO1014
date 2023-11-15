<?php



$user = false;
if (!empty($_SESSION["user"])) {
    $user = $_SESSION["user"];
}
//var_dump($user);die();

//var_dump($dataCity);die();
?>

<main>

    <div class="show-popup-state"></div>
    <div class="container">
        <div id="pay">
            <form action="#" method="post">
                <div class="pay-inf-customer ">
                    <div class=""><h1>WEBMINTON</h1></div>
                    <div class="row r-jt-bt ">
                        <div class="pay-inf-delivery ">
                            <h3>Delivery information</h3>
                            <input type="text" placeholder="Full name receiver" id="fullname" required>
                            <input type="number" placeholder="Phone number receiver ex: 84xxx" id="numphone" required>
                            <input type="text" placeholder="Address" id="address" required>
                            <input type="email" placeholder="Email" id="email" required>
                        </div>
                
                        <div class=" pay-inf-paytion">
                            <h3>Paytion</h3> 
                            <div class="pay-inf-paytion-choices">
                                <div class="pay-inf-paytion-choice">
                                    <input type="radio" name="method-pay" value="cash" > 
                                    <p>Payment on delivery (COD)</p>
                                    <i class="fa-solid fa-money-bill-transfer"></i>
                                </div>
                                <div class="pay-inf-paytion-choice">
                                    <input type="radio" name="method-pay" value="bank">
                                    <p>Paying through bank</p>
                                    <i class="fa-solid fa-building-columns"></i>
                                </div>
                                <div class="col ">
                                    <p>Bank: <span>ACB Da Nang</span></p>
                                    <p>Acc number:<span> 23802947</span></p>
                                    <p>Acc holder:<span> Huynh Minh Hoa</span></p>
                                    <p>Content:<span> Name + Order phone number</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="pay-inf-confirm ">
                    <h3 class="pay-inf-quantity">
                    <!-- <h3>Order ( <span>1</span> product )</h3>      -->
                    </h3>
                    <div class="pay-inf-quantity-details">
                        <!-- <div class="pay-inf-quantity-detail ">
                            <div>
                                <img src="Images/prd-shirt01.png" alt="">
                                <span>1</span>
                            </div>
                            
                            <p>Men's  YONEX badminton shirt - code 043</p>
                            <p>540 000 ₫</p>
                        </div> -->
                    </div>
                
                        <div class="pay-inf-quantity-total">
                            <p>Total</p>
                            <p id="totalBill"></p>
                        </div>
                
                    <div class="pay-inf-quantity-order">
                        <div class="row r-al-ct r-jt-st ">
                            <i class="fa-solid fa-rotate-left"></i>
                            <a href="product-detail.html">Back to cart</a>
                        </div>
                        <button type="button" id="purchase">PURCHASE</button>
                    </div>
                    <p>
                        - Price does not include shipping costs. Shipping cost will be informed by staff upon order confirmation.
                    </p>
                    <p>
                        - Order processing time: From 8:00 a.m. to 5:00 p.m. Monday to Saturday. Orders after this time will be processed on the next working day.
                    </p>

                </div>
            </form>
            <script src="../Js/shopCheckout.js"></script>
        </div>
    </div>
</main>
