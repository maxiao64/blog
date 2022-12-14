@extends('layout')

<header class="intro-header" style="background: @if(!empty($headerImage)) url(&#39;{{ $headerImage}}&#39;)@else linear-gradient(to bottom, #fb3664 0%, #4af5db 100%)@endif">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1>分类</h1>
                </div>
            </div>
        </div>
    </div>
</header>

@section('body')
  <!-- Post Content -->
  <div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				@foreach($categories as $category)
				<div class="post-preview">
					<a href="{{ route('post.categoryPost',['name' => $category->name,'id' => $category->id]) }}">
						<h1 class="post-title archive awesome-tiitle">
							{{ $category->name}}({{ $category->posts->count()}})
						</h1>
					</a>
				</div>
				@endforeach
		</div>
	</div>
</div>

@endsection

