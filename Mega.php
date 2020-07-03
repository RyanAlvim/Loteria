
<!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <title>Loteria</title>
            <!-- Meta Tags -->
            <meta name="description" content="">
            <meta name="author" content="Garkey">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Favicon -->
            <link rel="icon" href="img/favicon.ico" type="image/ico">
            <!-- CSS/JavaScript -->
            <link rel="stylesheet" type="text/css" href="style.css">
            <script type="text/javascript" src="js/script.js"></script>
            <!-- Fontes -->
            <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet"> 
            <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
            <!-- Ícones -->
            <script src="https://kit.fontawesome.com/d16aa07be6.js" crossorigin="anonymous"></script>
        </head>
        <body>
            <div class="pagina">
                <div class="login">
                    <form class="login-formulario">
                        <?php 
                        class Mega{
                            public function requests(){
                                $json = file_get_contents("https://lotericas.io/api/v1/jogos/megasena/lasted");
                                $req = json_decode($json);
                        
                    foreach($req->data as $key){
                                echo "
                                <center>
                    <h5>$key->name</h5>
                    <h5>Próximo Concurso: $key->proximoConcurso</h5>
                    <h5>Concurso Anterior: $key->concursoAnterior</h5>
                    <h5>Concurso: $key->concurso</h5>
                    <h5>Resultado: $key->resultadoOrdenado</h5>
                    <h5>Ganhadores: $key->ganhadores</h5>
                    <h5>Ganhadores Quina: $key->ganhadores_quina</h5>
                    <h5>Ganhadores Quadra: $key->ganhadores_quadra</h5>
                    <h5>Valor: $key->valor</h5>
                    <h5>Valor Quina: $key->valor_quina </h5>
                    <h5>Valor Quadra: $key->valor_quadra</h5>
                    <h5>Acumulado: $key->acumulado</h5>
                    <h5>Valor Acumulado: $key->valor_acumulado</h5>
                    <h5>Local Sorteio: $key->de_local_sorteio</h5>
                    <h5>Cidade: $key->no_cidade ($key->sg_uf)</h5>
                    <h5>Data: $key->dataStr</h5>
                    <h5>Próximo Concurso: $key->dt_proximo_concursoStr</h5>
                </center>
                                ";
                            }
                        }
                    }
                            $mega = new Mega();
                            $mega->requests();
                    ?>
                                  
                        
                    </form>
                </div>
            </div>
        </body>
        </html>
