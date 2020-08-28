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
        <div class="container ">
            <div class="row ">
                <div class="col-md-2">
                </div>
                <div class="col-md-8 ">
                    <h3>Cadastrar Compra na Cantina</h3>
                    <form method="post" action="inserir_formulario/inserir_karam.php" name="formulario_cantina">
                        <div class="form-group">
                            <label for="produto_cantina">Produto</label>
                            <select id="produto_cantina" name="produto_cantina" required="required" class="form-control">
                                <option>Seleciona um Produto</option>
                                <option>Combo 1</option>
                                <option>Combo 2</option>
                                <option>Café 1</option>
                                <option>Café 2</option>
                                <option>Bebida 1</option>
                                <option>Bebida 2</option>
                                <option>Café 1 + Salgado</option>
                                <option>Café 2 + Salgado</option>
                                <option>Salgado</option>
                                <option>Energético</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="vendedor_cantina">Vendedor</label>
                            <select id="vendedor_cantina" name="vendedor_cantina" required="required" class="form-control">
                                <option>Seleciona um Vendedor</option>
                                <option>Pedro</option>
                                <option>Paulo</option>
                                <option>Alex</option>
                                <option>Karam</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="quantidade_cantina">Quantidade</label>
                            <input type="text" class="form-control" id="quantidade_cantina" name="quantidade_cantina" placeholder="Digite a Quantidade Comprada">
                        </div>
                        <div class="form-group">
                            <label for="valor_unitario_cantina">Valor Unitario</label>
                            <input type="text" class="form-control" id="valor_unitario_cantina" name="valor_unitario_cantina" placeholder="Digite o Valor Unitário">
                        </div>
                        <div class="form-group">
                            <label for="valor_total_cantina">Valor Total</label>
                            <input type="text" class="form-control" id="valor_total_cantina" name="valor_total_cantina" placeholder="Digite o Valor Total da Compra">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success ">Salvar</button>
                            <button type="reset" class="btn btn-danger">Limpar</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </div>
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