<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráfica Rápida</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="btns.css">
    <link rel="stylesheet" href="midle.css">
    <link id="cardCSS" rel="stylesheet" href="./card.css">

    <script src="./cardScript/cardsCadastrados.js" defer></script>
    <script src="./cardScript/btnCardNav.js" defer></script>
    <script src="./cardScript/multiplicarSlider.js" defer></script>
</head>
<body>
    <div class="top">
        <div class="topArea">
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
            <div class="areaLeft"></div>
        </div>
        <div class="editavel">
            <div class="areaEditavel">
                <div class="slide 02">
                    <div class="areaSlide" id="areaSlide">              
                    </div>
                    <div class="areaEsfumadaEsquerda"></div>
                    <div class="areaEsfumadaDireita"></div>
                    <button class="scroll-btn scroll-left-btn" id="scrollLeftBtn">&lt;</button>
                    <button class="scroll-btn scroll-right-btn" id="scrollRightBtn">&gt;</button>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom"></div>
</body>
</html>