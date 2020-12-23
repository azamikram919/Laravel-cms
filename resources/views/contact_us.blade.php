@extends('layouts.app')
@section('title', 'Blog Post')
@section('content')

    <div class="jumbotron">
        <div class="container">
            <div id="details" class="animate__animated animate__bounceIn side-h1">

                <h1 class="font-size pt-5">Laravel<span> Blog</span></h1>
                <p>So now shine with Us</p>
            </div>
        </div>
        <img src="{{asset('public/images/nav.jpg')}}" class="nav-image">
    </div>

    <div class="container">
        <div class="row">
            <!-----col 8 start------>
            <div class="col-lg-8 col-md-8 col-sm-12 pt-5">
                <div class="post">
                    <p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110393.09698540137!2d72.61594297205096!3d30.1575829042458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x393cdec4cfa81e59%3A0xabff04fb9f35d4d0!2sBurewala%2C%20Vehari%2C%20Punjab!5e0!3m2!1sen!2s!4v1608719758703!5m2!1sen!2s"
                                width="736" height="500" frameborder="0" style="border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0">
                        </iframe>
                    </p>
                </div>
                <br>


                <div class="col-md-12">
                    <div class="contact-from">
                        <h2>Contact Form</h2>
                        <hr>
                        <form action="">
                            <div class="form-group">
                                <label for="name">Name*:</label>
                                <input type="text" id="name" class="form-control" placeholder="Name">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="email">Email*:</label>
                                <input type="text" id="emil" class="form-control" placeholder="Email">
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea id="message" cols="30" rows="10" class="form-control"
                                          placeholder="Your Message"></textarea>
                            </div>
                            <br>
                            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
            <!-----col 8 end------>


            <!------col 4 start------>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="side-bar-section">
                    <div class="widgets pt-4">
                        <form action="#" method="">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search-title" placeholder="Search for...">
                                <span class="input-btn">
                                    <input type="submit" value="Go" class="btn btn-info text-light" name="search">
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
                <div class="widgets">
                    <div class="popular">
                        <h3>Popular Posts</h3>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <a href="#">
                                    <img src="{{asset('public/images/author.png')}}" class="img-responsive img-fluid"
                                         width="100px" alt="image 1">
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12 details pt-3">
                                <a href="#" class="text-decoration"><h5>details</h5></a>
                                <p><i class="far fa-clock"></i>14 November 2020</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <a href="#">
                                    <img src="{{asset('public/images/author.png')}}" class="img-responsive img-fluid"
                                         width="100px" alt="image 1">
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12 details pt-3">
                                <a href="#" class="text-decoration"><h5>details</h5></a>
                                <p><i class="far fa-clock"></i>14 November 2020</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <a href="#">
                                    <img src="{{asset('public/images/author.png')}}" class="img-responsive img-fluid"
                                         width="100px" alt="image 1">
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12 details pt-3">
                                <a href="#" class="text-decoration"><h5>details</h5></a>
                                <p><i class="far fa-clock"></i>14 November 2020</p>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <div class="widgets">
                    <div class="popular">
                        <h3>Recent Posts</h3>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <a href="#">
                                    <img src="{{asset('public/images/author.png')}}" class="img-responsive img-fluid"
                                         width="100px" alt="image 1">
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12 details pt-3">
                                <a href="#" class="text-decoration"><h5>details</h5></a>
                                <p><i class="far fa-clock"></i>14 November 2020</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <a href="#">
                                    <img src="{{asset('public/images/author.png')}}" class="img-responsive img-fluid"
                                         width="100px" alt="image 1">
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12 details pt-3">
                                <a href="#" class="text-decoration"><h5>details</h5></a>
                                <p><i class="far fa-clock"></i>14 November 2020</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <a href="#">
                                    <img src="{{asset('public/images/author.png')}}" class="img-responsive img-fluid"
                                         width="100px" alt="image 1">
                                </a>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-12 details pt-3">
                                <a href="#" class="text-decoration"><h5>details</h5></a>
                                <p><i class="far fa-clock"></i>14 November 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!------col 4 end------>
        </div>
    </div>

@endsection