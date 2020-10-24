<h1>Insert a new pet</h1>

<form action="{{ action('PetController@store') }}" method="post">
    @csrf
    @csrf
    <div class="edit-form__alerts">

        @if (Session::has('success_message'))
 
            <div class="alert alert-success">{{ Session::get('success_message') }}</div>
        
        @endif
    <p>
        <label for="name">Name:</label>
        <input id="name" type="text" name="name"/>
    </p>
    <p>
        <label for="breed">Breed:</label>
        <input id="breed" type="text" name="breed"/>
    </p>

    <p>
        <label for="age">Age:</label>
        <input id="age" type="text" name="age"/>
    </p>

    <p>
        <label for="weight">Weight:</label>
        <input id="weight" type="text" name="weight"/>
    </p>

    <p>
        <label for="owner_id">Owner id:</label>
        <input id="owner_id" type="text" name="owner_id"/>
    </p>

    <p>
        <label for="photo">Photo:</label>
        <input id="photo" type="text" name="photo" value="https://www.codingbootcamp.cz/img/cbp_logo-dark.png"/>
    </p>

    <button type="submit">Create</button>
</form>