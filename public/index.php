<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema de Agendamento de Lavagem de Automóveis">
    <meta name="author" content="Bruno">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Garage Lavacar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg">
    <header>
        <nav class="navbar fixed-top navbar-expand-lg">
            <a class="navbar-brand" href="index.php"><img src="assets/img/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contato</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#modalLogin">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="hero">
        <h1 class="silver">Agende a lavagem do seu carro agora!</h1>
    </section>

    <section id="services" class="container mt-5">
        <h2 class="text-center">Nossos Serviços</h2>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="img/basic-wash.jpg" class="card-img-top" alt="Lavagem Básica">
                    <div class="card-body">
                        <h5 class="card-title">Lavagem Básica</h5>
                        <p class="card-text">Serviço rápido e eficiente para manter seu carro limpo no dia a dia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="img/premium-wash.jpg" class="card-img-top" alt="Lavagem Premium">
                    <div class="card-body">
                        <h5 class="card-title">Lavagem Premium</h5>
                        <p class="card-text">Um tratamento completo para o seu veículo, com produtos de alta qualidade.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="img/interior-wash.jpg" class="card-img-top" alt="Lavagem Interior">
                    <div class="card-body">
                        <h5 class="card-title">Lavagem Interior</h5>
                        <p class="card-text">Detalhamento interno para deixar o interior do seu carro impecável.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="container mt-5">
        <h2 class="text-center">Sobre Nós</h2>
        <p class="text-center">A Lavagem Express é especializada em oferecer serviços de lavagem automotiva de alta qualidade. Estamos comprometidos com a satisfação dos nossos clientes, oferecendo um atendimento rápido e eficiente.</p>
    </section>
    <section id="contact" class="container mt-5">
        <h2 class="text-center">Contato</h2>
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" id="name" placeholder="Seu nome">
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Seu email">
                </div>
            </div>
            <div class="form-group">
                <label for="message">Mensagem</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </section>
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Lavagem Express. Todos os direitos reservados.</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>
</body>
<?php include 'modalLogin.php'; ?>

</html>