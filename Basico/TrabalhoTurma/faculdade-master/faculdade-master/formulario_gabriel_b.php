<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="estilo/estilo.css">

        <title>Projeto Faculdade TADS.3</title>
    </head>
    <body>
        <div class="topo">
            <div class="row">
                <div class="col-md-12">
                    <?php include 'topo/topo.php'; ?>
                </div>
            </div>
        </div>
        <div class="menu">
            <div class="row">
                <div class="col-md-12">
                    <?php include 'menu/menu.php'; ?>
                </div>
            </div>
        </div>
        <!-- Colocar o seu formulario aqui -->
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <h3>Cadastrar Notas</h3>
                    <form method="post" action="inserir_formulario/inserir_gabriel_b.php" name="nota">
                        <div class="form-group">
                            <label for="p">Aluno</label>
                            <input type="text" class="form-control" id="aluno_nota" placeholder="Digite o nome do Aluno" name="aluno_nota">
                        </div>	
                        <div class="form-group">
                            <label for="disciplina_nota">Selecione a Disciplina </label>
                            <select id="disciplina_nota" class="form-control" name="disciplina_nota">
                                <option selected>Selecione Disciplina...</option>
                                <option>Analise e Projeto de Sistemas I</option>
                                <option>Banco de Dados II</option>
                                <option>Desenvolvimento da WEB I</option>
                                <option>Engenharia de Software</option>
                                <option>Programacao Orientada a Objetos I</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="periodo_nota">Selecione o Periodo </label>
                            <select id="periodo_nota" class="form-control" name="periodo_nota">
                                <option selected>Selecione o Periodo...</option>
                                <option>1º Periodo</option>
                                <option>2º Periodo</option>
                                <option>3º Periodo</option>
                                <option>4º Periodo</option>
                                <option>5º Periodo</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="nota1_nota">Nota 1</label>
                                <input type="text" class="form-control" id="nota1_nota" name="nota1_nota" placeholder="1º Nota">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="nota2_nota">Nota 2</label>
                                <input type="text" id="nota2_nota" class="form-control" name="nota2_nota" placeholder="2º Nota">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="nota3_nota">Nota 3</label>
                                <input type="text" class="form-control" id="nota3_nota" name="nota3_nota" placeholder="3º Nota">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="nota4_nota">Nota 4</label>
                                <input type="text" class="form-control" id="nota4_nota" name="nota4_nota" placeholder="4º Nota">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="media_final_nota">Media Final</label>
                                <input type="text" class="form-control" id="media_final_nota" name="media_final_nota" placeholder="Media">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="exame_final_nota">Exame Final</label>
                                <input type="text" class="form-control" id="exame_final_nota" name="exame_final_nota" placeholder="Exame">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="situacao_nota">Situação</label>
                                <input type="text" class="form-control" id="situacao_nota" name="situacao_nota" placeholder="Situação">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Salvar</button>
                        <button type="reset" class="btn btn-danger">Limpar</button>
                    </form>
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </div>
        <br>
        <!-- Colocar o seu formulario aqui -->
        <footer class="footer">
            <div class="row">
                <div class="col-md-12">
                    <?php include 'rodape/rodape.php'; ?>
                </div>
            </div>
        </footer>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>