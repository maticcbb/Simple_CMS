<?php include("app/init.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bootstrap</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo APP_RES ?>css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo APP_RES ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo APP_RES ?>css/style.css">
    <script type="text/javascript" src="<?php echo APP_RES ?>javascript/jquery.min.js"></script>
    
    <?php $CMS_Core->head(); ?>
</head>

<body class="text-font">
<?php $CMS_Core->toolbar(); ?>
    <!--NAVIGATION-->
    <nav class="nav-dark bg-dark rounded-bottom">
        <div class="container-fluid ">

            <!--CONTACT/LOG/REGISTER BAR-->

            <div id="bar-height" class="row border-top-0 border-left-0 border-right-0 border border-secondary ">
                <div class="col-md-12">
                    <div class="d-flex">
                        <!--BADGE PHONE-->
                        <div class="p-2 float-left badge-icon">
                            <span class="badge badge-info">
                        <i class="fa fa-phone" aria-hidden="true"> </i>
                       </span>
                            <span class="text-light info"> 506-567-432</span>
                        </div>
                        <!--BADGE EMAIL-->
                        <div class="mr-auto p-2 float-right  badge-icon">
                            <span class="badge badge-info">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                       </span>
                            <a class="text-light info" href="firma@gmail.com"> firma@gmail.com</a>
                        </div>
                        <!--BADGE LOGIN-->
                        <div class="p-2">
                           <?php $CMS_Core->login_link(); ?>
                           </div>
                        <!--BADGE REGISTER-->
                        <div class="p-2">
                            <a id="reg-badge" href="#" class="badge badge-info border border-dark" data-toggle="modal" data-target="#regModal">Rejestracja</a></div>
                    </div>
                </div>
            </div>

            <!-----------MENU BAR--------->

            <div id="second-bar-height" class="row ">

                <!--LOGO CONTENT-->

                <div class="col-md-5">
                    <section id="logo-content">
                        <div class="text-left">
                            <img id="logo-img" src="./app/res/images/logo.png" class="rounded float-left " alt="Company Logo">
                        </div>
                        <h2 id="logo-title" class="text-info">IT-COMPANY</h2>
                    </section>
                </div>

                <!--MENU LINKS-------->
        
                <div class="col-md-7">
                
                    <ul id="menu-btns" class="nav d-flex flex-row-reverse ">
                      
                      <!--HAMBURGER-->
                      <li class="nav-item hamburger">
                            <a href="#" class="nav-link btn btn-dark btn-lg " role="button" aria-disabled="true"><i class="fa fa-bars" aria-hidden="true"></i></a>
                        </li>
                       <!--CONTACT LINK-->
                        <li class="nav-item menu-btn">
                            <a href="./kontakt.html" class="nav-link btn btn-dark btn-lg " role="button" aria-disabled="true">Kontakt</a>
                        </li>

                        <!--BLOG-LINK-->
                        <li class="nav-item menu-btn">
                            <a href="./blog.html" class="nav-link btn btn-dark btn-lg " role="button" aria-disabled="true">Blog</a>
                        </li>

                        <!--OFEER LINK-->
                        <li class="nav-item menu-btn">
                            <a href="./oferta.html" class="nav-link btn btn-dark btn-lg " role="button" aria-disabled="true">Oferta</a>
                        </li>
                        
                        <!--START LINK-->
                        <li class="nav-item menu-btn">
                            <a href="./index.html" class="nav-link btn btn-dark btn-lg " role="button" aria-disabled="true">Start</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!--------MAIN SECTOR------>

        </div>
        </div>
    </nav>

    <!------HEADER CAROUSEL------>
    <header>
        <div class="container">
            <div class="row" id="carousel-style">
                <div class="col md-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="./app/res/images/slider1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="./app/res/images/slider2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="./app/res/images/slider3.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!----------MAIN SECTION ---------->
    <main>
        <div class="container ">
            <div class="row border-bottom-0 border-left-0 border-right-0 border border-secondary">


                <!-----------FIRST ARTICLE----->
                <!--IMG-->
                <div class="col-md-5 main-marg ">
                    <img class="float-left img-article img-thumbnail" src="./app/res/images/article1-main.jpg" alt="text-image">
                </div>

                <!--TEXT-->
                <div class="col-md-7 main-marg ">
                    <h3 class="text-left">O Firmie</h3>
                    <p class="text-left">Lorem ipsum dolor sit amet, et qui nisl etiam rationibus. No ius verterem adipisci, quo dicam delenit in, tale minim ignota sit cu. Id ancillae philosophia vis, cu causae mentitum eos. Dicit patrioque ius et. Dolorem adversarium an quo, vis sint vivendum in. Ei nec errem detraxit singulis.
                    </p>
                </div>
            </div>
            <!--SECOND ARTICLE------------->
            <div class="row main-marg">
                <div class="col-md-7 main-marg  bottom-margin">
                    <!--ARTICLE-->
                    <h3 class="text-right">Oferta</h3>
                    <p class="text-right">Lorem ipsum dolor sit amet, et qui nisl etiam rationibus. No ius verterem adipisci, quo dicam delenit in, tale minim ignota sit cu. Id ancillae philosophia vis, cu causae mentitum eos. Dicit patrioque ius et. Dolorem adversarium an quo, vis sint vivendum in. Ei nec errem detraxit singulis.
                    </p>
                </div>
                <!--IMG-->
                <div class="col-md-5 bottom-margin ">
                    <img class="float-right img-article img-thumbnail" src="./app/res/images/article2-main.jpg" alt="text-image">
                </div>
            </div>
        </div>
        </div>
    </main>

    <!-------FOOTER SECTION--------------------->
    <footer>
        <div class="container">

            <!--LINE-->
            <div class="row">
                <div class="col-md-12">
                    <hr class="border border-secondary">
                </div>
            </div>

            <!--NEWSLETTLER FORM-->
            <div class="row">
                <div class="col-md-5">
                    <h3 class="text-center">Zapisz sie do newsletter-a</h3>
                </div>
                <div class="col-md-7">
                    <form class="form-inline">
                        <label class="sr-only" for="inlineFormInputGroupUsername2">Email</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon">@</div>
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Wpisz Email">
                        </div>
                        <button type="submit" class="btn btn-primary">Wyslij</button>
                    </form>
                </div>
            </div>

            <!--LINE-->
            <div class="row">
                <div class="col-md-12">
                    <hr class="border border-secondary">
                </div>
            </div>

            <!--COPYRIGHT-->
            <div class="row">
                <div class="col-md-12">
                    <h6 class="text-center">copyright 2018</h6>
                </div>
            </div>
        </div>
    </footer>








    <script type="text/javascript" src="<?php echo APP_RES ?>javascript/popper.min.js"></script>
    
    <script type="text/javascript" src="<?php echo APP_RES ?>javascript/bootstrap.min.js"></script>
    





</body>

</html>
