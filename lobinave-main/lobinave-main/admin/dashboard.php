<?php
// Incluir o cabeçalho
include 'includes/header.php';
include_once("conexao.php");

session_start();

if (!isset($_SESSION['loggin']) || $_SESSION['loggin']!==true){

 header('Location:login.php');
}

?>

<!-- Banner de boas-vindas -->
<div class="welcome-banner">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h2>Bem-vindo!</h2>
            <p>Painel administrativo da LOBINAVE - Estaleiro Naval do Lobito</p>
        </div>
        <div class="col-md-4 text-md-end">
            <p class="mb-0"><i class="fas fa-calendar-alt me-2"></i> <?php echo date('d/m/Y'); ?></p>
        </div>
    </div>
</div>

<!-- Cards de estatísticas -->
<div class="row mb-4">
    <!-- Visualizações -->
    <div class="col-md-4 mb-4">
        <div class="card card-stats bg-gradient-primary">
            <div class="icon">
                <i class="fas fa-eye"></i>
            </div>
            <div class="number"></div>
            <div class="card-title">Total de Visualizações</div>
        </div>
    </div>
    
    <!-- Participantes -->
    <div class="col-md-4 mb-4">
        <div class="card card-stats bg-gradient-success">
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <div class="number"></div>
            <div class="card-title">Participantes de Recrutamentos</div>
        </div>
    </div>
    
    <!-- Inscrições Espontâneas -->
    <div class="col-md-4 mb-4">
        <div class="card card-stats bg-gradient-info">
            <div class="icon">
                <i class="fas fa-envelope"></i>
            </div>
            <div class="number"></div>
            <div class="card-title">Inscrições Espontâneas</div>
        </div>
    </div>
</div>

<!-- Gráficos -->
<div class="row mb-4">
    <!-- Gráfico de Visualizações -->
    <div class="col-md-6 mb-4">
        <div class="chart-container">
            <canvas id="viewsChart"></canvas>
        </div>
    </div>
    
    <!-- Gráfico de Taxa de Conversão -->
    <div class="col-md-6 mb-4">
        <div class="chart-container">
            <canvas id="conversionChart"></canvas>
        </div>
    </div>
</div>


<?php
// Incluir o rodapé
include 'includes/footer.php';
?>