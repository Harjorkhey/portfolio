<?php
$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');
if (isset($_POST['send'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name'
    AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

    if (mysqli_num_rows($select_message) > 0) {
        $message[] = 'message sent already!';
    } else{
        mysqli_query($conn, "INSERT INTO `contact_form` (name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
        $message[] = 'message sent successfully!';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mas'ud Sumayyah | PORTFOLIO</title>

    <!-- font awesome cdn link -->
       <!-- <script src="https://kit.fontawesome.com/c6e7443e57.js" crossorigin="anonymous"></script> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

        <!-- aos css link  -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

       <!-- custom css file link -->
        <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
if (isset($message)) {
   foreach($message as $messages){
        echo '  
    <div class="message" data-aos="zoom-out">
        <span>'. $messages . '</span>
        <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
    </div>';
   }
}
?>

    
<!-- header section starts -->
<header class="header">

<div id="menu-btn" class="fas fa-bars"></div>

    <a href="#home" class="logo">Portfolio</a>

    <nav class="navbar">
        <a href="#home" class="active">home</a>
        <a href="#about">about</a>
        <a href="#services">services</a>
        <a href="#portfolio">portfolio</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="follow">
        <a href="#" class="fab fa-facebook-f"></a>
         <a href="#" class="fab fa-twitter"></a>
          <a href="#" class="fab fa-instagram"></a>
           <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-github"></a>
    </div>
</header>

<!-- header section ends -->

<!-- home section starts  -->
<section class="home" id="home">
    <div class="image" data-aos="fade-right">
        <img src="image/sumy.jpg" alt="summy">
    </div>

    <div class="content">
        <h3 data-aos="fade-up">hi, i am masud sumayah</h3>
        <span data-aos="fade-up">web designer & development</span>
        <p data-aos="fade-up">Web design and development involve creating visually appealing, functional websites. Designers focus on layout, user experience, 
            and aesthetics, while developers implement code and features to ensure performance and interactivity.</p>
            <a data-aos="fade-up" href="#about" class="btn">about me</a>
    </div>
</section>
<!-- home section ends  -->

<!-- about section starts -->
<section class="about" id="about">
    <h1 class="heading" data-aos="fade-up"><span>biography</span></h1>

    <div class="biography">

        <p  data-aos="fade-up">Passionate about technology and design, I am constantly learning and evolving in the field of web development.
             I strive to create innovative and user-friendly websites that meet client needs and expectations.</p>

        <div class="bio">
            <h3 data-aos="zoom-in"><span>name : </span> masud sumayah</h3>
            <h3 data-aos="zoom-in"><span>email : </span> masudsummayyah@gmail.com</h3>
            <h3 data-aos="zoom-in"><span>address : </span> Yusuf Estate, Nigeria</h3>
            <h3 data-aos="zoom-in"><span>phone : </span> +234-902-479-8450</h3>
            <h3 data-aos="zoom-in"><span>age : </span> 21 years</h3>
            <h3 data-aos="zoom-in"><span>experience : </span> 2+ years</h3>
        </div>

        <a href="" class="btn" data-aos="fade-up">download CV</a>
    </div>

    <div class="skills" data-aos="fade-up">
         <h1 class="heading"><span>skills</span></h1>
         <div class="progress">
            <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>95%</span></h3> </div>
            <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>90%</span></h3> </div>
            <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>70%</span></h3> </div>
            <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>75%</span></h3> </div>
         </div>
    </div>

    <div class="edu-exp">
         <h1 class="heading" data-aos="fade-up"><span>education & experience</span></h1>
         <div class="row">
            <div class="box-container">
                <h3 class="title" data-aos="fade-right">education</h3>
                <div class="box" data-aos="fade-right">
                    <span>( 2021 - 2022 )</span>
                    <h3>web designer</h3>
                    <p>As a web designer, I focus on creating aesthetically pleasing, user-friendly websites. With a keen eye for detail, 
                        I ensure that every project meets both functional and visual expectations.</p>
                </div>

                <div class="box" data-aos="fade-right">
                    <span>( 2022 - 2023 )</span>
                    <h3>web developer</h3>
                    <p>As a web developer, I specialize in building responsive, efficient, and scalable websites. My expertise includes front-end and back-end development, 
                        ensuring seamless user experiences and robust functionality.</p>
                </div>

                <div class="box" data-aos="fade-right">
                    <span>( 2023 - 2024 )</span>
                    <h3>graphic designer</h3>
                    <p>As a graphic designer, I focus on creating visually striking designs that communicate ideas effectively. I combine creativity and technical skills to produce logos,
                         branding, and marketing materials that captivate and engage audiences.</p>
                </div>
            </div>

            <div class="box-container">
                <h3 class="title" data-aos="fade-left">experience</h3>
                <div class="box" data-aos="fade-left">
                    <span>( 2021 - 2022 )</span>
                    <h3>front-end developer</h3>
                    <p>As a frontend developer, I specialize in creating interactive and responsive user interfaces. I use HTML, CSS, and JavaScript to bring designs to life, 
                        ensuring a seamless and engaging experience across all devices.</p>
                </div>

                <div class="box" data-aos="fade-left">
                    <span>( 2022 - 2023 )</span>
                    <h3>back-end developer</h3>
                    <p>As a backend developer, I focus on server-side logic, databases, and APIs. I ensure that applications run smoothly, handling data storage, security,
                         and performance to support a seamless user experience.</p>
                </div>

                <div class="box" data-aos="fade-left">
                    <span>( 2023 - 2024 )</span>
                    <h3>full-stack developer</h3>
                    <p>As a full stack developer, I work on both the front-end and back-end of applications. I design and implement user interfaces, manage databases, 
                        and ensure the seamless integration of all components for a complete and efficient web experience.</p>
                </div>
            </div>
         </div>
    </div>
</section>
<!-- about section ends -->

<!-- service section starts  -->
<section class="services" id="services">
    <h1 class="heading" data-aos="fade-up"><span>services</span></h1>
    <div class="box-container">
        <div class="box" data-aos="zoom-in">
            <i class="fas fa-code"></i>
            <h3>web development</h3>
            <p>We specialize in building custom, responsive websites tailored to your business needs. Our web development services focus on creating fast, 
                secure, and user-friendly websites that deliver seamless experiences across all devices.</p>
        </div>

         <div class="box" data-aos="zoom-in">
            <i class="fas fa-paint-brush"></i>
            <h3>graphic design</h3>
            <p>Our graphic design services focus on creating visually compelling designs that effectively communicate your brand message. From logos to marketing materials,
                 we ensure your visuals are impactful and align with your business identity.</p>
        </div>

         <div class="box" data-aos="zoom-in">
            <i class="fab fa-bootstrap"></i>
            <h3>boostrap</h3>
            <p>We specialize in using Bootstrap to create responsive and mobile-first websites quickly. Our Bootstrap development services ensure your site looks great across all devices,
                 with clean, scalable, and customizable layouts that enhance user experience.</p>
        </div>

         <div class="box" data-aos="zoom-in">
            <i class="fas fa-chart-line"></i>
            <h3>seo marketing</h3>
            <p>Our SEO marketing services help improve your website's visibility on search engines. Through keyword optimization, content strategies, and technical improvements, 
                we drive organic traffic and enhance your online presence to attract and convert more customers.</p>
        </div>

         <div class="box" data-aos="zoom-in">
            <i class="fas fa-bullhorn"></i>
            <h3>digital marketing</h3>
            <p>Our digital marketing services are designed to boost your online presence and drive measurable results. From social media management to paid advertising, 
                we create tailored strategies that reach your target audience, increase engagement, and grow your business.</p>
        </div>

         <div class="box" data-aos="zoom-in">
            <i class="fab fa-wordpress"></i>
            <h3>wordpress</h3>
            <p>Our WordPress development services offer customized solutions for building scalable and user-friendly websites. Whether it's a blog, business site, or e-commerce store, 
                we create responsive, SEO-optimized websites tailored to your needs with easy-to-manage content.</p>
        </div>
    </div>
</section>
<!-- service section ends  -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">
    <h1 class="heading" data-aos="fade-up"><span>portfolio</span></h1>
    <div class="box-container">
        <div class="box" data-aos="zoom-in">
            <img src="image/pic1.webp" alt="summy">
            <h3>web development</h3>
            <span>(2020 - 2024)</span>
        </div>

         <div class="box" data-aos="zoom-in">
            <img src="image/pic2.webp" alt="summy">
            <h3>web development</h3>
            <span>(2020 - 2024)</span>
        </div>

         <div class="box" data-aos="zoom-in">
            <img src="image/pic3.webp" alt="summy">
            <h3>web development</h3>
            <span>(2020 - 2024)</span>
        </div>

         <div class="box" data-aos="zoom-in">
            <img src="image/pic4.webp" alt="summy">
            <h3>web development</h3>
            <span>(2020 - 2024)</span>
        </div>

         <div class="box" data-aos="zoom-in">
            <img src="image/pic5.webp" alt="summy">
            <h3>web development</h3>
            <span>(2020 - 2024)</span>
        </div>

         <div class="box" data-aos="zoom-in">
            <img src="image/pic6.webp" alt="summy">
            <h3>web development</h3>
            <span>(2020 - 2024)</span>
        </div>
    </div>
</section>
<!-- portfolio section ends  -->

<!-- contact section starts  -->

<section class="contact" id="contact">
    <h1 class="heading" data-aos="fade-up"><span>contact</span></h1>

    <form action="" method="post">
        <div class="flex">
        <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
        <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
        </div>
        <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
        <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
        <input data-aos="zoom-in" type="submit" value="send message" name="send" class="btn">
    </form>

    <div class="box-container">
        <div class="box" data-aos="zoom-in">
            <i class="fas fa-phone"></i>
            <h3>phone</h3>
            <p>+234-902-479-8450</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <i class="fas fa-envelope"></i>
            <h3>email</h3>
            <p>masudsummayyah@gmail.com</p>
        </div>

        <div class="box" data-aos="zoom-in">
            <i class="fas fa-map-marker-alt"></i>
            <h3>address</h3>
            <p>yusuf estate, nigeria - 11011</p>
        </div>
    </div>
</section>
<!-- contact section ends  -->

<div class="credit">&copy; copyright @ <?php echo date('Y'); ?> by <span>miss. web designer</span></div>

<!-- custom js file link -->
 <script src="js/script.js"></script>

 <!-- aos js link  -->

 <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

 <script>
    AOS.init({
        duration: 800,
        delay: 300
    });
 </script>
</body>
</html>