<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOBINAVE - Estaleiro Naval do Lobito</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="IMG/LUB1.png" type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.waves.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
</head>
<body class="font-poppins bg-gray-50">
    <header>
       
    </header>
    <custom-navbar></custom-navbar>
    <!-- Hero Section -->
  <br><br><br>
  <section class="relative h-screen flex items-center justify-center text-white overflow-hidden">

        <div id="hero-bg" class="absolute inset-0 z-0 bg-cover bg-center transition-all duration-1000 ease-in-out"></div>
<div class="container mx-auto px-6 z-10 text-center"> 

            <h1 class="text-4xl md:text-6xl font-bold mb-6">Excelência na Construção e Reparação Naval em Angola</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">A LOBINAVE dedica-se à construção e peças navais, metalomecânicas e estruturas offshore, envolvidas com qualidade e inovação na indústria marítima e petrolífera de Angola.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#about" class="bg-blue-800 hover:bg-blue-900 text-white px-8 py-3 rounded-lg font-medium transition duration-300">Conheça-nos</a>
                <a href="#contact" class="bg-white hover:bg-gray-100 text-blue-800 px-8 py-3 rounded-lg font-medium transition duration-300">Contacte-nos</a>
            </div>
        </div>
    </section>
    
    <!-- About Section -->
    <section data-aos="zoom-in-down" id="about" class="py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4 md:px-6">
            <h2 class="text-2xl md:text-3xl font-bold text-center mb-8 md:mb-16 text-blue-800">Sobre Nós</h2>
            <div class="mobile-stack flex flex-col lg:flex-row items-center gap-8 md:gap-12">
                <div class="mobile-full lg:w-1/2">
                    <img src="https://huggingface.co/spaces/Lourival-0303/lobinave-shipyard-waves/resolve/main/images/Imagem%20WhatsApp%202025-10-15%20%C3%A0s%2011.21.24_aedfa9d8.jpg" alt="Vista Aérea do Estaleiro" class="rounded-lg shadow-xl w-full">
                </div>
                <div class="mobile-full lg:w-1/2">
                    <p class="text-base md:text-lg mb-4 md:mb-6 text-gray-700">A LOBINAVE - Estaleiro Naval do Lobito, Lda., é um pilar histórico e estratégico da indústria naval angolana, com raízes que remontam a mais de meio século de atividade no setor de construção e reparação naval.</p>
                    <p class="text-base md:text-lg mb-4 md:mb-6 text-gray-700">• Construção de Estruturas ou Instalações de Produção Offshore para a indústria do petróleo e gás (incluindo conceção, engenharia, aprovisionamento, montagem e teste).</p>
                    <p class="text-base md:text-lg mb-4 md:mb-6 text-gray-700">O NOVO CICLO: GESTÃO SIMPORTEX (A PARTIR DE 2023)<br>
                    <button onclick="openModal()" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 mt-2">Ler mais</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Sobre -->
    <div id="modalSobre" class="modal-backdrop fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50 overflow-auto p-4">
        <div class="modal-content bg-white max-w-5xl w-full max-h-[70vh] p-4 md:p-6 rounded-xl shadow-lg relative overflow-y-auto" style="font-size: larger;">
            <!-- Botão fechar -->
            <button onclick="closeModal()" class="absolute top-3 right-3 text-gray-600 hover:text-black text-2xl">&times;</button>
            
            <!-- Conteúdo completo -->
            <p class="text-base md:text-lg text-gray-700 mb-4">A trajetória da LOBINAVE entrou numa nova fase estratégica em 2023. Por orientação do Titular do Poder Executivo, a gestão do estaleiro da LOBINAVE foi transferida para a esfera jurídica da SIMPORTEX-Comercialização de Equipamentos e Meios Materiais-Importação e Exportação-E.P.</p>
            <p class="text-base md:text-lg text-gray-700 mb-4">Este processo culminou com a assinatura do Contrato de Cessão de Quotas. Para garantir a gestão corrente e o normal funcionamento do estaleiro, o Conselho de Administração da SIMPORTEX-E.P. deliberou a nomeação do novo corpo de gestão em 21 de Novembro de 2023 (Deliberação n.º 06/2023).</p>
            <p class="text-base md:text-lg text-gray-700 mb-4">Raízes Históricas e Evolução Institucional:<br>
            A história da LOBINAVE teve o seu início com a fundação da Sorefame de Angola em 1954. A vocação marítima e a localização geográfica estratégica no Lobito levaram a empresa a adquirir, em 1957, o objecto social de construção e reparação de navios, integrando subsequentemente a metalomecânica pesada.</p>
            <p class="text-base md:text-lg text-gray-700 mb-4">Com a Independência de Angola, a Sorefame de Angola foi alvo de confisco (Lei n.º 54/76), passando a integrar o património do Estado. Em 1983, no âmbito da estratégia de desenvolvimento económico nacional, o Conselho de Ministros criou, através do Decreto n.º 70/83 de 24 de Março, a empresa estatal Estaleiros Navais de Angola Unidade Económica Estatal (Estalnave – U.E.E.).</p>
            <p class="text-base md:text-lg text-gray-700 mb-4">A Criação e a Parceria com a Sonangol:<br>
            Um marco crucial ocorreu em 1996 quando a Estalnave, UEE, se associou à Lisnave Internacional, S.A., resultando na criação da empresa mista: LOBINAVE, Lda. – Estaleiro Naval do Lobito, Limitada.</p>
            <p class="text-base md:text-lg text-gray-700 mb-4">Após uma reestruturação estratégica, em 16 de Janeiro de 2006, a participação social da Lisnave Internacional, S.A. foi vendida à Sonangol, conferindo à LOBINAVE um objecto social expandido focado na:<br>
            • Reparação e Manutenção de Navios;</p>
        </div>
    </div>
    
    <!-- Mission Section -->
    <section data-aos="zoom-in-down" id="Mission" class="py-12 md:py-20 bg-gray-100">
        <div class="container mx-auto px-4 md:px-6">
            <h2 class="text-2xl md:text-3xl font-bold text-center mb-8 md:mb-16 text-blue-800">Missão, Visão e Valores</h2>
            <div class="services-grid grid md:grid-cols-3 gap-6 md:gap-8">
                <div class="bg-white p-6 md:p-8 rounded-lg shadow-md text-center">
                    <i data-feather="target" class="w-10 h-10 md:w-12 md:h-12 mx-auto text-blue-800 mb-4"></i>
                    <h3 class="text-lg md:text-xl font-bold mb-3 md:mb-4">Missão</h3>
                    <p class="text-gray-700 text-sm md:text-base">Desenvolver atividades de metalomecânica, construir e reparar navios com excelência.</p>
                </div>
                <div class="bg-white p-6 md:p-8 rounded-lg shadow-md text-center">
                    <i data-feather="eye" class="w-10 h-10 md:w-12 md:h-12 mx-auto text-blue-800 mb-4"></i>
                    <h3 class="text-lg md:text-xl font-bold mb-3 md:mb-4">Visão</h3>
                    <p class="text-gray-700 text-sm md:text-base">Ser líder na construção e peças navais em Angola e na África Austral, desenvolvendo continuamente embarcações e serviços inovadores.</p>
                </div>
                <div class="bg-white p-6 md:p-8 rounded-lg shadow-md text-center">
                    <i data-feather="award" class="w-10 h-10 md:w-12 md:h-12 mx-auto text-blue-800 mb-4"></i>
                    <h3 class="text-lg md:text-xl font-bold mb-3 md:mb-4">Valores</h3>
                    <p class="text-gray-700 text-sm md:text-base">Qualidade | Rigor | Excelência | Inovação</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Org Chart Section -->
    <section data-aos="zoom-in-down" id="orgchart" class="py-12 md:py-20 bg-white">
       <custom-orgchart></custom-orgchart>
    </section>
    
    <!-- Services Section -->
    <section data-aos="zoom-in-down" id="services" class="py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4 md:px-6">
            <h2 class="text-2xl md:text-3xl font-bold text-center mb-8 md:mb-16 text-blue-800">Nossos Serviços</h2>
            <div class="services-grid grid md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                <div class="bg-gray-100 rounded-lg overflow-hidden shadow-lg transition-transform duration-300 hover:scale-105">
                    <img src="https://huggingface.co/spaces/Lourival-0303/lobinave-shipyard-waves/resolve/main/images/Imagem%20WhatsApp%202025-10-15%20%C3%A0s%2011.40.36_62bfc569.jpg" alt="Reparação Naval" class="w-full h-40 md:h-48 object-cover">
                    <div class="p-4 md:p-6">
                        <h3 class="text-lg md:text-xl font-bold mb-2 md:mb-3 text-blue-800">Construção Naval</h3>
                        <p class="text-gray-700 mb-3 md:mb-4 text-sm md:text-base">Construção de embarcações personalizadas com tecnologia de ponta e materiais de qualidade.</p>
                        <a href="#" class="text-blue-800 font-medium hover:underline text-sm md:text-base">Saiba Mais</a>
                    </div>
                </div>
                <div class="bg-gray-100 rounded-lg overflow-hidden shadow-lg transition-transform duration-300 hover:scale-105">
                    <img src="https://huggingface.co/spaces/Lourival-0303/lobinave-shipyard-waves/resolve/main/images/Imagem%20WhatsApp%202025-10-15%20%C3%A0s%2011.43.44_ae415420.jpg" alt="Construção Naval" class="w-full h-40 md:h-48 object-cover">
                    <div class="p-4 md:p-6">
                        <h3 class="text-lg md:text-xl font-bold mb-2 md:mb-3 text-blue-800">Reparação Naval</h3>
                        <p class="text-gray-700 mb-3 md:mb-4 text-sm md:text-base">Serviços especializados em reparação e manutenção de embarcações de todos os portes.</p>
                        <a href="#" class="text-blue-800 font-medium hover:underline text-sm md:text-base">Saiba Mais</a>
                    </div>
                </div>
                <div class="bg-gray-100 rounded-lg overflow-hidden shadow-lg transition-transform duration-300 hover:scale-105">
                    <img src="https://huggingface.co/spaces/Lourival-0303/lobinave-shipyard-waves/resolve/main/images/Imagem%20WhatsApp%202025-10-15%20%C3%A0s%2011.40.36_60039a7d.jpg" alt="Metalomecânica" class="w-full h-40 md:h-48 object-cover">
                    <div class="p-4 md:p-6">
                        <h3 class="text-lg md:text-xl font-bold mb-2 md:mb-3 text-blue-800">Metalomecânica</h3>
                        <p class="text-gray-700 mb-3 md:mb-4 text-sm md:text-base">Fabricação de estruturas metálicas complexas para diversas aplicações industriais.</p>
                        <a href="#" class="text-blue-800 font-medium hover:underline text-sm md:text-base">Saiba Mais</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Partners Section -->
    <section data-aos="zoom-in-down" id="partners" class="py-12 md:py-20 bg-gray-100">
        <div class="container mx-auto px-4 md:px-6">
            <h2 class="text-2xl md:text-3xl font-bold text-center mb-8 md:mb-16 text-blue-800">Nossos Parceiros</h2>
            <p class="text-center text-gray-700 max-w-2xl mx-auto mb-8 md:mb-12 text-sm md:text-base">Os nossos parceiros estratégicos apresentados para o desenvolvimento contínuo da indústria naval e metalomecânica em Angola.</p>
            <div class="partners-grid grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-8">
                <div class="bg-white p-4 md:p-6 rounded-lg shadow-md flex items-center justify-center h-24 md:h-32">
                    <img src="https://huggingface.co/spaces/Lourival-0303/lobinave-shipyard-waves/resolve/main/images/IMG-20251015-WA0091.jpg" alt="Parceiro 1" class="h-16 md:h-20 object-contain">
                </div>
                <div class="bg-white p-4 md:p-6 rounded-lg shadow-md flex items-center justify-center h-24 md:h-32">
                    <img src="https://huggingface.co/spaces/Lourival-0303/lobinave-shipyard-waves/resolve/main/images/IMG-20251015-WA0092.jpg" alt="Parceiro 2" class="h-16 md:h-20 object-contain">
                </div>
                <div class="bg-white p-4 md:p-6 rounded-lg shadow-md flex items-center justify-center h-24 md:h-32">
                    <img src="https://huggingface.co/spaces/Lourival-0303/lobinave-shipyard-waves/resolve/main/images/IMG-20251015-WA0093.jpg" alt="Parceiro 3" class="h-16 md:h-20 object-contain">
                </div>
                <div class="bg-white p-4 md:p-6 rounded-lg shadow-md flex items-center justify-center h-24 md:h-32">
                    <img src="https://huggingface.co/spaces/Lourival-0303/lobinave-shipyard-waves/resolve/main/images/Imagem%20WhatsApp%202025-10-15%20%C3%A0s%2014.34.18_d0f37a04.jpg" alt="Parceiro 4" class="h-16 md:h-20 object-contain">
                </div>
                <div class="bg-white p-4 md:p-6 rounded-lg shadow-md flex items-center justify-center h-24 md:h-32">
                    <img src="https://huggingface.co/spaces/Lourival-0303/lobinave-shipyard-waves/resolve/main/images/Imagem%20WhatsApp%202025-10-15%20%C3%A0s%2014.34.35_afeb40fa.jpg" alt="Parceiro 5" class="h-16 md:h-20 object-contain">
                </div>
                <div class="bg-white p-4 md:p-6 rounded-lg shadow-md flex items-center justify-center h-24 md:h-32">
                    <img src="https://huggingface.co/spaces/Lourival-0303/lobinave-shipyard-waves/resolve/main/images/IMG-20251015-WA0085.jpg" alt="Parceiro 6" class="h-16 md:h-20 object-contain">
                </div>
                <div class="bg-white p-4 md:p-6 rounded-lg shadow-md flex items-center justify-center h-24 md:h-32">
                    <img src="https://huggingface.co/spaces/Lourival-0303/lobinave-shipyard-waves/resolve/main/images/IMG-20251015-WA0086.jpg" alt="Parceiro 7" class="h-16 md:h-20 object-contain">
                </div>
                <div class="bg-white p-4 md:p-6 rounded-lg shadow-md flex items-center justify-center h-24 md:h-32">
                    <img src="https://huggingface.co/spaces/Lourival-0303/lobinave-shipyard-waves/resolve/main/images/IMG-20251015-WA0087.jpg" alt="Parceiro 8" class="h-16 md:h-20 object-contain">
                </div>
                <div class="bg-white p-4 md:p-6 rounded-lg shadow-md flex items-center justify-center h-24 md:h-32">
                    <img src="https://huggingface.co/spaces/Lourival-0303/lobinave-shipyard-waves/resolve/main/images/IMG-20251015-WA0088.jpg" alt="Parceiro 9" class="h-16 md:h-20 object-contain">
                </div>
                <div class="bg-white p-4 md:p-6 rounded-lg shadow-md flex items-center justify-center h-24 md:h-32">
                    <img src="https://huggingface.co/spaces/Lourival-0303/lobinave-shipyard-waves/resolve/main/images/IMG-20251015-WA0089.jpg" alt="Parceiro 10" class="h-16 md:h-20 object-contain">
                </div>
                <div class="bg-white p-4 md:p-6 rounded-lg shadow-md flex items-center justify-center h-24 md:h-32">
                    <img src="https://huggingface.co/spaces/Lourival-0303/lobinave-shipyard-waves/resolve/main/images/IMG-20251015-WA0090.jpg" alt="Parceiro 11" class="h-16 md:h-20 object-contain">
                </div>
            </div>
        </div>
    </section>
    
    <!-- News Section -->
    <section data-aos="zoom-in-down" id="news" class="py-12 md:py-20 bg-gray-100">
        <div class="container mx-auto px-4 md:px-6">
            <h2 class="text-2xl md:text-3xl font-bold text-center mb-8 md:mb-16 text-blue-800">Notícias e Atualizações</h2>
            <div class="services-grid grid md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="http://static.photos/industry/640x360/10" alt="Novo Contrato" class="w-full h-40 md:h-48 object-cover">
                    <div class="p-4 md:p-6">
                        <span class="text-blue-800 text-xs md:text-sm">12/06/2025</span>
                        <h3 class="text-lg md:text-xl font-bold my-2">Novo Contrato com Empresa Petrolífera</h3>
                        <p class="text-gray-600 mb-3 md:mb-4 text-sm md:text-base">A LOBINAVE assinou novo contrato para construção de estruturas offshore...</p>
                        <a href="#" class="text-blue-800 font-medium hover:underline text-sm md:text-base">Ler Mais</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="http://static.photos/industry/640x360/11" alt="Novas Instalações" class="w-full h-40 md:h-48 object-cover">
                    <div class="p-4 md:p-6">
                        <span class="text-blue-800 text-xs md:text-sm">28/05/2025</span>
                        <h3 class="text-lg md:text-xl font-bold my-2">Ampliação das Instalações</h3>
                        <p class="text-gray-600 mb-3 md:mb-4 text-sm md:text-base">O estaleiro naval está em processo de expansão para aumentar a capacidade produtiva...</p>
                        <a href="#" class="text-blue-800 font-medium hover:underline text-sm md:text-base">Ler Mais</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img src="http://static.photos/industry/640x360/12" alt="Evento" class="w-full h-40 md:h-48 object-cover">
                    <div class="p-4 md:p-6">
                        <span class="text-blue-800 text-xs md:text-sm">15/05/2025</span>
                        <h3 class="text-lg md:text-xl font-bold my-2">Participação em Feira Internacional</h3>
                        <p class="text-gray-600 mb-3 md:mb-4 text-sm md:text-base">Nossa equipe esteve presente na maior feira de construção naval da África...</p>
                        <a href="#" class="text-blue-800 font-medium hover:underline text-sm md:text-base">Ler Mais</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Gallery Section -->
    <section data-aos="zoom-in-down" id="gallery" class="py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4 md:px-6">
            <h2 class="text-2xl md:text-3xl font-bold text-center mb-8 md:mb-16 text-blue-800">Galeria</h2>
            <div class="gallery-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6">
                <div class="overflow-hidden rounded-lg shadow-lg">
                    <img src="https://huggingface.co/spaces/Lourival-0303/lobinave-shipyard-waves/resolve/main/images/Imagem%20WhatsApp%202025-10-15%20%C3%A0s%2011.32.54_7c44f334.jpg" alt="Estaleiro Naval" class="gallery-image w-full h-48 md:h-64 object-cover transition duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow-lg">
                    <img src="https://huggingface.co/spaces/Lourival-0303/lobinave-shipyard-waves/resolve/main/images/Imagem%20WhatsApp%202025-10-15%20%C3%A0s%2011.09.41_eec6fd3b.jpg" alt="Trabalhadores" class="gallery-image w-full h-48 md:h-64 object-cover transition duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow-lg">
                    <img src="https://huggingface.co/spaces/Lourival-0303/lobinave-shipyard-waves/resolve/main/images/Imagem%20WhatsApp%202025-10-15%20%C3%A0s%2011.10.14_55919e03.jpg" alt="Operações Navais" class="gallery-image w-full h-48 md:h-64 object-cover transition duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow-lg">
                    <img src="https://huggingface.co/spaces/Lourival-0303/lobinave-shipyard-waves/resolve/main/images/Imagem%20WhatsApp%202025-10-15%20%C3%A0s%2011.12.30_5caa3bea.jpg" alt="Construção Naval" class="gallery-image w-full h-48 md:h-64 object-cover transition duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow-lg">
                    <img src="https://huggingface.co/spaces/Lourival-0303/lobinave-shipyard-waves/resolve/main/images/Imagem%20WhatsApp%202025-10-15%20%C3%A0s%2011.21.24_aedfa9d8.jpg" alt="Equipamentos" class="gallery-image w-full h-48 md:h-64 object-cover transition duration-300">
                </div>
                <div class="overflow-hidden rounded-lg shadow-lg">
                    <img src="https://huggingface.co/spaces/Lourival-0303/lobinave-shipyard-waves/resolve/main/images/Imagem%20WhatsApp%202025-10-15%20%C3%A0s%2011.40.36_62bfc569.jpg" alt="Infraestrutura" class="gallery-image w-full h-48 md:h-64 object-cover transition duration-300">
                </div>
            </div>
        </div>
    </section>
    
    <!-- Recruitment Section -->
    <section data-aos="zoom-in-down" id="recruitment" class="py-12 md:py-20 bg-blue-800 text-white">
        <div class="container mx-auto px-4 md:px-6">
            <h2 class="text-2xl md:text-3xl font-bold text-center mb-8 md:mb-16">Recrutamento Espontâneo</h2>
            <form action="email.php" method="POST" id="recruitmentForm" class="max-w-2xl mx-auto">
                <div class="form-grid grid md:grid-cols-2 gap-4 md:gap-6 mb-6">
                    <div>
                        <label for="fullName" class="block mb-2">Nome completo</label>
                        <input type="text" id="fullName" name="nome" required class="w-full px-3 py-2 md:px-4 md:py-2 rounded text-gray-800">
                    </div>
                    <div>
                        <label for="idNumber" class="block mb-2">Bilhete de Identidade</label>
                        <input type="text" id="idNumber" name="bi" required class="w-full px-3 py-2 md:px-4 md:py-2 rounded text-gray-800">
                    </div>
                </div>
                <div class="mb-6">
                    <label for="area" class="block mb-2">Área a que se candidata</label>
                    <select id="area" name="area" required class="w-full px-3 py-2 md:px-4 md:py-2 rounded text-gray-800">
                        <option value="">Selecione uma área</option>
                        <option value="engenharia">Engenharia Naval</option>
                        <option value="metalomecanica">Metalomecânica</option>
                        <option value="operacoes">Operações</option>
                        <option value="administrativo">Administrativo</option>
                    </select>
                </div>
                <div class="mb-6">
                    <label for="cv" class="block mb-2">Carregar CV (PDF)</label>
                    <input type="file" id="cv" name="cv" accept=".pdf" required class="w-full">
                </div>
                   <div class="mb-6">
                    <label for="observations" class="block mb-2">Email</label>
                    <input id="email" required type="email" name="email" class="w-full px-3 py-2 md:px-4 md:py-2 rounded text-gray-800">

                </div>
                <div class="mb-6">
                    <label for="observations" class="block mb-2">Observações</label>
                    <textarea id="observations" name="obs" rows="3" class="w-full px-3 py-2 md:px-4 md:py-2 rounded text-gray-800" required></textarea>
                </div>


                <input type="submit" value="Enviar Candidatura" name="enviar" class="bg-white text-blue-800 px-6 py-3 md:px-8 md:py-3 rounded-lg font-medium hover:bg-gray-100 transition duration-300 w-full md:w-auto">
              
            </form>
        </div>
    </section>
    
    <!-- Contact Section -->
    <section data-aos="zoom-in-down" id="contact" class="py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4 md:px-6">
            <h2 class="text-2xl md:text-3xl font-bold text-center mb-8 md:mb-16 text-blue-800">Contactos</h2>
            <div class="mobile-stack flex flex-col lg:flex-row gap-8 md:gap-12">
                <div class="mobile-full lg:w-1/2">
                    <div class="mb-6 md:mb-8">
                        <h3 class="text-lg md:text-xl font-bold mb-3 md:mb-4 text-blue-800">Informações de Contacto</h3>
                        <div class="space-y-3 md:space-y-4">
                            <div class="flex items-start">
                                <i data-feather="phone" class="mr-3 md:mr-4 text-blue-800 mt-1"></i>
                                <p class="text-sm md:text-base">Telefone: 922 328 088</p>
                            </div>
                            <div class="flex items-start">
                                <i data-feather="mail" class="mr-3 md:mr-4 text-blue-800 mt-1"></i>
                                <p class="text-sm md:text-base">E-mail: lobinave.geral@lobinave.ao</p>
                            </div>
                            <div class="flex items-start">
                                <i data-feather="map-pin" class="mr-3 md:mr-4 text-blue-800 mt-1"></i>
                                <p class="text-sm md:text-base">Endereço: Bairro Lobito Velho, Benguela – Angola</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-lg md:text-xl font-bold mb-3 md:mb-4 text-blue-800">Redes Sociais</h3>
                        <div class="flex gap-3 md:gap-4">
                            <a href="https://www.facebook.com/profile.php?id=100090523729664&sk=followers" class="bg-blue-800 text-white p-2 md:p-3 rounded-full hover:bg-blue-900 transition duration-300">
                                <i data-feather="facebook" class="w-4 h-4 md:w-6 md:h-6"></i>
                            </a>
                            <a href="#" class="bg-blue-800 text-white p-2 md:p-3 rounded-full hover:bg-blue-900 transition duration-300">
                                <i data-feather="linkedin" class="w-4 h-4 md:w-6 md:h-6"></i>
                            </a>
                            <a href="https://www.instagram.com/lobinave_lda?igsh=bnppdmcxc2pyMG5v" class="bg-blue-800 text-white p-2 md:p-3 rounded-full hover:bg-blue-900 transition duration-300">
                                <i data-feather="instagram" class="w-4 h-4 md:w-6 md:h-6"></i>
                            </a>
                            <a href="#" class="bg-green-500 text-white p-2 md:p-3 rounded-full hover:bg-green-600 transition duration-300">
                                <i data-feather="message-square" class="w-4 h-4 md:w-6 md:h-6"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="mobile-full lg:w-1/2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.707437217078!2d13.5313153156624!3d-12.13145699139979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1bae43a9b1f1c9b5%3A0x1bae43a9b1f1c9b5!2sLobito%2C%20Angola!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" class="rounded-lg shadow-lg"></iframe>
                </div>
            </div>
        </div>
    </section>

    <custom-footer data-aos="zoom-in-down" ></custom-footer>
    
    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/244934344244?text=Olá, temos o przer de o atender \n queira espor a sua questão!" class="whatsapp-button fixed bg-green-500 text-white p-3 md:p-4 rounded-full shadow-lg hover:bg-green-600 transition duration-300">
        <i data-feather="message-square" class="w-5 h-5 md:w-6 md:h-6"></i>
    </a>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>
    <script src="components/navbar.js"></script>
    <script src="components/footer.js"></script>
    <script src="components/orgchart.js"></script>
     <script src="components/nav-android.js"></script>
    <script src="script.js"></script>
    <script>
        feather.replace();
        
        // Hero background images array
        const heroImages = [
            'https://huggingface.co/spaces/Lourival-0303/lobinave-shipyard-waves/resolve/main/images/Imagem%20WhatsApp%202025-10-15%20%C3%A0s%2011.21.09_f0a31a6e.jpg',
            'https://huggingface.co/spaces/Lourival-0303/lobinave-shipyard-waves/resolve/main/images/Imagem%20WhatsApp%202025-10-15%20%C3%A0s%2011.21.24_aedfa9d8.jpg',
            'https://huggingface.co/spaces/Lourival-0303/lobinave-shipyard-waves/resolve/main/images/Imagem%20WhatsApp%202025-10-15%20%C3%A0s%2011.32.54_7c44f334.jpg'
        ];
        
        // Auto-rotate hero background images
        let currentImage = 0;
        const heroBg = document.getElementById('hero-bg');
        
        function changeHeroBackground() {
            currentImage = (currentImage + 1) % heroImages.length;
            heroBg.style.backgroundImage = `url('${heroImages[currentImage]}')`;
        }
        
        function openModal() {
            document.getElementById('modalSobre').classList.remove('hidden');
        }
        
        function closeModal() {
            document.getElementById('modalSobre').classList.add('hidden');
        }

        // Fecha clicando fora da caixa
        document.getElementById('modalSobre').addEventListener('click', function(e){
            if(e.target === this) closeModal();
        });
        
        // Set initial background and start rotation
        heroBg.style.backgroundImage = `url('${heroImages[0]}')`;
        setInterval(changeHeroBackground, 5000);
    </script>
    <!-- Adicione isto antes do fechamento do body -->


</body>

</html>


