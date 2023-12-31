const btnMobile = document.querySelector('button.btn-mobile-menu')
function toggleMenu() {
  const navMobile = document.querySelector('header.menu nav')
  btnMobile.classList.toggle('active')
  navMobile.classList.toggle('active')
}
btnMobile.addEventListener('click', toggleMenu)

const accordion = document.querySelectorAll('.accordion')

accordion.forEach(item => {
  const question = item.querySelector('.question')
  const answer = item.querySelector('.answer')

  answer.style.maxHeight = 0

  question.addEventListener('click', () => {
    if (item.classList.contains('open')) {
      answer.style.maxHeight = 0
      item.classList.remove('open')
    } else {
      answer.style.maxHeight = answer.querySelector('.content').scrollHeight + 'px'
      item.classList.add('open')
    }
  })
})

const swiperHeroIndex = new Swiper('.swiper-gameplay .swiper', {
  loop: true,
  slidesPerView: 1,
  navigation: {
    nextEl: '.swiper-gameplay .button-next',
    prevEl: '.swiper-gameplay .button-prev'
  },
  autoplay: {
    delay: 5000,
    disableOnInteraction: true
  }
})

const tela = document.querySelector('main')

function initLogin() {
  if (tela.id == 'login') {
    const menuLogin = document.querySelectorAll('[data-menu-login]')
    const conteudosLogin = document.querySelectorAll('[data-conteudo-login]')
    menuLogin[0].classList.add('ativo')
    conteudosLogin[0].classList.add('ativo')

    menuLogin.forEach(item => {
      item.addEventListener('click', () => {
        menuLogin.forEach(itens => {
          itens.classList.remove('ativo')
        })
        item.classList.add('ativo')

        const itemMenuSelecionado = item.dataset.menuLogin
        conteudosLogin.forEach(conteudo => {
          conteudo.classList.remove('ativo')
        })
        const itemSelecionado = document.querySelector(
          `[data-conteudo-login=${itemMenuSelecionado}]`
        )
        itemSelecionado.classList.add('ativo')
      })
    })
  }
}
initLogin()

const bg_topo = document.querySelector('.bg_video_topo')
window.addEventListener('resize', () => {
  applyBGTopo(bg_topo)
})

function applyBGTopo(fundo) {
  if (window.innerWidth <= 768) {
    fundo.src = './video/bg-topo-mobile-o.mp4'
  } else {
    fundo.src = './video/bg-topo-o.mp4'
  }
}
applyBGTopo(bg_topo)

document.onreadystatechange = function () {
  if (document.readyState === 'complete') {
    // Quando a página estiver totalmente carregada, esconde o loader
    document.querySelector('.loader-wrapper').style.display = 'none'
  }
}

AOS.init()

/*MODAL DIALOG */
function initModalDialog() {
  const modalButtons = document.querySelectorAll('[data-button-modal]')

  if (modalButtons.length) {
    modalButtons.forEach(button => {
      const modal = document.querySelector(`[data-dialog-modal="${button.dataset.buttonModal}"]`)

      button.addEventListener('click', () => {
        modal.classList.add('fade-in')
        modal.showModal()
      })

      function fadeOut() {
        modal.classList.add('fade-out')
        setTimeout(() => {
          modal.close()
          modal.classList.remove('fade-out')
        }, 1000 * 0.3)
      }

      const buttonsClose = modal.querySelectorAll('[data-dialog-modal="modal-close"]')
      buttonsClose.forEach(buttonClose => {
        buttonClose.addEventListener('click', () => {
          fadeOut()
        })
      })

      modal.addEventListener('click', e => {
        const modalDimensions = modal.getBoundingClientRect()
        if (
          e.clientX < modalDimensions.left ||
          e.clientX > modalDimensions.right ||
          e.clientY < modalDimensions.top ||
          e.clientY > modalDimensions.bottom
        ) {
          fadeOut()
        }
      })
    })
  }
}
initModalDialog()

/*END MODAL DIALOG */
