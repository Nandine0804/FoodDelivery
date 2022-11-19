<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?> | Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="style1.css" type="text/css">
   <link href ="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Jost:wght@300;400&family=Overpass:wght@300&family=Poiret+One&family=Poppins:wght@300&display=swap" rel="stylesheet">

   <style>
   @import url('https://fonts.googleapis.com/css2?family=Alata&display=swap');
   @import url("https://fonts.googleapis.com/css2?family=Jost:wght@300;400&family=Overpass:wght@300&family=Poiret+One&family=Poppins:wght@300&display=swap");
 nav{
        padding-left: 100px!important;
        padding-right: 100px!important;
        font-family: 'Comfortaa', sans-serif;
    } 
    .logo:hover{
        letter-spacing: 10px;;
    }
    </style>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
    <header>

        <a href="#" class="logo" style="margin-top:5px;font-family: 'Alata', sans-serif; text-decoration:none;">ZOOP</a>

        <div id="menu-bar" class="fas fa-bars"></div>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#speciality">speciality</a>
            <a href="#popular">popular</a>
            <a href="#gallery">gallery</a>
            <a href="#review">review</a>
            <a href="#order">Schedule it</a>
            <a href="logout-user.php">Logout</a>
        </nav>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">
        <div class="content">
            <h1 style="font-size:54px">Welcome <?php echo $fetch_info['name'] ?></h1>
            <p style="font-size:24px; color:whitesmoke;">Restaurants in your pocket, Order from your favorite restaurants & track on the go, with the all-new Zoop</p>
            <a href="#" class="btn">Zoop now</a>
        </div>

        <div class="image">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/g-1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/g-2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/g-3.jpg" class="d-block w-100" alt="...">
    </div>
    </div>


  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </div>

    </section>
    <section class="speciality" id="speciality">
        <h1 class="heading"> our<span>Speciality</span> </h1>

        <div class="box-container">

            <div class="box">
                <img class="image" src="images/dosa2.jpg" alt="">
                <div class="content">
                    <img src="images/s-1.png"  alt="">
                    <h3>Plain Dosa</h3>
                    <p>Make your tummy happy with this absolutely delicious & crispy dosa</p>
                    <p>A wholesome meal with flavor-packed crispy plain dosa; served along with subtly spiced chutney and all time favorite sambhar.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/s-img-2.jpg" alt="">
                <div class="content">
                    <img src="images/s-2.png" alt="">
                    <h3>tasty pizza</h3>
                    <p>Good food is always cooking! Go ahead, order some</p>
                    <p>Get spoilt for choice with crunchy veggies, simply go half and half with 2 veg half pizzas! Enjoy standout personal pizzas loaded with more toppings, less crust.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/s-img-3.jpg" alt="">
                <div class="content">
                    <img src="images/s-3.png" alt="">
                    <h3>cold ice-cream</h3>
                    <p>There is always good food cooking! Order some delectable dishes from the menu if you like</p>
                    <p>Looking for a sweet snack? A hearty delicious sandwich filled creamy vanilla and yummy chocolate between two crunchy biscuits</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/s-img-4.jpg" alt="">
                <div class="content">
                    <img src="images/s-4.png" alt="">
                    <h3>Cold drinks</h3>
                    <p>Want to have something cold? Order our cold drinks</p>
                    <p>Pure Filter coffee + Belgium chocolate combination,Something you must try if you are a mocha lover...</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/friedrice.jpg" alt="">
                <div class="content">
                    <img src="images/s-5.png" alt="">
                    <h3>Rice Types</h3>
                    <p>Feeling your mom's cooking,Experience it</p>
                    <p>A deliciously aromatic and flavorful dish prepared from rice and stir-fried vegetables.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="images/s-img-6.jpg" alt="">
                <div class="content">
                    <img src="images/s-6.png" alt="">
                    <h3>Regular breakfast</h3>
                     <p>Veggies Umm healthy right? Try now</p>
                    <p>Sandwich bread + sprouts + veggies + cheese + Mayonnaise and also Healthy juice will be provided Apple+beetroot+carrot</p>
                </div>
            </div>

        </div>

    </section>

    <!-- speciality section ends -->

    <!-- popular section starts  -->

    <section class="popular" id="popular">

        <h1 class="heading"> most <span>popular</span> foods </h1>

        <div class="box-container">

            <div class="box">
                <span class="price"> $5 - $20 </span>
                <img src="images/p-1.jpg" alt="">
                <h3>tasty burger</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">Zoop now</a>
            </div>
            <div class="box">
                <span class="price"> $5 - $20 </span>
                <img src="images/p-2.jpg" alt="">
                <h3>tasty cakes</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">Zoop now</a>
            </div>
            <div class="box">
                <span class="price"> $5 - $20 </span>
                <img src="images/p-3.jpg" alt="">
                <h3>tasty sweets</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">Zoop now</a>
            </div>
            <div class="box">
                <span class="price"> $5 - $20 </span>
                <img src="images/p-4.jpg" alt="">
                <h3>tasty cupcakes</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">Zoop now</a>
            </div>
            <div class="box">
                <span class="price"> $5 - $20 </span>
                <img src="images/p-5.jpg" alt="">
                <h3>cold drinks</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">Zoop now</a>
            </div>
            <div class="box">
                <span class="price"> $5 - $20 </span>
                <img src="images/p-6.jpg" alt="">
                <h3>cold ice-cream</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <a href="#" class="btn">Zoop now</a>
            </div>

        </div>

    </section>
      <div class="step-container">
        <h1 class="heading">how it <span>works</span></h1>

        <section class="steps">

            <div class="box">
                <img src="images/step-1.jpg" alt="">
                <h3>choose your favorite food</h3>
            </div>
            <div class="box">
                <img src="images/step-2.jpg" alt="">
                <h3>free and fast delivery</h3>
            </div>
            <div class="box">
                <img src="images/step-3.jpg" alt="">
                <h3>easy payments methods</h3>
            </div>
            <div class="box">
                <img src="images/step-4.jpg" alt="">
                <h3>and finally, enjoy your food</h3>
            </div>

        </section>

    </div>

    <!-- steps section ends -->

    <!-- gallery section starts  -->

    <section class="gallery" id="gallery">

        <h1 class="heading"> our food <span> gallery </span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/g-1.jpg" alt="">
                <div class="content">
                    <h3>tasty food</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                    <a href="#" class="btn">Zoopn now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-2.jpg" alt="">
                <div class="content">
                    <h3>tasty food</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                    <a href="#" class="btn">Zoopn now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-3.jpg" alt="">
                <div class="content">
                    <h3>tasty food</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                    <a href="#" class="btn">Zoopn now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-4.jpg" alt="">
                <div class="content">
                    <h3>tasty food</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                    <a href="#" class="btn">Zoopn now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-5.jpg" alt="">
                <div class="content">
                    <h3>tasty food</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                    <a href="#" class="btn">Zoopn now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-6.jpg" alt="">
                <div class="content">
                    <h3>tasty food</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                    <a href="#" class="btn">Zoopn now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-7.jpg" alt="">
                <div class="content">
                    <h3>tasty food</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                    <a href="#" class="btn">Zoopn now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-8.jpg" alt="">
                <div class="content">
                    <h3>tasty food</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                    <a href="#" class="btn">Zoopn now</a>
                </div>
            </div>
            <div class="box">
                <img src="images/g-9.jpg" alt="">
                <div class="content">
                    <h3>tasty food</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti, ipsum.</p>
                    <a href="#" class="btn">Zoopn now</a>
                </div>
            </div>

        </div>

    </section>

    <!-- gallery section ends -->

    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading"> our customers <span>reviews</span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/pic1.png" alt="">
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti delectus, ducimus facere quod ratione vel laboriosam? Est, maxime rem. Itaque.</p>
            </div>
            <div class="box">
                <img src="images/pic2.png" alt="">
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti delectus, ducimus facere quod ratione vel laboriosam? Est, maxime rem. Itaque.</p>
            </div>
            <div class="box">
                <img src="images/pic3.png" alt="">
                <h3>john deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti delectus, ducimus facere quod ratione vel laboriosam? Est, maxime rem. Itaque.</p>
            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- Zoop section starts  -->

    <section class="order" id="order">

        <h1 class="heading"> <span>Zoop</span> now </h1>

        <div class="row">

            <div class="image">
                <img src="images/order-img.jpg" alt="">
            </div>

            <form action="">

                <div class="inputBox">
                    <input type="text" placeholder="name">
                    <input type="email" placeholder="email">
                </div>

                <div class="inputBox">
                    <input type="number" placeholder="number">
                    <input type="text" placeholder="food name">
                </div>

                <textarea placeholder="address" name="" id="" cols="30" rows="10"></textarea>

                <input type="submit" value="order now" class="btn">

            </form>

        </div>

    </section>

    <!-- order section ends -->

    <!-- footer section  -->

    <section class="footer">

        <div class="share">
            <a href="#" class="btn">facebook</a>
            <a href="#" class="btn">twitter</a>
            <a href="#" class="btn">instagram</a>
            <a href="#" class="btn">pinterest</a>
            <a href="#" class="btn">linkedin</a>
        </div>
    </section>

    <!-- scroll top button  -->
    <a href="#home" class="fas fa-angle-up" id="scroll-top"></a>

    <!-- loader  -->
    <div class="loader-container">
        <img src="images/loader.gif" alt="">
    </div>




















    <!-- custom js file link  -->
    <script src="script.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</body>
</html>