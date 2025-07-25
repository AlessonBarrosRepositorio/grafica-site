<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfica Rápida</title>
    <script>
        // Função para verificar se o dispositivo é móvel
        function isMobileDevice() {
            return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
            }

            // Verificar e redirecionar se for dispositivo móvel
            if (isMobileDevice()) {
                // Verificar se já não estamos na página móvel para evitar loop
                if (!window.location.pathname.includes('/m/')) {
                    window.location.href = './m/index.php?reload=true';
                }
            }
    </script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="btns.css">
    <link rel="stylesheet" href="midle.css">
    <link id="cardCSS" rel="stylesheet" href="./card.css">
    
    <link id="cardCSS" rel="stylesheet" href="reset.css">

    <script src="./cardScript/cardsCadastrados.js" defer></script>
    <script src="./cardScript/btnCardNav.js" defer></script>
    <script src="./cardScript/multiplicarSlider.js" defer></script>
</head>
<body>
    <div class="top">
        <div class="topArea">
            <div class="logo">
                <div class="logoArea">
                    <a href="./index.php">
                        <img src="../grafica.png" alt="logo da Gráfica">
                    </a>
                </div>
            </div>
            <div class="btn-whatsapp">
                <div class="areaBtn-whatsapp">
                    <a href="https://wa.me/+5521978841430">
                        <div class="areaImagemA">
                            <img src="./wb.png" alt="imagem whatsapp" srcset="">
                        </div>                        
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="midle">
        <div class="left">
            <div class="areaLeft">
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
                            <a href="./pages/servicos.php">
                                <div class="areaLink">
                                    <b>Produtos e Serviços</b>
                                </div>                               
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="editavel">
            <div class="areaEditavel">
                <div class="conteudo">
                    <div class="areaConteudo">
                        <div class="slide 02">
                            <div class="areaSlide" id="areaSlide">              
                            </div>
                            <div class="areaEsfumadaEsquerda"></div>
                            <div class="areaEsfumadaDireita"></div>
                            <button class="scroll-btn scroll-left-btn" id="scrollLeftBtn"></button>
                            <button class="scroll-btn scroll-right-btn" id="scrollRightBtn"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom"></div>
</body>
</html>