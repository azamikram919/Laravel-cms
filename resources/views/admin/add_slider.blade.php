@extends('layouts.app')
@section('title', 'Admin Panel')
@section('content')
    <div id="wrapper">
        <nav class="navbar navbar-light bg-color sticky-top">
            <div class="container-fluid">
                <a href="" class="navbar-brand text-light">
                    <img src="{{asset('public/images/author.png')}}" class="img-responsive img-fluid" width="35px"
                         alt="">
                    <span class="navbar-link">Home</span>
                </a>
                <div class="navbar-items d-flex">
                    <a href="#" class="home ps-4 text-decoration color-black change-color"><i
                                class="fas fa-sliders-h"></i>
                        Add Sliders</a>
                    <a href="#" class="contact pl-3 text-decoration color-black change-color"><i
                                class="fa fa-plus-square"></i>
                        Add Post</a>
                    <a href="#" class="categories pl-3 text-decoration color-black change-color"><i
                                class="fa fa-user-plus"></i>
                        Add User</a>
                    <a href="#" class="add-post pl-3 text-decoration color-black change-color"><i
                                class="fa fa-users"></i>
                        Profile</a>
                    <a href="#" class="logout pl-3 text-decoration color-black change-color"><i class="fa fa-user"></i>
                        LogOut</a>
                </div>
            </div>
        </nav>

        <div class="container-fluid body-section">
            <div class="row">

                <!-----col 3 start----->
                <div class="col-md-3">
                    <!-- Vertical navbar -->
                    <div class="vertical-nav bg-dark" id="sidebar" style="position: fixed; overflow: hidden; padding-top: 5%">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-10">
                                <div class="pt-3 mb-4 bg-dark">
                                    <div class="media-body">
                                        <h4 class="font-weight-white text-muted mb-0">
                                            <a href="#" class="nav-link text-info">
                                                <i class="fas fa-tachometer-alt"></i>
                                                <span>Dashboard</span>
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr style="color: white">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-10">
                                <ul class="nav flex-column bg-dark mb-0">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link color-silver change-color">
                                            <i class="far fa-file-alt"></i>
                                            All posts
                                        </a>

                                    </li>
                                    <hr style="color: white">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link color-silver change-color">
                                            <i class="far fa-comments"></i>
                                            Comments
                                            <span class="badge"><span>10</span></span>
                                        </a>
                                    </li>
                                    <hr style="color: white">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link color-silver change-color">
                                            <i class="far fa-folder-open"></i>
                                            Categories
                                        </a>
                                    </li>
                                    <hr style="color: white">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link color-silver change-color">
                                            <i class="fa fa-users"></i>
                                            Users
                                        </a>
                                    </li>
                                    <hr style="color: white">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link color-silver change-color">
                                            <i class="fas fa-sliders-h"></i>
                                            Sliders
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!-- End vertical navbar -->
                </div>
                <!-----col 3 end----->

                <!------col 9 start------>
                <div class="col-md-9">
                    <div class="page-content pt-3" id="content">
                        <!-- Toggle button -->
                        <button id="sidebarCollapse" type="button"
                                class="btn btn-dark bg-dark rounded-pill shadow-sm px-4 mb-4"><i
                                    class="fa fa-bars mr-2"></i>
                            <small class="text-uppercase font-weight-bold">Toggle</small>
                        </button>
                    </div>


                    <h1>
                        <i class="fas fa-sliders-h"></i>
                        Add Slider
                        <small>Add New Slider</small>
                    </h1>
                    <hr>
                    <ol class="breadcrumb">
                        <li class="active">
                            <a href="#" class="text-info">
                                <i class="fas fa-tachometer-alt"></i>
                                Dashboard</a>
                            / <i class="fas fa-sliders-h text-secondary"></i>
                            <span class="text-secondary">Add Slider</span>
                        </li>
                    </ol>
                    <hr>
                    <div class="col-lg-12 col-md-12">
                        <form action="" method="" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" value="" name="title" placeholder="Type Post Title Here"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <textarea name="post-data" id="textarea" rows="16"
                                          class="form-control tinymce">
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="file">Slider Image:</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <input type="submit" name="submit" value="Add Post" class="btn btn-primary">
                        </form>
                    </div>
                </div>
                <!-------col 9 end------->
            </div>
        </div>
    </div>

@endsection