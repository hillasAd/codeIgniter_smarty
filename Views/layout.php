<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$titulo}</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<style>
    .row{
        padding-bottom:8px;
    }
</style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
  <!-- Navbar content -->
  <div class="container">
    <h2 class="navbar-brand">CI + SMARTY</h2>
  </div>
</nav>
<div class="container">
    <div class="row" style="padding-top: 20px;">
        <h3>{$titulo}</h3>
    </div>
    <div class="row">
        <div class="col">
            <ul class="nav">
            <li class="nav-item">
                <a href="/produtos" class="nav-link btn btn-light">Gerir produtos</a>
            </li>
            <li class="nav-item">
                <a href="/produto/adicionar" class="nav-link btn btn-light">Adicionar produtos</a>
            </li>
            </ul>
        </div>
    </div>

    {block name=main}
    
    {/block}
</div>

</body>
</html>
