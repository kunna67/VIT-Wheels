<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      rel="stylesheet"
      href="https://Aunpkg.com/swiper@7/swiper-bundle.min.css"
    />
    

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />
    <a href="searchbar.php">fdsfs</a>
    <!-- <link rel="stylesheet" href="searchbar.html" /> -->
  </head>

  <body>
    <header class="header">
      <div id="menu-btn" class="fas fa-bars"></div>

      <a href="#" class="logo"> <span>VIT</span>WHEELS </a>

      <nav class="navbar">
        <a href="#home">home</a>
        <a href="#vehicles">vehicles</a>
        <a href="#services">services</a>
        <a href="#featured">featured</a>
        <a href="#reviews">reviews</a>
        <a href="#contact">contact</a>
      </nav>

      <div id="login-btn">
        <button class="btn">login</button>
        <i class="far fa-user"></i>
      </div>

      <div id="login-btn">
        <a href="searchbar.php">><button class="btn">search your car</button></a
        <i class="far fa-user"></i>
      </div>
    </header>

    <div class="login-form-container">
      <span id="close-login-form" class="fas fa-times"></span>

      <form action="">
        <h3>user login</h3>
        <input type="email" id="useremail"   placeholder="email" class="box" />
        <input type="password" id="userpass"  placeholder="password" class="box" />
        <p>forget your password <a href="#">click here</a></p>
        <input type="submit" id="signupbtn"  value="login" class="btn" />
        <p>or login with</p>
        <div class="buttons">
          <a href="#" class="btn"> google </a>
          <a href="#" class="btn"> facebook </a>
        </div>
        <p>don't have an account <a href="#">create one</a></p>
      </form>
    </div>

    <section class="home" id="home">
      <h3 data-speed="-2" class="home-parallax">find your car</h3>

      <img
        data-speed="5"
        class="home-parallax"
        src="image/home-img.png"
        alt=""
      />
     <button><a href="car.php">EXPLORE CARS</a></button> 
<!-- <link rel="stylesheet" href="car.php" > -->
      <!-- <link rel="stylesheet" href="car.php"><a data-speed="7" href="#" class="btn home-parallax">explore cars</a></link> -->
    </section>

    <section class="icons-container">
      <div class="icons">
        <i class="fas fa-home"></i>
        <div class="content">
          <h3>150+</h3>
          <p>branches</p>
        </div>
      </div>

      <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
          <h3>4770+</h3>
          <p>cars sold</p>
        </div>
      </div>

      <div class="icons">
        <i class="fas fa-users"></i>
        <div class="content">
          <h3>320+</h3>
          <p>happy clients</p>
        </div>
      </div>

      <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
          <h3>1500+</h3>
          <p>news cars</p>
        </div>
      </div>
    </section>

    <!-- <section class="vehicles" id="vehicles">
      <h1 class="heading">popular <span>vehicles</span></h1>

      <div class="swiper vehicles-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <img src="image/1.webp" alt="" />
            <div class="content">
              <h3>Audi 35A</h3>
              <div class="price"><span>price : </span> ₹82,000/-</div>
              <p>
                <span class="fas fa-circle"></span> 2012
                <span class="fas fa-circle"></span> automatic
                <span class="fas fa-circle"></span> petrol
                <span class="fas fa-circle"></span> 170mph
              </p>
              <a href="#" class="btn">check out</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="image/2.jpg" alt="" />
            <div class="content">
              <h3>Wagnor</h3>
              <div class="price"><span>price : </span> ₹70,000/-</div>
              <p>
                <span class="fas fa-circle"></span> 2015
                <span class="fas fa-circle"></span> automatic
                <span class="fas fa-circle"></span> Diesel
                <span class="fas fa-circle"></span> 129mph
              </p>
              <a href="#" class="btn">check out</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="image/3.jpg" alt="" />
            <div class="content">
              <h3>Bularoo</h3>
              <div class="price"><span>price : </span> ₹62,000/-</div>
              <p>
                <span class="fas fa-circle"></span> 2011
                <span class="fas fa-circle"></span> automatic
                <span class="fas fa-circle"></span> petrol
                <span class="fas fa-circle"></span> 134mph
              </p>
              <a href="#" class="btn">check out</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="image/4.jpeg" alt="" />
            <div class="content">
              <h3>Tata-Eeco</h3>
              <div class="price"><span>price : </span> ₹64,000/-</div>
              <p>
                <span class="fas fa-circle"></span> 2016
                <span class="fas fa-circle"></span> automatic
                <span class="fas fa-circle"></span> petrol
                <span class="fas fa-circle"></span> 120mph
              </p>
              <a href="#" class="btn">check out</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="image/5.webp" alt="" />
            <div class="content">
              <h3>Baleno</h3>
              <div class="price"><span>price : </span> ₹76,000/-</div>
              <p>
                <span class="fas fa-circle"></span> 2019
                <span class="fas fa-circle"></span> automatic
                <span class="fas fa-circle"></span> Diesel
                <span class="fas fa-circle"></span> 123mph
              </p>
              <a href="#" class="btn">check out</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="image/6.jpg" alt="" />
            <div class="content">
              <h3>Ciaz</h3>
              <div class="price"><span>price : </span> ₹54,000/-</div>
              <p>
                <span class="fas fa-circle"></span> 2021
                <span class="fas fa-circle"></span> automatic
                <span class="fas fa-circle"></span> Diesel
                <span class="fas fa-circle"></span> 156mph
              </p>
              <a href="#" class="btn">check out</a>
            </div>
          </div>
        </div>

        <div class="swiper-pagination"></div>
      </div>
    </section> -->

    <section class="services" id="services">
      <h1 class="heading">our <span>services</span></h1>

      <div class="box-container">
        <div class="box">
          <i class="fas fa-car"></i>
          <h3>car selling</h3>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis,
            nisi.
          </p>
          <a href="#" class="btn"> read more</a>
        </div>

        <div class="box">
          <i class="fas fa-tools"></i>
          <h3>parts repair</h3>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis,
            nisi.
          </p>
          <a href="#" class="btn"> read more</a>
        </div>

        <div class="box">
          <i class="fas fa-car-crash"></i>
          <h3>car insurance</h3>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis,
            nisi.
          </p>
          <a href="#" class="btn"> read more</a>
        </div>

        <div class="box">
          <i class="fas fa-car-battery"></i>
          <h3>battery replacement</h3>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis,
            nisi.
          </p>
          <a href="#" class="btn"> read more</a>
        </div>

        <div class="box">
          <i class="fas fa-gas-pump"></i>
          <h3>oil change</h3>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis,
            nisi.
          </p>
          <a href="#" class="btn"> read more</a>
        </div>

        <div class="box">
          <i class="fas fa-headset"></i>
          <h3>24/7 support</h3>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis,
            nisi.
          </p>
          <a href="#" class="btn"> read more</a>
        </div>
      </div>
    </section>

    <!-- <section class="featured" id="featured">
      <h1 class="heading"><span>featured</span> cars</h1>

      <div class="swiper featured-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <img src="image/car-1.png" alt="" />
            <div class="content">
              <h3>Audi A6</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
              <div class="price">₹98,000/-</div>
              <a href="#" class="btn">check out</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="image/car-2.png" alt="" />
            <div class="content">
              <h3>MG Hector</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <i class="fas"></i>
              </div>
              <div class="price">₹92,000/-</div>
              <a href="#" class="btn">check out</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="image/car-3.png" alt="" />
            <div class="content">
              <h3>Wagon-R</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
              <div class="price">₹82,000/-</div>
              <a href="#" class="btn">check out</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="image/car-4.png" alt="" />
            <div class="content">
              <h3>Audi Q5</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
              <div class="price">₹96,000/-</div>
              <a href="#" class="btn">check out</a>
            </div>
          </div>
        </div>

        <div class="swiper-pagination"></div>
      </div>

      <div class="swiper featured-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <img src="image/car-5.png" alt="" />
            <div class="content">
              <h3>Sportage</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas"></i>
              </div>
              <div class="price">₹74,000/-</div>
              <a href="#" class="btn">check out</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="image/car-6.png" alt="" />
            <div class="content">
              <h3>Venue</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas"></i>
              </div>
              <div class="price">₹58,000/-</div>
              <a href="#" class="btn">check out</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="image/car-7.png" alt="" />
            <div class="content">
              <h3>Seltos</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
              <div class="price">₹68,000/-</div>
              <a href="#" class="btn">check out</a>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="image/car-8.png" alt="" />
            <div class="content">
              <h3>Chevrolet Spark</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
              <div class="price">₹75,000/-</div>
              <a href="#" class="btn">check out</a>
            </div>
          </div>
        </div>

        <div class="swiper-pagination"></div>
      </div>
    </section> -->

    <section class="newsletter">
      <h3>subscribe for latest updates</h3>
      <p>Get your news for used car.</p>

      <form action="">
        <input type="email" placeholder="enter your email" />
        <input type="submit" value="subscribe" />
      </form>
    </section>

    <!-- <section class="reviews" id="reviews">
      <h1 class="heading">client's <span>review</span></h1>

      <div class="swiper review-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <img src="image/pic-1.png" alt="" />
            <div class="content">
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam
                incidunt quod praesentium iusto id autem possimus assumenda at
                ut saepe.
              </p>
              <h3>john deo</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="image/pic-2.png" alt="" />
            <div class="content">
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam
                incidunt quod praesentium iusto id autem possimus assumenda at
                ut saepe.
              </p>
              <h3>john deo</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="image/pic-3.png" alt="" />
            <div class="content">
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam
                incidunt quod praesentium iusto id autem possimus assumenda at
                ut saepe.
              </p>
              <h3>john deo</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="image/pic-4.png" alt="" />
            <div class="content">
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam
                incidunt quod praesentium iusto id autem possimus assumenda at
                ut saepe.
              </p>
              <h3>john deo</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="image/pic-5.png" alt="" />
            <div class="content">
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam
                incidunt quod praesentium iusto id autem possimus assumenda at
                ut saepe.
              </p>
              <h3>john deo</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
            </div>
          </div>

          <div class="swiper-slide box">
            <img src="image/pic-6.png" alt="" />
            <div class="content">
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam
                incidunt quod praesentium iusto id autem possimus assumenda at
                ut saepe.
              </p>
              <h3>john deo</h3>
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

        <div class="swiper-pagination"></div>
      </div>
    </section> -->

    <section class="contact" id="contact">
      <h1 class="heading"><span>contact</span> us</h1>

      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.5366368065065!2d76.8491072148019!3d23.0774433849253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397ce9ceaaaaaaab%3A0xa224b6b82b421f83!2sVellore%20Institute%20of%20Technology%20-%20VIT%20Bhopal!5e0!3m2!1sen!2sin!4v1647923707593!5m2!1sen!2sin"
          width="600"
          height="497"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
        ></iframe>

        <form action="">
          <h3>get in touch</h3>
          <input type="text" placeholder="your name" class="box" />
          <input type="email" placeholder="your email" class="box" />
          <input type="tel" placeholder="subject" class="box" />
          <textarea
            placeholder="your message"
            class="box"
            cols="30"
            rows="10"
          ></textarea>
          <input type="submit" value="send message" class="btn" />
        </form>
      </div>
    </section>
    <section class="footer" id="footer">
      <div class="box-container">
        <div class="box">
          <h3>our branches</h3>
          <a href="#"> <i class="fas fa-map-marker-alt"></i> india </a>
          <a href="#"> <i class="fas fa-map-marker-alt"></i> japan </a>
          <a href="#"> <i class="fas fa-map-marker-alt"></i> france </a>
          <a href="#"> <i class="fas fa-map-marker-alt"></i> russia </a>
          <a href="#"> <i class="fas fa-map-marker-alt"></i> USA </a>
        </div>

        <div class="box">
          <h3>quick links</h3>
          <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
          <a href="#"> <i class="fas fa-arrow-right"></i> vehicles </a>
          <a href="#"> <i class="fas fa-arrow-right"></i> services </a>
          <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
          <a href="#"> <i class="fas fa-arrow-right"></i> reviews </a>
          <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
        </div>

        <div class="box">
          <h3>contact info</h3>
          <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
          <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
          <a href="#"> <i class="fas fa-envelope"></i> VITWHEELS@gmail.com </a>
          <a href="#"> <i class="fas fa-map-marker-alt"></i> VITBHOPAL </a>
        </div>

        <div class="box">
          <h3>contact info</h3>
          <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
          <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
          <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
          <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
          <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>
      </div>

      <div class="credit">
        <a href="https://linktr.ee/vitwheel"> created by VITWHEELS </a> | all
        rights reserved
      </div>
    </section>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>
<!-- <script>
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "firebase/app";
    import { getAnalytics } from "firebase/analytics";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries
    
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
      apiKey: "AIzaSyD56eRqBnYEF0SwH3T3jtZrthwmrAFE2K4",
      authDomain: "fir-5bd17.firebaseapp.com",
      projectId: "fir-5bd17",
      storageBucket: "fir-5bd17.appspot.com",
      messagingSenderId: "426974554139",
      appId: "1:426974554139:web:b7ba7ba014eae06980b0be",
      measurementId: "G-64MH19ZNLC"
    };
    
    // Initialize Firebase
    // const app = initializeApp(firebaseConfig);
    // const analytics = getAnalytics(app);
    // var signupbtn=document.getElementById('signupbtn')
    // var emailsignup=document.getElementById('useremail')
    // var passwordsignup=document.getElementById('userpass')
    
    // signupbtn.onclick=function{
    //   signupbtn.disabled=true;
    //   signupbtn.textContent="registering your account ! please wait";
    //     firebase.auth().CreateUserEmailAndPassword(emailsignup.Value,passwordsignup.Value).then(function(response){
    //       signupbtn.disabled=false;
    //   signupbtn.textContent="sign up";

    //         console.log(response);
    //     })
    //     .catch(function(error){
    //       signupbtn.disabled=false;
    //   signupbtn.textContent="sign up";
    //         console.log(error);
    //     })
    // }
    // </script>
    // <script defer src="https://www.gstatic.com/firebasejs/7.19.0/firebase-analytics.js"></script> -->
  </body>
</html>