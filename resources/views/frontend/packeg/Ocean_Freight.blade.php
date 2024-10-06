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


<style>


@import url('https://fonts.googleapis.com/css?family=Abel');

body {
  background: #F5FBFF;
}

#wrapper {
  width: 100%;
    
  @media screen and (min-width: 1024px) {
    width: 1100px;
    margin: 0 auto;
  }
  
  #pricing-tables {
    font-family: "Abel", sans-serif;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    align-items: center;
    
    @media screen and (min-width: 1024px) {
      flex-direction: row;
    }
    
    .pricing-table {
      max-width: 300px;
      width: 100%;
      margin: 15px 0;
      
      @media screen and (min-width: 1024px) {
        margin: 0;
      }
      
      .header {
        
        .title {
          text-align: center;
          text-transform: uppercase;
          padding: 15px 0;
          background: #e4e4e4;
          color: #000;
          font-size: 16x;
        }
        
        .price {
          text-align: center;
          text-transform: uppercase;
          padding: 15px 0;
          background: #f6f6f6;
          color: #000;
          font-size: 28px;
          font-weight: 300;
            
            span {
              font-size: 14px;
              vertical-align: super;
            }
        }
      }
      
      .features {
        background: #fff;
      
        ul {
          list-style: none;
          margin: 0;
          padding: 15px 0;

          li {
            padding: 8px 5px;
            text-align: center;
            
            span {
              color: #999;
            }
          }
        }
      }
      .signup {
        background: #fff;
        padding: 2px 0 25px 0;
        width: 100%;
        display: flex;
        justify-content: center;
        
        a {
          width: auto;
          margin: 0 auto;
          padding: 8px 10px;
          text-align: center;
          text-decoration: none;
          color: #FC4445;
          border: 1px solid #FC4445;
          transition: all .2s ease;
          
          &:hover {
            color: #fff;
            background: #FC4445;
          }
        }
      }
      
      &.featured {
        
        .header {
          
          .title {
            background: #FC4445;
            color: #fff;
          }
        }
        
        .signup {
          
          a {
            background: #FC4445;
            color: #fff;
            
            &:hover {
              color: #FC4445;
              background: #fff;
            }
          }
        }
      }
    }
  }
}



</style>

</head>
<body>
    



   
   <x-navigation />
<br> <br>

<div id="wrapper">
  <div id="pricing-tables">
    <div class="pricing-table">
      <div class="header">
        <div class="title">Basic</div>
        <div class="price">$29<span>/mo</span></div>
      </div>
      <div class="features">
        <ul>
          <li>2GB <span>Disk space</span></li>
          <li>20GB <span>Traffic/mo</span></li>
          <li>512MB <span>Memory</span></li>
          <li>5 Domains <span>+1 Free</span></li>
        </ul>
      </div>
      <div class="signup">
        <a href="#">Choose plan</a>
      </div>
    </div>
    
    <div class="pricing-table featured">
      <div class="header">
        <div class="title">Standard</div>
        <div class="price">$59<span>/3mo</span></div>
      </div>
      <div class="features">
        <ul>
          <li>4GB <span>Disk space</span></li>
          <li>50GB <span>Traffic/mo</span></li>
          <li>2GB <span>Memory</span></li>
          <li>10 Domains <span>+2 Free</span></li>
        </ul>
      </div>
      <div class="signup">
        <a href="#">Choose plan</a>
      </div>
    </div>
    
    <div class="pricing-table">
      <div class="header">
        <div class="title">Professional</div>
        <div class="price">$99<span>/6mo</span></div>
      </div>
      <div class="features">
        <ul>
          <li>10GB <span>Disk space</span></li>
          <li>100GB <span>Traffic/mo</span></li>
          <li>4GB <span>Memory</span></li>
          <li>Unlimited Domains</li>
        </ul>
      </div>
      <div class="signup">
        <a href="#">Choose plan</a>
      </div>
    </div>
  </div>
</div>
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