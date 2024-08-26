<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <img src="assets/img/logo.png" alt="Logo" style="height: 50px; margin-right: 10px;">
                <h5 class="modal-title" id="modalLoginLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="scripts/processoLogin.php" method="post">
                    <div class="form-group">
                        <label for="loginEmail">Email</label>
                        <input type="email" class="form-control" id="loginEmail" name="email" placeholder="Digite seu email">
                    </div>
                    <div class="form-group">
                        <label for="loginPassword">Senha</label>
                        <input type="password" class="form-control" id="loginPassword" name="password" placeholder="Digite sua senha">
                    </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
                <p class="mt-3">Não tem uma conta? <a href="register.php">Cadastre-se aqui</a></p>
            </div>
        </div>
    </div>
</div>
