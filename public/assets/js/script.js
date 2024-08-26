// Rolagem suave para os links de navegação
document.querySelectorAll('a.nav-link').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        const target = this.getAttribute('href');

        if (target.startsWith('#') && target !== '#login') {
            e.preventDefault();
            document.querySelector(target).scrollIntoView({
                behavior: 'smooth'
            });
        }
    });
});

// Abertura do modal de login/cadastro
document.addEventListener('DOMContentLoaded', function() {
    const loginLink = document.querySelector('a[href="#login"]');
    const modalLogin = new bootstrap.Modal(document.getElementById('modalLogin'));

    if (loginLink) {
        loginLink.addEventListener('click', function(event) {
            event.preventDefault(); // Evita que o link recarregue a página
            modalLogin.show(); // Abre o modal
        });
    }
});

// Função de cadastro em desenvolvimento (apenas exemplo)
document.getElementById("openRegister").addEventListener("click", function() {
    alert("Função de cadastro em desenvolvimento!"); // Apenas como exemplo.
});

// Validação do modal de login/cadastro
document.getElementById("loginForm").addEventListener("submit", function(event) {
    var email = document.getElementById("loginEmail").value;
    var password = document.getElementById("loginPassword").value;

    if (email === "" || password === "") {
        event.preventDefault(); // Impede o envio do formulário
        alert("Preencha todos os campos!");
    }
});
