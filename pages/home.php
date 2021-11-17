<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./css/master.css">
        <link rel="stylesheet" href="./css/nav.css">
        <link rel="stylesheet" href="./css/carousel.css">
        <link rel="stylesheet" href="./css/cards.css">
        <link rel="stylesheet" href="./css/cel_carousel.css">
        <link rel="icon" type="image/png" href="img\others\favincon.png"/>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <title>WC Consult</title>
    </head>
    <body>
        <header id="start">
            <?php include 'comp/nav.php' ?>
            <?php include 'comp/carousel.php' ?>
        </header>
        <div class="toCenter">
            <br><br><br>
        <div class="fechado">
            <div class="line"></div>
            <h5 class="inLine">Bancos parceiros</h5>
            <?php include 'comp/fechado.php' ?>
        </div>
        <div class="whatsFixed" >
            <a href="https://wa.me/message/FRTRUF7GV3BBE1" target="_blank"><i class="fab fa-whatsapp"></i></a>
        </div>
        <div class="bgOthers" id="ofertas">
            <br><br><br><br><br>
            <div class="ofertas">
                <?php include 'comp/ofertas.php' ?>
            </div>
            <br><br><br>


            <div class="feedback">
                
                <div class="bgFeed backFeed">
                <div class="others">
                    <img class="wcTrans" src="img\wc_images\wc_trans.png" alt="">
                    <img class="wcLogo" src="img\others\wc-branco-transp 1.png" alt="">
                </div>
                <div class="congrats">
                        <h3>Prazer de melhor <br>
                        atendê-los e garantir seu <br> sorriso no final da  <br> contratação.</h3>
                    </div>
                </div>
                <div class="whiteCred">
                    <h3>FEEDBACK DE <br>
                    CLIENTES <br> 
                    wHITE <span>CRED</span></h3>
                </div>
                <div class="lineFeed backFeed"></div> 
                
            </div>
            <div class="feedCont">
                        <div class="celBack">
                            <div id="carouselExampleControls" class="carousel cel cell1" data-bs-ride="carousel" data-bs-interval='false'>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img\others\1.JPG" class="d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img\others\2.JPG" class="d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img\others\3.png" class="d-block" alt="...">
                                    </div>
                                </div>
                            </div>
                            <img class="trueCel" src="img\others\cel.png" alt="">
                        </div>
                        <div class="celFront">
                            <img class="trueCel" src="img\others\cel.png" alt="">
                            <div id="carouselExampleControls" class="carousel cel cell2" data-bs-ride="carousel"  data-bs-interval='false' >
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="img\others\2.JPG" class="d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img\others\3.png" class="d-block" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="img\others\1.JPG" class="d-block" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev prev" type="button" data-bs-slide="prev">
                        <i class="fas fa-chevron-left"></i>
                        </button>
                        <button class="carousel-control-next next" type="button"  data-bs-slide="next">
                        <i class="fas fa-chevron-right"></i>
                        </button>
                </div>
                        
               



            <div class="about" id="sobre">
                <div class="line"></div>
                <h5 class="inLine">Sobre nós</h5>
                <p>A WhiteCred não é uma instituição financeira, atuamos como correspondentes bancários a
mais de um ano, prestando serviços de intermediação e atendimento aos clientes e usuários
dos maiores bancos. A atividade do correspondente é regulamentada pelo Banco Central do
Brasil, resolução n° 3.954, de fevereiro de 2011. Prezamos pela segurança de nossos clientes,
oferecendo as melhores possibilidades e o melhor atendimento, justamente para te ajudar a
encontrar sua solução financeira. Se nosso trabalho não suprir a necessidade dos nossos
clientes, significa que não alcançamos nosso objetivo, por isso, temos o prazer de melhor
atendê-los e garantir seu sorriso no final da contratação. </p>
            </div>

            <div class="contat">
                  <a href="https://wa.me/message/FRTRUF7GV3BBE1" target="_blank"><i class="fab fa-whatsapp"></i></a>
                  <a href="https://instagram.com/whitecred?utm_medium=copy_link" target="_blank"><i class="fab fa-instagram"></i></a>
                  <a href="https://www.facebook.com/109674078183007/photos/a.112929914524090/114385447711870/" target="_blank"><i class="fab fa-facebook-square"></i></a>
            </div>
            <br><br>
        </div>
        </div>
      <div class="footer2"></div>
        <div class="footer">
            <div class="footer3"><div class="container">
              <div class="row">
              <p class="col-5">Copyright © 2021 Empresta Online. Todos os direitos reservados</p>
                <img src="img\others\Group_44.png">
              
              </div>
          </div>
        </div>
        </div>
        <script>

        $('.fechadoCarousel').on('touchstart', function(event){
        const xClick = event.originalEvent.touches[0].pageX;
        $(this).one('touchmove', function(event){
            const xMove = event.originalEvent.touches[0].pageX;
            const sensitivityInPx = 5;

            if( Math.floor(xClick - xMove) > sensitivityInPx ){
                $(this).carousel('next');
            }
            else if( Math.floor(xClick - xMove) < -sensitivityInPx ){
                $(this).carousel('prev');
                }
            });
            $(this).on('touchend', function(){
                $(this).off('touchmove');
            });
        });





          $('.next').click( function (){
            $('.cel').carousel('next');
          });

          $('.prev').click( function (){
            $('.cel').carousel('prev');

          });
    </script>
    </body>

    

    <script> 
            window.addEventListener("scroll", function(){
                var navbar = document.querySelector("header"); 
                navbar.classList.toggle("sticky", window.scrollY != 0);
            });

            var baseHeight = $(window).height();
            var num = .75;

            $(window).bind('scroll', function () {
        if ($(window).scrollTop() / baseHeight > num) {
            $('.whatsFixed').addClass('change');
        } else {
            $('.whatsFixed').removeClass('change');
            }
        });
    </script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js'></script>
    <script type="text/javascript">
    jQuery(".fechadoCarousel").swipe({
        swipe: function (event, direction, distance, duration, fingerCount, fingerData) {
            if (direction == 'left') jQuery(this).carousel('next');
            if (direction == 'right') jQuery(this).carousel('prev');
        },
        allowPageScroll: "vertical" 
    });
    </script>

    </html>