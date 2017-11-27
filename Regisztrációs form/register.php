<!DOCTYPE html>
<html>
  <head>
    <title>CappleX | Sheets API</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width", initial-scale="1", charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center"></h1>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <!-- Header -->
    <div class="container">
    <div class="jumbotron">
    <!-- logo helye -->
    </div>
    </div>
    <!-- Header -->

    <!-- Content -->
    <div class="container">
    <div class="content">
    <div class="content_full content_twelve">
    <div class="container_text">
    <h1>Google Sheets API</h1>
    <h3>Alpha v1.0</h3>
    </div>
    <!-- Form -->
    <div class="container">
    <form id="sheets" name="sheets">
    <div class="form-group">
      <label for="email">Elő név</label>
    <input id="first_name" name="last_name" class="form-control" value="" placeholder="First Name"/>
    </div>
    <div class="form-group">
      <label for="email">Utó név</label>
    <input id="last_name" name="last_name" class="form-control" value="" placeholder="Last Name"/>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
    <input id="email" name="email" class="form-control" value="" placeholder="Email Address"/>
    </div>
    <div class="form-group">
      <label for="email">Ref</label>
    <input id="ref" name="ref" class="form-control" value="" placeholder="Ref Name"/>
    </div>
    <button id="submit" name="submit" type="submit" class="btn btn-primary" value="Submit" onClick="submit_form()">Regisztrálás</button>
    </form>
    </div>
    <!-- Form -->
    </div>
    </div>
    </div>
    <!-- Content -->
    </body>
    </html>
