<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Template</title>

    <link rel="stylesheet" href="{{URL::asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/jquery.bxslider.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/index.css')}}">
</head>
<body style="display: none">

<!--Start navbar  -->
<div class="navbar">
    <div class="container">
        <div class="brand">
            <h2>Classic</h2>
        </div>
        <div class="row">
            <i class="fas fa-bars hidden-lg hidden-md menu"></i>

            <div class="links-menu">
                <ul>
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#" data-value="ser">About</a></li>
                    <li><a href="#" data-value="port">Portfolio</a></li>
                    <li><a href="#" data-value="test">Testmonials</a></li>
                    <li><a href="#" data-value="pro">projects</a></li>
                </ul>
            </div>


            <div class="links hidden-xs hidden-sm ">
                <ul>
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#" data-value="ser">About</a></li>
                    <li><a href="#" data-value="port">Portfolio</a></li>
                    <li><a href="#" data-value="test">Testmonials</a></li>
                    <li><a href="#" data-value="pro">projects</a></li>
                </ul>
            </div>
        </div>

    </div>
</div>
<!--end navbar  -->

<!--start slider  -->
<div class="slider">
    <div class="overlay"></div>

    <div class="s hidden-xs visible-sm visible-md visible-lg">
        <div>
            <h2>Welcome to the <span>Classic 1</span></h2>
            <p>Mauris non sapien eget dolor ultricies auctor eget non est. Donec sed ligula ipsum. Aliquam dignissim hendrerit velit, </p>
        </div>

        <div>
            <h2>Welcome to the <span>Classic 2</span></h2>
            <p>Mauris non sapien eget dolor ultricies auctor eget non est. Donec sed ligula ipsum. Aliquam dignissim hendrerit velit, </p>
        </div>

        <div>
            <h2>Welcome to the <span>Classic 3</span></h2>
            <p>Mauris non sapien eget dolor ultricies auctor eget non est. Donec sed ligula ipsum. Aliquam dignissim hendrerit velit, </p>
        </div>

        <div>
            <h2>Welcome to the <span>Classic 4</span></h2>
            <p>Mauris non sapien eget dolor ultricies auctor eget non est. Donec sed ligula ipsum. Aliquam dignissim hendrerit velit, </p>
        </div>
    </div>
</div>

<!--end slider  -->

<!--  start services  -->

<div class="container">
    <div class="row">

        <div class="services" id="ser">

            <p class="Our_Services">Our Services</p>
            <div class="sec col-xs-12 col-sm-12 col-md-6 col-lg-4">
                <div class="font">
                    <i class="fas fa-mobile"></i>
                </div>
                <div class="content">
                    <h3>Responsive Layout</h3>
                    <p>Nam vel eleifend que fusce consequat pretium velit vitae. Vulputate nullam pharetra lorem laoreet. Etiam sollicitudin magna nullam.</p>
                </div>

            </div>

            <div class="sec col-xs-12 col-sm-12 col-md-6 col-lg-4">
                <div class="font">
                    <i class="fas fa-cloud"></i>
                </div>
                <div class="content">
                    <h3>Cloud Services</h3>
                    <p>Nam vel eleifend que fusce consequat pretium velit vitae. Vulputate nullam pharetra lorem laoreet. Etiam sollicitudin magna nullam.</p>
                </div>

            </div>

            <div class="sec col-xs-12 col-sm-12 col-md-6 col-lg-4">
                <div class="font">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <div class="content">
                    <h3>Fresh & Right Ideas</h3>
                    <p>Nam vel eleifend que fusce consequat pretium velit vitae. Vulputate nullam pharetra lorem laoreet. Etiam sollicitudin magna nullam.</p>
                </div>

            </div>

            <div class="sec col-xs-12 col-sm-12 col-md-6 col-lg-4">
                <div class="font">
                    <i class="fas fa-link"></i>
                </div>
                <div class="content">
                    <h3>Attachments</h3>
                    <p>Nam vel eleifend que fusce consequat pretium velit vitae. Vulputate nullam pharetra lorem laoreet. Etiam sollicitudin magna nullam.</p>
                </div>

            </div>

            <div class="sec col-xs-12 col-sm-12 col-md-6 col-lg-4">
                <div class="font">
                    <i class="fas fa-video"></i>
                </div>
                <div class="content">
                    <h3>Support Video</h3>
                    <p>Nam vel eleifend que fusce consequat pretium velit vitae. Vulputate nullam pharetra lorem laoreet. Etiam sollicitudin magna nullam.</p>
                </div>

            </div>

            <div class="sec col-xs-12 col-sm-12 col-md-6 col-lg-4">
                <div class="font">
                    <i class="fas fa-heart"></i>
                </div>
                <div class="content">
                    <h3>Lovely Design </h3>
                    <p>Nam vel eleifend que fusce consequat pretium velit vitae. Vulputate nullam pharetra lorem laoreet. Etiam sollicitudin magna nullam.</p>
                </div>

            </div>

        </div>

    </div>

    <hr>
</div>

<!--  end services  -->

<!-- start our team  ---->

<div class="container">
    <div class="row">

        <div class="ourTeam" id="port">

            <div class="left col-xs-12 col-sm-12 col-md-6 col-lg-4 leftr">
                <h3>Our Team</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent a lacus facilisis, placerat magna sit amet, rhoncus lacus. Cras porta eget nibh vel vehicula. Phasellus ullamcorper odio sit amet felis congue, id porta sapien tincidunt. Ut id sem malesuada, dapibus.</p>
            </div>

            <div class="right col-xs-12 col-sm-12 col-md-6 col-lg-4 rightr">

                <div class="box col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="img1 images">
                        <div class="over"></div>
                        <p>Ashley Cady</p>

                    </div>
                </div>

                <div class="box col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="img2 images">
                        <div class="over"></div>
                        <p>Ashley Cady</p>
                    </div>
                </div>

                <div class="box col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="img3 images">
                        <div class="over"></div>
                        <p>Ashley Cady</p>
                    </div>
                </div>

                <div class="box  col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="img4 images">
                        <div class="over"></div>
                        <p>Ashley Cady</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr id="test">

<!-- end our team  ---->

<!-- Start testimonials    -->

<div class="testimonials" >
    <div class="overl"></div>
    <div class="container text-center">
        <div class="testimonials_content">
            <h2>What Our Client Say</h2>

            <div class="slid">
                <div class="active">
                    <p>“Aenean iaculis, mauris sed aliquet semper, nulla nisl mattis elit, a volutpat nibh leo id enim. Aenean urna est, tincidunt egestas semper vitae, facilisis eu tellus.”</p>
                    <span>Start</span>
                </div>

                <div>
                    <p>“Aenean iaculis, mauris sed aliquet semper, nulla nisl mattis elit, a volutpat nibh leo id enim. Aenean urna est, tincidunt egestas semper vitae, facilisis eu tellus.”</p>
                    <span>Ahmed</span>
                </div>

                <div >
                    <p>“Aenean iaculis, mauris sed aliquet semper, nulla nisl mattis elit, a volutpat nibh leo id enim. Aenean urna est, tincidunt egestas semper vitae, facilisis eu tellus.”</p>
                    <span>Sayed</span>
                </div>

                <div >
                    <p>“Aenean iaculis, mauris sed aliquet semper, nulla nisl mattis elit, a volutpat nibh leo id enim. Aenean urna est, tincidunt egestas semper vitae, facilisis eu tellus.”</p>
                    <span>Hassan</span>
                </div>

                <div >
                    <p>“Aenean iaculis, mauris sed aliquet semper, nulla nisl mattis elit, a volutpat nibh leo id enim. Aenean urna est, tincidunt egestas semper vitae, facilisis eu tellus.”</p>
                    <span>Youssef</span>
                </div>

                <div >
                    <p>“Aenean iaculis, mauris sed aliquet semper, nulla nisl mattis elit, a volutpat nibh leo id enim. Aenean urna est, tincidunt egestas semper vitae, facilisis eu tellus.”</p>
                    <span>End</span>
                </div>

            </div>

        </div>

    </div>
</div>


<!--  end testimonials  -->

<!-- start projects   -->
<div class="container " >
    <div class="projects " id="pro">
        <h2>projects</h2>
        <ul>
            <li class="selected" data-value="All">All</li>
            <li data-value="mobile">mobile</li>
            <li data-value="coffee">Coffee</li>
            <li data-value="video">video</li>
            <li data-value="fashion">fashion</li>
        </ul>

        <div class="Box  col-xs-12  col-sm-6  col-md-4  col-lg-3 " data-result="mobile"  >
            <img src="img/1.jpg" class="img-responsive">
            <div class="ov"></div>
            <span> view More</span>
            <i class="fa fa-heart"></i>
        </div>

        <div class="Box  col-xs-12  col-sm-6  col-md-4  col-lg-3" data-result="mobile">
            <img src="img/2.jpg" class="img-responsive">
            <div class="ov"></div>
            <span> view More</span>
            <i class="fa fa-heart"></i>
        </div>


        <div class="Box  col-xs-12  col-sm-6  col-md-4  col-lg-3" data-result="coffee">
            <img src="img/3.jpg" class="img-responsive">
            <div class="ov"></div>
            <span> view More</span>
            <i class="fa fa-heart"></i>
        </div>


        <div class="Box  col-xs-12  col-sm-6  col-md-4  col-lg-3" data-result="coffee">
            <img src="img/4.jpg" class="img-responsive">
            <div class="ov"></div>
            <span> view More</span>
            <i class="fa fa-heart"></i>
        </div>


        <div class="Box  col-xs-12  col-sm-6  col-md-4  col-lg-3" data-result="fashion">
            <img src="img/5.jpg" class="img-responsive">
            <div class="ov"></div>
            <span> view More</span>
            <i class="fa fa-heart"></i>
        </div>

        <div class="Box  col-xs-12  col-sm-6  col-md-4  col-lg-3" data-result="fashion">
            <img src="img/6.jpg" class="img-responsive">
            <div class="ov"></div>
            <span> view More</span>
            <i class="fa fa-heart"></i>
        </div>

        <div class="Box  col-xs-12  col-sm-6  col-md-4  col-lg-3" data-result="video">
            <img src="img/2.jpg" class="img-responsive">
            <div class="ov"></div>
            <span> view More</span>
            <i class="fa fa-heart"></i>
        </div>

        <div class="Box  col-xs-12  col-sm-6  col-md-4  col-lg-3" data-result="fashion">
            <img src="img/5.jpg" class="img-responsive">
            <div class="ov"></div>
            <span> view More</span>
            <i class="fa fa-heart"></i>
        </div>
    </div>
</div>
</div>



<!--  End projects  -->

<!-- start About Classic   -->

<div class="about">
    <div class="container c">
        <div class="row">
            <div class="ab col-xs-12 col-sm-12 col-md-12 col-lg-3 f">
                <h2>About Classic</h2>
                <p class="p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis sed odio ut tempus. Curabitur nec ultricies tortor. Ut fringilla feugiat ligula.</p>
                <div class="icons">
                    <a href="https://www.facebook.com/miiiiido0o0o" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.linkedin.com/in/ahmed-sayed-36281a1ba/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://api.whatsapp.com/send/?phone=0201125372118&text&app_absent=0" target="_blank"> <i class="fab fa-whatsapp"></i></a>
                </div>

                <span>Copyright&copy; 2021 Designed By<br> <d>Ahmed Sayed</d></span>
            </div>

            <div class="ab col-xs-12 col-sm-12 col-md-12 col-lg-3 ss">
                <h2>Usage</h2>
                <span>Html</span>
                <span>Css</span>
                <span>Js</span>
                <span>Jquery</span>
                <span>Bootstrap</span>
            </div>

            <div class="ab col-xs-12 col-sm-12 col-md-12 col-lg-3 th">
                <h2>Recent Posts</h2>
                <img src="img/01.jpg" class="img-responsive">
                <p> Ahmed Sayed</p>
                <span>2021</span>

                <img src="img/02.jpg"  class="img-responsive">
                <p>Ahmed Sayed</p>
                <span>2021</span>

                <img src="img/03.jpg"  class="img-responsive">
                <p>Ahmed Sayed</p>
                <span>2021</span>
            </div>

            <div class="ab col-xs-12 col-sm-12 col-md-12 col-lg-3 sd">
                <h2>Blog Categories</h2>
                <span>Agency</span>
                <span>Business</span>
                <span>Multi Purpose</span>
                <span>Audio</span>
            </div>
        </div>
    </div>
</div>

<!-- end About Classic   -->
<!-- End Project Bye Bye :) -->
<script src="{{URL::asset('js/jquery.js')}}"></script>
<script src="{{URL::asset('js/jquery.bxslider.min.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.nicescroll.min.js')}}"></script>
<script src="{{URL::asset('js/index.js')}}"></script>
</body>
</html>
