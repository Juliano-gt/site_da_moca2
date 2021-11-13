<!DOCTYPE html>
<html lang="pt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="./css/master.css">
        <link rel="stylesheet" href="./css/nav.css">
        <link rel="stylesheet" href="./css/carousel.css">
        <link rel="stylesheet" href="./css/cards.css">
        
        <title>WC Consult</title>
    </head>
    <body>
        <header>
            <?php include 'comp/nav.php' ?>
            <?php include 'comp/carousel.php' ?>
</header>

        <div class="toCenter">
        <div class="fechado">
            <div class="line"></div>
            <h5 class="inLine">Bancos parceiros</h5>
            <?php include 'comp/fechado.php' ?>
        </div>

        <div class="bgOthers">
            <div class="ofertas"><br>
                <?php include 'comp/ofertas.php' ?>
            </div>
            <br><br><br>


            <div class="feedback">
                
                <div class="bgFeed backFeed">
                <div class="contFeed">
                    <?php include 'comp/cel_carousel.php' ?>
                </div>
                </div>
                <div class="lineFeed backFeed"></div>
                
            </div>



            <div class="about">
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
                  <a href=""><i class="fab fa-whatsapp"></i></a>
                  <a href=""><i class="fab fa-instagram"></i></a>
                  <a href=""><i class="fab fa-facebook-square"></i></a>
            </div>
            <br><br>
        </div>
        </div>
      <div class="footer2"></div>
        <div class="footer">
            <div class="footer3"><div class="container">
              <div class="row">
              <p class="col-5">Copyright © 2021 Empresta Online. Todos os direitos reservados</p>
             <h5><img src="img\others\Group_44.png"> </h5>
              
              </div>
          </div>
        </div>
        </div>
    </body>
    
    <script> 
            window.addEventListener("scroll", function(){
                var navbar = document.querySelector("header"); 
                navbar.classList.toggle("sticky", window.scrollY != 0);
            }
             );
    </script>
</html>