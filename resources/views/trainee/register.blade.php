<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Efico - Registration</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>
<body>
    <div class="top__bg flex col">
        <header class="flex row">
            <div class="logo flex col">
                <img src="https://res.cloudinary.com/dox2gqczu/image/upload/v1592465124/logo_iyyhfa.png" width="60" height="20" alt="" loading="lazy">
                <p>your education will make sense</p>
            </div>
            <nav id="nav" class="flex row">
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
        <main class="flex row">
            <div class="form-layout flex row">
                <div class="left flex col">
                <div class="content flex col">
                    <h1>
                        Lorem Ipsum
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut magni illo voluptas optio odio nulla deleniti cumque laboriosam neque. Quidem iure dicta ut eos praesentium eum corporis eligendi itaque placeat!
                    </p>
                </div>
                </div>
                <form action="{{ route('trainee.postRegister') }}" class="right" method="POST">
                    <fieldset>
                        <div class="fields-container flex col">
                            @csrf
                            <legend>Register</legend>
                            <br>
                            <div class="field flex col">
                                <input type="text" name="name" id="full_name" required placeholder="Full Name">
                            </div>
                            <div class="field flex col">
                                <input type="email" name="email" id="full_name" required placeholder="Email Address">
                            </div>
                            <div class="field flex col">
                                <select name="training_id" id="training" required="">
                                    <option value="">Training</option>
                                    <option value="5">First Training - N40,000</option>
                                </select>
                            </div>
                            <button>Register</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </main>
    </div>
    <footer class="flex row">
        <ul>
            <h1>quick links</h1>
            <li>about us</li>
            <li>newsletter
            <li>
        </ul>
        <ul>
            <h1>services</h1>
            <li>Career talks</li>
            <li>internship</li>
            <li>scholarship</li>
        </ul>
        <ul class="flex col follow">
            <h1>follow us</h1>
            <div class="flex row">
                <li>
                    <a href="twitter-link"><img src="./assets/img/twitter.svg" alt=""></a>
                </li>
                <li>
                    <a href="twitter-link"><img src="./assets/img/ig.svg" alt=""></a>
                </li>
                <li>
                    <a href="twitter-link"><img src="./assets/img/fb.svg" alt=""></a>
                </li>
                <li>
                    <a href="twitter-link"><img src="./assets/img/youtube.svg" alt=""></a>
                </li>
                <li>
                    <a href="twitter-link"><img src="./assets/img/linkedin.svg" alt=""></a>
                </li>
            </div>
        </ul>
    </footer>
    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>
