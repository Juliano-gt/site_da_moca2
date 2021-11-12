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
        <div class="header">
            <?php include 'comp/nav.php' ?>
            <?php include 'comp/carousel.php' ?>
        </div>

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
                
            </div>



            <div class="about">
                <div class="line"></div>
                <h5 class="inLine">Sobre</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type
                    specimen book. It has survived not only five centuries, but also the leap into
                    electronic typesetting, remaining essentially unchanged. It was popularised in
                    the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker
                    including versions of Lorem Ipsum.</p>
            </div>

            <div class="contat">
                  <a href=""><i class="fab fa-whatsapp"></i></a>
                  <a href=""><i class="fab fa-instagram"></i></a>
                  <a href=""><i class="fab fa-facebook-square"></i></a>
            </div>
            <br><br>
        </div>
        <div class="footer">
            <div class="container">
              <div class="row">
              <p class="col-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type
                specimen book. It has survived not only five centuries, but also the leap into
                electronic typesetting, remaining essentially unchanged. It was popularised in
                the 1960s with the release o</p>
              <h5 class="col">Logo <img src="" alt="Logo"></h5>
              </div>
          </div>
        </div>
    </body>
    <script>
        $('.carousel').carousel({interval: 2000})
    </script>
</html>