<?php
$insert = false;
if (isset($_POST['name'])) {
    // Set connection variables
    $server = 'localhost';
    $username = 'root';
    $password = '';

    // Create a database connection
    $connection = mysqli_connect($server, $username, $password);

    // Check for connection success
    if (!$connection) {
        die(
            'connection to this database failed due to' . mysqli_connect_error()
        );
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['other'];
    $sql = "INSERT INTO `test`.`trip`(`name`, `age`, `gender`, `email`, `phone`, `other`,`date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";
    // echo $sql;

    // Execute the query
    if ($connection->query($sql) == true) {
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    } else {
        echo "ERROR: $sql <br> $connection->error";
    }

    // Close the database connection
    $connection->close();
}
?>

<!DOCTYPE html>
<!-- Created By Tanuj -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#teams" class="menu-btn">Teams</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Tanuj Gehlot</div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
                <a href="#">Hire me</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/profile-1.jpeg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Tanuj and I'm a <span class="typing-2"></span></div>
                    <p>Since beginning my journey as a freelance designer nearly 2 years ago, I've done remote work for agencies, consulted for startups, and collaborated with talented people to create digital products for both business and consumer use. I'm quietly confident, naturally curious, and perpetually working on improving my chops one design problem at a time.</p>
                    <a href="#">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Designer</div>
                        <p>I value simple content structure, clean design patterns, and thoughtful interactions.</p>
                        <br>
                        <h4>Things I enjoy designing:</h4>
                        <p>UX, UI, Web, Mobile, Apps, Logos</p><br>

                            <h4>Design Tools:</h4>
                            <p>Balsamiq Mockups <br>
                                Figma <br>
                                Invision <br>
                                Marvel <br>
                                Pen & Paper <br>
                                Sketch <br>
                                Webflow <br>
                                Zeplin</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Front-end Developer</div>
                        <p>I like to code things from scratch, and enjoy bringing ideas to life in the browser.</p>
                        <br>
                        <h4>Languages I speak:</h4>
                        <p>HTML, Pug, Slim, CSS, Sass, Less</p><br>
                        
                        <h4>Dev Tools:</h4>
                        <p>Atom <br>
                            Bitbucket <br>
                            Bootstrap <br>
                            Bulma <br>
                            Codekit <br>
                            Codepen <br>
                            Github <br>
                            Gitlab <br>
                            Terminal</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Mentor</div>
                        <p>I genuinely care about people, and love helping fellow designers work on their craft.</p>
                        <br>
                        <h4>Experiences I draw from:</h4>
                        <p>UX/UI, Product design, Freelancing</p><br>
                        
                        <h4>Mentor Stats:</h4>
                        <p>5 years experience <br>
                            26 short courses <br>
                            42 bootcamps <br>
                            125+ students <br>
                            1,400+ mentor sessions <br>
                            60+ group critiques <br>
                            12,000+ comments</p>
                        
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                    <p>I am a self taught web application developer based in Indore, India<br>I have worked with Content Management Systems (CMS) and can make things look pretty with HTML and CSS. In 2015 I started to learn full-stack JavaScript, and haven't looked back since. <br>
                        <br>
                 Currently, I am working through a number of courses to expand my front and backend JavaScript knowledge, and having a play with various frameworks. <br>
                 <br>
                 Using technology, I enjoy helping businesses save time and money through online services and applications. I love writing code, front and backend, for work and for fun. <br></p>
                    <a href="#">Read more</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>60%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>80%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>50%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>70%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">My teams</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="images/profile-1.jpeg" alt="">
                        <div class="text">Tanuj</div>
                        <p>Full-stack Developer</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-2.jpeg" alt="">
                        <div class="text">Grace</div>
                        <p>Front-end Developer</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-3.jpeg" alt="">
                        <div class="text">Ross</div>
                        <p>Back-end Developer</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-4.jpeg" alt="">
                        <div class="text">Tommy</div>
                        <p>Python Developer</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-5.jpeg" alt="">
                        <div class="text">Me</div>
                        <p> developer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Got something to say ?   You can contact me directly...</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Tanuj Gehlot</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">I-620, L.I.G COLONY Indore(M.P),India</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">tanujg93@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Enter Your Details</div>
                   <?php if ($insert == true) {
                    echo "<p class='submitMsg'> Thank you for filling out your information! </p>";
                      } ?>
                     <form action="index.php" method="post">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="name" id="name" placeholder="Name" required>
                            </div>
                            <div class="field age">
                                <input type="text" name="age" id="age" placeholder="Age" required>
                            </div>
                        </div>
                        <div class="fields">
                            <div class="field gender">
                                <input type="text" name="gender" id="gender" placeholder="Gender" required>
                            </div>
                            <div class="field email">
                                <input type="email" name="email" id="email" placeholder="Email" required>
                            </div>
                        </div>
                       <div class="field">
                            <div class="field phone">
                                <input type="phone" name="phone" id="phone" placeholder="Phone" required>
                            </div>
                       </div>
                        <div class="field textarea">
                            <textarea name="other" id="other" cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button">
                            <button type="submit">Submit</button>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>Created By <a href="https://www.tanuj.com">Tanuj</a> | <span class="far fa-copyright"></span> 2020 All rights reserved.</span>
    </footer>

    <script src="script.js"></script>
</body>
</html>