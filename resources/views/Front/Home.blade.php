<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="font/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!--  header- page-->
<header>
    <div class="landing-page">
        <!--      **********************************************************-->
        <div class="overlay"></div>
        <div class="header">
            <div class="logo">
                <img src="img/LOGO%20WORLD2.png" alt="logo">
            </div>
            <ul class="links">
                <li ><a href="" class="" >HOME</a></li>
                <li><a href="#About">About US</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#gallary">Bussiness Gallary</a></li>
                <li><a href="#contact_us">Contact us</a></li>

            </ul>


        </div>

        <!--      **********************************************************-->

    </div>
    <div class="intro">
        <p><span>WORLD HUB-FOR IT SOLUTION</span></p>
        <h1> Digital Products For Your Success</h1>
        <div class="apply">
            <a data-toggle="modal" data-target="#login">Apply Now!</a>
        </div>
    </div>

    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Apply Now!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('apply.store')}}" method="POST" class="form" enctype="multipart/form-data">
                        @csrf
                        <div class="content-info">
                            <h3>Contact information</h3>
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" name="name">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="text" name="company_name" class="form-control" id="exampleFormControlInput1" placeholder="Company Name (optinal)">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="text" name="mobile" class="form-control" id="exampleFormControlInput1" placeholder="Mobile Number">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="details">
                            <h3>Project Details</h3>
                            <p>The services you are interested in?</p>
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="services[]" id="inlineCheckbox1" value="Websites design& programing">
                                            <label class="form-check-label" for="inlineCheckbox1">Websites design& programing </label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="services[]"  id="inlineCheckbox1" value="Graphic Design">
                                            <label class="form-check-label" for="inlineCheckbox1">Graphic Design</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="services[]"  id="inlineCheckbox1" value="Mobile Applications">
                                            <label class="form-check-label" for="inlineCheckbox1">Mobile Applications </label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="services[]"  id="inlineCheckbox1" value="Web Hosting">
                                            <label class="form-check-label" for="inlineCheckbox1">Web Hosting</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="services[]"  id="inlineCheckbox1" value="Motion Graphic">
                                            <label class="form-check-label" for="inlineCheckbox1">Motion Graphic</label>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="services[]"  id="inlineCheckbox1" value="Social Media design">
                                            <label class="form-check-label" for="inlineCheckbox1">Social Media design</label>
                                        </div>
                                    </div>

                                </div>
                                <h5>About your project</h5>
                                <div class="form-group">
                                    <textarea class="form-control" name="about_project" id="exampleFormControlTextarea1" placeholder="Your Message" rows="6"></textarea>
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="file" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                        <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




</header>
<!-- finish header- page-->
<!--  main- page-->
<main>
    <!--  about us-page-->
    <div class="about" id="About">
        <h3>About Us</h3>
        <p>
            Word Hub for Information Technology Solutions was established to provide distinguished, effective and efficient services and solutions that keep pace with the local and global market. We are a highly qualified professional team with more than 4 years of experience, specializing in design and programming fields. Word Hub has also gained reputation and spread as a distinguished company to provide business solutions in the field of information technology And equipped it professionally for its customers.
            We always strive to satisfy our customers by embodying their opinions and transforming them into a wonderful and attractive painting in order to reach their commercial and marketing goals and because it works in the field of technology in general and we have our distinguished policy that makes us always the best. Creatively.
        </p>


    </div>
    <!-- finish about us- page-->
    <!-- services- page-->
    <div class="services" id="services">
        <div class="overlay"></div>
        <div class="head">
            <h4>
                Our Services
            </h4>
            <p>We Provide Best Quality Service </p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <span class="flaticon-web-design"></span>
                    <h5>Websites design & programing </h5>
                    <p>The design of your site affects more on its success, so Word Hub is interested in the sites of its customers, which witnesses a large archive of designs that put it in the forefront among Arab companies because of its attractive designs, new ideas and high technologies.</p>
                </div>
                <div class="col-3">
                    <span class="flaticon-mobile-app"></span>
                    <h5>Mobile Applications </h5>
                    <p>Designing and programming smart mobile applications for Android and iPhone in Word Hub for companies, individuals and institutions with high quality and a control panel for each application with a very professional design that matches the idea of the application.</p>
                </div>
                <div class="col-3">
                    <span class="flaticon-visual-effect"></span>
                    <h5>Motion Graphic</h5>
                    <p>The video has a high ability to convince the customer of your product and through it, you can explain your idea and market it with ease because it can communicate the message in an enjoyable way through images, movement, sound and more, and this makes it an interactive means that has the ability to attract your audience to your brand</p>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <span class="flaticon-social-media"></span>
                    <h5>Social Media Design</h5>
                    <p>We design and market your service through social media networks such as Facebook,YouTube, which have a very large role in delivering the product or leaving a good impression on your customers and following up on everything they say about what you offer.</p>
                </div>
                <div class="col-3">
                    <span class="flaticon-graphic-design"></span>
                    <h5>Graphic Design</h5>
                    <p>We at Word Hub master the special design to provide you with a distinctive service that makes your work appear attractive and distinct from others. We have the best ways to deliver the message or meaning that you mean to the audience and we use all modern technical methods to create in color works that remain firm in your minds</p>
                </div>
                <div class="col-3">
                    <span class="flaticon-web-hosting"></span>
                    <h5>web Hosting</h5>
                    <p>We have the latest devices and technologies in hosting websites to work without interruption or crashes, and super fast speed that gives you the best performance for your website, permanent stability and stability, and technical support around the clock</p>
                </div>
            </div>
        </div>
    </div>
    <!-- finish services- page-->
    <!--  Gallary - page-->
    <div class="gallary" id="gallary">
        <h5> BUSSINESS GALLARY </h5>
        <p>Quality, creativity, great ability to master all areas of technology.</p>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <span class="flaticon-web-design"></span>
                </div>
                <div class="col-sm">
                    <span class="flaticon-mobile-app"></span>
                </div>
                <div class="col-sm">
                    <span class="flaticon-visual-effect"></span>
                </div>
                <div class="col-sm">
                    <span class="flaticon-social-media"></span>
                </div>
                <div class="col-sm">
                    <span class="flaticon-graphic-design"></span>
                </div>
                <div class="col-sm">
                    <span class="flaticon-web-hosting"></span>
                </div>
            </div>
        </div>
    </div>
    @if(\App\Bussines::count()>0)
    <div class="sub-gallary">
        <div class="container">
            <div class="row">
            @foreach($bussiness as $index =>$bussines)
                @if( $index < 6)
                        <div class="col">
                            <img src="{{$bussines->photo}}" alt="">
                        </div>

                    @else
                <div class="col " id="show">
                    <img src="{{$bussines->photo}}" alt="">
                </div>
                    @endif
            @endforeach
            </div>

        </div>
        <button class="more" id="myBtn" onclick="myFunction()" >View More</button>


    </div>
    @endif
    <!-- finish Gallary - page-->
    <!--  OUR-team - page-->
    @if(\App\Member::count()>0)
    <div class="our-team">
        <h4>MEET OUR TEAM</h4>
        <p>We have a creative and professional team.</p>
        <div class="container">
            @foreach($members as $member)
            <div class="row">
                <div class="col-sm-3" class="img-thumbnail">
                    <img src="{{$member->photo}}" alt="">
                    <h5> {{$member->name}} </h5>
                    <h6> {{$member->job_title}}</h6>
                    <div class="icons">
                        <i class="fab fa-twitter-square"></i>
                        <i class="fab fa-behance-square"></i>
                        <i class="fab fa-linkedin"></i>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endif
    <!-- finish OUR-team - page-->

</main>
<!-- finish main-page-->
<!--  contact-us page-->
<footer>
    <div class="contact" id="contact_us">
        <h5>
            CONTACT US
        </h5>
        <p>
            We are available to answer all your inquiries around the clock

        </p>
        <div class="row">
            <div class="col-sm">
                <span class="flaticon-social-media"></span>
                <h6>info@worldbub-itsolutions.com</h6>
            </div>
            <div class="col-sm">
                <span class="flaticon-mobile-app"></span>
                <h6>+972 59-234-9052</h6>
            </div>
        </div>
    </div>
    <div class="sub-contact">
        <form action="{{route('contact.store')}}" method="POST" class="form">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <input type="phone" name="mobile" class="form-control" id="exampleFormControlInput1" placeholder="Mobile Number">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" placeholder="Your Message" rows="6"></textarea>
                </div>
                <div class="row"><input class="send" type="submit" value="Send Message"></div>
            </div>
        </form>
    </div>
    <div class="social">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-linkedin-in"></i>
        <i class="fas fa-phone-alt"></i>
    </div>
    <div class="end">
        <div class="container">
            <div class="row">
                <div class="col"><p class="p1">© 2020 world hub.  All Rights Reserved.</p></div>
                <div class="col p2"><p>Privacy Policy</p></div>
                <div class="col p3"><p>Terms of Service</p></div>

            </div>
        </div>
    </div>
</footer>

<!-- finish contact-us - page-->





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript">
    function myFunction() {
        var moreText = document.getElementById("show");
        var btnText = document.getElementById("myBtn");

        if (moreText.style.display === "none") {
            btnText.innerHTML = "View less";
            moreText.style.display = "inline";
        } else {
            btnText.innerHTML = "View More";
            moreText.style.display = "none";
        }
    }


</script>
</body>
</html>
