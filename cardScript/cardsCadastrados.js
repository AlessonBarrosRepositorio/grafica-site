
document.addEventListener('DOMContentLoaded', function() {
    cards();

});



function cards() {
    var containerEventos = document.getElementById('areaSlide');
    if (containerEventos) {
        containerEventos.innerHTML = `
  
                    <div class="carta" id="carta01">
                        <img src="https://live.staticflickr.com/65535/55158368029_fb4b3bd611_z.jpg" alt="Mão segurando panfleto" class="imgCarta">
                        <div class="h2Carta">
                            <h2>
                                Serviços Gráficos <br>de Alta Qualidade
                            </h2>
                        </div>
                    </div>
                    <div class="carta">
                        <img src="https://live.staticflickr.com/65535/55158331374_5e917ce4ac_z.jpg" alt="imagem de um quarto com uma cama e mosqueteiro" class="imgCarta">
                        <div class="h2Carta">
                            <h2>
                                Impessões com Alta<br>Fidelidade
                            </h2>
                        </div>

                    </div>
                    <div class="carta">
                        <img src="https://live.staticflickr.com/65535/55158301714_db1136f1ff_z.jpg" alt="imagem de uma quadra de esportes com grade de proteção verde" class="imgCarta">
                        <div class="h2Carta">
                            <h2>
                                Adesivos Grandes <br> e Pequenos
                            </h2>
                        </div>
                    </div>
                    <div class="carta">
                        <img src="https://live.staticflickr.com/65535/55158051256_e2b0375611_z.jpg" alt="imagem de um especialista em telas e rede conversando com seu subordinado" class="imgCarta">
                        <div class="h2Carta">
                            <h2>
                                Adesivos em conotrono
                            </h2>
                        </div>

                    </div>
                    <div class="carta">
                        <img src="https://live.staticflickr.com/65535/55158187438_7ab07ecbfd_z.jpg" alt="imagem de duas mãos apertadas pois estão fazendo um negocio confiavel sobre telas e redes de proteção" class="imgCarta">
                        <div class="h2Carta">
                            <h2>
                                Cartões de visitas
                            </h2>
                        </div>

                    </div>
                                        <div class="carta">
                        <img src="https://live.staticflickr.com/65535/55156783683_a1086423d5_z.jpg" alt="imagem de duas mãos apertadas pois estão fazendo um negocio confiavel sobre telas e redes de proteção" class="imgCarta">
                        <div class="h2Carta">
                            <h2>
                                Banners
                            </h2>
                        </div>

                    </div>
                                        <div class="carta">
                        <img src="https://live.staticflickr.com/65535/55158527510_8095e47ec3_z.jpg" alt="imagem de duas mãos apertadas pois estão fazendo um negocio confiavel sobre telas e redes de proteção" class="imgCarta">
                        <div class="h2Carta">
                            <h2>
                                Personalizados
                            </h2>
                        </div>

                    </div>

                    <div class="carta">
                        <a target="_blank" class="imgCarta"title="Esse link te enviará para a localização no google maps que lhe mostrará esse endereço aqui: Endereço: Rua Barata Ribeiro 692, Lj 21 e 23 - Copacabana" href="https://maps.app.goo.gl/puM3S3Rue1uzUD6t7"><img src="https://live.staticflickr.com/65535/54050149855_15da1fbf53_m.jpg" alt=" esse é a imagem da localização no google maps" class="imgCarta"></a>
                        <div class="h2Carta">
                            <h2>
                                <a target="_blank" class="imgCarta" title="Esse link te enviará para a localização no google maps que lhe mostrará esse endereço aqui: Endereço: Rua Barata Ribeiro 692, Lj 21 e 23 - Copacabana" href="https://maps.app.goo.gl/puM3S3Rue1uzUD6t7">Nos encontre Aqui</a>
                            </h2>
                        </div>
                    </div>
                    <div class="carta instagram-embed">
                       <a  target="_blank" title="esse é o link para a rede social instagram da loja de telas e redes de proteção adelimp" href="https://www.instagram.com/adelimprj?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="imgCarta"><img src="https://live.staticflickr.com/65535/54049024762_23b728ba0b_m.jpg" alt="imagem do perfil da telas e redes de proteção adelimp" class="imgCarta"></a>
                        <div class="h2Carta">
                            <h2>
                                <a  target="_blank" title="esse é o link para a rede social instagram da loja de telas e redes de proteção adelimp"  href="https://www.instagram.com/adelimprj?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==">Nos siga no instagram</a>
                            </h2>
                        </div>
                    </div>
                            
        `;
    }
}