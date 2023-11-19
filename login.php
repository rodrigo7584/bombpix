<?php include './header.php';?>
<main id="login">
  <section class="login section-bg-video">
    <div class="row">
      <video muted autoplay loop class="bg_video">
        <source src="./video/teste.mp4" type="video/mp4" />
      </video>
      <div class="container">
        <div class="conteudo">
          <a href="index.php" class="logo-topo">
            <img src="./img/logo.png" alt="" />
          </a>
          <div class="itens-login">
            <nav>
              <ul>
                <li>
                  <button data-menu-login="login">login</button>
                </li>
                <li>
                  <button data-menu-login="deposito">Depósito</button>
                </li>
                <li>
                  <button data-menu-login="saque">Saque</button>
                </li>
                <li>
                  <button data-menu-login="informativos">Informativos</button>
                </li>
              </ul>
            </nav>
            <div class="itens-conteudo">
              <div class="item-conteudo item-conteudo-login" data-conteudo-login="login">
                <h2 class="texto-sombreado">login</h2>
                <form action="" class="form-login">
                  <input type="text" placeholder="User" />
                  <input type="text" placeholder="Password" />
                  <div class="box">
                    <a href="#" class="btn-link"> Forgot the password?</a>
                    <a href="#" class="btn btn-login">Login</a>
                  </div>
                  <a href="#" class="btn-link btn-signup">sign-up</a>
                </form>
              </div>
              <div class="item-conteudo" data-conteudo-login="deposito">deposito</div>
              <div class="item-conteudo" data-conteudo-login="saque">saque</div>
              <div class="item-conteudo" data-conteudo-login="informativos">informativos</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php include './footer.php'?>