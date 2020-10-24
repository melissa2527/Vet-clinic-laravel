
<h1>Edit pet {{ $pet->name }}</h1>

<form action="{{ action('PetController@update', $pet->id) }}" method="post">
    @method('put')
    @csrf
    {{-- <div class="edit-form__alerts">

        @if (Session::has('success_message'))
 
            <div class="alert alert-success">{{ Session::get('success_message') }}</div>
        
        @endif
        @if ($errors->count())
        @foreach ($errors->all() as $error)
        <div class="alert alert-error">{{ $error }}</div>
        @endforeach

        @endif --}}

    <p>
        <label for="name">Name:</label>
    <input id="name" type="text" name="name" value="{{old('name', $pet->name)}}"/>
    </p>
    <p>
        <label for="breed">Breed:</label>
        <input id="breed" type="text" name="breed" value="{{old('breed', $pet->breed)}}"/>
    </p>

    <p>
        <label for="age">Age:</label>
    <input id="age" type="text" name="age" value="{{old('age', $pet->age)}}"/>
    </p>

    <p>
        <label for="weight">Weight:</label>
    <input id="weight" type="text" name="weight" value="{{old('weight', $pet->weight)}}"/>
    </p>

    <p>
        <label for="owner_id">Owner id:</label>
        <input id="owner_id" type="text" name="owner_id" value="{{old('owner_id', $pet->owner_id)}}"/>
    </p>

    <p>
        <label for="photo">Photo:</label>
        <input id="photo" type="text" name="photo" value=""/>
    </p>

    <button type="submit">Update Records</button>
</form>

{{-- @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}