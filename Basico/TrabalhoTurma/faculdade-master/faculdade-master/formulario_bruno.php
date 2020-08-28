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
                    <h3>Cadastrar Chamada</h3>
                    <form method="post" action="inserir_formulario/inserir_bruno.php">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputdata_chamada">Data da Chamada</label>
                                <input type="date" class="form-control" id="inputdata_chamada" placeholder="data da chamada" name="data_chamada">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputhorario_chamada">Horario da Chamada</label>
                                <input type="time" class="form-control" id="inputhorario_chamada" placeholder="horario da chamada" name="horario_chamada">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputdisciplina_chamada">Disciplina da Chamada</label>
                            <input type="text" class="form-control" id="inputdisciplina_chamada" placeholder="disciplina da chamada" name="disciplina_chamada">
                        </div>
                        <div class="form-group">
                            <label for="inputaluno_chamada">Nome do Aluno</label>
                            <input type="text" class="form-control" id="inputaluno_chamada" placeholder="nome do aluno" name="aluno_chamada">
                        </div>
                        <div class="form-group">
                            <label for="inputState">Aluno esta Presente</label>
                            <select id="inputState" class="form-control" name="presenca_chamada">
                                <option selected>Sim</option>
                                <option>Nao</option>
                            </select>
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
        <br>
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
