<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículos</title>
    <link rel="stylesheet" href="style.css">
    <style>
        nav {
            background-color: #f8f9fa;
            padding: 10px 0;
            border-bottom: 1px solid #dee2e6;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }

        nav li {
            margin: 0 15px;
        }

        nav a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }

        nav a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="#informacoes-pessoais">Informações Pessoais</a></li>
                <li><a href="#experiencia-secao">Experiência Profissional</a></li>
                <li><a href="#educacao-secao">Formação Acadêmica</a></li>
                <li><a href="#habilidades-secao">Habilidades</a></li>
                <li><a href="#idiomas-secao">Idiomas</a></li>
            </ul>
        </nav>
        <h1>Gerador de Currículos</h1>
        <form id="curriculumForm" action="gerar_pdf.php" method="post">
            <section id="informacoes-pessoais">
                <h2>Informações Pessoais</h2>
                <div class="form-group">
                    <label for="nome">Nome Completo:</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefone" name="telefone">
                </div>
                <div class="form-group">
                    <label for="linkedin">LinkedIn:</label>
                    <input type="url" id="linkedin" name="linkedin">
                </div>
                <div class="form-group">
                    <label for="github">GitHub:</label>
                    <input type="url" id="github" name="github">
                </div>
                <div class="form-group">
                    <label for="resumo">Resumo Profissional:</label>
                    <textarea id="resumo" name="resumo" rows="4"></textarea>
                </div>
            </section>

            <section id="experiencia-secao">
                <h2>Experiência Profissional</h2>
                <div id="experiencias-container">
                    <div class="experiencia-item">
                        <h3>Experiência 1</h3>
                        <div class="form-group">
                            <label for="empresa1">Empresa:</label>
                            <input type="text" name="experiencia[0][empresa]" required>
                        </div>
                        <div class="form-group">
                            <label for="cargo1">Cargo:</label>
                            <input type="text" name="experiencia[0][cargo]" required>
                        </div>
                        <div class="form-group">
                            <label for="periodo1">Período:</label>
                            <input type="text" name="experiencia[0][periodo]">
                        </div>
                        <div class="form-group">
                            <label for="descricao1">Descrição:</label>
                            <textarea name="experiencia[0][descricao]" rows="3"></textarea>
                        </div>
                        <button type="button" class="remover-experiencia">Remover</button>
                    </div>
                </div>
                <button type="button" id="adicionar-experiencia">Adicionar Mais Experiência</button>
            </section>

            <section id="educacao-secao">
                <h2>Formação Acadêmica</h2>
                <div id="educacao-container">
                    <div class="educacao-item">
                        <h3>Formação 1</h3>
                        <div class="form-group">
                            <label for="instituicao1">Instituição:</label>
                            <input type="text" name="educacao[0][instituicao]" required>
                        </div>
                        <div class="form-group">
                            <label for="curso1">Curso:</label>
                            <input type="text" name="educacao[0][curso]" required>
                        </div>
                        <div class="form-group">
                            <label for="periodo_edu1">Período:</label>
                            <input type="text" name="educacao[0][periodo]">
                        </div>
                        <button type="button" class="remover-educacao">Remover</button>
                    </div>
                </div>
                <button type="button" id="adicionar-educacao">Adicionar Mais Formação</button>
            </section>

            <section id="habilidades-secao">
                <h2>Habilidades</h2>
                <div id="habilidades-container">
                    <div class="habilidade-item">
                        <div class="form-group">
                            <label for="habilidade1">Habilidade:</label>
                            <input type="text" name="habilidades[]" required>
                        </div>
                        <button type="button" class="remover-habilidade">Remover</button>
                    </div>
                </div>
                <button type="button" id="adicionar-habilidade">Adicionar Mais Habilidade</button>
            </section>

            <section id="idiomas-secao">
                <h2>Idiomas</h2>
                <div id="idiomas-container">
                    <div class="idioma-item">
                        <div class="form-group">
                            <label for="idioma1">Idioma:</label>
                            <input type="text" name="idiomas[0][idioma]" required>
                        </div>
                        <div class="form-group">
                            <label for="nivel1">Nível:</label>
                            <select name="idiomas[0][nivel]">
                                <option value="Básico">Básico</option>
                                <option value="Intermediário">Intermediário</option>
                                <option value="Avançado">Avançado</option>
                                <option value="Nativo">Nativo</option>
                            </select>
                        </div>
                        <button type="button" class="remover-idioma">Remover</button>
                    </div>
                </div>
                <button type="button" id="adicionar-idioma">Adicionar Mais Idioma</button>
            </section>

            <button type="submit" class="gerar-curriculo">Gerar Currículo (PDF)</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</body>
</html>