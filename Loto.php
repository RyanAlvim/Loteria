
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
                        class Loto{
                            public function requests(){
                                $json = file_get_contents("https://lotericas.io/api/v1/jogos/lotofacil/lasted");
                                $req = json_decode($json);
                        
                    foreach($req->data as $key){
                                echo " <h1 class='title'>$key->name</h1>
                                <h2 class='title'>Próximo Concurso: $key->proximoConcurso</h2>
                                <h2 class='title'>Concurso Anterior: $key->concursoAnterior</h2>
                                <h2 class='title'>Concurso: $key->concurso</h2>
                                <h2 class='title'>Resultado: $key->resultadoOrdenado</h2>
                                <h2 class='title'>Cidade: $key->no_cidade ($key->sg_uf)</h2>
                                <h2 class='title'>Ganhadores Faixa 1: $key->qt_ganhador_faixa1</h2>
                                <h2 class='title'>Ganhadores Faixa 2: $key->qt_ganhador_faixa2</h2>
                                <h2 class='title'>Ganhadores Faixa 3: $key->qt_ganhador_faixa3</h2>
                                <h2 class='title'>Ganhadores Faixa 4: $key->qt_ganhador_faixa4</h2>
                                <h2 class='title'>Ganhadores Faixa 5: $key->qt_ganhador_faixa5</h2>
                                <h2 class='title'>Rateio Faixa 1: $key->vr_rateio_faixa1</h2>
                                <h2 class='title'>Rateio Faixa 2: $key->vr_rateio_faixa2</h2>
                                <h2 class='title'>Rateio Faixa 3: $key->vr_rateio_faixa3</h2>
                                <h2 class='title'>Rateio Faixa 4: $key->vr_rateio_faixa4</h2>
                                <h2 class='title'>Rateio Faixa 5: $key->vr_rateio_faixa5</h2>
                                <h2 class='title'>Valor acumulado Faixa 1: $key->vrAcumuladoFaixa1</h2>
                                <h2 class='title'>Valor acumulado Faixa 2: $key->vrAcumuladoFaixa2</h2>
                                <h2 class='title'>Valor Estimativa: $key->vrEstimativa</h2>
                                <h2 class='title'>Valor arrecadado: $key->vrArrecadado</h2>
                                <h2 class='title'>Valor Acumulado Especial: $key->vrAcumuladoEspecial</h2>
                                <h2 class='title'>Local Sorteio: $key->localSorteio</h2>";
                            }
                        }
                    }
                            $loto = new Loto();
                            $loto->requests();
                    ?>
                                  
                        
                    </form>
                </div>
            </div>
        </body>
        </html>