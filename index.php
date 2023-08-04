<!DOCTYPE html>
<html>

<head>
    <title>Ahmed Khalifa.</title>
    <link rel="icon" type="image/svg" href="assets/logo.svg">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->
</head>

<body>
    <!-- Cursor Effect -->
    <div class="circle"></div>
    <!-- Header -->
    <header class="header">
        <a href="#" class="logo-text">
            <img src="assets/logo.svg" alt="A.K." height="56px">
            <p style="font-weight: 600;">Ahmed<br>Khalifa.</p>
        </a>
        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#services">Services</a>
            <a href="#contact">Contact</a>
        </nav>
        <div id="toast-box">
            <!-- Toast Notifications -->
        </div>
    </header>

    <!-- HERO SECTION -->
    <section id="home" class="hero">
        <div class="container">
            <h1>Hey, I'm Ahmed.</h1>
            <h2>
                <span class="multiple-text"></span>
            </h2>
            <br>
            <p>I'm a software engineer who has a huge passion for developing all things software such as video games, mobile applications & websites.
                As a hungry learner, I'm always willing to take my skills to the next level, especially when it comes to problem solving & game programming.</p>
            <br><br>
            <div class="btn-box">
                <a href="#portfolio">PORTFOLIO</a>
                <a href="assets/Ahmed Ali - CV.pdf" target="_blank">MY RESUME</a>
            </div>
        </div>
    </section>
    <!-- ABOUT SECTION -->
    <section id="about" class="about">
        <div class="container">
            <h1>About Me.</h1>
            <br>
            <div class='about-icon'><i class='bx bxs-user-pin'></i></div>
            <p>Hello! My name is Ahmed, a Sudanese software developer, and
                I like to create many different types of software such as websites (like this), mobile apps, video games and more.
                Throughout my career, I've been involved in multiple projects ranging from simple websites to fully integrated software such as
                artificial intelligence chatbots, mobile apps for job searching and various other software involving blockchain in addition to other technologies.
                After getting a good amount of hands-on experience in both front-end and back-end development,
                I thought it was about time I made my own portfolio to better showcase and document some of my skillsets and expertise.
                When I'm not developing, I can sometimes be found solving coding problems and participating in online programming
                competetitions.
            </p>
        </div>
    </section>
    <!-- SKILLS SECTION -->
    <section id="skills" class="skills">
        <h1>Skills.</h1>
        <p>These are all the technologies that I have significant knowledge of or I'm currently practicing.</p>
        <div class="skills-container">
            <div class='skill-box'>
                <h2>Front-end</h2>
                <ul>
                    <li>
                        <i class=' bx bx-code'></i>
                        <p>C#</p>
                    </li>
                    <li>
                        <i class='bx bxl-flutter'></i>
                        <p>Dart + Flutter SDK</p>
                    </li>
                    <li>
                        <i class=' bx bxl-javascript'></i>
                        <p>Javascript</p>
                    </li>
                    <li>
                        <i class=' bx bxl-php'></i>
                        <p>PHP</p>
                    </li>
                </ul>
            </div>
            <div class='skill-box'>
                <h2>Back-end</h2>
                <ul>
                    <li>
                        <i class=' bx bxl-python'></i>
                        <p>Python</p>
                    </li>
                    <li>
                        <i class=' bx bxl-c-plus-plus'></i>
                        <p>C++</p>
                    </li>
                    <li>
                        <i class=' bx bxl-java'></i>
                        <p>Java</p>
                    </li>
                    <li>
                        <i class='bx bx-code'></i>
                        <p>SQL</p>
                    </li>
                </ul>
            </div>
            <div class='skill-box'>
                <h2>Others</h2>
                <ul>
                    <li>
                        <i class=' bx bxl-firebase'></i>
                        <p>Firebase</p>
                    </li>
                    <li>
                        <i class=' bx bxl-aws'></i>
                        <p>AWS</p>
                    </li>
                    <li>
                        <i class='bx bxl-figma'></i>
                        <p>Figma</p>
                    </li>
                    <!-- <li>
                        <i class='bx bx-code'></i>
                        <p>R Language</p>
                    </li> -->
                </ul>
            </div>
            <div class='skill-box'>
                <h2>Learning</h2>
                <ul>
                    <li>
                        <i class=' bx bxl-react'></i>
                        <p>React</p>
                    </li>
                    <li>
                        <i class=' bx bxl-typescript'></i>
                        <p>Typescript</p>
                    </li>
                    <li>
                        <i class=' bx bxl-nodejs'></i>
                        <p>NodeJS</p>
                    </li>
                    <li>
                        <i class=' bx bx-code'></i>
                        <p>ExpressJS</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- <p>----------------------------------------------------------------------------------
        -----------------------------------------------------------------------------------------</p> -->
    <!-- PORTFOLIO SECTION -->
    <section id="portfolio" class="portfolio">
        <h1>Portfolio.</h1>
        <p>Here are some of my recently completed projects (and those that are under progress).</p>
        <br>
        <br>
        <div class="project-container">
            <div class="project">
                <img src="assets/project1.png" style="transform: scale(1.01);" alt="Project_1">
                <div class="project-layer">
                    <h4>Mobile App</h4>
                    <h3>HosPal</h3>
                    <p>Emerging amidst the COVID-19 pandemic, <br>HosPal is a Mobile App that's all about helping medical proffesionals seek for jobs within their respective fields.
                        In addition to helping jobsearchers, it also enables employers to post job listings & review job applications.</p>
                    <ul>
                        <li>
                            <a href="javascript:void(0);" onclick="showToast(missingUrlMsg)">LIVE DEMO</a>
                        </li>
                        <li>
                            |
                        </li>
                        <li>
                            <a href="https://github.com/AK1o9/HosPal" target="_blank">CODE</a>
                        </li>
                        <li>
                            |
                        </li>
                        <li>
                            <a href="https://youtu.be/EJv-Wc6t75U" target="_blank">VIDEO DEMO</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="project">
                <img src="assets/project2.png" style="transform: scale(1.3);" alt="Project_2">
                <div class="project-layer">
                    <h4>C++ Program</h4>
                    <h3>Patient Admission System</h3>
                    <p> This .cpp program is used to run a system for the purpose of registering patients, ordering them within a queue
                        (in the form of a singly linked list) and performing other adminstrative tasks.
                        Though a pet project of mine, this system showcases some of my problem solving skillsets and data structure knowledge.
                    </p>
                    <ul>
                        <li>
                            <a href="javascript:void(0);" onclick="showToast(missingUrlMsg)">LIVE DEMO</a>
                        </li>
                        <li>
                            |
                        </li>
                        <li>
                            <a href="https://github.com/AK1o9/PatientAdmission" target="_blank">CODE</a>
                        </li>
                        <li>
                            |
                        </li>
                        <li>
                            <a href="#" target="_blank">VIDEO DEMO</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="project">
                <img src="assets/project3.png" alt="Project_3">
                <div class="project-layer">
                    <h4>CLI Python Script</h4>
                    <h3>Ferry Booking System </h3>
                    <p> This is an old Python-programmed CLI application for registering customers, booking ferry seats and printing reservation tickets.
                        Includes both business and economy class seats. </p>
                    <ul>
                        <li>
                            <a href="javascript:void(0);" onclick="showToast(missingUrlMsg)">LIVE DEMO</a>
                        </li>
                        <li>
                            |
                        </li>
                        <li>
                            <a href="https://github.com/AK1o9/FerryBooking" target="_blank">CODE</a>
                        </li>
                        <li>
                            |
                        </li>
                        <li>
                            <a href="#" target="_blank">VIDEO DEMO</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <br>
        <div class="btn-box">
            <a href="https://github.com/AK1o9?tab=repositories" target="_blank">SEE MORE</a>
            <a href="assets/Ahmed Ali - CV.pdf" target="_blank">MY RESUME</a>
        </div>

    </section>
    <!-- SERVICES SECTION (OPTIONAL) -->
    <section id="services" class="services">
        <h1>Services.</h1>
        <p>These are some of the services that I offer as a freelancer.</p>
        <br>
        <div class="services-container">
            <div class="services-box">
                <i class='bx bx-mobile-alt'></i>
                <h3>Mobile App Development</h3>
                <p>Lorem ipsum la cosa la la la mama mia oko ponco latoto.
                </p>
            </div>
            <div class="services-box">
                <i class='bx bx-globe'></i>
                <h3>Web Development</h3>
                <p>Lorem ipsum la cosa la la la mama mia oko ponco latoto.
                </p>
            </div>
            <div class="services-box">
                <i class='bx bx-brush'></i>
                <h3>Front-end Software<br>Development</h3>
                <p>Lorem ipsum la cosa la la la mama mia oko ponco latoto.
                </p>
            </div>
            <div class="services-box">
                <i class='bx bx-data'></i>
                <h3>Back-end Software<br>Development</h3>
                <p>Lorem ipsum la cosa la la la mama mia oko ponco latoto.
                </p>
            </div>
            <div class="services-box">
                <i class='bx bx-chat'></i>
                <h3>Java Consultation</h3>
                <p>Lorem ipsum la cosa la la la mama mia oko ponco latoto.
                </p>
            </div>
        </div>
    </section>
    <!-- CONTACT SECTION -->
    <section id="contact" class="contact">
        <h1>Contact.</h1>
        <p>Here is how we can get in touch!</p>
        <div class="contact-sci">
            <a href="mailto: itsahmed1o9@gmail.com"><i class='bx bx-envelope'></i></a>
            <!-- ^ recommended to a use a form instead (to avoid spam). -->
            <!-- <a href="https://www.instagram.com/kh4l1fa/" target="_blank"><i class='bx bxl-instagram'></i></a> -->
            <a href="https://www.linkedin.com/in/ak1o9/" target="_blank"><i class='bx bxl-linkedin'></i></a>
            <a href="https://github.com/AK1o9" target="_blank"><i class='bx bxl-github'></i></a>
        </div>
        <br><br><br>
        <p><?php echo ("< Email Address >") ?><br>itsahmed1o9@gmail.com
        </p>
    </section>


    <footer>
        <p>&copy; 2023 Ahmed Khalifa. All rights reserved.</p>
    </footer>
    <!-- swiper (unused) -->
    <!-- 
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
    <!-- typed.js -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <!-- custom script -->
    <script src="scripts/script.js"> </script>
</body>

</html>