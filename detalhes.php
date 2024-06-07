<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="assets/js/script_slide.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Detalhes</title>
</head>
<body style="width: 100%; heigth: 100vh; justyfy-content: center">
    <div class="container-detalhes">
        <div class="logo">
            <img src="assets/img/logo.jpeg" alt="" width="200px">
            <a href="#" onclick="location.replace(document.referrer)"><button>Voltar</button></a>
        </div>
        <h2><b>NOME DO EQUIPAMENTO</b></h2> 
        <div class="tr"></div>
        <h4>Ana Luiza Becker</h4>
        <h2><b>INFORMAÇÕES</b></h2>
        <div class="tr"></div>
        <h4><b>Modelo:</b> A12</h4>
        <h4><b>Marca:</b> Analuzia</h4>
        <h4><b>Tipo:</b> gay</h4>
        <h4><b>Descrição:</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime rerum ex blanditiis veritatis placeat beatae autem corrupti nisi explicabo, amet tempore soluta sit suscipit ducimus ratione facilis est enim sunt!</h4>
        <h2><b>LABORATÓRIO DO EQUIPAMENTO</b></h2>
        <div class="tr"></div>
        <h4>Laboratorio Ana Luiza Becker</h4>
        <h2><b>FORMAS DE CONTATO</b></h2>
        <div class="tr"></div>
        <h4><b>Telefone:</b> 88 981659969</h4>
        <h4><b>Email:</b> anacu@gmail.com</h4>
        <h4><b>Web Site:</b> www.gay.com.br</h4>
        <h4><b>Responsável:</b> Ana Luzia</h4>
        <h2><b>ENDEREÇO</b></h2>
        <div class="tr"></div>
        <h4><b>CEP:</b> 657000-85</h4>
        <h4><b>Cidade:</b> Coitadolandia</h4>
        <h4><b>Rua:</b> Av. cucu cucu</h4>
        <h4><b>Bairro:</b> Cento </h4>
        <h4><b></b></h4>
    </div>
    <!-- Footer -->
    <?php include "../includes_padroes/footer.php"?>

    <style>
        .container-detalhes{
            margin: 3.5rem;
        }

        .container-detalhes h2,h4,h6{
            padding: 0;
        }

        .container-detalhes h2{
            margin-top: 3rem;
        }

        .container-detalhes b{
            color: rgb(16, 129, 140);
        }

        .container-detalhes .tr{
            width: 100%;
            height: 2px;
            background-color: black;
        }
        
        .container-detalhes button{
            text-decoration: none;
            color: #ffffff;
            background-color: rgb(17, 149, 161);
            padding: 0.8rem 1rem;
            border-radius: 30px;
            border: solid white 2px;
        }
        
        .container-detalhes .logo{
            justify-content: space-between;
        }

        @media screen and (min-width: 1000px){
            .container-detalhes{
                margin-left: 10rem;
                margin-right: 10rem;
        }
        }

    </style>
    <script>
        function voltarPaginaAnterior() {
            location.replace(document.referrer);
        }   
        document.getElementById("retornar").addEventListener("click", voltarPaginaAnterior);
    </script>
</body>
</html>
