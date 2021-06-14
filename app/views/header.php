<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title><?= $data['judul'] ?></title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--enable mobile device-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--fontawesome css-->
      <link rel="stylesheet" href="<?= BASEURL ?>/CSS/font-awesome.min.css">
      <!--bootstrap css-->
      <link rel="stylesheet" href="<?= BASEURL ?>/CSS/bootstrap.min.css">
      <!--animate css-->
      <link rel="stylesheet" href="<?= BASEURL ?>/CSS/animate-wow.css">
      <!--main css-->
      <link rel="stylesheet" href="<?= BASEURL ?>/CSS/style.css">
      <link rel="stylesheet" href="<?= BASEURL ?>/CSS/bootstrap-select.min.css">
      <link rel="stylesheet" href="<?= BASEURL ?>/CSS/slick.min.css">
      <link rel="stylesheet" href="<?= BASEURL ?>/CSS/select2.min.css">
      <!--responsive css-->
      <link rel="stylesheet" href="<?= BASEURL ?>/CSS/responsive.css">
      
   </head>
   <body>
      <header id="header" class="top-head">
         <!-- Static navbar -->
         <nav class="navbar navbar-default">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-4 col-sm-12 left-rs">
                     <div class="navbar-header">
                        <a href="index.html" class="navbar-brand"><p>BagiDarah.com</p></a>
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-12">
                     <div class="right-nav">
                        <div class="login-sr">
                           <div class="login-signup">
                              <ul>
                                 <li>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginForm">
                                      Login
                                    </button></li>
                                 <li><a class="custom-b" href="#">Sign up</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="help-r hidden-xs">
                           <div class="help-box">
                              <ul>
                                 <li> <a data-toggle="modal" data-target="#myModal" href="#"> <span>Change</span> <img src="images/flag.png" alt="" /> </a> </li>
                                 <li> <a href="#"><img class="h-i" src="images/help-icon.png" alt="" /> Help </a> </li>
                              </ul>
                           </div>
                        </div>
                        <div class="nav-b hidden-xs">
                           <div class="nav-box">
                              <ul>
                                 <li><a href="howitworks.html">How it works</a></li>
                                 <li><a href="about-us.html">Chamb for Business</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--/.container-fluid --> 
         </nav>
      </header>