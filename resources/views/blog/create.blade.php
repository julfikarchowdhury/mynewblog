
@extends('layouts.main')
 
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
             <form action="/store" method="post" enctype="multipart/form-data">
                @csrf
                <label for="author_name">NAME:</label><br>
                <input type="text" id="author_name" name="author_name" value="{{ $uid->name }}"><br>
                
                <label for="user_id">User_id:</label><br>
                <input type="text" id="user_id" name="user_id" value="{{ $uid->id }}"><br><br>

                <label for="title">TITTLE:</label><br>
                <input type="text" id="title" name="title"><br><br>

                <label for="slug">SLUG:</label><br>
                <input type="text" id="slug" name="slug"><br><br>
                <label for="excerpt">EXCERPT:</label><br>
                <textarea rows="2" cols="20" id="excerpt" name="excerpt"> </textarea> <br><br>

                <label for="body">Body:</label><br>
                <textarea rows="10" cols="50" id="body" name="body"> </textarea> <br><br>

                <label for="image">Image</label>
                <input type="file"  name="image" id="Image" class="form-control ">
                </br>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Upload</button>
                </div>
                </br>

               </form>
            </div>
            

        </div>
    </div>
@endsection
 