<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devhelp</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="config.js">
</head>

<body>
    <div id="banner">
        <img src="imgs/logo.png" alt="logo" class="log_img"></a>
        <nav class="navbar">
            <a class="link" href="index.php">Início</a>
            <a class="link" href="aulas.php">Aulas</a>
            <a class="link" href="materiais.php">Conteúdos</a>
            <a class="link" href="exerc.php">Quiz</a>
            <a class="usu-button" href="pag_user.php">Usuário</a>
            <div class="containerbutton-login"><a href="log.php" class="button-login"> Entrar</a>
            </div>
        </nav>
    </div>

    <div class="noticia-container">
        <div class="noticia ativa">
            <h2>Lançamento do Java 23:</h2>
            <p> A Oracle lançou a versão Java 23, trazendo uma série de
                melhorias e aprimoramentos na linguagem, runtime, bibliotecas e ferramentas do JDK. Entre as novidades
                estão novos recursos de linguagem como a introdução de tipos primitivos em padrões e aprimoramentos no
                switch e instanceof, facilitando a produtividade dos desenvolvedores. Também há atualizações nas
                bibliotecas, como a API de vetores, que melhora o desempenho, e a API de concorrência estruturada, que
                simplifica a programação concorrente. Java 23 também inclui melhorias de desempenho e ferramentas
                aprimoradas, como a capacidade de escrever comentários de documentação com Markdown</p>
        </div>
        <div class="noticia">
            <h2>OpenAI o1-preview:</h2>
            <p>A OpenAI lançou uma nova série de modelos de IA chamados OpenAI o1,
                focados em melhorar o raciocínio para solucionar problemas complexos. Estes modelos são projetados para
                pensar de forma mais aprofundada antes de responder, sendo especialmente eficazes em tarefas complexas
                em ciência, programação e matemática. O OpenAI o1 já está disponível no ChatGPT e na API da OpenAI, e
                inclui um modelo mais rápido e econômico chamado o1-mini, projetado para geração e depuração de código
            </p>
        </div>
        <div class="noticia">
            <h2>Inteligência Artificial em Raciocínio Complexo:</h2>
            <p>A OpenAI anunciou avanços
                significativos em modelos de IA que podem resolver problemas de raciocínio complexo. Em testes, esses
                novos modelos superaram as versões anteriores em tarefas desafiadoras em física, química, biologia e
                matemática, mostrando um grande potencial para auxiliar em áreas como pesquisa médica e desenvolvimento
                de software. Essa série de modelos, começando com o OpenAI o1-preview, é um avanço na capacidade de IA
                para raciocinar sobre tarefas complexas, oferecendo uma nova ferramenta para desenvolvedores e
                pesquisadores​</p>
        </div>

    </div>
    <div class="button_novidade">
        <button class="not-button" id="btn-esquerda" onclick="navegar(-1)" disabled>Anterior</button>
        <button class="not-button" id="btn-direita" onclick="navegar(1)">Próxima</button>
    </div>


    <svg class="svgcolor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#960C9D" fill-opacity="1"
            d="M0,256L21.8,245.3C43.6,235,87,213,131,176C174.5,139,218,85,262,74.7C305.5,64,349,96,393,144C436.4,192,480,256,524,240C567.3,224,611,128,655,80C698.2,32,742,32,785,58.7C829.1,85,873,139,916,149.3C960,160,1004,128,1047,101.3C1090.9,75,1135,53,1178,85.3C1221.8,117,1265,203,1309,202.7C1352.7,203,1396,117,1418,74.7L1440,32L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z">
        </path>
    </svg>
    <div class="html">
        <h1>HTML</h1>
        <p>A linguagem que constrói a estrutura das suas páginas web </p>
        <div>
            <a class="button_curso" href="aulas.php#secao9">Assistir aulas</a>
            <a class="button_curso" href="exerc.php">Fazer exercícios</a>
        </div>
        <div id="layout">
            <h1> EXEMPLO DE HTML:</h1>

            <p class="one">
                <span class="cinza">&lt;</span>!DOCTYPE <span style="color: rgb(252, 242, 168);">html</span><span
                    class="cinza">&gt;</span> <br>
                <span class="cinza">&lt;</span>html<span class="cinza">&gt;</span> <br>
                <span class="cinza">&lt;</span>head<span class="cinza">&gt;</span> <br>
                <span class="cinza1">&lt;</span>title<span class="cinza">&gt;</span><span class="txex">Página
                    HTML</span><span class="cinza">&lt;</span>/title<span class="cinza">&gt;</span> <br>
                <span class="cinza">&lt;</span>/head<span class="cinza">&gt;</span> <br>
                <span class="cinza">&lt;</span>body<span class="cinza">&gt;</span> <br><br>

                <span class="cinza1">&lt;</span>h1<span class="cinza">&gt;</span><span class="txex">O terrível
                    mundo do Hello Word</span><span class="cinza">&lt;</span>/h1<span class="cinza">&gt;</span> <br>
                <span class="cinza1">&lt;</span>p<span class="cinza">&gt;</span><span class="txex">Aqui é o
                    parágrafo</span><span class="cinza">&lt;</span>/p<span class="cinza">&gt;</span> <br><br>

                <span class="cinza">&lt;</span>/body<span class="cinza">&gt;</span> <br>
                <span class="cinza">&lt;</span>/html<span class="cinza">&gt;</span>
            </p> <br>
            <a class="button_teste" href="EXhtml.html" target="_blank">Teste agora</a>
        </div>
    </div>

    <div class="html_c">
        <h1>CSS</h1>
        <p>A linguagem que dá estilo as suas páginas</p>

        <div>
            <a class="button_curso" href="aulas.php#secao9">Assistir aulas</a>
            <a class="button_curso" href="exerc.php">Fazer exercícios</a>
        </div>

        <div id="layout">
            <h1> EXEMPLO DE CSS:</h1>

            <p class="one">
                body <span class="txex">{</span><br>
                <span class="azul">background-color</span><span class="txex">:</span> <span
                    class="amarelo">lightblue</span><span class="txex">;</span><br>
                <span class="txex">}</span><br><br>

                h1 <span class="txex">{</span><br>
                <span class="azul">color</span><span class="txex">:</span> <span class="amarelo">white</span><span
                    class="txex">;</span><br>
                <span class="azul">text-alight</span><span class="txex">:</span> <span
                    class="amarelo">center</span><span class="txex">;</span><br>
                <span class="txex">}</span><br><br>

                p <span class="txex">{</span><br>
                <span class="azul">font-family</span><span class="txex">:</span> <span
                    class="amarelo">verdana</span><span class="txex">;</span><br>
                <span class="txex">}</span>
            </p> <br>
            <a class="button_teste" href="EXcss.html" target="_blank">Teste agora</a>
        </div>
    </div>
    </div>

    <div class="html_j">
        <h1>JavaScript</h1>
        <p>A linguagem que deixa suas páginas dinâmica </p>
        <div>
            <a class="button_curso" href="aulas.php#secao2">Assistir aulas</a>
            <a class="button_curso" href="exerc.php">Fazer exercícios</a>
        </div>
        <div id="layout">
            <h1> EXEMPLO DE JS:</h1>

            <p class="one">
                document<span class="txex">.</span><span class="azul1">getElementById</span><span class="txex">(</span><span class="amarelo">'meuBotao'</span><span class="txex">).</span><span class="azul1">addEventListener</span><span class="txex">(</span><span class="amarelo">'click'</span><span class="txex">,</span> function<span class="txex">() {</span> 
                    <span class="azul" class="space">alert</span><span class="txex">(</span><span class="amarelo">'Botão clicado!'</span><span class="txex">); <br>});</span>
               
            </p> <br>
            <a class="button_teste" href="EXjs.html" target="_blank">Teste agora</a>
        </div>
    </div>

    <div class="html_c">
        <h1>Portugol</h1>
        <p>A linguagem utilizada para aprender</p>
        <div>
            <a class="button_curso" href="aulas.php">Assistir aulas</a>
            <a class="button_curso" href="exerc.php">Fazer exercícios</a>
        </div>
        <div id="layout">
            <h1> EXEMPLO DE PORTUGOL:</h1>

            <p class="one">
                algoritmo "SomaSimples"<br>
                <span class="amarelo">variável</span><br>
                <span class="text-port"><span class="txex">
                    <span class="azul">  numero1, numero2, soma:</span> real<br><br>
                
                <span class="amarelo">início</span><br>
            <span class="text-port">
                <span class="azul">escreva</span>("Digite o primeiro número: ")<br>
                <span class="azul">leia</span>(numero1)<br>
                <span class="azul">escreva</span>("Digite o segundo número: ")<br>
                <span class="azul">leia</span>(numero1)<br>
                <span class="azul">soma</span> := numero1 + numero2<br>
                <span class="azul">escreva</span>("A soma é: ", soma)<br>
            </span>
            <span class="amarelo">fimalgoritimo</span>
            </p> <br>
            <a class="button_teste" href="https://www.programiz.com/html/online-compiler/" target="_blank">Teste agora</a>
        </div>
    </div>
    </div>

    <svg class="svgcolor_r" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#586571" fill-opacity="1"
            d="M0,256L21.8,245.3C43.6,235,87,213,131,176C174.5,139,218,85,262,74.7C305.5,64,349,96,393,144C436.4,192,480,256,524,240C567.3,224,611,128,655,80C698.2,32,742,32,785,58.7C829.1,85,873,139,916,149.3C960,160,1004,128,1047,101.3C1090.9,75,1135,53,1178,85.3C1221.8,117,1265,203,1309,202.7C1352.7,203,1396,117,1418,74.7L1440,32L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z">
        </path>
    </svg>



    <div id="conteiner">
        <div class="item"><a class="cx1" href="aulas.html#secao3">C</a></div>
        <div class="item"><a class="cx1" href="aulas.html#secao5">C#</a></div>
        <div class="item"><a class="cx1" href="aulas.html#secao4">C++</a></div>
        <div class="item"><a class="cx1" href="aulas.html#secao6">Python</a></div>
        <div class="item"><a class="cx1" href="aulas.html#secao8">PHP</a></div>
        <div class="item"><a class="cx1" href="aulas.html#secao1">Java</a></div>
        <div class="item"><a class="cx2">SQL</a></div>
        <div class="item"><a class="cx2">MySQL</a></div>
        <div class="item"><a class="cx2">Oracle</a></div>
    </div>

    <script src="config.js"></script>

</body>

</html>