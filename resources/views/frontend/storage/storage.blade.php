<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="css/style.css">




</head>
<body>
    
   <x-navigation />

<!-- Estimate_area start  -->
<div class="Estimate_area overlay">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-5">
                <div class="Estimate_info">
                    <h3>Get free Estimate</h3>
                    <p>Esteem spirit temper too say adieus who direct esteem. It look estee luckily or picture placing.</p>
                    <a href="#" class="boxed-btn3">+10 672 457 356</a>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-7">
                <div class="form">
                    <form action="#">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="input_field">
                                    <input type="text" placeholder="Your name" value="{{ $name }}" readonly>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="input_field">
                                    <input type="email" placeholder="Email" value="{{ $email }}" readonly>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="input_field">
                                    <select class="wide">
                                        <option data-display="Select Governorate">Select Governorate</option>
                                        <option value="Amman">Amman</option>
                                        <option value="Zarqa">Zarqa</option>
                                        <option value="Irbid">Irbid</option>
                                        <option value="Aqaba">Aqaba</option>
                                        <option value="Ma'an">Ma'an</option>
                                        <option value="Karak">Karak</option>
                                        <option value="Ajloun">Ajloun</option>
                                        <option value="Madaba">Madaba</option>
                                        <option value="Tafilah">Tafilah</option>
                                        <option value="Balqa">Balqa</option>
                                        <option value="Mafraq">Mafraq</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="input_field">
                                    <input type="text" placeholder="Enter your housing details">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="input_field">
                                    <select class="wide">
                                        <option data-display="Select Size (m²)">Select Size (m²)</option>
                                        <option value="2x2">2x2 - $20</option>
                                        <option value="3x3">3x3 - $30</option>
                                        <option value="4x4">4x4 - $40</option>
                                        <option value="5x5">5x5 - $50</option>
                                        <option value="6x6">6x6 - $60</option>
                                        <option value="7x7">7x7 - $70</option>
                                        <option value="8x8">8x8 - $80</option>
                                        <option value="9x9">9x9 - $90</option>
                                        <option value="10x10">10x10 - $100</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-xl-6">
                                <div class="input_field">
                                    <label for="breakable">Is the item breakable?</label>
                                    <select id="breakable" name="breakable" class="wide">
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-xl-6">
                                <div class="input_field">
                                    <label for="delivery_service">Do you need delivery service?</label>
                                    <select id="delivery_service" name="delivery_service" class="wide">
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="input_field">
                                    <textarea placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="input_field">
                                    <button class="boxed-btn3-line" type="submit">Send Estimate</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Estimate_area end  -->
    

<x-footer />


</body>


    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="js/slick.min.js"></script>



    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>



</html>