   console.log("script carregou");

const botaoTema = document.querySelector("#botao-tema");
const temaNoite = document.querySelector("#tema-noite");
function darkMode(){
    temaNoite.disabled = !temaNoite.disabled;
    if (temaNoite.disabled) {
    botaoTema.textContent = "🌞";
} else {
    botaoTema.textContent = "🌙";
}

}

botaoTema.addEventListener("click", darkMode);

const formulario = document.querySelector("form");
const aviso = document.querySelector("#aviso");
const campoNome = document.querySelector("#nome");
const campoAssunto = document.querySelector("#assunto");
const campoMensagem = document.querySelector("#mensagem");

function trocarDica() {
    switch (campoAssunto.value) {
        case "duvida":
            campoMensagem.placeholder = "Qual é a sua dúvida?";
            break;
        case "trabalho":
            campoMensagem.placeholder = "Conte a proposta: o que é e o prazo.";
            break;
        default:
            campoMensagem.placeholder = "Escreva a sua mensagem.";
    }
}


function conferirFormulario(evento) {

        evento.preventDefault();

    const nome = campoNome.value.trim();

    if (nome.length < 3 || nome.length > 60) {
        aviso.textContent = "O nome deve ter entre 3 e 60 letras.";
    } else if (temNumero(nome)) {
        aviso.textContent = "O nome não pode conter números.";
    } else if (
        campoAssunto.value === "trabalho" &&
        campoMensagem.value.trim().length < 20
    ) {
        aviso.textContent = "Conte mais sobre a proposta (mínimo 20).";
    } else {
        aviso.textContent = "Tudo certo! Enviando...";
        formulario.submit();
    } 

    }


formulario.addEventListener("submit", conferirFormulario);