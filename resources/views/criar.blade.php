<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h1>Cadastro de livros </h1>
<form method="POST">
@csrf

<div class="container">
  <div class="row">
    <div class="col-sm">
  
      <div class="form-group" id="form">
        <label for="exampleFormControlInput1">Título</label>
        <input name="titulo"type="text" class="form-control" id="exampleFormControlInput1" placeholder="Título da obra">
        <br>
        <label for="exampleFormControlInput1">Autor</label>
        <input name="autor"type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome do Autor">
        <br>
        <label for="exampleFormControlInput1">ISBN</label>
        <input name="isbn" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Código ISBN">
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Procedência</label>
        <select name="procedencia" class="form-control" id="procedencia">
        <option>Nacional</option>
        <option>Internacional</option>
     
        </select>
        </br>
      </div>
      <button type="submit" class="btn btn-success">Enviar </button>
     
    </div>
  </div>
</div>

</form>  
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>