
$(document).ready(function() {
    $('.telefone').mask('(99) 99999-9999');
});


function  validarFormulario() {
    var nome = document.getElementById('nome').value;
    var idade = document.getElementById('idade').value;
    var genero = document.querySelector('input[name="genero"]:checked');
    var interesses = document.querySelectorAll('input[name="interesses"]:checked');
    var mensagem = document.getElementById('mensagem').value;
    var telefone = document.getElementById('telefone').value;

    if (nome.trim() === '' || idade.trim() === '' || genero === null || interesses.length === 0 || mensagem.trim() === '' || telefone.trim() === '') {
        alert('Por favor, preencha todos os campos.');
    } else {
        alert('Formulário enviado com sucesso!');
    }
}

function mudarCor(cor) {
    document.body.style.backgroundColor = cor;
}
