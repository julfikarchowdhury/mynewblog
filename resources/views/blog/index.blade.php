@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @foreach($posts as $post)
                <article class="post-item">
                    
                        <div class="post-item-image">
                            <a href="/show/{{$post->id}}">
                                <img src="{{ asset($post->image) }}" width="150" height="550"/>
                                <!-- {{ $post->image }}
                                <img src="{{asset("storage/".$post->image) }}" alt="{{ $post->image }}" height='20' width='20' > -->
                            </a>
                        </div>

                    <div class="post-item-body">

                        <div class="padding-10">
                            <h2><a href="/show/{{$post->id}}">{{ $post->title }}</a></h2>
                            <p>{{ $post->excerpt }}</p>
                        </div>

                        <div class="post-meta padding-10 clearfix">
                            <div class="pull-left">
                                <ul class="post-meta-group">
                                    <li><i class="fa fa-user"></i><a href="#">{{ $post->author_name }}</a></li>
                                    <li><i class="fa fa-clock-o"></i><time> {{ $post->created_at->diffForHumans() }}</time></li>
                                    <li><i class="fa fa-tags"></i><a href="#"> Blog</a></li>
                                    <li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
                                    <li><i class="fa fa-eye"></i><a href="#">{{ $post->view }}</a></li>
                                </ul>
                            </div>
                            <div class="pull-right">
                                <a href="/show/{{$post->id}}">Continue Reading &raquo;</a>
                            </div>
                        </div>
                    </div>
                </article>
                @endforeach
               
               
                <br><br>
                <nav class="center">
                  <!-- <ul class="pager">
                    <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Newer</a></li>
                    <li class="next"><a href="#">Older <span aria-hidden="true">&rarr;</span></a></li>
                  </ul> -->
                  <b>{{ $posts->links() }}  </b>             
                </nav><br><br>
            </div>
            @include('layouts.sidebar')
        </div>
    </div>

@endsection