<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Alif Aditya</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">
                
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-festava-live.css" rel="stylesheet">
        
    </head>
    
    <body>
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        <main>
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <img class="logo" src="images/logo.png" alt="">
                    <a class="navbar-brand" href="index.html">
                        RATUNYA SEBLAK
                    </a>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Home</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">About</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_3">Gallery</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_4">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            

            <section class="hero-section" id="section_1">
                <div class="section-overlay"></div>

                <div class="container d-flex justify-content-center align-items-center">
                    <div class="row">

                        <div class="col-12 mt-auto mb-5 text-center">

                            <h1 class="text-white mb-5">Ratunya Seblak 2023</h1>

                            <a class="btn custom-btn smoothscroll" href="#section_2">Let's start</a>
                        </div>

                        <div class="col-lg-12 col-12 mt-auto d-flex flex-column flex-lg-row text-center">
                            <div class="date-wrap">
                                <h5 class="text-white">
                                    <i class="custom-icon bi-clock me-2"></i>
                                    10.00 - 22.00 
                                </h5>
                            </div>

                            <div class="location-wrap mx-auto py-3 py-lg-0">
                                <h5 class="text-white">
                                    <i class="custom-icon bi-geo-alt me-2"></i>
                                    Jl. Bunga Cempaka No.34, Medan
                                </h5>
                            </div>

                            <div class="social-share">
                                <ul class="social-icon d-flex align-items-center justify-content-center">
                                    <span class="text-white me-3">Contact:</span>

                                    <li class="social-icon-item">
                                        <a href="https://wa.me/081260414053" class="social-icon-link">
                                            <span class="bi-whatsapp"></span>
                                        </a>
                                    </li>

                                    <li class="social-icon-item">
                                        <a href="https://www.instagram.com/alip.adtyaa/" class="social-icon-link">
                                            <span class="bi-instagram"></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <img src="images/5.jpeg" >
                </div>
            </section>


            <section class="about-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-4 mb-lg-0 d-flex align-items-center">
                            <div class="services-info">
                                <h2 class="text-white mb-4">About Ratunya Seblak 2023</h2>

                                <p class="text-white">Seblak adalah makanan Indonesia yg dikenal berasal dari Bandung, Jawa Barat dengan cita rasa gurih dan pedas.Diolah dengan bahan-bahan yg berkualitas dan higienis.
                                    Ratunya seblakk selalu unggul dengan rasa,harga dan kualitas.Oleh karena itu konsumen tidak perlu meragukan Ratunya Seblak untuk menjadi santapan.</p>

                                <p class="text-white"></p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="about-text-wrap">
                                <img src="images/logo.png" class="about-image img-fluid">

                                <div class="about-text-info d-flex">
                                    <div class="d-flex">
                                        <i class="about-text-icon bi-person"></i>
                                    </div>


                                    <div class="ms-4">
                                        <h3>Ratunya Seblak</h3>

                                        <p class="mb-0">your amazing taste experience with us</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="artists-section section-padding" id="section_3">
                <div class="container">
                    <div class="row justify-content-center">

                        <div class="col-12 text-center">
                            <h2 class="mb-4">Our Menu</h1>
                        </div>

                        <div class="col-lg-5 col-12">
                            <div class="artists-thumb">
                                <div class="artists-image-wrap">
                                    <img src="images/2.jpeg" class="artists-image img-fluid">
                                </div>

                                <div class="artists-hover">
                                    <p>
                                        <strong>Name:</strong>
                                        Seblak Ceker
                                    </p>

                                    <p>
                                        <strong>Price:</strong>
                                        17.000
                                    </p>

                                    <p>
                                        <strong>Topping:</strong>
                                        pangsit, telur puyuh, ceker 
                                    </p>

                                    <hr>

                                    <p class="mb-0">
                                        <strong>Chat us:</strong>
                                        <a href="https://wa.me/081260414053">Alif Aditya</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5 col-12">
                            <div class="artists-thumb">
                                <div class="artists-image-wrap">
                                    <img src="images/3.png" class="artists-image img-fluid">
                                </div>

                                <div class="artists-hover">
                                    <p>
                                        <strong>Name:</strong>
                                        Seblak Makaroni
                                    </p>

                                    <p>
                                        <strong>Price:</strong>
                                        17.000
                                    </p>

                                    <p>
                                        <strong>Topping:</strong>
                                        pangsit, telur puyuh, bakso
                                    </p>

                                    <hr>

                                    <p class="mb-0">
                                        <strong>Chat us:</strong>
                                        <a href="https://wa.me/081260414053">Alif Aditya</a>
                                    </p>
                                </div>
                            </div>

                            <div class="artists-thumb">
                                <img src="images/4.jpg" class="artists-image img-fluid">

                                <div class="artists-hover">
                                    <p>
                                        <strong>Name:</strong>
                                        Seblak Bakso
                                    </p>

                                    <p>
                                        <strong>Price:</strong>
                                        17.000
                                    </p>

                                    <p>
                                        <strong>Topping:</strong>
                                        ceker, telur puyuh, pangsit
                                    </p>

                                    <hr>

                                    <p class="mb-0">
                                        <strong>Chat us:</strong>
                                        <a href="https://wa.me/081260414053">Alif Aditya</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>



            <section class="contact-section section-padding" id="section_4">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <h2 class="text-center mb-4">Tertarik? silahkan pesan!!!</h2>

                            <nav class="d-flex justify-content-center">
                                <div class="nav nav-tabs align-items-baseline justify-content-center" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-ContactForm-tab" data-bs-toggle="tab" data-bs-target="#nav-ContactForm" type="button" role="tab" aria-controls="nav-ContactForm" aria-selected="false">
                                        <h5>Contact Form</h5>
                                    </button>

                                    <button class="nav-link" id="nav-ContactMap-tab" data-bs-toggle="tab" data-bs-target="#nav-ContactMap" type="button" role="tab" aria-controls="nav-ContactMap" aria-selected="false">
                                        <h5>Google Maps</h5>
                                    </button>
                                </div>
                            </nav>

                            <div class="tab-content shadow-lg mt-5" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-ContactForm" role="tabpanel" aria-labelledby="nav-ContactForm-tab">
                                    <form class="custom-form contact-form mb-5 mb-lg-0" action="#" method="post" role="form">
                                        <div class="contact-form-body">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-12">
                                                    <input type="text" name="contact-name" id="contact-name" class="form-control" placeholder="Full name" required>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-12">
                                                    <input type="email" name="contact-email" id="contact-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>
                                                </div>
                                            </div>

                                            <input type="text" name="contact-company" id="contact-company" class="form-control" placeholder="Company" required>

                                            <textarea name="contact-message" rows="3" class="form-control" id="contact-message" placeholder="Message"></textarea>

                                            <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                                <button type="submit" class="form-control">Send message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade" id="nav-ContactMap" role="tabpanel" aria-labelledby="nav-ContactMap-tab">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2046.9534294168973!2d98.63897667669195!3d3.5969960318819285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312e3949b9f5d3%3A0x641ed3f5301c2fe6!2sJl.%20Budi%20Luhur%20No.30%2C%20Sei%20Sikambing%20C.%20II%2C%20Kec.%20Medan%20Helvetia%2C%20Kota%20Medan%2C%20Sumatera%20Utara%2020118!5e0!3m2!1sen!2sid!4v1679217300371!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    <!-- You can easily copy the embed code from Google Maps -> Share -> Embed a map // -->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
        </main>


        <footer class="site-footer">
            <div class="site-footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <h2 class="text-white mb-lg-0">Ratunya Seblak</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <h5 class="site-footer-title mb-3">Have a question?</h5>

                        <p class="text-white d-flex mb-1">
                            <a href="tel: 090-080-0760" class="site-footer-link">
                                +62 812-6041-4053
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <a href="mailto:difawidyartini@gmail.com" class="site-footer-link">
                                alifaditya398@gmail.com
                            </a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 col-11 mb-4 mb-lg-0 mb-md-0">
                        <h5 class="site-footer-title mb-3">Location</h5>

                        <p class="text-white d-flex mt-3 mb-2">
                        Jl. Bunga Cempaka No.34, Medan, Sumatera Utara, Indonesia</p>

                        <a class="link-fx-1 color-contrast-higher mt-3" href="https://www.google.com/search?q=masjid%20baitul%20muslimin&oq=masjid%20baitul%20muslimin&tbs=lf:1,lf_ui:2&tbm=lcl&sxsrf=APwXEdew2tuyrR9I1goKopBi0U_D2fdC-w:1683513261459&rflfq=1&num=10&rldimm=5200123810155216089&lqi=ChZtYXNqaWQgYmFpdHVsIG11c2xpbWluSJy8yJOjqoCACFokEAAQARACGAAYARgCIhZtYXNqaWQgYmFpdHVsIG11c2xpbWlukgEGbW9zcXVlqgE_EAEyHxABIht1IoOTyGRckIhrGxmx0TTvPxxGxqfYOw10HuEyGhACIhZtYXNqaWQgYmFpdHVsIG11c2xpbWlu&ved=2ahUKEwjI3rHP1-T-AhV73zgGHbctA9wQvS56BAgSEAE&sa=X&rlst=f#rlfi=hd:;si:5200123810155216089,l,ChZtYXNqaWQgYmFpdHVsIG11c2xpbWluSJy8yJOjqoCACFokEAAQARACGAAYARgCIhZtYXNqaWQgYmFpdHVsIG11c2xpbWlukgEGbW9zcXVlqgE_EAEyHxABIht1IoOTyGRckIhrGxmx0TTvPxxGxqfYOw10HuEyGhACIhZtYXNqaWQgYmFpdHVsIG11c2xpbWlu;mv:[[3.606911046282501,98.72896249153933],[3.492803946517675,98.58339364388308]]">
                            <span>Our Maps</span>
                            <svg class="icon" viewBox="0 0 32 32" aria-hidden="true"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><circle cx="16" cy="16" r="15.5"></circle><line x1="10" y1="18" x2="16" y2="12"></line><line x1="16" y1="12" x2="22" y2="18"></line></g></svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="site-footer-bottom">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 col-12 mt-5">
                            <p class="copyright-text">Copyright © 2023 Ratunya Seblak</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/click-scroll.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>