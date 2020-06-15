<!--========================
  Projeto EduCode
  Tela do aluno 
=========================-->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Dashboard Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark-blue flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">EduCode</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="../sign-in/index.html">Sair</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <form method="POST">
        <ul class="nav flex-column">
          <li class="nav-item">
            <button class="nav-link active">
              <span data-feather="home"></span>
              Dados da Turma <span class="sr-only">(current)</span>
            </button>
          </li>
          <li class="nav-item">
            <button class="nav-link" name="materiais">
              <span data-feather="file"></span>
              Materiais
            </button>
          </li>
          <li class="nav-item">
            <button class="nav-link" name="transmissao">
              <span data-feather="users"></span>
              Transmissão
            </button>
          </li>
          <li class="nav-item">
            <button class="nav-link" name="avaliacoes">
              <span data-feather="file-text"></span>
              Avaliações
            </button>
          </li>
          <li class="nav-item">
            <button class="nav-link" name="complementos">
              <span data-feather="layers"></span>
              Complementos
            </button>
          </li>
          <li class="nav-item">
            <button class="nav-link" name="desempenho">
              <span data-feather="bar-chart-2"></span>
              Desempenho
            </button>
          </li>
          <li class="nav-item">
              <button class="nav-link" name="sobre">
                <span data-feather="list"></span>
                Sobre
              </button>
          </li>
        </ul>
      </form>
      </div>
    </nav>