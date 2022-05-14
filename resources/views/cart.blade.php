<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantithumb</title>

    <link rel="icon" href="image/plant_logo1.png" type="image/icon type">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/cart.css">

</head>
<body>
    


<!-- home section starts  -->

<section class="home" id="home">

    <div class="content" style = "margin-top: 50px;">
        <h3><span style = "color: rgb(44, 231, 44)">fresh</span> products for your</h3>
        <a href = "{{ url('welcome')}}" class = "back_btn"><h4><< Go Back</h4></a>
       
    </div>

</section>

<!-- home section ends -->


<!-- cart start -->
<section id="cart" class="section-p1">
    <table width="100%">
        <thead>
            <tr>
                <td>Remove</td>
                <td>Image</td>
                <td>Product</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Subtotal</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><i class="far fa-times-circle"><a href="#"></a></i></td>
                <td><img src="image/product/product-1.jpg"></td>
                <td>Plant 1</td>
                <td>₱4.99</td>
                <td><input type="number" value="1"></td>
                <td>₱4.99</td>
            </tr>
            <tr>
                <td><i class="far fa-times-circle"><a href="#"></a></i></td>
                <td><img src="image/product/product-2.jpg"></td>
                <td>Plant 1</td>
                <td>₱4.99</td>
                <td><input type="number" value="1"></td>
                <td>₱4.99</td>
            </tr>
            <tr>
                <td><i class="far fa-times-circle"><a href="#"></a></i></td>
                <td><img src="image/product/product-3.jpg"></td>
                <td>Plant 1</td>
                <td>₱4.99</td>
                <td><input type="number" value="1"></td>
                <td>₱4.99</td>
            </tr>
        </tbody>
    </table>
</section>

<section id="cart-add" class="section-p1">
    <div id="coupon">
        <h1>Apply Coupon</h1>
        <div>
            <input type="text" placeholder="Enter Voucher/Coupon">
            <button class="btn">Apply</button>
        </div>
    </div>

    <div id="subtotal">
        <h1>Cart Total</h1>
        <table>
            <tr>
                <td>Cart Subtotal</td>
                <td>₱4.99</td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td>Free</td>
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td><strong>₱4.99</strong></td>
            </tr>
        </table>
        <button class="btn">Checkout</button>
    </div>
</section>
<!-- cart end -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3> Plantithumb <i class="fa-solid fa-seedling"></i> </h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam, saepe.</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> 091265082682 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> mel@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Olongapo, Philippines - 2210 </a>
        </div>


        <div class="box">
            <h3>Download Our App</h3>
            <p>Shop on mobile !</p>
            <img src="image/plant_logo.png" class="mob">
            <br>
            <a href="#" class="btn">Download here</a>
            
        </div>

    </div>

    <div class="credit"> created by <span> Yuri </span> | all rights reserved | Groupname dito</div>

</section>

<!-- footer section ends -->
















<!-- custom js file link  -->
<script></script>

</body>
</html>