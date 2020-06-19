<!--
Desenvolvido por: Abraão Azevedo
Versão: 1.1.2
Data: 07 de junho de 2020
Contato: abraaonmazevedo@gmail.com
Projeto: Modelo básico de editor de texto para projetos de sites e blogs
===============================================================================
CKEditor
===============================================================================
CKEditor deve ser considerado o editor padrão para projetos.
Aqui está uma formatação simples para um editor de texto.
* Deve-se incluir "class" e/ou "divs" e vincular à folha de estilos (css).
* Deve-se incluir o "method" e "action" no "form".
* Para ter êxito, deve-se copiar a pasta (extraída) do CKeditor no servidor.
* O formato das "class" usados abaixo são da referência de bootstrap 4.
===============================================================================  
-->
    <!-- Incluir título da matéria ou qualquer informação relevante -->
    <form action="teste.php" method="POST">
    <input type="text" class="form-control" name="" id="" placeholder="Inserir título da matéria ou qualquer informação relevante para a esta avaliação"><br>
    <div class="container-editor">
    <!-- Início de formulário -->
    <form action="libphp/update.php" method="POST">
    <!-- Inclusão de questão -->
        <textarea name="texto" required>Digite seu texto aqui!</textarea><br>
    <!-- Inclusão de respostas com "type radio" -->
    <div class="form-group">
            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                <label class="custom-control-label" for="customRadio1"> Certo </label> 
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                <label class="custom-control-label" for="customRadio2"> Errado </label>
            </div>
    </div>
    <!-- Incluir observação quanto a questões erradas -->
    <div class="form-group">
        <textarea name="" class="form-control" placeholder="Incluir observação para respostas erradas. Caso não seja necessário, deixe este campo vazio." id="" cols="30" rows="10"></textarea> <br>
        <input type="submit" class="btn-primary" value="Salvar questão"> <input type="submit" class="btn-secondary" value="Acrescentar questão">
    </div>
    </form>
    </div>
    <!-- Este script faz o link com o arquivo "ckeditor.js" -->
    <script src="../ckeditor/ckeditor.js"></script>

    <!-- Este script faz a relação do js com o objeto do "name" da "textarea" -->
    <script>
        CKEDITOR.replace('texto');
    </script>