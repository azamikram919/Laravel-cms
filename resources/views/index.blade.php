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
                    <div class="row">
                        <div class="col-md-2">
                            <div class="post-date p-3">
                                <h5 class="color-teal">Date</h5>
                                <span>December</span>
                                <span>2020</span>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <a href="javascript:void(0)" class="text-decoration">
                                <h3 class="post-title pt-3 ps-2 color-teal">What is Loram Ipsum</h3>
                            </a>
                        </div>
                        <div class="col-md-2">
                            <div class="author-image pt-2">
                                <a href="#">
                                    <img src="{{asset('public/images/author.png')}}"
                                         class="img-fluid img-responsive rounded-circle p-3" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="post-data">
                                <div class="post-image pt-3">
                                    <a href="#">
                                        <img src="{{asset('public/images/dog.jpg')}}" class="img-fluid img-responsive"
                                             alt="" style="width: 100%; height: 500px">
                                    </a>
                                    <div class="description p-3">
                                    <span class="post-desc text-center pt-5">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bottom">
                        <span class="first">
                            <i class="fa fa-folder"></i>
                            <a href="#" class="text-decoration">Books</a>
                        </span> |
                        <span class="sec">
                            <i class="fa fa-comment"></i>
                            <a href="#" class="text-decoration">Comment</a>
                        </span>
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