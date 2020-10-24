<h1>List of Pets</h1>

{{-- <div class = "search-bar">
    <form action="{{route('search')}}" method="get" class="search-bar_form">
        <input type="text" value="" name="query" id="query" placeholder="Search...">
        <button class="btn" type="submit">

        </button>
    </form>
</div> --}}

<form action="/search" method="POST" role="search">
    @csrf
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search pets"> <span class="input-group-btn">
            <button type="submit" style="padding: 1%" class="btn btn-default">Search
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form>

<form action="/search" method="POST" role="search">
    @csrf
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search clients"> <span class="input-group-btn">
            <button type="submit" style="padding: 1%" class="btn btn-default">Search
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form>

<button style="padding: 1%"><a style="text-decoration: none" href="http://www.hackathon.test/pets/create">Add your pet</a></button>

@foreach($pets as $p)
<h2>{{$p->name}}</h2>
<h3>Breed: {{$p->breed}}</h3>

<img src="/images/pets/{{$p->photo}}">


<a style="text-decoration: none" href="{{ action('PetController@show', $p->id) }}"><h3>Details of pet</h3></a>

<hr>

@endforeach