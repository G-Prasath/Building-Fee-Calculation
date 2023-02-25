<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="sec.css">
  <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Lato&display=swap" rel="stylesheet">
</head>



<body>

  <main>
  <h1 id="title">Sample Survey Form</h1>
  <p id="description">This is a sample survey form.</p>

  <form id="survey-form">

    <div id="required-details">

      <div>
        <label for="name" id="name-label">Name:</label>
        <input id="name" type="text" placeholder="Building License Fees" required>
      </div>

      <div>
        <label for="email" id="email-label">Email:</label>
        <input id="email" type="email" placeholder="Enter your Email" required>
      </div>

      <div class="mr-10">
        <label for="number" id="number-label">Age:</label>
        <input id="number" type="number" placeholder="Age" min="1" max="99">
      </div>
      
    </div>


    <div>
     <select name="random" id="dropdown">
       <option value="">-- Please choose your Pokemon --</option>
       <option value="charmander">Charmander</option>
       <option value="squirtle">Squirtle</option>
       <option value="bulbasaur">Bulbasaur</option>
     </select>
    </div>


    <div id="radio">
      <p>Demolition Fees:</p>
      <div>
        <input type="radio" id="blue" name="color" value="blue">
        <label for="blue">Blue</label>
        <input type="radio" id="red" name="color" value="red">
        <label for="red">Red</label>
        <input type="radio" id="green" name="color" value="green">
        <label for="green">Green</label>
      </div>
     </div>
    <div>



      <div id="checkbox">
        <p>Choose a feature/s: </p>
        <div>
          <input type="checkbox" id="scales" value="scales" name="scales">
          <label for="scales">Scales</label>
          <input type="checkbox" id="scales" value="horns" name="horns">
        <label for="horns">Horns</label>
        </div>
      </div>
      <textarea name="comment" rows="10" cols="40">
      </textarea>
    </div>
    <div>
      <button type="submit" id="submit">Submit</button>
    </div>
    </form>
  </main>
</body>
</html>