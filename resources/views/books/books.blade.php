@foreach ($books as $book)
<div>
    <div class="box">
        <div class="image fit">
            <img src="images/pic02.jpg" alt="" />
        </div>
        <div class="content">
            <header class="align-center">
                <h2>{{$book->title}}</h2>
            </header>
            <footer class="align-center">
            <a href="/books/{{$book->id}}" class="button alt">Learn More</a>
            </footer>
        </div>
    </div>
</div>
    
@endforeach