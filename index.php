<?php include './header.php';?>
<main id="principal">
  <section class="hero section-bg-video" id="hero">
    <video muted autoplay loop class="bg_video bg_video_topo">
      <source src="./video/bg-topo.mp4" type="video/mp4" />
    </video>
    <div class="container">
      <div class="row">
        <div class="conteudo">
          <a href="index.php" class="logo-topo">
            <img src="./img/logo.png" alt="" />
          </a>
          <h1 class="texto-sombreado">Lorem ipsum dolor sit amet consectetur.</h1>
          <div class="social">
            <ul>
              <li>
                <a href="#">
                  <img src="./img/discord.svg" alt="" />
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="./img/telegram.svg" alt="" />
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="./img/twitter.svg" alt="" />
                </a>
              </li>
            </ul>
          </div>
          <a href="#" class="btn btn-play"> Play </a>
        </div>
      </div>
    </div>
  </section>
  <section class="gameplay" id="gameplay">
    <div class="container">
      <div class="row">
        <div class="conteudo">
          <h2 class="texto-sombreado titulo-sessao">Gameplay</h2>
          <div class="swiper-gameplay">
            <div class="button-prev">
              <img src="./img/seta.png" alt="" />
            </div>
            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="swiper-conteudo">
                    <img src="./img/video.png" alt="" />
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="swiper-conteudo">
                    <video controls src="./video/bg.mp4"></video>
                  </div>
                </div>
              </div>
            </div>
            <div class="button-next">
              <img src="./img/seta.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="chars section-bg-video" id="chars">
    <video muted autoplay loop class="bg_video">
      <source src="./video/bg-chars.mp4" type="video/mp4" />
    </video>
    <div class="container">
      <div class="row">
        <div class="conteudo">
          <h2 class="texto-sombreado titulo-sessao">Characters</h2>
          <div class="box-chars">
            <div class="char bruxa">
              <img src="./img/bruxa.png" alt="" />
            </div>
            <div class="char guerreiro">
              <img src="./img/guerreiro.png" alt="" />
            </div>
            <div class="char aventureiro">
              <img src="./img/aventureiro.png" alt="" />
            </div>
            <div class="char jogador">
              <img src="./img/jogador.png" alt="" />
            </div>
            <div class="char ninja">
              <img src="./img/ninja.png" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="faq" id="faq">
    <img class="bomba" src="./video/explosao.gif" alt="">
    <img class="bomba-2" src="./video/explosao.gif" alt="">
    <div class="container">
      <div class="row">
        <div class="conteudo">
          <h2 class="texto-sombreado titulo-sessao">FAQ</h2>
          <?php for($i=0;$i<=5;$i++){?>
          <div class="accordion" data-aos="fade-right">
            <div class="question">
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam</p>
              <img src="./img/btn-seta.png" alt="" />
            </div>
            <div class="answer">
              <div class="content">
                <p>
                  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                  nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                  enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                  nisl.
                </p>
              </div>
            </div>
          </div>
          <?php }; ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include './footer.php'?>