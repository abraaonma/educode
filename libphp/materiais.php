<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Materiais</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    
  </div>
</div>
<header>
<nav>
    <!--<div class="collapse navbar-collapse" id="navbarCollapse">-->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle h5" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Etapa 1
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="quem-somos.php">Excluir</a>
            <a class="dropdown-item" href="quem-somos.php">Alterar</a>
          </div>
        </li>
      </ul>
    <!--</div>-->
 </nav>
 </header>

  <div class="table-responsive">
  <table class="table">
  <thead>
  <tr>
      <th scope="row">Livro</th>
      <td>Excluir</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><a href="#">Livro 01</a></th>
      <td><a href="#">Excluir</a></td>
    </tr>
    <tr>
      <th scope="row"><a href="#">Livro 02</a></th>
      <td><a href="#">Excluir</a></td>
    </tr>
  </tbody>
  </table>
  </thead>
  </tbody>
  </table>
</div>

<h4>Incluir material</h4>
<form action="teste.php" method="POST">
  <div class="form-group">
      <input type="text" class="form-control" name="" id="" placeholder="Título do material (livro, slide, etc)"><br>
      <input type="text" class="form-control" name="nome" id="nome" placeholder="Link do material"><br>
      <textarea name="" class="form-control" placeholder="Observação" id="" cols="30" rows="10"></textarea> <br>
      <input type="submit" class="btn-primary" value="Salvar"> <input type="submit" class="btn-secondary" value="Acrescentar Etapa">
  </div>
</form>