<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pitas Park</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
$logFile = 'access_log.txt'; $ipAddress = $_SERVER['REMOTE_ADDR'];
$accessTime = date('Y-m-d H:i:s'); $logEntry = "IP: $ipAddress - Access Time: $accessTime\n";
$fileHandle = fopen($logFile, 'a'); fwrite($fileHandle, $logEntry);
fclose($fileHandle); ?>
<body>

    <section class="logosec col-s-10 col-10">
        <div class=" col-s-10 col-8">
            <div class="imglogosec">
                <img src="./fotos/logopitas.webp">
            </div>
            <div class="chamadalogosec">
                <img src="./fotos/arterelogio.webp">
            </div>
            <div class="textologosec">
                <p>É A SUA VEZ DE CONQUISTAR O SEU TÃO SONHADO <br>
                    LOTE AQUI NO PITAS PARK!</p>
            </div>
            <div class="imgfinallogosec">
                <img src="./fotos/panoramicacasas.webp">
            </div>
        </div>
    </section>

    <section class="lancamentosec col-s-10">
        <div class=" col-s-12 col-5">
            <div class="textolancamento col-s-12">
                <p>MAIS UM</p>
                <p>LANÇAMENTO</p>
                <img src="./fotos/logopitas.webp" class="logotextolancamento" style="display: block; width: 80%;">
                <img src="./fotos/familia.webp" class="familiatextolancamento">
            </div>
        </div>
    </section>

    
    <section class="quemsomossec col-10 col-s-12">
        <div class="quemsomosdiv col-10 col-s-12">
            <div class="textoquemsomos col-s-12 col-10">
                <h1>QUEM SOMOS</h1>
                <span> "SOMOS A OPORTUNIDADE <br> PARA VOCÊ REALIZAR <br> O SEU SONHO"</span> <br>
            </div>
            <div class="textoquemsomosopt1">
                    <span> Como membro de nossa Associação habitacional voce terá acesso a adesões
                        acessíveis e a uma comunidade unida de pessoas que compartilham valores similares.
                        Além disso, nós valorizamos a qualidade de vida pois nossa comunidade é
                        projetada para oferecer um ambiente saudável e seguro para todos os nossos membros.
                     </span>
            </div>  
            <div class="imgfamiliaquemsomos">
                <img src="./fotos/familiaoportunidade.webp">
            </div>
        </div>
    </section>

    <section class="lotessec">
        <div class="lotesdiv col-8 col-s-12">
            <div class="imglancamento">
                <img src="./fotos/lancamento.webp">
            </div>
            <div class="imglotes">
                <img src="./fotos/LOTES.webp">
            </div>
            <div class=" col-s-140 col-140">
                <p style="text-align: center; color:#babb45; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-weight: 1000;">140mt²</p>
            </div>
        </div>
    </section>

    <section class="oportunidadesec col-8 col-s-10">
        <div class="oportunidadediv col-8 col-s-12">
            <div class="oportunidadetexto col-10 col-s-12">
                <p> OPORTUNIDADE</p>
                <p style="color: orange;">IMPERDIVEL</p>
                <P>AQUI NO PITAS PARK</P>
            </div>
        </div>
    </section>

    <section class="rodoviasec col-10 col-s-10">
        <div class="rodoviadiv col-8 col-s-12">
            <div class="rodoviatexto">
                <div class="rodoviatexto col-8 col-s-12">
                    <p>Próximo a Rodovia</p>
                </div>
                <div class="optimg1">
                    <img src="./fotos/rodovia.webp">
                </div>
            </div>
            <div class="rodoaneldiv col-s-12">
                <div class="rodoviatexto col-8 col-s-12">
                    <p>Próximo ao Rodoanel</p>
                </div>
                    <div class="optimg2">
                        <img src="./fotos/rodoanel.webp">
                    </div>
                </div>
            </div>
    </section>

    <section class="proxsec col-8 col-s-10">
         <div class="proxdiv col-s-12 col-8">
                <div class="prox col-s-12 col-10">
                    <p>O QUE TEMOS NAS PROXIMIDADES</p>
                    <p>Animália Park</p>
                    <img src="./fotos/animalia.webp">
                    <p class="proxtexto">O animalia Park tem atrações radicais, zoológico, teleférico e muita
                        diversão para as crianças e familia toda</p>
                    <p>Thermas da Mata</p>
                    <img src="./fotos/thermas.webp">
                    <p class="proxtexto">Sao 200mil metros quadrados de um verdadeiro paraiso tropical,
                        com diversas árvores nativas, nascente e cachoeira, além de uma
                        grandiosa estrutura de lazer que esta crescendo cada vez mais!
                    </p>
                    <p>Futuro Metrô Cotia <br> (Linha Marrom)</p>
                    <img src="./fotos/metrocotia.webp">
                    <p class="proxtexto">Mais comodidade e agilidade no percurso na ida e volta para o trabalho, 
                        facilidade em acesso para a região central e integração para metrôs de toda grande
                         São Paulo
                    </p>
                </div>
         </div>
    </section>

    <section class="lazersec">
            <div class="lazerdiv col-s-8 col-10">
                <h1>E TEM MAIS!</h1>
                <p>LAZER COMPLETO NA ÁREA INTERNA <br> PARA SUA FAMÍLIA</p>
                <div class="lazerinfo col-10">

                    <span class="lazerid">
                        <img src="./fotos/lazer.webp">
                        <h1> Lazer </h1>
                    </span>

                    <span class="lazerid">
                        <img src="./fotos/playground.webp">
                        <h1> Playground </h1>
                    </span>

                    <span class="lazerid">
                        <img src="./fotos/academialivre.webp">
                    <h1> Academia ao Ar Livre </h1>
                    </span>

                    <span class="lazerid">
                        <img src="./fotos/ciclofaixa.webp">
                        <h1> Ciclovia </h1>
                    </span>
                </div>
            </div>
    </section>

    <section class="adesaosec">
        <div class="adesaodiv col-10 col-s-10">
            <div class="adesaotexto">
                <div><p class="adesaop">Adesão <span>Facilitada</span></p></div>
                <div class="col-s-12"><p class="col-adesao">Aceitamos seu Veiculo como Parte da Adesao</p></div>
                <div>
                    <img src="./fotos/adesaofac1.webp" class="adesaoimg">
                </div>
                <div class="col-s-12 col-adesao">
                    <p class="adesaop">
                        Sem consulta ao SPC ou Serasa <br>
                        Consulte nossos Agentes
                    </p>
                    <a href="https://wa.me/+5511983506830?text=Vim pela Landing Page, gostaria de mais informações" class="Consultarbtn">Clique aqui e Saiba Mais!</a>
                </div>
            </div>
        </div>
    </section>

    <section class="chatbox">  
        <div class="chatbox-container">
            <div class="chatbox-header">
                <span>WhatsApp Chat</span>
                <button id="closeChat">X</button>
            </div>
            <div class="chatbox-body">
                <p>Olá! Como posso ajudar?<br>
                Saiba mais, nos envie uma mensagem</p>
            </div>
            <div class="chatbox-footer">
                <input type="text" id="chatInput" value="Vim pela Landing Page, gostaria de mais informações">
                <button id="sendBtn"><a><img src="./fotos/enviarbtn.webp"></a></button>
            </div>
        </div>
    </section>
        
    <section class="scroll">
        <div id="scrollTopBtn" class="scroll-top-btn">↑</div>
        <div class="whatsapp-icon" id="whatsappIcon">
            <img src="./fotos/wpp.webp" alt="WhatsApp">
        </div>
    </section>
    
    <footer>
        <div class="footer-container footer-left col-s-8 col-10 column">
                    <p>Consulte nossos Agentes para conferir a disponibilidade</p>
        </div>

            <div class="footer-container col-s-8 col-8 footer-center">
                    <div class="photos">
                        <img src="./fotos/logopitas.webp" alt="Logo">
                    </div>
            </div>
            <div class="footer-right col-s-8 col-8">
                <p>Pitas Park, seu lugar é aqui! © 2024 Empresa</p>
            </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>