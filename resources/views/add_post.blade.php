@extends('layouts.app')
@section('title', 'Blog Post')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <div class="row">
                    <div class="col-xs-12">
                        <form action="" method="post" enctype="multipart/form-data">
                            <br><br><br>
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" value="" name="title" placeholder="Type Post Title Here"
                                       class="form-control">
                            </div>
                            <br>
                            <div class="form-group">
                                <textarea name="post-data" id="textarea" cols="30" rows="16"
                                          class="form-control tinymce"
                                          aria-hidden="true">
                                </textarea>
                            </div>
                            <br>
                            <div class="form-group">
                                <label for="file">Post Image:</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <br>
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
@endsection