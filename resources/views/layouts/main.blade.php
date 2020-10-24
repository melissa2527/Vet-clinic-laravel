<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Amazing Clinic</title>
</head>
<body>
    
<header>
  <h1>Welcome to our Dog Clinic</h1>
</header>

<h3>
  <a href="http://www.hackathon.test/pets">Visit our Pets Gallery</a>
</h3>

<div class="img">
  <img src="/images/pets/bingo.jpg" alt="">
  <img src="/images/pets/abigail.jpg" alt="">
  <img src="/images/pets/adam-1.jpg" alt="">
  <img src="/images/pets/allie.jpg" alt="">
</div>

<div class="reg"><button><a href="http://www.hackathon.test/pets/create">Register your pet here</a></button></div>

<hr>

<h3>Our services</h3>
<ul>
  <li>Vaccines</li>
  <li>Testing</li>
  <li>Deworming</li>
  <li>Eye care</li>
  <li>Ear care</li>
</ul>
</body>
</html>

<div class="address">
  <h3>Where to find us</h3>
  <li>Amazing Clinic</li>
  <li>Behounkova 3428</li>
  <li>Prague 5</li>
</div>


<style>
  body {
    background-color: linen;
    padding: 5% 10%;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
  }
  h1 {
    text-align: center;
  }
  h3 {
    color: brown;
 
  }

  a {
    text-decoration: none;
  }

  .img {
    display: flex;
    justify-content: space-around;
    margin: 5% 0;
  }
  img {
    width: 15vw;
  }

  .address li {
    list-style-type: none;
  }

  .reg {
    text-align: center;
  }

  .reg button {
    background-color: bisque;
    padding: 1%;
    border: 1px solid brown;
  }

</style>
