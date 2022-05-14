<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=Ddevice-width, initial-scale=1.0">
    <title>Plantithum - product page</title>

      <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- custom css file link  -->
    <link rel="stylesheet" href="css/product.css">
</head>
<body>

    <!-- product detail starts -->
    <section class="product-section">
        <img src="image/product/product-1.jpg" alt="" class="product-image">
        <div class="product-detail">
            <h1 class="product-title">Product Title</h1>
            <p class="loc" style="color: var(--green);">Category label</p>
            <p class="product-des">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem culpa nam sit labore reiciendis recusandae cupiditate saepe distinctio molestias officia dolor fugiat obcaecati omnis dolores fugit necessitatibus, adipisci excepturi. Ipsum.</p>
            <div class="loc">
                <i class="fa-solid fa-location-dot"></i>
                <p>location address sample streeet 2022</p>
            </div>

            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span class="rating-count">4,025 reviews</span>
            </div>

            <p class="price">₱4.99</p>
            <p class="product-des" style="float: right;">9999 pieces available</p>
            <div class="container">
                <label for="quantity" class="loc">Quantity: </label>
                <div class="dec button">-</div>
                <input type="text" name="qty" id="1" value="0" class="input-filed">
                <div class="inc button">+</div>
            </div>
          
            <a href="#" class="btn">add to cart</a>
        </div>
    </section>
    <!-- product detail end -->

<!-- add review form -->
<section class="add-review-section">
    <h1 class="rating-text">add a review</h1>
    <textarea placeholder="review" class="review-field"></textarea>
   <p class="rating-text">how much you liked the product?</p>
    <div class="container1">
        <div class="star-widget">
          <input type="radio" name="rate" id="rate-5">
          <label for="rate-5" class="fas fa-star"></label>
          <input type="radio" name="rate" id="rate-4">
          <label for="rate-4" class="fas fa-star"></label>
          <input type="radio" name="rate" id="rate-3">
          <label for="rate-3" class="fas fa-star"></label>
          <input type="radio" name="rate" id="rate-2">
          <label for="rate-2" class="fas fa-star"></label>
          <input type="radio" name="rate" id="rate-1">
          <label for="rate-1" class="fas fa-star"></label>
        </div>
      </div>
    <!-- condition to show either of one button kaw na bahala mel -->
    <a href="#" class="btn">Add Review</a>
    <a href="#" class="btn">Edit Review</a>
</section>

<!-- add review form end-->

<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="image/pic-1.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                <h3>Mel Mark</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-2.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                <h3>John Bryan</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-3.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                <h3>Yuri</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="image/pic-4.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde sunt fugiat dolore ipsum id est maxime ad tempore quasi tenetur.</p>
                <h3>Neo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->


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

<script src="js/product.js"></script>


</body>
</html>