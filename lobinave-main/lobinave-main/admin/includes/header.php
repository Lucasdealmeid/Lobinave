
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo | LOBINAVE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Chart.js para gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar (incluído separadamente) -->
        <?php include 'includes/sidebar.php'; ?>
        
        <!-- Conteúdo principal -->
        <div class="main-content">
            <!-- Barra superior -->
            <header class="d-flex justify-content-between align-items-center mb-4 p-3 bg-white shadow-sm rounded">
                <div class="d-flex align-items-center">
                    <!-- Botão de toggle do sidebar para dispositivos móveis -->
                    <button id="sidebarToggle" class="btn btn-sm btn-outline-primary d-md-none me-2">
                        <i class="fas fa-bars"></i>
                    </button>
                    <h4 class="m-0">Painel Administrativo</h4>
                </div>
                <div class="d-flex align-items-center">
                    <!-- Botão de alternar tema (claro/escuro) -->
                    <button id="themeToggle" class="btn btn-sm btn-outline-secondary me-3" title="Alternar tema">
                        <i class="fas fa-moon"></i>
                    </button>
                    
                    <!-- Informações do usuário -->
                    <div class="dropdown">
                        <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user me-1"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-user-cog me-2"></i> Perfil</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt me-2"></i> Sair</a></li>
                        </ul>
                    </div>
                </div>
            </header>
            
            <!-- Container para alertas -->
            <div id="alertContainer"></div>