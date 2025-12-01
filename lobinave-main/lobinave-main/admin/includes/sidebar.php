<div class="sidebar">
    <div class="sidebar-header">
        <a href="dashboard.php" class="sidebar-brand">
            <img src="assets/img/lobinave-logo.png" alt="LOBINAVE Logo">
            <div>
                <span>LOBINAVE</span>
                <div class="d-flex align-items-center">
                    <div class="bg-secondary" style="height: 2px; width: 12px; margin-right: 4px;"></div>
                    <small>Admin</small>
                </div>
            </div>
        </a>
    </div>
    
    <div class="sidebar-menu">
        <a href="dashboard.php" class="<?php echo ($current_page == 'dashboard.php') ? 'active' : ''; ?>">
            <i class="fas fa-home"></i> Início
        </a>
        <a href="news.php" class="<?php echo ($current_page == 'news.php') ? 'active' : ''; ?>">
            <i class="fas fa-newspaper"></i> Notícias e Recrutamentos
        </a>
        <a href="logout.php">
            <i class="fas fa-sign-out-alt"></i> Sair
        </a>
    </div>
</div>