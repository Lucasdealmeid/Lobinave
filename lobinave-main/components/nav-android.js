class AndroidNavButton extends HTMLElement {
  connectedCallback() {
    this.attachShadow({ mode: 'open' });
    this.shadowRoot.innerHTML = `
      <style>
        :host {
          display: block;
          position: fixed;
          bottom: 100px;
          right: 20px;
          z-index: 9999;
        }
        
        .android-nav-button {
          width: 56px;
          height: 56px;
          border-radius: 50%;
          background: linear-gradient(135deg, #1a6bb0 0%, #0e4a7a 100%);
          border: none;
          box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
          cursor: pointer;
          display: flex;
          align-items: center;
          justify-content: center;
          color: white;
          transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
          position: relative;
          overflow: hidden;
        }
        
        .android-nav-button::before {
          content: '';
          position: absolute;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          background: rgba(255, 255, 255, 0.1);
          opacity: 0;
          transition: opacity 0.3s ease;
        }
        
        .android-nav-button:hover::before,
        .android-nav-button:active::before {
          opacity: 1;
        }
        
        .android-nav-button i {
          width: 24px;
          height: 24px;
          transition: transform 0.3s ease;
        }
        
        .android-nav-button.active i {
          transform: rotate(45deg);
        }
        
        .nav-menu {
          position: absolute;
          bottom: 70px;
          right: 0;
          background: white;
          border-radius: 16px;
          box-shadow: 0 8px 40px rgba(0, 0, 0, 0.2);
          padding: 8px;
          min-width: 200px;
          opacity: 0;
          transform: translateY(20px) scale(0.9);
          transform-origin: bottom right;
          transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
          pointer-events: none;
          backdrop-filter: blur(10px);
          background: rgba(255, 255, 255, 0.95);
        }
        
        .nav-menu.open {
          opacity: 1;
          transform: translateY(0) scale(1);
          pointer-events: all;
        }
        
        .nav-item {
          display: flex;
          align-items: center;
          padding: 12px 16px;
          text-decoration: none;
          color: #333;
          border-radius: 12px;
          transition: all 0.2s ease;
          border: none;
          background: none;
          width: 100%;
          text-align: left;
          font-family: inherit;
          font-size: 14px;
          cursor: pointer;
        }
        
        .nav-item:hover,
        .nav-item:active {
          background: rgba(26, 107, 176, 0.1);
          color: #1a6bb0;
        }
        
        .nav-item i {
          width: 20px;
          height: 20px;
          margin-right: 12px;
          color: #666;
        }
        
        .nav-item:hover i,
        .nav-item:active i {
          color: #1a6bb0;
        }
        
        .nav-divider {
          height: 1px;
          background: rgba(0, 0, 0, 0.1);
          margin: 4px 0;
        }
        
        /* Touch device optimizations */
        @media (hover: none) and (pointer: coarse) {
          .android-nav-button {
            width: 60px;
            height: 60px;
          }
          
          .android-nav-button:active {
            transform: scale(0.95);
            background: linear-gradient(135deg, #0e4a7a 0%, #08355a 100%);
          }
          
          .nav-item {
            padding: 16px;
            font-size: 16px;
          }
          
          .nav-item:active {
            background: rgba(26, 107, 176, 0.15);
            transform: scale(0.98);
          }
        }
        
        /* Android-specific styles */
        @media (max-width: 768px) {
          :host {
            bottom: 90px;
            right: 16px;
          }
          
          .android-nav-button {
            width: 56px;
            height: 56px;
          }
          
          .nav-menu {
            bottom: 65px;
            right: 0;
            min-width: 220px;
          }
        }
        
        /* Small mobile devices */
        @media (max-width: 480px) {
          :host {
            bottom: 80px;
            right: 12px;
          }
          
          .android-nav-button {
            width: 52px;
            height: 52px;
          }
          
          .nav-menu {
            min-width: 200px;
            right: -10px;
          }
        }
        
        /* Very small devices */
        @media (max-width: 360px) {
          :host {
            bottom: 70px;
            right: 8px;
          }
          
          .android-nav-button {
            width: 48px;
            height: 48px;
          }
          
          .nav-menu {
            min-width: 180px;
            right: -15px;
          }
        }
        
        /* Hide on desktop if needed */
        @media (min-width: 1025px) {
          :host {
            display: none;
          }
        }
        
        /* Show only on touch devices */
        @media (pointer: coarse) and (max-width: 1024px) {
          :host {
            display: block;
          }
        }
        
        /* Ripple effect */
        .ripple {
          position: absolute;
          border-radius: 50%;
          background: rgba(255, 255, 255, 0.6);
          transform: scale(0);
          animation: ripple 0.6s linear;
          pointer-events: none;
        }
        
        @keyframes ripple {
          to {
            transform: scale(4);
            opacity: 0;
          }
        }
        
        /* Backdrop for menu */
        .menu-backdrop {
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: transparent;
          z-index: 9998;
          display: none;
        }
        
        .menu-backdrop.open {
          display: block;
        }
      </style>
      
      <div class="menu-backdrop"></div>
      
      <button class="android-nav-button" aria-label="Menu de navegação">
        <i data-feather="plus"></i>
      </button>
      
      <div class="nav-menu">
        <a href="#about" class="nav-item">
          <i data-feather="info"></i>
          Sobre Nós
        </a>
        
        <a href="#services" class="nav-item">
          <i data-feather="tool"></i>
          Serviços
        </a>
        
        <a href="#gallery" class="nav-item">
          <i data-feather="image"></i>
          Galeria
        </a>
        
        <div class="nav-divider"></div>
        
        <a href="#contact" class="nav-item">
          <i data-feather="phone"></i>
          Contactos
        </a>
        
        <a href="#recruitment" class="nav-item">
          <i data-feather="user-plus"></i>
          Recrutamento
        </a>
        
        <div class="nav-divider"></div>
        
        <button class="nav-item" id="scrollToTop">
          <i data-feather="arrow-up"></i>
          Topo
        </button>
        
        <button class="nav-item" id="sharePage">
          <i data-feather="share-2"></i>
          Partilhar
        </button>
      </div>
      
      <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    `;

    this.initializeButton();
  }

  initializeButton() {
    const shadowRoot = this.shadowRoot;
    const navButton = shadowRoot.querySelector('.android-nav-button');
    const navMenu = shadowRoot.querySelector('.nav-menu');
    const menuBackdrop = shadowRoot.querySelector('.menu-backdrop');
    const scrollToTopBtn = shadowRoot.getElementById('scrollToTop');
    const sharePageBtn = shadowRoot.getElementById('sharePage');

    let isMenuOpen = false;

    // Toggle menu
    navButton.addEventListener('click', (e) => {
      isMenuOpen = !isMenuOpen;
      navMenu.classList.toggle('open', isMenuOpen);
      navButton.classList.toggle('active', isMenuOpen);
      menuBackdrop.classList.toggle('open', isMenuOpen);
      
      // Update icon
      const icon = navButton.querySelector('i');
      icon.setAttribute('data-feather', isMenuOpen ? 'x' : 'plus');
      feather.replace();
      
      // Add ripple effect
      this.createRipple(e);
    });

    // Close menu when clicking backdrop
    menuBackdrop.addEventListener('click', () => {
      this.closeMenu();
    });

    // Close menu when clicking on menu items
    const menuItems = shadowRoot.querySelectorAll('.nav-item');
    menuItems.forEach(item => {
      item.addEventListener('click', (e) => {
        if (!item.id) { // Don't close for functional buttons
          setTimeout(() => this.closeMenu(), 300);
        }
        this.createRipple(e);
      });
    });

    // Scroll to top functionality
    scrollToTopBtn.addEventListener('click', (e) => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
      this.closeMenu();
      this.createRipple(e);
    });

    // Share functionality
    sharePageBtn.addEventListener('click', async (e) => {
      if (navigator.share) {
        try {
          await navigator.share({
            title: 'LOBINAVE - Estaleiro Naval do Lobito',
            text: 'Conheça a LOBINAVE - Excelência na Construção e Reparação Naval em Angola',
            url: window.location.href
          });
        } catch (err) {
          console.log('Erro ao partilhar:', err);
        }
      } else {
        // Fallback - copy to clipboard
        try {
          await navigator.clipboard.writeText(window.location.href);
          this.showToast('Link copiado para a área de transferência!');
        } catch (err) {
          console.log('Erro ao copiar link:', err);
        }
      }
      this.closeMenu();
      this.createRipple(e);
    });

    // Close menu when pressing escape key
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && isMenuOpen) {
        this.closeMenu();
      }
    });

    // Close menu when orientation changes
    window.addEventListener('orientationchange', () => {
      this.closeMenu();
    });

    // Initialize feather icons
    setTimeout(() => {
      feather.replace();
    }, 100);
  }

  closeMenu() {
    const shadowRoot = this.shadowRoot;
    const navButton = shadowRoot.querySelector('.android-nav-button');
    const navMenu = shadowRoot.querySelector('.nav-menu');
    const menuBackdrop = shadowRoot.querySelector('.menu-backdrop');
    const icon = navButton.querySelector('i');

    navMenu.classList.remove('open');
    navButton.classList.remove('active');
    menuBackdrop.classList.remove('open');
    icon.setAttribute('data-feather', 'plus');
    feather.replace();
  }

  createRipple(event) {
    const button = event.currentTarget;
    const circle = document.createElement('span');
    const diameter = Math.max(button.clientWidth, button.clientHeight);
    const radius = diameter / 2;

    circle.style.width = circle.style.height = `${diameter}px`;
    circle.style.left = `${event.clientX - button.getBoundingClientRect().left - radius}px`;
    circle.style.top = `${event.clientY - button.getBoundingClientRect().top - radius}px`;
    circle.classList.add('ripple');

    const ripple = button.getElementsByClassName('ripple')[0];
    if (ripple) {
      ripple.remove();
    }

    button.appendChild(circle);
  }

  showToast(message) {
    const toast = document.createElement('div');
    toast.textContent = message;
    toast.style.cssText = `
      position: fixed;
      bottom: 160px;
      left: 50%;
      transform: translateX(-50%);
      background: rgba(0, 0, 0, 0.8);
      color: white;
      padding: 12px 20px;
      border-radius: 8px;
      font-size: 14px;
      z-index: 10000;
      max-width: 80%;
      text-align: center;
    `;
    
    document.body.appendChild(toast);
    
    setTimeout(() => {
      toast.remove();
    }, 3000);
  }
}

customElements.define('android-nav-button', AndroidNavButton);