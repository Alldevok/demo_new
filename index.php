<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Food Delivery | MyOnlineKhana.com</title>
    <link rel="stylesheet" href="Style.css" class="css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css" class="css">
    <link href="https://fonts.googleapis.com/css2?family=Alkatra&family=Bree+Serif&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link rel="stylesheet" media="screen and (max-width:1220px)" href="phone.css" class="css">
</head>

<body>
    <!-- navbar start -->
    <nav id="navbar">
        <div class="navbar-content">
            <div id="logo">
                <a href="#"><img src="PROJECTimages/chef.jpg" alt="MyOnlineKhana.com"></a>
            </div>

            <div class="nav-items">
                <div class="nav-menu">
                    <!-- for mobile -->
                    <ul class="sidebar">
                    <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26"
                                    viewBox="0 -960 960 960" width="26">
                                    <path
                                        d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                                </svg></a></li>
                        <li class="item"><a href="#">Home</a></li>
                        <li class="item"><a href="#services_block">Services</a></li>
                        <li class="item"><a href="#client-section">Our Clients</a></li>
                        <li class="item"><a href="#contact">Contact Us</a></li>
                    </ul>
                    <!-- for desktop -->
                    <ul>
                        <li class="hideOnMobile"><a href="#">Home</a></li>
                        <li class="hideOnMobile"><a href="#services_block">Services</a></li>
                        <li class="hideOnMobile"><a href="#client-section">Our Clients</a></li>
                        <li class="hideOnMobile"><a href="#contact">Contact Us</a></li>
                    </ul>
                </div>

                <div class="nav-button">
                    <button class="btn" id="loginbtn">Login In</button>
                    <button class="btn" id="Regbtn">Register</button>
                    <button class="btn" id="menu-b" onclick=showSidebar()><svg xmlns="http://www.w3.org/2000/svg" height="15"
                                    viewBox="0 -960 960 960" width="15">
                                    <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                                </svg>
                    </button>
                </div>
                
            </div>
        </div>

    </nav>
    <!-- navbar end -->


    <section id="home_block">

        <h1 class="home">Welcome to MyOnlineKhana</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis nihil numquam nulla quam rem porro debitis
            autem voluptatum assumenda reprehenderit./p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio culpa delectus unde expedita fugit velit
            tempora blanditiis numquam in officia!</p>
        <button class="btn">Order Now</button>

    </section>

    <section id="services_block">
    <h1 class="text">Our Services</h1>
    <div class="box">
        <img src="PROJECTimages/pizza.jpg" alt="Food Ordering">
        <h2 class="services_block_B">Food Ordering</h2>
        <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga fugit ipsa aspernatur
            doloribus quidem quo voluptatibus quod, quos magnam culpa quibusdam ut similique beatae, alias
            repellendus non sequi iusto, eaque temporibus dolorum exercitationem magni eius. Nobis dolore rerum
            odit quis!</p>
    </div>

    <div class="box">
        <img src="PROJECTimages/pizza-2487090__340.jpg" alt="Food Catering">
        <h2 class="services_block_B">Food Catering</h2>
        <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga fugit ipsa aspernatur
            doloribus quidem quo voluptatibus quod, quos magnam culpa quibusdam ut similique beatae, alias
            repellendus non sequi iusto, eaque temporibus dolorum exercitationem magni eius. Nobis dolore rerum
            odit quis!</p>
    </div>

    <div class="box">
        <img src="PROJECTimages/food-delivery-5217579__340.webp" alt="Food Delivery">
        <h2 class="services_block_B">Food Delivery</h2>
        <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga fugit ipsa aspernatur
            doloribus quidem quo voluptatibus quod, quos magnam culpa quibusdam ut similique beatae, alias
            repellendus non sequi iusto, eaque temporibus dolorum exercitationem magni eius. Nobis dolore rerum
            odit quis!</p>
    </div>
</section>



    <section id="client-section">
        <h1 class="client-head">Our Clients</h1>
        <div id="clients">
            <div class="client-item">
                <img src="PROJECTimages/download.png" alt="Our Clients">
            </div>
            <div class="client-item">
                <img src="PROJECTimages/Fssai.png" alt="Our Clients">
            </div>
            <div class="client-item">
                <img src="PROJECTimages/Nestle.png" alt="Our Clients">
            </div>
            <div class="client-item">
                <img src="PROJECTimages/Real India.png" alt="Our Clients">
            </div>
            <div class="client-item">
                <img src="PROJECTimages/Vadilal.png" alt="Our Clients">
            </div>
        </div>
    </section>

    <section id="contact">
        <h1 class="contact-head">Contact Us</h1>
        <div id="contact-box">
            <form action="">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter Your Name" autocomplete="false"
                        onkeyup="validateName()">
                    <span id="name-error"></span>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter Your email"
                        onkeyup="validateEmail()">
                    <span id="email-error"></span>
                </div>
                <div class="form-group">
                    <label for="number">Phone number</label>
                    <input type="number" name="number" id="number" required pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                        placeholder="xxx-xxx-xxxx" onkeyup="validatenumber()">
                    <span id="number-error"></span>

                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10"
                        placeholder="Your Interest😋😋 is required" onkeyup="validateMessage()"></textarea>
                    <span id="message-error"></span>
                </div>

                <button onclick="return validateForm()">Submit</button>
                <span id="submit-error"></span>

            </form>
        </div>
    </section>


    <footer>
        <div class="center">
            Copyright &copy; www.MyOnlineKhana.com. All rights reserved!
        </div>
    </footer>
    <script src="Script.js"></script>

</body>

</html>