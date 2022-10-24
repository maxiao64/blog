@extends('layout')

<header class="intro-header" style="background-image: url(&#39;@if(!empty($headerImage)){{ $headerImage}}@else{{ $settings['header_image']}}@endif&#39;)">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading ">
                    <h1>
                        @if(!empty($title))
                         {{ $title }}
                        @else 
                        {{ $settings['title']}}
                        @endif
                    </h1>
                    @if(!empty($subTitle))
                        <span class="subheading">{{$subTitle}}</span>
                    @else 
                    {{ $settings['sub_title']}}
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</header>

@section('body')
    <!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            
                @foreach ($posts as $post)
                    <div class="post-preview">
                        <a href="{{ route('post.show',['id' => $post->id]) }}">
                            <h2 class="post-title">
                                {{ $post->title }}
                            </h2>
                        </a>
                        <p class="post-meta">
                            {{$post->category->name}} | {{ $post->created_at->format('Y-m-d')}}
                        </p>
                    </div>
                    <hr>
                @endforeach

            <ul class="pager">
                @if ($posts->previousPageUrl())
                    <li class="previous"><a href="{{ $posts->previousPageUrl() }}">←  上一页</a></li>
                @endif
                @if ($posts->nextPageUrl())
                <li class="next"><a href="{{ $posts->nextPageUrl() }}">下一页  →</a></li>

                @endif
            </ul>
        </div>
    </div>
</div>
@endsection

