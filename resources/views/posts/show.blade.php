@extends('layout')

<header class="intro-header" style="background-image: url(&#39;/img/home-bg.jpg&#39;)">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-heading">
                    <h1 class="awesome-tiitle">{{ $post->title}}</h1>
                    <hr class="small">
                    <span class="subheading">Post On :{{ $post->created_at->format('Y-m-d')}}</span>
                </div>
            </div>
        </div>
    </div>
</header>

@section('body')
  <!-- Post Content -->
<article>
	<div class="container">
		<div class="row">

			<!-- Tags and categories -->
			{{-- <div class="col-lg-4 col-lg-offset-2 col-md-5 col-md-offset-1 post-tags">
				<a href="https://www.codeblocq.com/assets/projects/hexo-theme-clean-blog/tags/Tag-1/">#Tag 1</a>
				<a href="https://www.codeblocq.com/assets/projects/hexo-theme-clean-blog/tags/Tag-2/">#Tag 2</a>
				<a href="https://www.codeblocq.com/assets/projects/hexo-theme-clean-blog/tags/Tag-3/">#Tag 3</a>
			</div> --}}
			<div class="col-lg-offset-2 col-md-offset-1 col-lg-4 col-md-5 post-categories">
				<a href="{{  route('post.categoryPost',['name' => $post->category->name,'id' => $post->category->id]) }} }}">{{$post->category->name}}</a>
			</div>

			<!-- Post Main Content -->
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                {!! $post->body !!}
			</div>

			<!-- Comments -->
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
				{{-- 发表评论 --}}
				<div class="col-lg-6 col-md-6">
					发表评论：
				</div>
				@if(Auth::check())
					<div class="col-lg-6 col-md-6 text-right">
						当前用户：{{ Auth::user()->username}}
						
					</div>
				@endif
				<div class="col-lg-12 col-md-12">
					<form>
						<textarea class="comment-textarea form-control" rows="3"></textarea>
						<div class="text-right">
							<button type="submit" class="btn btn-default">提交</button>
						</div>
					</form>
				</div>

				<div class="col-lg-6 col-md-6">
					评论列表：
				</div>
				{{-- 评论列表 --}}
				<div class="col-lg-12 col-md-12">
					<div class="col-lg-12 col-md-2 text-left">
						<p class="comment-item">马潇说：xxxxx<span class="fa fa-commenting-o" aria-hidden="true"></span></p>
					</div>
				</div>

			</div>

		</div>
	</div>
</article>
@endsection

