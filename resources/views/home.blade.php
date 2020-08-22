@extends ('layout')
@section('content')
<div id="hero">
    <div class="hero-content">
        <h1>Welcome to DavidDevenish.com</h1>
        <hr />
        <p>The online home of David's books, talks and resources.</p>
    </div>
</div>
<div id="about">
    <h2>About Me</h2>
</div>
<div id="sermons">
    <h2>Talks</h2>
</div>
<div id="books">
    <h2>Books</h2>
    @foreach ($books as $book)
        <h3>{{ $book->title }}</h3>
        <div>{!! $book->blurb !!}</div>
        <a class="buy-button" href={{$book->amzuk}}>Buy on Amazon (UK)</a>
        <a class="buy-button" href={{$book->amzus}}>Buy on Amazon (.com)</a>

    @endforeach
</div>
<div id="training">
    <h2>Training</h2>
    <div class="training-content">
        <div class="training-block">
            Test 1
        </div>
        <div class="training-block">
            Test 1
        </div>
        <div class="training-block">
            Setting People Free
        </div>
    </div>
</div>
@endsection