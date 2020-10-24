<h1>List of Clients</h1>

@foreach($clients as $c)
<h2>First name: {{$c->first_name}}</h2>
<h3>Last name: {{$c->surname}}</h3>
@endforeach