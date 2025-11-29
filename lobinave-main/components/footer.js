class CustomFooter extends HTMLElement {
  connectedCallback() {
    this.attachShadow({ mode: 'open' });
    this.shadowRoot.innerHTML = `
      <style>
        footer {
          background-color: #1a6bb0;
color: white;
          padding: 3rem 2rem;
        }
        .footer-content {
          max-width: 1200px;
          margin: 0 auto;
          display: grid;
          grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
          gap: 2rem;
        }
        .footer-logo {
          font-size: 1.5rem;
          font-weight: bold;
          margin-bottom: 1rem;
          display: flex;
          align-items: center;
        }
        .footer-logo i {
          margin-right: 0.5rem;
        }
        .footer-links h3 {
          font-size: 1.25rem;
          margin-bottom: 1rem;
          font-weight: 600;
        }
        .footer-links ul {
          list-style: none;
          padding: 0;
          margin: 0;
        }
        .footer-links li {
          margin-bottom: 0.5rem;
        }
        .footer-links a {
          color: #b0b7bf;
          text-decoration: none;
          transition: color 0.3s ease;
        }
        .footer-links a:hover {
          color: white;
        }
        .copyright {
          text-align: center;
          padding-top: 2rem;
          margin-top: 2rem;
          border-top: 1px solid rgba(255, 255, 255, 0.1);
          color: #b0b7bf;
        }
        @media (max-width: 768px) {
          .footer-content {
            grid-template-columns: 1fr;
          }
        }
      </style>
      <footer>
        <div class="footer-content">
          <div class="footer-about">
            <div class="footer-logo">
              <i data-feather="anchor"></i>
              <span>
               <img src="IMG/LUB.jfif" alt="logo" style="width:50%">
              </span>
            </div>
            <p>Excelência na Construção e Reparação Naval em Angola.</p>
          </div>
          <div class="footer-links">
            <h3>Links Rápidos</h3>
            <ul>
              <li><a href="#about">Sobre Nós</a></li>
              <li><a href="#orgchart">Organograma</a></li>
              <li><a href="#services">Serviços</a></li>
              <li><a href="#partners">Parceiros</a></li>
              <li><a href="#Mission">Equipa</a></li>
              <li><a href="#news">Notícias</a></li>
<li><a href="#gallery">Galeria</a></li>
              <li><a href="#recruitment">Recrutamento</a></li>
              <li><a href="#contact">Contactos</a></li>
</ul>
          </div>
          <div class="footer-links">
            <h3>Contactos</h3>
            <ul>
              <li><i data-feather="phone"></i> 922 328 088</li>
              <li><i data-feather="mail"></i> lobinave.geral@lobinave.ao</li>
              <li><i data-feather="map-pin"></i> Bairro Lobito Velho, Benguela</li>
            </ul>
          </div>
        </div>
        <div class="copyright">
          <p>&copy; 2025 LOBINAVE - Estaleiro Naval do Lobito. Todos os direitos reservados.</p>
        </div>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    `;

    // Replace feather icons
    setTimeout(() => {
      feather.replace();
    }, 100);
  }
}

customElements.define('custom-footer', CustomFooter);