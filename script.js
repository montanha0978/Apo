$(document).ready(function() {
    let experienciaCounter = 1;
    let educacaoCounter = 1;
    let habilidadeCounter = 1;
    let idiomaCounter = 1;

    $('#adicionar-experiencia').click(function() {
        experienciaCounter++;
        let novaExperiencia = `
            <div class="experiencia-item">
                <h3>Experiência <span class="math-inline">\{experienciaCounter\}</h3\>
<div class\="form\-group"\>
<label for\="empresa</span>{experienciaCounter}">Empresa:</label>
                    <input type="text" name="experiencia[<span class="math-inline">\{experienciaCounter \- 1\}\]\[empresa\]" required\>
</div\>
<div class\="form\-group"\>
<label for\="cargo</span>{experienciaCounter}">Cargo:</label>
                    <input type="text" name="experiencia[<span class="math-inline">\{experienciaCounter \- 1\}\]\[cargo\]" required\>
</div\>
<div class\="form\-group"\>
<label for\="periodo</span>{experienciaCounter}">Período:</label>
                    <input type="text" name="experiencia[<span class="math-inline">\{experienciaCounter \- 1\}\]\[periodo\]"\>
</div\>
<div class\="form\-group"\>
<label for\="descricao</span>{experienciaCounter}">Descrição:</label>
                    <textarea name="experiencia[${experienciaCounter - 1}][descricao]" rows="3"></textarea>
                </div>
                <button type="button" class="remover-experiencia">Remover</button>
            </div>
        `;
        $('#experiencias-container').append(novaExperiencia);
    });

    $('#experiencias-container').on('click', '.remover-experiencia', function() {
        if ($('#experiencias-container').children('.experiencia-item').length > 1) {
            $(this).closest('.experiencia-item').remove();
        } else {
            alert('Você precisa ter pelo menos uma experiência.');
        }
    });

    $('#adicionar-educacao').click(function() {
        educacaoCounter++;
        let novaEducacao = `
            <div class="educacao-item">
                <h3>Formação <span class="math-inline">\{educacaoCounter\}</h3\>
<div class\="form\-group"\>
<label for\="instituicao</span>{educacaoCounter}">Instituição:</label>
                    <input type="text" name="educacao[<span class="math-inline">\{educacaoCounter \- 1\}\]\[instituicao\]" required\>
</div\>
<div class\="form\-group"\>
<label for\="curso</span>{educacaoCounter}">Curso:</label>
                    <input type="text" name="educacao[<span class="math-inline">\{educacaoCounter \- 1\}\]\[curso\]" required\>
</div\>
<div class\="form\-group"\>
<label for\="periodo\_edu</span>{educacaoCounter}">Período:</label>
                    <input type="text" name="educacao[${educacaoCounter - 1}][periodo]">
                </div>
                <button type="button" class="remover-educacao">Remover</button>
            </div>
        `;
        $('#educacao-container').append(novaEducacao);
    });

    $('#educacao-container').on('click', '.remover-educacao', function() {
        if ($('#educacao-container').children('.educacao-item').length > 1) {
            $(this).closest('.educacao-item').remove();
        } else {
            alert('Você precisa ter pelo menos uma formação.');
        }
    });

    $('#adicionar-habilidade').click(function() {
        habilidadeCounter++;
        let novaHabilidade = `
            <div class="habilidade-item">
                <div class="form-group">
                    <label for="habilidade${habilidadeCounter}">Habilidade:</label>
                    <input type="text" name="habilidades[]" required>
                </div>
                <button type="button" class="remover-habilidade">Remover</button>
            </div>
        `;
        $('#habilidades-container').append(novaHabilidade);
    });

    $('#habilidades-container').on('click', '.remover-habilidade', function() {
        if ($('#habilidades-container').children('.habilidade-item').length > 1) {
            $(this).closest('.habilidade-item').remove();
        } else {
            alert('Você precisa ter pelo menos uma habilidade.');
        }
    });

    $('#adicionar-idioma').click(function() {
        idiomaCounter++;
        let novoIdioma = `
            <div class="idioma-item">
                <div class="form-group">
                    <label for="idioma${idiomaCounter}">Idioma:</label>
                    <input type="text" name="idiomas[${idiomaCounter - 1}][idi