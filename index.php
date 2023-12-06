<?php include './header.php';?>
<main id="principal">
  <section class="hero section-bg-video" id="hero">
    <video muted autoplay loop class="bg_video bg_video_topo">
      <source src="./video/bg-topo-o.mp4" type="video/mp4" />
    </video>
    <div class="container">
      <div class="row">
        <div class="conteudo">
          <a href="index.php" class="logo-topo">
            <img src="./img/logo.png" alt="" />
          </a>
          <h1 class="texto-sombreado">Detone. enriqueça. domine. Bomb pix:</h1>
          <p>O jogo explosivo que transforma suas vitórias em riquezas reais!</p>
          <div class="social">
            <ul>
              <li>
                <a href="tel:11974313640">
                  <img src="./img/telefone.svg" alt="" />
                </a>
              </li>
              <li>
                <a href="https://wa.me/5511974313640?text=ol%C3%A1%2C+tenho+uma+d%C3%BAvida+sobre+o+bombpix">
                  <img src="./img/whatsapp.svg" alt="" />
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com/b0mbpix/">
                  <img src="./img/instagram.svg" alt="" />
                </a>
              </li>
            </ul>
          </div>
          <a href="https://marketplace.bombpix.net/login " class="btn btn-play"> Play </a>
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
                    <video controls src="./video/Bomb_Desktop.mp4"></video>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="swiper-conteudo">
                    <video controls src="./video/Bomb_Mobile.mp4"></video>
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
  <?php 
    $personagens =[
      [
        'id'=>'bruxa',
        'nome'=>'BRUXA ESTUDANTE',
        'descricao'=>'- Veste um vestido de estudante com símbolos mágicos e um
        chapéu pontudo. <br>
        - Carrega bombas encantadas e utiliza um grimório como
        detonador.<br>
        - Habilidade única: "Conjuração Explosiva" - as explosões
        desencadeiam efeitos mágicos adicionais, ampliando os
        ganhos.',
        'imagem'=>'Bruxa_01.png',

        'nome_evolucao'=>'BRUXA ACADÊMICA',
        'descricao_evolucao'=> '- Veste um vestido elegante com detalhes ricos em runas
        mágicas.
        - Carrega bombas de artefato mágico e utiliza um cajado
        encantado como detonador.
        - Habilidade única: "Artefatos Ancestrais" - as explosões liberam
        poderes mágicos antigos, concedendo benefícios estratégicos.',
        'imagem_evolucao'=>'Bruxa_02.png',
      ],
      [
        'id'=>'guerreiro',
        'nome'=>'CAVALEIRO APRENDIZ',
        'descricao'=> '- Veste uma armadura reluzente com detalhes explosivos
        incorporado.<br>
        - Carrega bombas de escudo e utiliza uma lança como
        detonador.<br>
        - Habilidade única: "Código Explosivo" - as explosões geram
        escudos temporários, conferindo resistência estratégica.',
        'imagem'=>'Guerreiro_01.png',

        'nome_evolucao'=>'CAVALEIRO LENDÁRIO',
        'descricao_evolucao'=> '- Veste uma armadura imponente adornada com runas
        ancestrais de explosão.<br>
        - Carrega bombas divinas e utiliza uma espada sagrada como
        detonador.<br>
        - Habilidade única: "Fúria Celestial" - as explosões invocam
        poderes divinos, ampliando as capacidades ofensivas e
        defensivas.
        ',
        'imagem_evolucao'=>'Guerreiro_02.png',
      ],
      [
        'id'=>'aventureiro',
        'nome'=>'COWBOY ERRANTE',
        'descricao'=> '- Um pistoleiro solitário cujo caminho é marcado por explosões e
        aventuras.<br>
        - Equipado com bombas temáticas de faroeste e um chapéu de
        caubói desgastado.<br>
        - Habilidade única: "Desert Mirage" - cria ilusões de explosões,
        confundindo os adversários e aumentando os ganhos.',
        'imagem'=>'Cowboy_01.png',

        'nome_evolucao'=>'COWBOY JUSTICEIRO',
        'descricao_evolucao'=> '- Um aventureiro solitário, vestido com um chapéu de abas
        largas e um poncho empoeirado.<br>
        - Carrega bombas estilo bolas de fumaça e usa um detonador de
        aspecto vintage.<br>
        - Habilidade única: "Rodeo Ricochet" - as bombas podem ser
        direcionadas em um movimento rápido, causando estragos
        estratégicos e gerando grandes lucros.',
        'imagem_evolucao'=>'Cowboy_02.png',
      ],
      [
        'id'=>'jogador',
        'nome'=>'JOGADOR VÁRZEA',
        'descricao'=> '- Um amante do futebol de rua, vestindo uma camisa surrada de
        time local e chuteiras gastas.<BR>
        - Carrega bombas feitas com objetos inusitados, como bolas de
        futebol recheadas de explosivos.<BR>
        - Habilidade única: "Gol de placa" - as explosões criam obstáculos
        temporários que dificultam a movimentação dos oponentes.',
        'imagem'=>'Jogador_01.png',

        'nome_evolucao'=>'JOGADOR PROFISSIONAL',
        'descricao_evolucao'=> '- Vestido com um uniforme esportivo de alta tecnologia e
        equipamento de última geração.<BR>
        - Carrega bombas de precisão e usa um detonador sofisticado.<BR>
        - Habilidade única: "Tática Avançada" - permite ao jogador traçar a
        trajetória das explosões para otimizar os ganhos.',
        'imagem_evolucao'=>'Jogador_02.png',
      ],
      [
        'id'=>'ninja',
        'nome'=>'NINJA DESAFIANTE',
        'descricao'=> '- Veste um traje azul tradicional.<br>
        - Carrega bombas shuriken e usa um detonador silencioso.<br>
        - Habilidade única: "Furtividade Explosiva" - as explosões não
        revelam a posição do Ninja Desafiante, proporcionando uma
        vantagem tática.
        ',
        'imagem'=>'Ninja_01.png',

        'nome_evolucao'=>'NINJA ESPECIALISTA',
        'descricao_evolucao'=> '- Veste um traje ninja moderno, combinando tecnologia
        avançada com tradição.<br>
        - Carrega bombas de fumaça aprimoradas e utiliza um detonador
        camuflado.<br>
        - Habilidade única: "Sombra Estratégica" - permite ao Ninja
        Profissional manipular as sombras para criar ilusões e confundir
        os oponentes.',
        'imagem_evolucao'=>'Ninja_02.png',
      ]
      ]
  ?>
  <section class="chars section-bg-video" id="chars">
    <video muted autoplay loop class="bg_video">
      <source src="./video/bg-chars-o.mp4" type="video/mp4" />
    </video>
    <div class="container">
      <div class="row">
        <div class="conteudo">
          <h2 class="texto-sombreado titulo-sessao">Characters</h2>
          <div class="box-chars" data-aos="zoom-in">
            <?php foreach($personagens as $personagem){?>
            <div class="char <?php echo $personagem['id']?>"
              data-button-modal="modal-personagem-<?php echo $personagem['id']?>">
              <img src="./img/<?php echo $personagem['id']?>.png" alt="" />
            </div>
            <?php };?>
          </div>
        </div>
      </div>
    </div>
    <?php foreach ($personagens as $personagem){?>
    <dialog class="dialog-modal" data-dialog-modal="modal-personagem-<?php echo $personagem['id']?>">
      <div class="dialog-content">
        <h1 class="texto-sombreado"><?php echo $personagem['id']?></h1>
        <div class="container-char">
          <div class="char-content">
            <img src="./img/<?php echo $personagem['imagem']?>" alt="">
            <div>
              <h4><?php echo $personagem['nome']?></h4>
              <p class="description">
                <?php echo $personagem['descricao']?>
              </p>
            </div>

          </div>
          <div class="char-content">
            <img src="./img/<?php echo $personagem['imagem_evolucao']?>" alt="">
            <div>
              <h4><?php echo $personagem['nome_evolucao']?></h4>
              <p class="description">
                <?php echo $personagem['descricao_evolucao']?>
              </p>
            </div>

          </div>
        </div>
        <button class="dialog-close" data-dialog-modal="modal-close"></button>
      </div>
    </dialog>
    <?php }?>
    <!-- <dialog class="dialog-modal fade-in" data-dialog-modal="modal-personagem-1" open>
      <div class="dialog-content">
        <h3 class="dialog-title">
          <h1 class="texto-sombreado">Cavaleiro</h1>
        </h3>
        <div class="container-char">
          <div class="char-content">
            <img src="./img/Bruxa_01.png" alt="">
            <div>
              <h4>NINJA DESAFIANTE</h4>
              <p class="description">
                - Veste um traje azul tradicional.<br>
                - Carrega bombas shuriken e usa um detonador silencioso.<br>
                - Habilidade única: "Furtividade Explosiva" - as explosões não
                revelam a posição do Ninja Desafiante, proporcionando uma
                vantagem tática.
              </p>
            </div>

          </div>
          <div class="char-content">
            <img src="./img/Bruxa_01.png" alt="">
            <div>
              <h4>NINJA DESAFIANTE</h4>
              <p class="description">
                - Veste um traje azul tradicional.<br>
                - Carrega bombas shuriken e usa um detonador silencioso.<br>
                - Habilidade única: "Furtividade Explosiva" - as explosões não
                revelam a posição do Ninja Desafiante, proporcionando uma
                vantagem tática.
              </p>
            </div>

          </div>
        </div>
        <button class="dialog-close" data-dialog-modal="modal-close"></button>
      </div>
    </dialog> -->
  </section>

  <section class="faq" id="faq">
    <?php
     $perguntas =[
      [
        'pergunta'=> 'O que é o Bomb PIX?',
        'resposta'=> 'Prepare-se para uma experiência de jogo revolucionária que combina a emoção do clássico
        Bomberman com uma pitada única de oportunidades financeiras: apresentamos o Bomb
        PIX! Aqui, cada explosão não é apenas uma estratégia, é uma chance de acumular
        riquezas reais.<br><br>
        Desbloqueie novos personagens e habilidades emocionantes ao abrir LuckBoxes. Cada
        abertura é uma oportunidade de descobrir um tesouro que impulsionará sua jornada rumo à
        riqueza.<br><br>
        Junte-se à revolução do Bomb PIX e transforme suas explosões em uma viagem
        emocionante para o sucesso financeiro. Está pronto para detonar, ganhar e dominar? O
        campo de batalha aguarda você!<br><br>
        '
      ],
      [
        'pergunta'=> 'Como posso iniciar?',
        'resposta'=> 'Você está prestes a embarcar em uma jornada emocionante rumo à fortuna no Bomb PIX, e
        o primeiro passo é tão empolgante quanto uma explosão estratégica! Aqui está como você
        pode iniciar sua aventura:<br><br>
        Faça seu depósito Explosivo: antes de entrar na arena, faça um depósito para adquirir sua
        primeira Luckbox. Essa será a chave para desbloquear personagens incríveis e começar
        sua jornada com estilo.<br><br>
        Explore o marketplace Dinâmico: visite o marketplace e explore uma variedade de
        LuckBoxes disponíveis para compra. Cada uma delas guarda segredos únicos e a
        promessa de desbloquear personagens de diferentes raridades.
        Escolha sua sorte: selecione a LuckBox que mais chama sua atenção. Cada uma é uma
        oportunidade de descobrir um novo boneco que pode ser a chave para a sua estratégia
        vitoriosa.<br><br>
        Abra-a em "Meus Itens": após a compra, vá até "Meus Itens" e abra sua LuckBox para
        revelar o personagem surpresa. Cada abertura é uma emoção única, e seu novo boneco
        aparecerá orgulhosamente na sua coleção.<br><br>
        Descubra a raridade: observe a raridade do seu novo personagem. Raridades mais altas
        podem trazer habilidades únicas e estratégias avançadas para as suas explosões na arena.
        Pronto para Explodir e Vencer: com seu novo boneco em mãos, você está pronto para
        enfrentar desafios explosivos, acumular riquezas e dominar a arena do Bomb PIX.
        A aventura no Bomb PIX está apenas começando. Faça seu depósito, adquira sua primeira
        LuckBox e descubra as possibilidades explosivas que o aguardam. Está pronto para
        detonar seu caminho para a vitória? 💥🎮<br><br>'
      ],
      [
        'pergunta'=> 'Quais os modos de jogo?',
        'resposta'=> 'Modo FARM: "Riqueza Explosiva" - Faça fortuna com cada explosão!<br><br>
        Prepare-se para uma experiência explosiva diferente de tudo que você já viu! No modo
        "Riqueza Explosiva", cada bomba que você detona não apenas destrói blocos, mas
        também desencadeia uma chuva de lucros. Entre na arena, estrategicamente coloque suas
        bombas e torne-se o magnata da explosão!<br><br>
        Como funciona:<br>
        - Bombardeio lucrativo: cada bloco explodido libera moedas e recursos valiosos. Faça
        chover dinheiro enquanto cria o caos na arena!<br>
        - Explosão estratégica: Planeje sua abordagem para maximizar seus ganhos. Adicione mais
        personagens ao campo de batalha e aumente o acúmulo de riquezas.<br>
        - Recolha suas recompensas ao final do farm e libere um novo mapa, podendo explodir até
        2 mapas por dia.<br><br>
        O farm leva o tempo de 1 hora e seu intervalo para início de um novo mapa é de 11 horas. 
        Lembre-se sempre de que é necessário recolher seus ganhos antes de iniciar um novo mapa.
        <br><br>
        Modo de jogo PVP: "Explosão Royale" - Sobreviva e prospere na arena explosiva! (EM
        BREVE)<br><br>
        Prepare-se para a batalha mais intensa e explosiva que você já experimentou! No Modo
        "Explosão Royale", a sobrevivência é a chave e cada explosão conta. Entre na arena,
        enfrente outros jogadores e torne-se o último explosivo de pé para reivindicar todas as
        riquezas!<br><br>
        Como Funciona:<br>
        - Batalha Explosiva: enfrente jogadores de todo o mundo em uma arena cheia de blocos e
        perigos explosivos. As bombas estão voando, e apenas o mais astuto sobreviverá.
        - Lucro Compartilhado: cada explosão gera lucros que são compartilhados entre os
        jogadores sobreviventes. Quanto mais jogadores você eliminar, mais riquezas você
        acumula!<br>
        - Zona de Perigo: fique atento à zona de perigo, que se estreita ao longo do tempo,
        forçando os jogadores a se confrontarem em espaços cada vez menores.<br><br>
        '
      ],
      [
        'pergunta'=>'Quais são as caixas e bonecos disponíveis?',
        'resposta'=>'Preparado para elevar seu jogo e impulsionar suas vitórias para novas alturas no Bomb
        PIX? Apresentamos uma seleção incrível de baús, cada um guardando segredos exclusivos
        e personagens poderosos! Escolha o seu e veja como suas explosões se transformam em
        lucros reais:<br><br>
        Baú Comum - Jogador de Futebol:<br>
        🌟 Personagem: desperte seu espírito esportivo com o jogador de futebol várzea a
        profissional.<br>
        💸 Ganhos mensais: impulsione seus lucros com ganhos de 20% a 40% ao mês.<br><br>
        Baú Raro - Cowboy:<br>
        🌟 Personagem: sinta o clima do velho oeste com o cowboy errante e justiceiro.<br>
        💸 Ganhos mensais:impulsione seus lucros com ganhos de 30% a 40% ao mês.<br><br>
        Baú Épico - Cavaleiro:<br>
        🌟 Personagem: abra caminho para a vitória com o cavaleiro aprendiz e lendário.<br>
        💸 Ganhos mensais: impulsione seus lucros com ganhos de 40% a 50% ao mês.<br><br>
        Baú Lendário - Ninja:<br>
        🌟 Personagem: mergulhe nas sombras com o misterioso ninja desafiante e especial.<br>
        💸 Ganhos mensais: colha lucros excepcionais de 40% a 50% mensais.<br>
        🎁 Evento: caixa disponível em eventos do game.<br><br>
        Baú Mítico - Bruxa:<br>
        🌟 Personagem: desperte o poder mágico da bruxa estudante e acadêmica.<br>
        💸 Ganhos mensais: maximize seus ganhos com incríveis 50% a 60% ao mês.<br>
        🎁 Evento: caixa disponível em eventos do game.<br><br>
        Esses baús são apenas o começo! Fique de olho nos baús de eventos Lendário e Mítico,
        que serão lançados em breve, trazendo personagens ainda mais extraordinários para
        impulsionar suas explosões e seus ganhos. Descubra a grandeza que aguarda você - qual
        baú você vai escolher primeiro?<br><br>'
      ],
      [
        'pergunta'=>'Como compro e abro uma caixa?',
        'resposta'=>'Embarque na jornada de explosões e fortuna no Bomb PIX adquirindo nossas exclusivas
        LuckBoxes. É simples, emocionante e o primeiro passo para se tornar um mestre explosivo!<br><br>
        Passo a passo para adquirir seu baú:<br><br>
        Faça um depósito explosivo: efetue um depósito no valor mínimo da LuckBox desejada.
        Aceitamos PIX, USDT e BUSD (criptomoedas), proporcionando flexibilidade para sua
        jornada explosiva.<br><br>
        Acesse o Marketplace: com seu depósito confirmado, vá até a aba MARKETPLACE. Aqui,
        você encontrará uma seleção irresistível de LuckBoxes, cada uma guardando personagens
        únicos e oportunidades incríveis.<br><br>
        Escolha seu baú e compre: selecione a LuckBox dos seus sonhos e clique em COMPRAR.
        Seu depósito será convertido em uma chave para desbloquear explosões emocionantes e
        recompensas lucrativas.<br><br>
        Abra seu baú em "Meus Itens": após a compra, vá até a aba MEUS ITENS. Aqui, você verá
        seus bonecos conquistados e as LuckBoxes disponíveis para abertura. Clique em ABRIR e
        assista à animação emocionante enquanto seu personagem é revelado.
        Domine a arena com seus novos personagens: agora que seu personagem está disponível,
        leve-o para a arena e domine as explosões! Cada boneco traz habilidades únicas e
        estratégias para ajudá-lo a acumular ainda mais riquezas.<br><br>
        Gerencie seus itens com facilidade: na página MEUS ITENS, você pode verificar quais
        bonecos já possui, quais LuckBoxes estão prontas para abrir e planejar sua estratégia
        explosiva.<br><br>
        Está pronto para transformar seus depósitos em oportunidades explosivas? Adquira suas
        LuckBoxes agora, desbloqueie personagens incríveis e prepare-se para uma jornada
        emocionante no Bomb PIX! 💣🚀💰<br><br>
        '
      ],
      [
        'pergunta'=>'Como funciona o jogo?',
        'resposta'=>'Se você está pronto para uma experiência de jogo única, o Bomb PIX é o lugar certo! Aqui
        está um guia passo a passo para mergulhar no mundo explosivo e começar a acumular
        riquezas:<br><br>
        Modo FARM: "Riqueza Explosiva" - Faça fortuna com cada explosão!<br><br>
        Adquira sua LuckBox: para começar, adquira uma LuckBox e desbloqueie seu primeiro
        personagem. Cada personagem traz suas habilidades únicas para a arena explosiva.<br><br>
        Monte sua equipe de ataque: no modo farm, você tem a chance de ter até 20 personagens
        para o seu time dentro do mapa. Caso tenha mais de 20, selecione sabiamente quem
        participará da jornada do seu farm.<br><br>
        Venda ou troque no marketplace: se seu time estiver lotado, venda ou troque os bonecos
        excedentes no marketplace. Isso não apenas otimiza sua estratégia, mas também oferece
        oportunidades de lucro para você e para outros jogadores.<br><br>
        Quebre blocos estrategicamente: a cada 6 horas, duas vezes ao dia, inicie o modo farm e
        veja seus personagens em ação. Estrategicamente, quebre os blocos para acumular
        ganhos e fortuna.<br><br>
        Recolha os ganhos e reinicie: ao final do farm, entre no jogo, recolha seus ganhos e
        prepare-se para a próxima rodada. Você pode fazer isso duas vezes ao dia, maximizando
        suas oportunidades de lucro.<br><br>
        Modo de jogo PVP: "Explosão Royale" - Sobreviva e prospere na arena explosiva!<br><br>
        Escolha seu campeão: no modo PVP, selecione o personagem que competirá contra outros
        jogadores. Cada escolha é estratégica, pois suas vitórias significam lucros reais.<br><br>
        Sobreviva e lucre: sobreviva às explosões dos outros jogadores para ficar com os lucros
        gerados por todas as explosões. Estratégia e agilidade são essenciais para dominar a
        competição.<br><br>
        Aposte nas salas: dentro do jogo, explore as salas de apostas. Selecione suas preferidas e
        coloque suas fichas, adicionando uma camada extra de emoção e oportunidade de ganhos.<br><br>
        Agora que você conhece os caminhos para o sucesso no Bomb PIX, entre na arena e
        comece a sua jornada para se tornar um mestre explosivo! 💣🎮💰<br><br>'
      ],
      [
        'pergunta'=>'Quantas contas posso ter?',
        'resposta'=>'Sem Limites para Sua Explosiva Jornada no Bomb PIX!<br><br>
        Quando se trata de explorar o mundo do Bomb PIX, não acreditamos em limites! Aqui está
        a notícia emocionante: não há restrições no número de contas que você pode ter. Cada
        jogador tem a liberdade de criar e acessar quantas contas desejar, tudo isso sem
        complicações.<br><br>
        Crie diferentes estratégias e times para maximizar suas chances de sucesso em cada
        conta, experimentando novos personagens, estratégias e modos de jogo em cada conta,
        adicionando uma camada extra de diversidade à sua experiência.<br><br>
        Acesse todas as suas contas da mesma rede, sem complicações. Desfrute da conveniência
        de gerenciar suas explosões e riquezas em um só lugar.<br><br>
        '
      ],
      [
        'pergunta'=>'Como posso retirar meus lucros?',
        'resposta'=>'Preparado para transformar seus ganhos virtuais em dinheiro real? Aqui está tudo o que
        você precisa saber sobre os saques no Bomb PIX:<br><br>
        Todas as segundas-feiras: é o dia da semana para colher os frutos de suas explosões
        estratégicas. Marque as segundas-feiras no calendário e prepare-se para encher sua conta
        bancária com ganhos reais.<br><br>
        Valor mínimo de R$50: para garantir que seus saques sejam sempre significativos,
        estabelecemos um valor mínimo de R$50. Assim, você pode aproveitar ao máximo seus
        lucros explosivos.<br><br>
        Taxa de 4%: uma pequena taxa de 4% será aplicada para cobrir os custos de
        processamento. É uma pequena contribuição para garantir que seus ganhos cheguem até
        você de forma eficiente.<br><br>
        Prazo de 2 horas úteis: após solicitar um saque, seus ganhos estarão em sua conta em até
        2 horas úteis. Rápido, fácil e direto, para que você possa aproveitar seus lucros sem
        demora.<br><br>
        No Bomb PIX, a cada segunda-feira é uma oportunidade de transformar sua habilidade
        explosiva em dinheiro real. Continue detonando, acumulando e colhendo os frutos da sua
        maestria no jogo. 💣💰<br><br>'
      ]
     ]
    ?>
    <img class="bomba" src="./video/explosao.gif" alt="">
    <img class="bomba-2" src="./video/explosao.gif" alt="">
    <div class="container">
      <div class="row">
        <div class="conteudo">
          <h2 class="texto-sombreado titulo-sessao">FAQ</h2>
          <?php foreach($perguntas as $pergunta){?>
          <div class="accordion" data-aos="fade-right">
            <div class="question">
              <p>
                <?php  echo $pergunta['pergunta']?>
              </p>
              <img src="./img/btn-seta.png" alt="" />
            </div>
            <div class="answer">
              <div class="content">
                <p>
                  <?php  echo $pergunta['resposta']?>
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