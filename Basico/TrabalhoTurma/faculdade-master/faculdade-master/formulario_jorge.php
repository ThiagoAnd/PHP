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
    <body  class="geral">
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
                    <h3>Cadastrar Professor</h3>
                    <form method="post" action="inserir_formulario/inserir_jorge.php" name="professor">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nome_professor">Nome</label>
                                <input type="text" class="form-control" id="nome_professor" placeholder="Nome" name="nome_professor">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="disciplina_professor">Disciplina</label>
                                <input type="text" class="form-control" id="disciplina_professor" placeholder="Disciplina" name="disciplina_professor">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="rg_professor">RG</label>
                                <input type="text" class="form-control" id="rg_professor" placeholder="RG" name="rg_professor">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="cpf_professor">CPF</label>
                                <input type="text" class="form-control" id="cpf_professor" placeholder="CPF" name="cpf_professor">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="endereco_professor">Endereco</label>
                            <input type="text" class="form-control" id="endereco_professor" placeholder="Endereco" name="endereco_professor">
                        </div>
                        <div class="form-group">
                            <label for="telefone_professor">Telefone</label>
                            <input type="text" class="form-control" id="telefone_professor" placeholder="Telefone" name="telefone_professor">
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
