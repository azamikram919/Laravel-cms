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


                <!----------col 9 start--------->
                <div class="col-md-9">
                    <div class="page-content pt-3" id="content">
                        <!-- Toggle button -->
                        <button id="sidebarCollapse" type="button"
                                class="btn btn-dark bg-dark rounded-pill shadow-sm px-4 mb-4"><i
                                    class="fa fa-bars mr-2"></i>
                            <small class="text-uppercase font-weight-bold">Toggle</small>
                        </button>
                    </div>


                    <h1><i class="fas fa-tachometer-alt"></i>
                        Dashboard
                        <small>Statics Overview</small>
                    </h1>
                    <hr>
                    <ol class="breadcrumb">
                        <li class="active"><i class="fas fa-tachometer-alt"></i> Dashboard</li>
                    </ol>

                    <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card text-white mb-3">
                                <div class="tag-box-1">
                                    <div class="card-header bg-info ">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <i class="far fa-comments fa-5x text-white"></i>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="text-right text-white huge">10</div>
                                                <div class="text-right text-white">New Comments</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="text-info">
                                            <span class="pull-left">View All Comments</span>
                                            <span class="float-right">
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card text-white mb-3">
                                <div class="tag-box-2">
                                    <div class="card-header bg-danger">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <i class="far fa-file-alt fa-5x text-white"></i>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="text-right text-white huge">20</div>
                                                <div class="text-right text-white">All Posts</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="text-danger">
                                            <span class="pull-left">View All Comments</span>
                                            <span class="float-right">
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="card text-white mb-3">
                                <div class="tag-box-3">
                                    <div class="card-header bg-warning">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <i class="far fa-folder-open fa-5x text-white"></i>
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="text-right text-white huge">10</div>
                                                <div class="text-right text-white">New Comments</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <a href="#" class="text-warning">
                                            <span class="pull-left">View All Comments</span>
                                            <span class="float-right">
                                        <i class="far fa-arrow-alt-circle-right"></i>
                                    </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h3>New Users</h3>
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Sr #</th>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Role</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>23 May 2020</td>
                            <td>Muhammad Azam</td>
                            <td>Xaim Blog</td>
                            <td>Admin</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>23 May 2020</td>
                            <td>Muhammad Azam</td>
                            <td>Xaim Blog</td>
                            <td>Admin</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>23 May 2020</td>
                            <td>Muhammad Azam</td>
                            <td>Xaim Blog</td>
                            <td>Admin</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>23 May 2020</td>
                            <td>Muhammad Azam</td>
                            <td>Xaim Blog</td>
                            <td>Admin</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>23 May 2020</td>
                            <td>Muhammad Azam</td>
                            <td>Xaim Blog</td>
                            <td>Admin</td>
                        </tr>
                        </tbody>
                    </table>
                    <a href="#" class="btn btn-primary">View All Users</a>
                    <hr>
                    <h3>New Posts</h3>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Sr #</th>
                            <th>Date</th>
                            <th>Post Title</th>
                            <th>Category</th>
                            <th>Views</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>23 5 2020</td>
                            <td>PHP Project</td>
                            <td>CMS</td>
                            <td><i class="fa fa-eye"></i> 120</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>23 5 2020</td>
                            <td>PHP Project</td>
                            <td>CMS</td>
                            <td><i class="fa fa-eye"></i> 120</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>23 5 2020</td>
                            <td>PHP Project</td>
                            <td>CMS</td>
                            <td><i class="fa fa-eye"></i> 120</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>23 5 2020</td>
                            <td>PHP Project</td>
                            <td>CMS</td>
                            <td><i class="fa fa-eye"></i> 120</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>23 5 2020</td>
                            <td>PHP Project</td>
                            <td>CMS</td>
                            <td><i class="fa fa-eye"></i> 120</td>
                        </tr>
                        </tbody>
                    </table>
                    <a href="#" class="btn btn-primary">View All Posts</a>

                </div>
                <!----------col 9 end--------->

            </div>
        </div>
    </div>

@endsection