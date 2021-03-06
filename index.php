<?php 

    include('form.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Transformação Digital</title>
</head>
<body>


    <div class="container-fluid" id="top">

        <div class="d-flex justify-content-end mr-5 mb-5 pt-5" style="color:white;">icone</div>
        <div class="container d-flex flex-column align-items-center" id="firstBlock">
            
            <h1 class ="mb-5">Transformação Digital</h1>
            <h2 style="color:white;">Subtítulo exemplo</h2>

        </div>
    </div>
    <div class="row d-flex justify-content-center mid">
        <img src="/img/OBJECTS.png" class="w-50 mb-5" id="objects">
    </div>
    
    <div class="container-fluid d-flex justify-content-around mb-5 mid" id="mid">

        <div class="container col-5 d-flex flex-column align-content-center text-center mt-5" id="texto">
            <p>Participe do nosso evento e assista de forma gratuita online, com a participação dos maiores nomes do Brasil do tema.</p>
            <p>Entenda como as cidades que realizaram a transformação digital ganham eficiência e agilizam os serviços públicos</p>
            <p>Cadastre-se pelo formulário abaixo:</p>
        
        </div>

        <div class="container col-5 mt-5 align-items-center" id="form">

            <form class="d-flex flex-column justify-content-center" action="form.php" method="POST" id="formBody">
                
                <div class="d-flex align-items-center justify-content-between mb-4">

                    <label for="nome">Nome:</label>
                    <input type="text" class="" name="nome" id="nome"  placeholder="Nome Completo">

                </div>

                <div class="d-flex align-items-center justify-content-between mb-4">

                <label for="email">Email:</label>
                <input type="email" name="email" id="email"  placeholder="exemplo@email.com.br">

                </div>

                <div class="d-flex align-items-center justify-content-between">

                <label for="telefone">Telefone:</label>
                <input type="phone" name="telefone" id="telefone" placeholder="+55 (xx) x xxxx-xxxx"></input>

                </div>

                <div class="d-flex justify-content-between mt-3 mr-3">
                    <div>
                        <label for="verificacao">Verificação:</label>
                        <img src="/img/reCAPTCHA.png" class="img-fluid" id="captcha">

                    </div>
                    <div>
                        
                        <button type="submit" class="btn btn-primary">Enviar</button>    
                    </div>
                </div>


            </form>


        </div>
    </div>
    <div class="container-fluid d-flex flex-column align-items-center mt-5">

        <div class="d-flex align-items-center justify-content-around mt-5" id="faleConosco">

            <img src="/img/Botão Fale Conosco.png">
            

        </div>

        <div class="d-flex flex-column align-items-center" id="Convidados">

            <img src="/img/Convidados Ícone.png">
            <p>Convidados</p>
            <p class="sub">Conheça os participantes do evento!</p>

        </div>
        
    </div>
    <div class="row d-flex justify-content-center mb-5">

        
        <img src="/img/picwish.png" class="pics img-fluid">

    </div>
    <div class="d-flex container-fluid flex-column" id="participantes">

        <div class="d-flex text-center justify-content-between col-11 mt-5" id="divDescricao">

            <div class="d-flex col flex-column descricao">
                <p class="nome">Rafael Figueiredo</p>
                <p>Secretário de Inovação do Recife/PE</p>

            </div>
            <div class="d-flex col flex-column descricao">
                <p class="nome">Raphael Marroquim</p>
                <p>Secretário de Comunicação do Recife/PE</p>
            </div>
            <div class="d-flex col flex-column descricao">
                <p class="nome">Robson Galiano</p>
                <p>Diretor Comercial do Grupo Microtarget de Comunicação</p>
            </div>
            <div class="d-flex col flex-column descricao">
                <p class="nome">Tathiana Adam</p>
                <p>Business Development Manager Google</p>
            </div>
            <div class="d-flex col flex-column descricao">
                <p class="nome">Enio Vergueiro</p>
                <p>Diretor Comercial do Grupo Bandeirantes e Ex-presidente da APP - Associação dos Profissionais de Propaganda</p>
            </div>
            <div class="d-flex col flex-column descricao">
                <p class="nome">Murilo Gonçalves</p>
                <p>Diretor de Comunicação na Preitura Municipal de Santos</p>
            </div>
            <div class="d-flex col flex-column descricao">
                <p class="nome">Wandick Donett</p>
                <p>Jornalista e Moderador</p>
            </div>
            
            
        </div>

        <div class="row d-flex justify-content-center mt-5" id="apoio">
            <p> Apoio </p>
        </div>

        <div class="d-flex justify-content-center">
            <img src="/img/Apoiadores.png">
        </div>
        
        <div class="row w-100 mt-5" id="faixa"></div>
        <div class="footer d-flex align-items-center mt-auto py-3 px-5">Projeto Transformação Digital - Todos os Direitos Reservados</div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>