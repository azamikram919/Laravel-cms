@extends('layouts.app')
@section('title', 'Blog Post')
@section('content')
    <nav class="navbar navbar-light bg-dark sticky-top">
        <div class="container">
            <a href="" class="navbar-brand text-light">
                <img src="{{asset('public/images/author.png')}}" class="img-responsive img-fluid" width="35px" alt="">
                <span class="navbar-link">Navbar</span>
            </a>
            <div class="navbar-items d-flex">
                <a href="" class="home pl-3 text-decoration color-white change-color"><i class="fa fa-home"></i> Home</a>
                <a href="#" class="contact pl-3 text-decoration color-white change-color"><i class="fa fa-phone"></i>
                    Contact Us</a>
                <a href="#" class="categories pl-3 text-decoration color-white change-color"><i class="fa fa-list-alt"></i>
                    Categories</a>
                <a href="#" class="add-post pl-3 text-decoration color-white change-color"><i class="fa fa-plus-square"></i>
                    Add Post</a>
                <a href="#" class="logout pl-3 text-decoration color-white change-color"><i class="fa fa-user"></i>
                    LogOut</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <form action="" method="post" enctype="multipart/form-data">
                            <br><br><br>
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" value="" name="title" placeholder="Type Post Title Here"
                                       class="form-control">
                            </div>
                            <div class="form-group pt-2">
                                <textarea name="post-data" id="textarea" cols="30" rows="16"
                                          class="form-control tinymce"
                                          aria-hidden="true">
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="file">Post Image:</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="categories">Categories:</label>
                                <select class="form-control" name="categories">
                                    <option value="Laptops">Laptops</option>
                                    <option value="Books">Books</option>
                                    <option value="MObiles">MObiles</option>
                                </select>
                            </div>
                            <br>
                            <input type="submit" name="submit" value="User Post" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br>
    <footer>
        <div class="background">
            <div class="container p-1 pt-4">
                <p>Copyright @ by <span>Azamikram919</span>. All Reserved From 2018. 2020</p>
            </div>
        </div>
    </footer>
@endsection