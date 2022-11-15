@extends('layout')

<header class="intro-header" style="background: @if(!empty($headerImage)) url(&#39;{{ $headerImage}}&#39;)@else linear-gradient(to bottom, #fb3664 0%, #4af5db 100%)@endif">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-heading">
                    <h1 class="awesome-tiitle">{{ $post->title}}</h1>
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
			<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1" style="margin-top:20px">
				{{-- 发表评论 --}}
				<div class="col-lg-6 col-md-6 col-xs-6">
					发表评论：
				</div>
				@if(Auth::check())
					<div class="col-lg-6 col-md-6 col-xs-6 text-right">
						当前用户：{{ Auth::user()->username}}
						
					</div>
				@else 
				<div class="col-lg-6 col-md-6 col-xs-6 text-right">
					<a href="{{ route('login.github')}}">GITHUB登录</a>
				</div>
				@endif
				<div class="col-lg-12 col-md-12">
					<form method="POST" action="{{ route('comment')}}">
						{{ csrf_field() }}
						<input type="hidden" name="to_uid" value="0">
						<input type="hidden" name="post_id" value="{{ $post->id }}">
						<textarea name="content" class="comment-textarea form-control" rows="3"></textarea>
						<div class="col-lg-6 col-md-6 col-xs-6 pull-left comment-to-user-box">对<span class="comment-to-username"></span>说：<span class="fa fa-close close-comment-to-user-btn"></span>
						</div>
						<div class="col-lg-6 col-md-6 col-xs-6 pull-right text-right" style="padding-right: 0">
							<button type="submit" class="btn btn-default">提交</button>
						</div>
					</form>
				</div>

				<div class="col-lg-6 col-md-6" style="clear: both">
					评论列表：
				</div>
				{{-- 评论列表 --}}
				<div class="col-lg-12 col-md-12">
					<div class="col-lg-12 col-md-2 text-left">
						@foreach ($comments as $comment)
						<p id="comment-{{ $comment->id}}" class="comment-item">{{$comment->created_at->format('Y-m-d')}} {{ $comment->from_username }}
							@if($comment->to_uid)
							对{{ $comment->to_username }}
							@endif
							说：{{$comment->content}} <span class="fa fa-commenting-o comment-to-user" data-username="{{ $comment->from_username }}"
								data-uid="{{ $comment->from_uid }}" aria-hidden="true"></span></p>
						@endforeach
					</div>
				</div>

			</div>

		</div>
	</div>
</article>
@endsection

