<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exotic Vegetables</title>
    <style>
    body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
    </style>
</head>
<body>
<h1 style="text-align:center">Contact US
<p><h2 style="text-align:center">
  Exotic Vegetables website Members
</h2></p> 
</h1>

<div class="row">
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Sakshi Nikam</h2>
        <p class="title">CEO & Founder</p>
        <p>Founder of Exotic Vegetables</p>
        <p>sakshinikam24@gmail.com</p>
        <p>Contact:8999452302</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Devyani Badgujar</h2>
        <p class="title">Manager</p>
        <p>Manager of Exotic Vegetables</p>
        <p>devyanibadgujar13@gmail.com</p>
        <p>Contact:9112054943</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Shrutika Dalvi</h2>
        <p class="title">CTO</p>
        <p>CTO of Exotic Vegetables</p>
        <p>Shrutikadalvi30@gmail.com</p>
        <p>Contact:9689936938</p>
      </div>
    </div>
  </div>
</div>
</body>
</html>