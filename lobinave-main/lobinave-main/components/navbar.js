class CustomNavbar extends HTMLElement {
  connectedCallback() {
    this.attachShadow({ mode: 'open' });
    this.shadowRoot.innerHTML = `
      <style>
        nav {
          background-color: #1a6bb0;
          padding: 1rem 0;
          display: flex;
          justify-content: space-between;
          align-items: center;
          position: fixed;
          width: 100%;
          top: 0;
          z-index: 1000;
          box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .logo {
          color: white;
          font-weight: bold;
          font-size: 1.5rem;
          display: flex;
          align-items: center;
        }
        .logo img {
          width: 40px;
          height: auto;
          margin-left: 0.5rem;
        }
        ul {
          display: flex;
          gap: 1.5rem;
          list-style: none;
          margin: 0;
          padding: 0;
        }
        li a {
          color: white;
          text-decoration: none;
          padding: 0.5rem 0;
          position: relative;
          display: block;
        }
        li a:hover {
          opacity: 0.8;
        }
        li a.active {
          font-weight: bold;
          border-bottom: 2px solid white;
        }
        .mobile-menu-btn {
          display: none;
          background: none;
          border: none;
          cursor: pointer;
          padding: 0.5rem;
        }
        .mobile-menu-btn svg {
          width: 28px;
          height: 28px;
          stroke: white;
        }

        @media (max-width: 768px) {
          ul {
            position: fixed;
            top: 70px;
            left: 0;
            width: 100%;
            background-color: #0b2c4d;
            flex-direction: column;
            align-items: center;
            padding: 1rem 0;
            transform: translateY(-150%);
            transition: transform 0.3s ease;
            gap: 0;
            height: calc(100vh - 70px);
            overflow-y: auto;
          }
          ul.open {
            transform: translateY(0);
          }
          li {
            width: 100%;
            text-align: center;
            padding: 0.8rem 0;
            border-bottom: 1px solid rgba(255,255,255,0.1);
          }
          li:last-child {
            border-bottom: none;
          }
          .mobile-menu-btn {
            display: block;
          }
        }
      </style>

      <nav>
        <div class="logo">
          <img src="IMG/LUB.jfif" alt="Logo" style= "width: 40%">
        </div>
        <button class="mobile-menu-btn" aria-label="Menu">
          <svg class="icon-menu" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
            <line x1="3" y1="12" x2="21" y2="12"/>
            <line x1="3" y1="6" x2="21" y2="6"/>
            <line x1="3" y1="18" x2="21" y2="18"/>
          </svg>
        </button>
        <ul>
          <li><a href="#about" class="active">Sobre</a></li>
          <li><a href="#Mission">Missão</a></li>
          <li><a href="#orgchart">Organograma</a></li>
          <li><a href="#services">Serviços</a></li>
          <li><a href="#partners">Parceiros</a></li>
          <li><a href="#news">Notícias</a></li>
          <li><a href="#gallery">Galeria</a></li>
          <li><a href="#recruitment">Recrutamento</a></li>
          <li><a href="#contact">Contactos</a></li>
        </ul>
      </nav>
    `;

    // Seleciona elementos
    const mobileMenuBtn = this.shadowRoot.querySelector('.mobile-menu-btn');
    const mobileMenu = this.shadowRoot.querySelector('ul');

    // Função para alternar SVG do botão
    const setMenuIcon = (isOpen) => {
      mobileMenuBtn.innerHTML = isOpen
        ? `<svg class="icon-close" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
             <line x1="18" y1="6" x2="6" y2="18"/>
             <line x1="6" y1="6" x2="18" y2="18"/>
           </svg>`
        : `<svg class="icon-menu" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
             <line x1="3" y1="12" x2="21" y2="12"/>
             <line x1="3" y1="6" x2="21" y2="6"/>
             <line x1="3" y1="18" x2="21" y2="18"/>
           </svg>`;
    };

    // Toggle menu mobile
    mobileMenuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('open');
      setMenuIcon(mobileMenu.classList.contains('open'));
    });

    // Fecha menu ao clicar em link
    this.shadowRoot.querySelectorAll('ul li a').forEach(link => {
      link.addEventListener('click', () => {
        mobileMenu.classList.remove('open');
        setMenuIcon(false);
      });
    });
  }
}

customElements.define('custom-navbar', CustomNavbar);
