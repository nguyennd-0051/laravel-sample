@extends ('layout')

@section('content')

<div id="wrapper">
	<div id="page" class="container">
        @foreach($articles as $article)
        <div class="content">
            <div class="title">
                <h2><a href="{{ $article->path()}}">{{$article->title}}</a></h2>
            </div>
            <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
        <h3>{{ $article->excerpt }}</h3>
       <br>
        </div>
        @endforeach

	</div>
</div>

@endsection
