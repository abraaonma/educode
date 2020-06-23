<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Incluir Turma</h1>
</div>
<h4>Incluir Turma</h4>

<!-- Incluir dados das turmas -->
<form action="#" method="POST">
    <div class="form-group">
      <input type="text" class="form-control" name="" id="" placeholder="Curso"><br>
      <input type="text" class="form-control" name="" id="" placeholder="Período"><br>
      <input type="text" class="form-control" name="" id="" placeholder="Disciplina"><br>
      <input type="text" class="form-control" name="" id="" placeholder="Carga Horária"><br>
      <input type="text" class="form-control" name="" id="" placeholder="Professor"><br>
      <input type="text" class="form-control" name="" id="" placeholder="Prédio"><br>
      <input type="text" class="form-control" name="" id="" placeholder="Nº da Sala"><br>
      <!-- Selecionar tema de cores das TAG's dos cursos -->
      <div class="album py-5 bg-light">      
          <div class="container">
          <div class="row">
      
              <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                      <label class="box-label color-tag-defaut" for="customRadio0"> 
                      <input type="radio" id="customRadio0" name="customRadio" class="" checked>
                          Tema Padrão
                      </label> 
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                      <label class="box-label color-tag-light-blue" for="customRadio1"> 
                      <input type="radio" id="customRadio1" name="customRadio" class="">
                          Tema 1
                      </label> 
                  </div>
              </div>
              <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">    
                      <label class="box-label color-tag-light-violet" for="customRadio2">
                      <input type="radio" id="customRadio2" name="customRadio" class="">
                          Tema 2 
                      </label> 
                  </div>
              </div>
      
              <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                      <label class="box-label color-tag-gray" for="customRadio3">
                      <input type="radio" id="customRadio3" name="customRadio" class="">
                          Tema 3 
                      </label> 
                  </div>
              </div>
      
              </div>      
          </div>
      </div>
      <!-- Adicionar observação para a turma -->
      <textarea name="" class="form-control" placeholder="Observação" id="" cols="30" rows="10"></textarea> <br>
    </div>

        <!-- Botões para salvar e incluir curso -->
        <input type="submit" class="btn-primary" value="Salvar"> <input type="submit" class="btn-secondary" value="Acrescentar Curso">
</div>
</form>

