@extends('layout')

<header class="intro-header" style="background-image: url(&#39;/img/home-bg.jpg&#39;)">
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
						<h1 class="post-title archive">
							{{ $category->name}}
						</h1>
					</a>
				</div>
				@endforeach
		</div>
	</div>
</div>

@endsection

