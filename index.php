<!DOCTYPE html>
<?php
    $fname = "McGil";
    $lname = "Libag";
    $language = array('HTML & CSS', 'C#', 'PHP', 'Android Studio', 'Java', 'Laravel', 'MySQL', 'Godot');
    $systemVision = "https://docs.google.com/document/d/1-ziIDFcscrctYP4Sw_7OuQWrKRwOfE8V2UnyGS3Tmzg/edit?usp=sharing";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo($fname.' '.$lname.' | Portfolio')?></title>

    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
    <script src="js/jquery-3.7.1.min.js" defer></script>
    <script src="js/script.js" defer></script>
</head>
<body>
    <div class="container-fluid px-0 h-100">
        <a href="#home" class="back-top ">
            <i class="bi bi-arrow-up-short text-white"></i>
        </a>

         <div class="container-fluid px-0 d-flex flex-column h-100 home" id="home">
             <header class=" py-2 header">
                <nav class="d-flex justify-content-center align-items-center gap-5">
                    <a href="#skills" class="text-decoration-none">Skills</a>
                    <a href="#projects" class="text-decoration-none">Projects</a>
                    <a href="#home" class="logo h1 text-white text-decoration-none"><img src="images/logo.png" alt="W" width="50"></a>
                    <a href="#about" class="text-decoration-none">About Me</a>
                    <a href="#contact" class="text-decoration-none">Contact</a>
                </nav>
            </header>

            <header class="py-2 header fixed-top">
                <nav class="d-flex justify-content-center align-items-center gap-5">
                    <a href="#skills" class="text-decoration-none">Skills</a>
                    <a href="#projects" class="text-decoration-none">Projects</a>
                    <a href="#home" class="logo h1 text-white text-decoration-none"><img src="images/logo.png" alt="W" width="50"></a>
                    <a href="#about" class="text-decoration-none">About Me</a>
                    <a href="#contact" class="text-decoration-none">Contact</a>
                </nav>
            </header> 
            
             <section class="d-flex flex-column justify-content-center align-items-center pb-5 home-content">
                <!-- <div class="border things-container">
                    <div class="thing">
                        <img src="images//bootstrap.svg" alt="" width="10">
                    </div>
                </div>  -->

                <div class="main-text-container text-center">
                    <p class="mb-0 welcome-text">WELCOME TO MY PORTFOLIO</p>

                    <div class="name-container animate__animated animate__fadeIn animate__delay-1s">
                        <p class="main-text mb-0 text-1"><?php echo $fname.' <span class="text-primary">'.$lname.'</span>'?></p>
                        <p class="main-text mb-0 text-2"><span class="text-primary">App & Web</span> Developer</p>
                    </div>
                </div>
                
                
            </section> 
        </div>

        <section class="container-fluid py-5 skills" id="skills">
            <div class="container">
                <p class="h1 text-center mb-5 fw-bold text-white"><?php echo'MY <span class="text-primary">SKILLS'?></span></>

                <div class="row d-flex justify-content-center gap-5">
                    <div class="col-lg-3 col-md-12 card">
                        <div class="icon-container">
                            <span class="d-flex align-items-center justify-content-center">
                                <img src="images/html.png" alt="html" width="60">
                                <span class="fw-bold h3 mx-2">+</span>
                                <img src="images/css.png" alt="html" width="60">
                            </span>
                        </div>
        
                        <p class="card-text text-center fw-bold mt-4">
                            <?php 
                                echo $language[0];
                            ?>
                        </p>
                    </div>
    
                    <div class="col-lg-3 col-md-12 card">
                        <div class="icon-container">
                            <span class="d-flex align-items-center justify-content-center">
                                <img src="/images/csharp.png" alt="C#" width="60">
                            </span>
                        </div>
        
                        <p class="card-text text-center fw-bold mt-4">
                            <?php 
                                echo $language[1];
                            ?>
                        </p>
                    </div>
    
                    <div class="col-lg-3 col-md-12 card">
                        <div class="icon-container">
                            <span class="d-flex align-items-center justify-content-center">
                                <img src="images/php.png" alt="php" width="60">
                            </span>
                        </div>
        
                        <p class="card-text text-center fw-bold mt-4">
                            <?php 
                                echo $language[2];
                            ?>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-12 card">
                        <div class="icon-container">
                            <span class="d-flex align-items-center justify-content-center">
                                <img src="/images/android_studio.png" alt="php" width="60">
                            </span>
                        </div>
        
                        <p class="card-text text-center fw-bold mt-4">
                            <?php 
                                echo $language[3];
                            ?>
                        </p>
                    </div>
    
                    <div class="col-lg-3 card">
                        <div class="icon-container">
                            <span class="d-flex align-items-center justify-content-center">
                                <img src="images/java.webp" alt="java" width="60">
                            </span>
                        </div>
        
                        <p class="card-text text-center fw-bold mt-4">
                            <?php 
                                echo $language[4];
                            ?>
                        </p>
                    </div>
    
                    <div class="col-lg-3 card">
                        <div class="icon-container">
                            <span class="d-flex align-items-center justify-content-center">
                                <img src="images/laravel.png" alt="java" width="60">
                            </span>
                        </div>
        
                        <p class="card-text text-center fw-bold mt-4">
                            <?php 
                                echo $language[5];
                            ?>
                        </p>
                    </div>
                    
                    <div class="col-lg-3 card">
                        <div class="icon-container">
                            <span class="d-flex align-items-center justify-content-center">
                                <img src="images/mysql.png" alt="java" width="60">
                            </span>
                        </div>
        
                        <p class="card-text text-center fw-bold mt-4">
                            <?php 
                                echo $language[6];
                            ?>
                        </p>
                    </div>
    
                    <div class="col-lg-3 card">
                        <div class="icon-container">
                            <span class="d-flex align-items-center justify-content-center">
                                <img src="images/godot.png" alt="java" width="60">
                            </span>
                        </div>
        
                        <p class="card-text text-center fw-bold mt-4">
                            <?php 
                                echo $language[7];
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid py-5 projects" id="projects">
            <div class="container-fluid project-container overflow-hidden">
                <div class="mb-5">
                    <p class="h1 fw-bold text-white">GLIMPSE OF <span class="text-primary">MY WORK</span></p>
                    <p class="h5 text-white">Here are some exciting <span class="text-primary">projects</span> that I've made.</p>
                </div>

                <div class="mb-5 d-flex flex-column flex-md-row gap-5 align-items-center project-left">
                    <div class="window">
                        <div class="window-top">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>

                        <div class="window-body h-100">
                            <img src="images/Roast and Brew.png" alt="sterio studio clicks" width="60">
                        </div>
                    </div>

                    <div class="d-flex justify-content-center align-items-md-start flex-column h-100">
                        <p class="h4">Roast and Brew</p>
                        <p class="opacity-50 text-center">Recipe Book Website</p>
                        <!-- <a href="#projects" class="opacity-50 text-decoration-none text-center">Learn more <i class="bi bi-info-circle-fill"></i></a> -->
                    </div>
                </div>

                <div class="mb-5 d-flex flex-column flex-md-row-reverse gap-5 align-items-center project-right">
                    <div class="window">
                        <div class="window-top">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>

                        <div class="window-body h-100">
                            <img src="images/Chabo.png" alt="chabo">
                        </div>
                    </div>

                    <div class="d-flex justify-content-center align-items-md-end flex-column h-100">
                        <p class="h4 text-center">Chabo</p>
                        <p class="opacity-50 text-center">Interactive Chat System</p>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="container-fluid pt-5 about" id="about">
            <div class="container">
                <div class="row gap-5">
                    <div class="col col-lg-4">
                        <div class="profile-container">
                            <div class="profile-img-container">
                                <img class="w-100 profile-img" src="images/me.png" alt="" loading="lazy">
                                <div class="bg-box"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-7">
                        <div class="text-white flex-column d-flex align-items-center justify-content-center h-100">
                            <p class="fw-bold h2">ABOUT ME</p>
                            <p class="introduction-text text-center">
                                <?php 
                                    echo 'Hi, nice to meet you! I am <span class="fw-bold text-primary">'. $fname.' '.$lname.'</span> 
                                    a App & Web Developer from the City of Panabo, Philippines, currently a 3rd-year CS student from 
                                    STI Davao. With traits of being a hardworker and a logical individual, I am eager to expand my 
                                    field of knowledge.'
                                ?>
                            </p>
                            <p class="introduction-text text-center">
                                <?php 
                                    echo 'My specialty involves creating useful, clean and logical backend code for websites & application 
                                    for an impeccable site experience. Feel free to check my portfolio, so we can start our amazing collaboration!'
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                
            </div>
        </section> 

        <section class="container-fluid proverbs" id="proverbs">
            <div class="container h-100 d-flex justify-content-center align-items-center text-center">
                <p class="proverb-text">"Coding is like life. It's difficult... so reach through my contacts so we can settle right away." <span class="author">- &lt;/Wendel&gt;</span></p>
            </div>
        </section> 

        <section class="container-fluid py-5 contacts" id="contact">
            <div class="container-fluid text-white">
                <p class="h5 text-center">Need a developer?</p>
                <p class="h1 text-center fw-bold" style="font-size: 3rem;">Contact Me!</p>

                <div class="mt-5 d-flex flex-column flex-sm-row align-items-center justify-content-center gap-5">
                    <a class="contact-link" href="https://www.facebook.com/profile.php?id=100094371526777e" target="_blank">
                        <i class="bi bi-facebook"></i>
                    </a>
                    
                    <div>
                        <a class="contact-link email" style="cursor: pointer;" onclick="copyEmail()">
                            <i class="bi bi-envelope-fill"></i>
                        </a>
    
                        <p class="copyText">Email Copied!</p>
                    </div>
                    
                    <a class="contact-link" href="https://github.com/McGillll" target="_blank">
                        <i class="bi bi-github"></i>
                    </a>
                </div>
            </div>
        </section>

        <footer class="container-fluid bg-dark text-white p-3">
            <div class="container text-center">
                <span class=" align-middle">
                    &copy;
                    <?php echo $fname.' '.$lname.' '. date("Y")." "; ?>
                    All Rights Reserved.
                </span>
            </div>
            
        </footer>
    </div>
</body>
</html>