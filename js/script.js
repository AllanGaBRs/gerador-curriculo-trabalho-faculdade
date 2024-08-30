
function calcularIdade() {
    // Pegando a data de nascimento
    var dataNascimento = document.getElementById("data-nascimento").value;
    if (dataNascimento) {
        var dataNasc = new Date(dataNascimento);
        var hoje = new Date();

        // Calculando 
        var idade = hoje.getFullYear() - dataNasc.getFullYear();
        var mes = hoje.getMonth() - dataNasc.getMonth();

        // Verificando se o usuario fez aniversario ainda este ano
        if (mes < 0 || (mes === 0 && hoje.getDate() < dataNasc.getDate())) {
            idade--;
        }

        // Exibindo
        document.getElementById("idade").value = idade;
    }
}
let referenciaCount = 1;

function adicionarFormacao() {
    referenciaCount++;
    const container = document.getElementById("formacao-container");
    
    // Cria o novo input
    const newInput = document.createElement("input");
    newInput.type = "text";
    newInput.className = "input_referencia";
    newInput.id = `referencia${referenciaCount}`;
    newInput.placeholder = "Digite aqui";
    
    container.appendChild(newInput);
    
    newInput.focus();
}


function removerFormacao() {
    if (referenciaCount > 1) { // Permite a remoção até o segundo campo
        const container = document.getElementById("formacao-container");
        const lastInput = container.querySelector('input:last-of-type'); // Seleciona o último input
        container.removeChild(lastInput);
        referenciaCount--;
    } else {
        alert("Não é possível remover todas as referências.");
    }
}

// mema coisa da função de cima, adicionar mais um campo para digitar so que agora em experiencia proficional
let experienciaCount = 1;

function adicionarExperiencia() {
    experienciaCount++;
    const container = document.getElementById("experiencia_container");
    
    // Cria o novo input
    const newInput = document.createElement("input");
    newInput.type = "text";
    newInput.className = "input_experiencia";
    newInput.id = `experiencia${experienciaCount}`;
    newInput.placeholder = "Digite aqui";
    newInput.required = true;
    
    container.appendChild(newInput);
    
    newInput.focus();
}

function removerExperiencia() {
    if (experienciaCount > 1) { // Permite a remoção até o segundo campo
        const container = document.getElementById("experiencia_container");
        const lastInput = container.querySelector('input:last-of-type'); // Seleciona o último input
        container.removeChild(lastInput);
        experienciaCount--;
    } else {
        alert("Não é possível remover todas as experiências.");
    }
}

