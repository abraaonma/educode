<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Escolher Turma</h1>
</div>

<div class="album py-5 bg-light">      
  <div class="container">
    <div class="row">

      <?php
        // PROJETAR E INCLUIR FUNÇÕES COM WHILE
        include_once('functions/conectar.php');

        $query = 'SELECT * FROM dc_cursos';
        $pdo = $conn->prepare($query);
        $pdo->execute();

        // Montar mosaico (ou TAG's) de cursos
        while($row = $pdo->fetch())
        {
          echo '
                <div class="col-md-4">

                  <div class="card mb-4 shadow-sm">
                
                    <label style="width:100%; height:255; text-align:center; background-color:#dbdbdb; padding:50px; color:#000; margin:0; font-size: 15pt; font-variant:small-caps; border-radius:3px;" >'. $row['nome_cursos'] .'</label>
                
                  <div class="card-body">
                
                    <!--<p class="card-text">Ente na onda!!!</p>-->
                  
                      <div class="d-flex justify-content-between align-items-center">
                    
                      <div class="btn-group">
                      
                        <button type="button" class="btn btn-success">Entrar na sala</button>
                      
                      </div>
                        
                        <small class="text-muted">9 mins</small>
                    
                      </div>
                  </div>
                  </div>
                </div>
                  ';
        }
      ?>
    </div>
  </div>
</div>