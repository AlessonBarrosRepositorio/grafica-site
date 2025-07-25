<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfica Rápida</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/midleS.css">
    
    <link id="cardCSS" rel="stylesheet" href="../style/galeriaM.css">
    
    <link id="cardCSS" rel="stylesheet" href="../../reset.css">
    
    <link id="cardCSS" rel="stylesheet" href="../style/btns.css">
    <script src="../../galeria.js" defer></script>
    <link id="cardCSS" rel="stylesheet" href="../style/btnMobile/btnOpcoes.css">
    <script src="../scripts/btnOpcoes.js" defer></script>
        <script>
         
         let orientacaoAtual = window.innerWidth > window.innerHeight ? "paisagem" : "retrato";

        function verificarErecarregarPagina() {
            // Obtém a largura e a altura atuais da janela de visualização.
            const larguraJanela = window.innerWidth;
            const alturaJanela = window.innerHeight;

            // Determina a nova orientação com base nas dimensões atuais da janela.
            const novaOrientacao = larguraJanela > alturaJanela ? "paisagem" : "retrato";

            // Compara a nova orientação com a orientação previamente armazenada.
            if (novaOrientacao !== orientacaoAtual) {
                // Se a orientação mudou, atualiza a variável global...
                orientacaoAtual = novaOrientacao;
                // ...e recarrega a página.
                location.reload();
                // Não é necessário continuar executando código após o reload, então podemos retornar.
                return;
            }
        }

        // Adiciona um "ouvinte" ao evento 'resize' (redimensionamento da janela).
        // Este evento é disparado quando a tela é girada em dispositivos móveis.
        window.addEventListener('resize', verificarErecarregarPagina);
        //------------------------------------------------------------------------------------------------
        // Função para verificar se o dispositivo é móvel
        function isMobileDevice() {
            return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
            }

            // Verificar e redirecionar se for dispositivo móvel
            if (isMobileDevice()) {
                // Verificar se já não estamos na página móvel para evitar loop
                if (!window.location.pathname.includes('/m/')) {
                    window.location.href = './m/index.php';
                }
            }
    </script>    
    
</head>
<body>

    <div class="top">
        <div class="topArea">
            <div class="logo">
                <div class="logoArea">
                    <a href="../index.php">
                        <img src="../../grafica.png" alt="logo da Gráfica">
                    </a>
                </div>
            </div>
                <button id="show-or-hide" class="butaodeOpcoes noneDesk">
                    <div class="areaTIRA">
                        <div class="tira"></div>
                        <div class="tira"></div>
                        <div class="tira"></div>
                    </div>
                    <div id="Opcoes" class="opcoes">
                        <nav class="nave absolute  centro 02">
                            <div class="notices">
                        <div class="noticesArea">
                            <div id="btnWhats" class="btnNotices">
                                <a href="https://wa.me/+5521978841430" target="_blank">
                                    <div class="areaLink">
                                        <b>21 9 7884 1430</b>
                                    </div>                                
                                </a>
                            </div>
                            <div id="btnInstagran" class="btnNotices">
                                <a href="https://www.instagram.com/graficarapidaprofissional/" target="_blank">
                                    <div class="areaLink">
                                        <b>@graficarapidaprofissional</b>
                                    </div>                               
                                </a>
                            </div>
                            <div id="btnLocalizacao" class="btnNotices">
                                <a href="https://maps.app.goo.gl/hdbdAhSQeAzbFqcU9" target="_blank">
                                    <div class="areaLink">
                                        <b>Localização</b>
                                    </div>                               
                                </a>
                            </div>
                            <div id="btnAvalie" class="btnNotices">
                                <a href="https://g.page/r/CSmhGf5IMerlEBM/review" target="_blank">
                                    <div class="areaLink">
                                        <b>Nos Avalie</b>
                                    </div>
                                </a>
                            </div>
                            <div id="btnServicos" class="btnNotices" >
                                <a href="../index.php">
                                    <div class="areaLink">
                                        <b>Página Inicial</b>
                                    </div>                               
                                </a>
                            </div>
                        </div>
                    </div>               
                        </nav>
                    </div>
            </button>
            <div class="btn-whatsapp">
                <div class="areaBtn-whatsapp">
                    <a href="https://wa.me/+5521978841430">
                        <div class="areaImagemA">
                            <img src="../../wb.png" alt="imagem whatsapp" srcset="">
                        </div>                        
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="midle">
        <a style="z-index:9999; position:absolute; top:5%; left:10%; width:20px; height:20px;" href="../index.php"><img src="../../midia/seta.png" alt=""></a>
        <div class="editavel">
            <div class="areaEditavel">
                <div class="conteudo">
                    <div class="areaConteudo">
                        <main class="selecao-de-personagens">
                            <section class="personagens bottom02area somb">
                                <h1 class="titulo">Galeria de Trabalhos</h1>
                                <ul class="lista-de-personagens">
                                    <li class="personagem selecionado" id="imagem01" data-name="Tela de Janela" data-description="tela de proteção janela com abertura dupla">
                                        <img src="../../midia/fotoPequenaFolhetoGlossy.png" alt="tela de proteção janela com abertura dupla">
                                    </li>
                                    <li class="personagem" id="imagem02" data-name="Tela de Janela com abertura" data-description="Tela de Janela com abertura">
                                        <img src="https://live.staticflickr.com/65535/54072766537_ff17ec2e7e_t.jpg" alt="Tela de Janela com abertura">
                                    </li>
                                    <li class="personagem" id="imagem03" data-name="tela grande para prédios" data-description="tela grande para prédios">
                                        <img src="https://live.staticflickr.com/65535/54074104115_ce88bde34c_t.jpg" alt="tela grande para prédios">
                                    </li> 
                                    <li class="personagem" id="imagem04" data-name="tela para por ta de áreas extenas" data-description="tela para por ta de áreas extenas">
                                        <img src="https://live.staticflickr.com/65535/54072766552_c6b19d9e01_t.jpg" alt="tela para por ta de áreas extenas">
                                    </li> 
                                    <li class="personagem" id="imagem05" data-name="telas de proteção em escadas" data-description="telas de proteção em escadas">
                                        <img src="https://live.staticflickr.com/65535/54072766567_f6ff325d63_t.jpg" alt="telas de proteção em escadas">
                                    </li>
                                    <li class="personagem" id="imagem06" data-name="telas de proteção em janelas grandes" data-description="telas de proteção em janelas grandes">
                                        <img src="https://live.staticflickr.com/65535/54164163880_f6be7993ce_o.png" alt="telas de proteção em janelas grandes">
                                    </li>
                                    <li class="personagem" id="imagem07" data-name="telas de proteção em áreas externas e jardins" data-description="telas de proteção em áreas externas e jardins">
                                        <img src="https://live.staticflickr.com/65535/54164163895_5e7442804e_o.png" alt="telas de proteção em áreas externas e jardins">
                                    </li> 
                                    <li class="personagem" id="imagem08" data-name="telas de proteção em portas personalizadas" data-description="telas de proteção em portas personalizadas">
                                        <img src="https://live.staticflickr.com/65535/54163983728_308a4377d8_o.png" alt="telas de proteção em portas personalizadas">
                                    </li> 
                                    <li class="personagem" id="imagem09" data-name="telas de proteção em janelas planejadas" data-description="telas de proteção em janelas planejadas">
                                        <img src="https://live.staticflickr.com/65535/54162831632_ec193ba792_o.png" alt="telas de proteção em janelas planejadas">
                                    </li>                            
                                </ul>
                            </section>
                            <section class="personagem-selecionado top02area">
                                <img class="personagem-grande" src="../../midia/fotoGrandeFolhetoGlossy.png" alt="tela de proteção janela com abertura dupla">
                                <div class="informacoes-personagem">
                                    <h2 class="nome-personagem" id="nome-personagem">tela de proteção janela com abertura dupla</h2>
                                    <p class="descricao-personagem" id="descricao-personagem">tela de proteção janela com abertura dupla</p>
                                </div>
                            </section>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom"></div>
</body>
</html>
