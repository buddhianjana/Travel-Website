<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoadTrip Sri Lanka</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="CSS/style.css">



</head>

<body>

    <!-- header section starts  -->

    <header>



        <a href="#home" class="logo"><img src="images/logo.png" alt=""></a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#book">book</a>
            <a href="#packages">packages</a>
            <a href="#services">services</a>
            <a href="#gallery">gallery</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="icons">
            <input type="search" id="search-bar" placeholder="search here...">
        </div>

    </header>

    <!-- header section ends -->


    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>adventure is worthwhile</h3>
            <p>dicover new places with us, adventure awaits</p>
            <a href="#packages" class="btn">discover more</a>
        </div>

        <div class="video-container">
            <video src="images/vid-3.mp4" id="video-slider" loop autoplay muted></video>

        </div>

    </section>

    <!-- home section ends -->

    <!-- book section starts  -->

    <section class="book" id="book">

        <h1 class="heading">
            <span>c</span>
            <span>u</span>
            <span>s</span>
            <span>t</span>
            <span>o</span>
            <span>m</span>
            <span class="space"></span>
            <span>b</span>
            <span>o</span>
            <span>o</span>
            <span>k</span>
            <span class="space"></span>

        </h1>

        <div class="row">

            <div class="image">
                <img src="images/book-img.svg" alt="">
            </div>

            <form action="">
                <div class="inputBox">
                    <h3>where to</h3>
                    <input type="text" placeholder="place name">
                </div>
                <div class="inputBox">
                    <h3>how many</h3>
                    <input type="number" placeholder="number of guests">
                </div>
                <div class="inputBox">
                    <h3>arrivals</h3>
                    <input type="date">
                </div>
                <div class="inputBox">
                    <h3>leaving</h3>
                    <input type="date">
                </div>
                <a class="btn" href="#contact">Book Now</a>
            </form>

        </div>

    </section>

    <!-- book section ends -->

    <!-- packages section starts  -->

    <section class="packages" id="packages">

        <h1 class="heading">
            <span>p</span>
            <span>a</span>
            <span>c</span>
            <span>k</span>
            <span>a</span>
            <span>g</span>
            <span>e</span>
            <span>s</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/kalani.jpg" alt="">
                <div class="content">
                    <h3>White water rafting at Kelani river</h3>
                    <h4 class="pack1"> <b>Duration</b> : 03 Days 02 Nights <br>
                        <b>Route</b> : Kithulgala, Gampola <br>
                        <b>Included</b> : Transportation, Guiding, Drinks <br>
                        <b>Not Included</b> : Entrance Fee, Hotel Fee <br>
                        <b>Hotel</b> : 55 to 85(Per Night + bed & breakfast)
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="price"> $250 <span>$300.00</span> </div> <br>
                        <a href="login.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/minneri.jpg" alt="">
                <div class="content">
                    <h3>Wild Safari at Minneriya National Park</h3>
                    <h4 class="pack1">
                        <b>Duration</b> : 04 Days 03 Nights <br>
                        <b>Route</b> : Minneriya National Park, Polonnaruwa <br>
                        <b>Included</b> : Transportation, Guiding, Drinks <br>
                        <b> Not Included</b> : Entrance Fee, Hotel Fee <br>
                        <b>Hotel</b>: 90 to 125 (Per Night + bed & breakfast)
                    </h4>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $380.00 <span>$450.00</span> </div> <br>
                    <a href="login.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/anuradha.jpg" alt="">
                <div class="content">
                    <h3>Ancient Anuradhapura site & Sigiriya Rock Fortress</h3>
                    <h4 class="pack1">
                        <b>Duration</b> : 05 Days 04 Nights <br>
                        <b>Route</b> : Anuradhapura, Sigiriya Rock Fortress<br>
                        <b>Included</b> : Transportation, Guiding, Drinks <br>
                        <b>Not Included</b> : Entrance Fee, Hotel Fee <br>
                        <b>Hotel</b> : 90 to 125 (Per Night + bed & breakfast)
                    </h4>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $450.00 <span>$500.00</span> </div>
                    <a href="login.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/wildlife.jpeg" alt="">
                <div class="content">
                    <h3>Wildlife, Hill country train journey, Beaches</h3>
                    <h4 class="pack1">
                        <b>Duration</b> : 07 Days 06 Nights <br>
                        <b>Route</b> : Hikkaduwa, Galle, Udawalawa, Ella, Nuwara Eliya <br>
                        <b>Included</b> : Transportation, Guiding, Drinks <br>
                        <b>Not Included/</b> : Entrance Fee, Hotel Fee <br>
                        <b>Hotel</b> :90 to 150(Per Night + bed & breakfast)
                    </h4>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $650.00 <span>$700.00</span> </div>
                    <a href="login.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/pinnawala.jpg" alt="">
                <div class="content">
                    <h3>Pinnawala Elephant Orphanage, Sigiriya Rock Fortress</h3>
                    <h4 class="pack1">
                        <b>Duration</b> : 09 Days 08 Nights <br>
                        <b>Route</b> : Pinnawala, Sigiriya Rock Fortress, Dambulla<br>
                        <b>Included</b> : Transportation, Guiding, Drinks <br>
                        <b>Not Included/</b> : Entrance Fee, Hotel Fee <br>
                        <b>Hotel</b> :90 to 180(Per Night + bed & breakfast)
                    </h4>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $800.00 <span>$850.00</span> </div>
                    <a href="login.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/sigiriya.jpg" alt="">
                <div class="content">
                    <h3>Eight Great Places of Veneration in Anuradhapura</h3>
                    <h4 class="pack1">
                        <b>Duration</b> : 09 Days 08 Nights <br>
                        <b>Route</b> : Anuradhapura, Sigiriya, Kandy<br>
                        <b>Included</b> : Transportation, Guiding, Drinks <br>
                        <b>Not Included/</b> : Entrance Fee, Hotel Fee <br>
                        <b>Hotel</b> :90 to 200(Per Night + bed & breakfast)
                    </h4>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="price"> $900.00 <span>$1000.00</span> </div> <br>
                    <a href="login.php" class="btn">book now</a>
                </div>
            </div>

        </div>

    </section>

    <!-- packages section ends -->

    <!-- services section starts  -->

    <section class="services" id="services">

        <h1 class="heading">
            <span>s</span>
            <span>e</span>
            <span>r</span>
            <span>v</span>
            <span>i</span>
            <span>c</span>
            <span>e</span>
            <span>s</span>
        </h1>
<br><br>
        <div class="box-container">

            <div class="box">
                <i class="fas fa-hotel"></i>
                <h3>affordable hotels</h3>
            </div>
            <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>food and drinks</h3>
            </div>
            <div class="box">
                <i class="fas fa-bullhorn"></i>
                <h3>safty guide</h3>
            </div>
            <div class="box">
                <i class="fas fa-globe-asia"></i>
                <h3>around the world</h3>
            </div>
            <div class="box">
                <i class="fas fa-plane"></i>
                <h3>fastest travel</h3>
            </div>
            <div class="box">
                <i class="fas fa-hiking"></i>
                <h3>adventures</h3>
            </div>

        </div>

    </section>

    <!-- services section ends -->

    <!-- gallery section starts  -->
    <br><br>
    <section class="gallery" id="gallery">

        <h1 class="heading">
            <span>g</span>
            <span>a</span>
            <span>l</span>
            <span>l</span>
            <span>e</span>
            <span>r</span>
            <span>y</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/anuradha.jpg" alt="">
                <div class="content">
                    <h3>Anuradhapura</h3>
                </div>
            </div>
            <div class="box">
                <img src="images/kalani.jpg" alt="">
                <div class="content">
                    <h3>Kalani River</h3>
                </div>
            </div>
            <div class="box">
                <img src="images/minneri.jpg" alt="">
                <div class="content">
                    <h3>Minneriya</h3>
                </div>
            </div>
            <div class="box">
                <img src="images/pinnawala.jpg" alt="">
                <div class="content">
                    <h3>pinnawala</h3>
                </div>
            </div>
            <div class="box">
                <img src="images/sigiriya.jpg" alt="">
                <div class="content">
                    <h3>sigiriya</h3>
                </div>
            </div>
            <div class="box">
                <img src="images/9arch.jpg" alt="">
                <div class="content">
                    <h3>9 Arch Bridge</h3>
                </div>
            </div>
            <div class="box">
                <img src="images/badulla.jpg" alt="">
                <div class="content">
                    <h3>Badulla</h3>
                </div>
            </div>
            <div class="box">
                <img src="images/kandy.jpg" alt="">
                <div class="content">
                    <h3>Kandy</h3>
                </div>
            </div>
            <div class="box">
                <img src="images/junglebeach.jpg" alt="">
                <div class="content">
                    <h3>Jungle-Beach</h3>
                </div>
            </div>

        </div>

    </section>

    <!-- gallery section ends -->

    <!-- review section starts  -->

    <section class="review" id="review">

        <h1 class="heading">
            <span>r</span>
            <span>e</span>
            <span>v</span>
            <span>i</span>
            <span>e</span>
            <span>w</span>
        </h1>

        <div class="swiper-container review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic1.png" alt="">
                        <h3>Sadie Hall</h3>
                        <p>Dushan is a very friendly and knowledgeable person. He will help you to find the best accommodation, make the best routes and tell you some tips that tourists usually don't know. If you want to have a memorable journey in Sri Lanka,
                            you should use Lanka Travel Plan company.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic2.png" alt="">
                        <h3>john deo</h3>
                        <p>Dushan is a person who is both pleasant and knowledgeable. He will assist you in locating the best lodging, planning the best itineraries, and providing you with insider information that most tourists are unaware of. You should
                            use Lanka Travel Plan if you wish to have a wonderful trip in Sri Lanka.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic3.png" alt="">
                        <h3>Marie Watson</h3>
                        <p>Dushan is a polite and knowledgeable individual. He'll help you find the greatest lodging, create the best itinerary, and provide you insider information that most tourists don't know about. If you want to have a nice trip in Sri
                            Lanka, you should use Lanka Travel Plan.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box">
                        <img src="images/pic4.png" alt="">
                        <h3>Marty Meyer</h3>
                        <p>Dushan is a courteous and intelligent person. He'll assist you in finding the best lodging, planning the best itinerary, and providing insider information that most tourists are unaware of. You should use Lanka Travel Plan if you
                            want to have a pleasant trip in Sri Lanka.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- review section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading">
            <span>c</span>
            <span>o</span>
            <span>n</span>
            <span>t</span>
            <span>a</span>
            <span>c</span>
            <span>t</span>
        </h1>

        <div class="row">

            <div class="image">
                <img src="images/contact-img.svg" alt="">
            </div>

            <form action="">
                <div class="inputBox">
                    <input type="text" placeholder="name">
                    <input type="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <input type="number" placeholder="number">
                    <input type="text" placeholder="subject">
                </div>
                <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
                <input type="submit" class="btn" value="send message">
            </form>

        </div>

    </section>

    <!-- contact section ends -->

    <!-- brand section  -->
    <section class="brand-container">

        <div class="swiper-container brand-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="" alt=""></div>
                <div class="swiper-slide"><img src="" alt=""></div>
                <div class="swiper-slide"><img src="" alt=""></div>
                <div class="swiper-slide"><img src="" alt=""></div>
                <div class="swiper-slide"><img src="" alt=""></div>
                <div class="swiper-slide"><img src="" alt=""></div>
            </div>
        </div>

    </section>

    <!-- footer section  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>about us</h3>
                <p>Road Trip Sri Lanka is a premium tour operator dedicated to providing smooth and genuine travel experiences while maintaining the highest standards of service. For more than 15 years, having been founded in 2006.</p>
            </div>
            <div class="box">
                <h3>branch Address</h3>
                <p class="address">No.153</p>
                <p class="address">Colombo 03</p>
                <p class="address">Sri Lanka</p>
            </div>
            <div class="box">
                <h3>quick links</h3>
                <a href="#home">home</a>
                <a href="#book">book</a>
                <a href="#packages">packages</a>
                <a href="#services">services</a>
                <a href="#gallery">gallery</a>
                <a href="#review">review</a>
                <a href="#contact">contact</a>
            </div>
            <div class="box">
                <h3>follow us</h3>
                <a href="###"><i class="fab fa-facebook"></i></a>
                <a href="###"><i class="fab fa-instagram"></i></a>
                <a href="###"><i class="fab fa-twitter"></i></a>
                <a href="###"><i class="fab fa-pinterest"></i></i></a>
            </div>

        </div>

        <h1 class="credit"> created by <span> krishan </span> | all rights reserved! </h1>

    </section>
    
    
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        let formClose = document.querySelector('#form-close');
        let menu = document.querySelector('#menu-bar');
        let navbar = document.querySelector('.navbar');
        let videoBtn = document.querySelectorAll('.vid-btn');

        videoBtn.forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelector('.controls .active').classList.remove('active');
                btn.classList.add('active');
                let src = btn.getAttribute('data-src');
                document.querySelector('#video-slider').src = src;
            });
        });

        var swiper = new Swiper(".review-slider", {
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            },
        });

    </script>
</body>

</html>