<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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
            <div class="logo"><a style="color: black;" href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a style="color: black;"  href="#home" class="menu-btn">Home</a></li>
                <li><a style="color: black;" href="#about" class="menu-btn">About</a></li>
                <li><a style="color: black;" href="#services" class="menu-btn">Services</a></li>
                <li><a style="color: black;" href="#skills" class="menu-btn">Skills</a></li>
                <li><a style="color: black;" href="#contact" class="menu-btn">Contact</a></li>
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
                <div style="color: black;" class="text-1">Hello, my name is</div>
                <div style="color: black;" class="text-3">Toriqul islam</div>
                <div style="color: black;" class="text-3">And I'm a <span class="typing"></span></div>
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
                   
                </div>
                <div class="column right">
                    <div class="text">I'm Toriqul islam and I'm a <span class="typing-2"></span></div>
                    <div><p style="font-weight: 500;">Hi, I'm Toriqul islam,
                        lives in Rangpur, Bangladesh.
                         I'm a student in Rangpur polytechnic institute.
                   </p>
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
                        <div class="text">Web Developing</div>
                        <p>I know HTML, CSS, JAVASCRIPT and BOOTSTRAP. so i can make your website as well.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>         
                        <div class="text">Freelancing</div>
            <p>I'm a freelancer also. So I can work on your projects and 
                you can hire me to build your website.</p>
            </div>
               </div>
        <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
            <div class="text">Apps Design</div>
         <p>Currently i don't know how to build any apps but in future
             i'll learn how to build apps.</p>
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
                    <p style="font-weight: 500;">I'm a student though but I've learnt HTML, CSS, JAVASCRIPT and BOOTSTRAP. I'm still learning JavaScript and working with bootstrap framework. 
            I know 80% HTML, 60% CSS, 20% JAVASCRIPT, 70% BOOTSTRAP.
             In future I'll be a full stack developer. I've worked some small projects.</p>
                    <a href="#">Read more</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>80%</span>
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
                            <span>20%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Bootstrap</span>
                            <span>70%</span>
                        </div>
                        <div class="line bootstrap"></div>
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
                    <p style="font-weight: 500;">I live in Rangpur, Bangladesh. Studing in Rangpur polytechnic institute</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Toriqul</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Rangpur, Bangladesh</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">toriqulislam2720@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="#">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
         <span class="far fa-copyright"></span> 2022 All rights reserved.</span>
    </footer>




    <script src="script.js"></script>
</body>
</html>
