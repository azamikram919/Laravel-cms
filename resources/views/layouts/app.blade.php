<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image" href="{{asset('public/images/author.png')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/style.css')}}">
    <title>App Name - @yield('title')</title>
</head>
<body>
<nav class="navbar navbar-light bg-dark sticky-top">
    <div class="container">
        <a href="" class="navbar-brand text-light">
            <img src="{{asset('public/images/author.png')}}" class="img-responsive img-fluid" width="35px" alt="">
            <span class="navbar-link">Navbar</span>
        </a>
        <div class="navbar-items d-flex">
            <a href="" class="home ps-4 text-decoration color-white change-color"><i class="fa fa-home"></i> Home</a>
            <a href="#" class="contact ps-4 text-decoration color-white change-color"><i class="fa fa-phone"></i>
                Contact Us</a>
            <a href="#" class="categories ps-4 text-decoration color-white change-color"><i class="fa fa-list-alt"></i>
                Categories</a>
            <a href="#" class="add-post ps-4 text-decoration color-white change-color"><i class="fa fa-plus-square"></i>
                Add Post</a>
            <a href="#" class="logout ps-4 text-decoration color-white change-color"><i class="fa fa-user"></i>
                LogOut</a>
        </div>
    </div>
</nav>

@yield('content')

<br><br>
<footer>
    <div class="background">
        <div class="container p-1 pt-4">
            <p>Copyright @ by <span>Azamikram919</span>. All Reserved From 2018. 2020</p>
        </div>
    </div>
</footer>
<script src="{{asset('public/assets/jquery/jquery.min.js')}}"></script>
<script src="{{asset('public/assets/js/popper.min.js')}}"></script>
<script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
<script src="https://cdn.tiny.cloud/1/haw7y5xi6phwkbv0awl607mom90ng4xdfkawlf7eqmd96g5n/tinymce/5/tinymce.min.js"
        referrerpolicy="origin">
</script>
<script>

    tinymce.init({
        selector: 'textarea#textarea',
        plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
        toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
        toolbar_mode: 'floating',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
    });
</script>
</body>
</html>