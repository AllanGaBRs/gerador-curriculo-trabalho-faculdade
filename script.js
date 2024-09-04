
function calcularIdade() {
    // Pegando a data de nascimento
    var dataNascimento = document.getElementById("data-nascimento").value;
    if (dataNascimento) {
        var dataNasc = new Date(dataNascimento);
        var hoje = new Date();

        // calculo da idade 
        var idade = hoje.getFullYear() - dataNasc.getFullYear();
        var mes = hoje.getMonth() - dataNasc.getMonth();

        // Verificando se o usuario fez aniversario ainda este ano
        if (mes < 0 || (mes === 0 && hoje.getDate() < dataNasc.getDate())) {
            idade--;
        }

        
        document.getElementById("idade").value = idade;
    }
}

// Adicionar Formação
function adicionarFormacao() {
    var container = $('#formacao-container');
    var inputCount = container.find('input').length + 1;
    var newInput = $('<input>')
        .attr('type', 'text')
        .attr('name', 'formacao[]')
        .attr('placeholder', 'Digite aqui')
        .addClass('input_formacao');
    container.append(newInput);
}

// Remover Formação
function removerFormacao() {
    var container = $('#formacao-container');
    if (container.find('input').length > 1) {
        container.find('input').last().remove();
    }
}

// Adicionar Experiência
function adicionarExperiencia() {
    var container = $('#experiencia_container');
    var inputCount = container.find('input').length + 1;
    var newInput = $('<input>')
        .attr('type', 'text')
        .attr('name', 'experiencia[]')
        .attr('placeholder', 'Digite Aqui');
    container.append(newInput);
}

// Remover Experiência
function removerExperiencia() {
    var container = $('#experiencia_container');
    if (container.find('input').length > 1) {
        container.find('input').last().remove();
    }
}
