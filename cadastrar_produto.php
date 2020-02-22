<!DOCTYPE html>
<html lang="pt-br">
   <?php include("header.php"); ?>
<body>
    <div class="d-flex" id="wrapper">
        <!-- SIDEBAR-->
        <div id="sidebar-wrapper">
            <div class="sidebar-heading"><img src="img/logo_heyJessy.png"><span>Painel de Vendas</span></div>
            <div class="list-group list-group-flush border-right">
                <a href="index.php" class="list-group-item list-group-item-action"><i class="fas fa-home"></i>Inicio</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-users"></i>Funcionários</a>
                <a href="cadastrar_produto.php" class="list-group-item list-group-item-action"><i class="fas fa-box-open"></i>Produtos</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-sitemap"></i>Categorias</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-people-carry"></i>Fornecedores</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="far fa-chart-bar"></i>Relatórios</a>
            </div>   
        </div>
        <!-- CONTEÚDO -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light" id="son-navbar">
                <span id="menu-toggle" class="mr-auto"><img src="img/logo_heyJessy.png" class="mx-auto d-block"></span>
                <a  class="navbar-brand" href="#" id="navbar-site-title">Painel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#son-navbar-collapse"
                    aria-controls="son-navbar-collapse" aria-expanded="false" aria-label="Exibe toda navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>   
                <div class="collapse navbar-collapse" id="son-navbar-collapse">
                        <form class="form-inline" id="navbar-search-form">
                                <input type="text" class="form-control form-field son-form-field" placeholder="Pesquisar" id="navbar-search-field">
                        </form>
                    
                        <div id="navbar-profile" class="ml-auto">
                                <img src="img/foto-perfil.jpg" alt="" srcset="">
                                <span>Jonathan Andrade</span>
                        </div>
                </div>
            </nav>
            <div id="content" class="container">
            <!-- Formulário -->
             <h3 id="main-page-form-title" class="son-main-text-3">Cadastar Novo Produto</h3> 
                <div>
                    <form class="card son-form" method="POST" action="processando.php">
                        <div class="card-body son-form-body">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="">Nome:</label>
                                    <input type="text" name="nomeProduto" class="form-field son-form-field form-control" id="user-field" placeholder="Nome">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="col-md-2">
                                    <label for="">Código do Produto:</label>
                                    <input type="text" name="codProduto" class="form-field son-form-field form-control" id="title-field" placeholder="Código do Produto">
                                </div>
                                <div class="col-md-2">
                                    <label for="">Tamanho:</label>
                                    <select name="tamanho"  class="form-field son-form-field form-control">
                                        <option>PP</option>
                                        <option>P</option>
                                        <option>M</option>
                                        <option>G</option>
                                        <option>GG</option>
                                        <option>XG</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Cor:</label>
                                    <input type="text" name="cor" class="form-field son-form-field form-control" id="title-field" placeholder="Cor">
                                </div>
                               <div class="col-md-4">
                                    <label for="">Data:</label>
                                    <input type="date" name="dataCadastro" class="form-field son-form-field form-control" id="date-filed">
                                </div>
                            </div>
                            <hr>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="">Menssagem</label>
                                    <textarea name="msn" id="body-field" class="form-field son-form-field form-control" placeholder="Escreva um pouco sobre você."></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Exemplo de input de arquivo</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>

                        <div class="card-footer">
                            <input type="submit" style="border-radius: 12px;" class="btn btn-success" value="Cadastrar">
                            <input style="border-radius: 12px;" class="btn btn-danger" value="Cancelar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- SCRIPTS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- JS do Bootstrap -->
    <script src="js/bootstrap.min.js"></script>

    <script>
        $("#menu-toggle").click(function(event) {
            event.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
    <script src="js/dev.chartjs.min.js"></script>
</body>
</html>