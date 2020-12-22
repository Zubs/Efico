<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Efico</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
</head>
<body>
    <div class="top__bg flex col">
        <header class="flex row">
            <div class="logo Flex ">
                <img src="https://res.cloudinary.com/dox2gqczu/image/upload/v1592465124/logo_iyyhfa.png" width="80" height="30" alt="">
                <p id="your" style="font-size:9px;">...your education will make sense</p>
            </div>
            <nav id="nav" class="Flex row">
                <div id="nav-icon">
                            <div></div>
                            <div></div>
                            <div></div>
                </div>
                <ul class="flex row">
                    <li>
                        <a href="{{ route('index') }}">home</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}">about</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">contact us</a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}">services</a>
                    </li>
                    <li>
                        <a href="{{ route('news.index') }}">news</a>
                    </li>
                    <li>
                        <a href="{{ route('faqs') }}">faqs</a>
                    </li>
                </ul>
            </nav>
        </header>
        <main class="Flex row">
            <div class="content Flex ">
                <p>We help <span class="special">undergraduates</span> discover themselves using a Personalized
                    self-assessment test</p>
                <button data-toggle="modal" data-target="#exampleModal">Get Started</button>
            </div>

            <img src="{{ asset('img/startup.svg') }}" alt="photo_illustration" class="illustration">
        </main>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input your Email</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <form action="{{ route('subscribe') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="email">
                            <input type="email" name="email">
                        </div>
                    </div>
                    <div class="modal-footer">
                        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                        <button type="submit" class="btn btn-primary" style="background-color: #3c185b; border: #3c185b;">Submit</button>
                        <a href="videoPage.html" class="video-page"><i class="fas fa-play-circle" id="play"></i></a>
                    </div>
                </form>
            </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Subscribe to our Newsletter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <div class="email">
                <input type="email" placeholder="Input your Email">
                </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" style="background-color: #3c185b; border: #3c185b;">Submit</button>
                </div>
            </div>
            </div>
        </div>
    </div>
    <section class="section-one mission flex col">
        <h1>What We Do</h1>
        <ul class="flex row">
            <li class="Flex">

                <figure>
                    <figcaption hidden>Image illustrating Training</figcaption>
                    <img src="https://res.cloudinary.com/dox2gqczu/image/upload/v1593797575/Graduation_2_zsjhht.gif" width="250" height="200" alt="training illustration">
                </figure>
                <span>EFICO University Hubs</span>
                <span> <p>The personalitized self-assessment tests and soft skills training are delivered by our trained, competent campus ambassadors (free of cost) in each universities we are present. </p> </span>
            </li>
            <li class="Flex">
                <figure>
                    <figcaption hidden>Image illustrating Training</figcaption>
                    <a href="{{ route('trainings') }}" style="text-decoration: none; color: inherit;"><img src="https://res.cloudinary.com/dox2gqczu/image/upload/v1593797574/Kids_Studying_from_Home_4_yu3dmt.gif" width="250" height="250" alt="training illustration"></a>
                </figure>
                <span>Training</span>
                <span> <p>Technical training are delivered on the central management level and undergraduates choose to apply for these subsidized training according to what they have found out about themselves.
                </p> </span>
            </li>
            <li class="Flex">

                <figure>
                    <figcaption hidden>Image illustrating Training</figcaption>
                    <img src="https://res.cloudinary.com/dox2gqczu/image/upload/v1593675291/Finance_1_uukvzt.gif" width="250" height="250" alt="training illustration">

                </figure>
                <span style="font-size: 25px;">Investment&nbsp;Society</span>
                <span> <p>We also expose these undergraduates to internship and scholarship opportunities and advice and help them invest part of the proceeds from here in the financial market.
                </p> </span>
            </li>
        </ul>
    </section>
    <section class="section-two achievements">
        <h1 hidden>achievements</h1>
        <ul class="Flex row mx-auto">
            <li>
                <p><span class="special">5000+</span> <br>students trained</p>
            </li>
            <li>
                <p><span class="special">60+</span> <br>student ambassadors</p>
            </li>
            <li>
                <p><span class="special">35+</span> <br>universities</p>
            </li>
        </ul>
    </section>

    <br>
    <div class="text-center ttxt"><H2>What people are saying about us.</H2></div>
<div class="carousel">
    <button class="carousel_button previous btn" id="previous">&lt;</button>
    <div class="carousel_images">
        <div class="text">
        <img src="https://res.cloudinary.com/dox2gqczu/image/upload/v1593640739/Glory_qvvcg1.jpg" width="300" height="300" alt="" class="caroImg">
            <p class="text-center mt-3">“Efico is an eye-opener and have helped me to make the right decision on the skills that fit my personality type in just a limited time frame of joining the platform”</p>
            <h4 class="text-center">Anyawu Glory</h4>
            <h6 class="text-center">UNILAG</h6>
        </div>
        <div class="text">
            <img src="https://res.cloudinary.com/dox2gqczu/image/upload/v1593640124/Emmanuel_Osuagwu..._FUTO_coed0z.jpg" width="300" height="300" alt="" class="caroImg">
            <p class="text-center mt-3">“As a chemical engineering student, I did the Aspen Hysys program, and to be sincere, the level of training has impacted me in so many ways”</p>
            <h4 class="text-center">Emmanuel Osuagwu</h4>
            <h6 class="text-center">FUTO</h6>
        </div>
        <!-- <div class="text">
            <img src="https://res.cloudinary.com/dox2gqczu/image/upload/v1593640123/Sharon_Ubani_UNIUYO_inabuc.jpg" width="300" height="300" alt="" class="caroImg">
            <p class="text-center mt-3">“Efico has shown me that excellence in one’s professional pursuit begins first with the discovery of self; now, I know myself and the skills relevant to my personality. I am now helping other achieve that feat” </p>
            <h4 class="text-center">Sharon c. Ubani</h4>
            <h6 class="text-center">UNIUYO</h6>
        </div> -->
        <div class="text">
            <img src="https://res.cloudinary.com/dox2gqczu/image/upload/v1599116817/oluwafoyinsayemi_to3bvg.jpg" width="300" height="300" alt="" class="caroImg">
            <p class="text-center mt-3">“I'm glad I took the opportunity to train with Efico. This training has taught me so much and opened me up to opportunities I didn't know existed. Thanks to this opportunity I will have some leverage over my peers. I look forward to an amazing journey with Efico.”</p>
            <h4 class="text-center">Owoloja blessing oluwafoyinsayemi</h4>
            <h6 class="text-center">Covenant University</h6>
        </div>
        <div class="text">
            <img src="https://res.cloudinary.com/dox2gqczu/image/upload/v1599116114/2020-08-22_10.52.06_1_r11sqg.jpg" width="300" height="300" alt="" class="caroImg">
            <p class="text-center mt-3">“My experience as a member of the EFICO Hub Babcock University has been absolutely amazing, the programs and teaching sessions has helped me to gain requisite skills needed to make me be of value. I have learnt so many lessons so far which is mind-blowing and the best part is that I didn’t have to pay a fee to be a member of the hub, so it is quality acquisition of knowledge at no cost whatsoever.”</p>
            <h4 class="text-center">Jessica Obodo Elue</h4>
            <h6 class="text-center">Babcock University</h6>
        </div>
    </div>
    <button class="carousel_button next btn" id="next">&gt;</button>
</div>

    <section class="section-four team flex col">
        <h1>our team</h1>
        <ul class="flex row">
            <li class="Flex col-sm-12 col-lg-3 text-center">
                    <img src="{{ asset('img/david.jpg') }}" alt="">
                <p class="member__name">David Adefunmilayo</p>
                <p class="member__position">Founder and Director</p>
            </li>

            <li class="Flex col-sm-12 col-lg-3 text-center">
                    <img src="{{ asset('img/dami.jpg') }}" alt="">
                <p class="member__name">Damilola Adesanmi</p>
                <p class="member__position">COO / Assistant Director</p>
            </li>
            <li class="Flex col-sm-12 col-lg-3 text-center">
                <img src="{{ asset('img/joy.jpg') }}" alt="">
            <p class="member__name">Joy  Emekpo</p>
            <p class="member__position">Head of Finance</p>
        </li>
            <li class="Flex col-sm-12 col-lg-3 text-center">
                <img src="{{ asset('img/onome.jpg') }}" alt="">
            <p class="member__name">Onome Agbi</p>
            <p class="member__position">Human Resource Manager</p>
        </li>

            <li class="Flex text-center">

                <img src="https://res.cloudinary.com/dox2gqczu/image/upload/v1597756463/5_-1_-1_cyfjvw.jpg" alt="">

            <p class="member__name">Adedamola Odukoya</p>
            <p class="member__position">Project Manager</p>
        </li>

            <li class="Flex text-center">
                    <img src="https://res.cloudinary.com/dox2gqczu/image/upload/v1593457088/IMG-20190831-WA0055_2_akvv0k.jpg" alt="">
                <p class="member__name">Micheal Ojo</p>
                <p class="member__position">Programs Manager</p>
            </li>
            <li class="Flex text-center">
                    <img src="https://res.cloudinary.com/dox2gqczu/image/upload/v1593459541/Goodness2_qggwzu.png" alt="">
                <p class="member__name">Nwadibie Goodness</p>
                <p class="member__position">Marketing Manager</p>
            </li>
            <li class="Flex text-center">
                    <img src="https://res.cloudinary.com/dox2gqczu/image/upload/v1593468079/Harith2_cvdtim.png" alt="">
                <p class="member__name">Harith Onigemo</p>
                <p class="member__position">Technology Lead</p>
            </li>
        </ul>
    </section>
    <footer>
        <div class="container-fluid footer py-5">
        <div class="row ">
            <div class="col">
                <p><Strong>QUICK LINKS</Strong></p>
                <a href="{{ route('about') }}" class="text-light">About Us</a> <br>
                <a href="#" class="text-light" data-toggle="modal" data-target="#exampleModal1">Newsletter</a>
            </div>
            <div class="col">
                <p><Strong>SERVICES</Strong></p>

                <a href="{{ route('services') }}" class="text-light">Career talks</a> <br>
                <a href="{{ route('services') }}" class="text-light">Internship</a> <br>
                <a href="{{ route('services') }}" class="text-light">Scholarship</a>
                <a href="{{ route('training.index') }}" style="text-decoration: none; color: white;">Training</a>
            </div>
            <div class="col">
                <p><Strong>FOLLOW US</Strong></p>

                <a href="https://twitter.com/EficoResources" class="text-light"><i class="fab fa-twitter"></i></a>
                <a href="http://instagram.com/efico_resources" class="text-light"><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/profile.php?id=100044491054245" class="text-light"><i class="fab fa-facebook"></i></a>
                <a href="https://www.youtube.com/channel/UC4BCMxcqIsr_ZBBafiAWV4g" class="text-light"><i class="fab fa-youtube"></i></a>
                <a href="https://www.linkedin.com/company/efico-resources" class="text-light"><i class="fab fa-linkedin"></i></a>

            </div>
        </div>
        </div>
        <div class="container-fluid" style=" background-color: #3c185b; text-align: center; color: white; height: 45px; bottom: 0;">
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </p>
        </div>
        </footer>
    <script src="{{ asset('js/index.js') }}"></script>

</body>
<script>

</script>
<script src="https://kit.fontawesome.com/dc7f1f050e.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
