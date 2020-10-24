<h1>Insert a new client</h1>

<form action="{{ action('ClientController@store') }}" method="post">
    @csrf
    <p>
        <label for="first_name">First name:</label>
        <input id="first_name" type="text" name="first_name"/>
    </p>
    <p>
        <label for="surname">Surname:</label>
        <input id="surname" type="text" name="surname"/>
    </p>

    <p>
        <label for="address">Address:</label>
        <input id="address" type="text" name="address"/>
    </p>

    <p>
        <label for="email">Email:</label>
        <input id="email" type="text" name="email"/>
    </p>

    <p>
        <label for="phone">Phone:</label>
        <input id="phone" type="text" name="phone"/>
    </p>

    <button type="submit">Create</button>
</form>