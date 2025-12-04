// Função para inicializar todos os gráficos
function initCharts() {
    initViewsChart();
    initConversionChart();
}

// Gráfico de visualizações por período
function initViewsChart() {
    const ctx = document.getElementById('viewsChart');
    
    if (!ctx) return;
    
    // Dados simulados de visualizações
    const viewsData = {
        labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun'],
        datasets: [{
            label: 'Visualizações',
            data: [1500, 1800, 2200, 2400, 2800, 3200],
            backgroundColor: 'rgba(0, 123, 255, 0.2)',
            borderColor: 'rgba(0, 123, 255, 1)',
            borderWidth: 2,
            tension: 0.4,
            fill: true
        }]
    };
    
    new Chart(ctx, {
        type: 'line',
        data: viewsData,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Visualizações por Período'
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}

// Gráfico de taxa de conversão
function initConversionChart() {
    const ctx = document.getElementById('conversionChart');
    
    if (!ctx) return;
    
    // Dados simulados de taxa de conversão
    const conversionData = {
        labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun'],
        datasets: [{
            label: 'Taxa de Conversão (%)',
            data: [2.4, 2.8, 3.2, 3.5, 4.1, 4.5],
            backgroundColor: 'rgba(40, 167, 69, 0.2)',
            borderColor: 'rgba(40, 167, 69, 1)',
            borderWidth: 2,
            tension: 0.4,
            fill: true
        }]
    };
    
    new Chart(ctx, {
        type: 'line',
        data: conversionData,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Taxa de Conversão de Candidaturas'
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
}

// Função para alternar o estado de uma notícia ou recrutamento
function toggleStatus(id, type) {
    // Em um sistema real, isso enviaria uma requisição AJAX para o servidor
    // Aqui, apenas alteramos o texto e classe do botão para simular
    const statusBtn = document.getElementById(`status-${type}-${id}`);
    
    if (statusBtn) {
        if (statusBtn.classList.contains('badge-success')) {
            statusBtn.classList.remove('badge-success');
            statusBtn.classList.add('badge-danger');
            statusBtn.textContent = 'Inativo';
        } else {
            statusBtn.classList.remove('badge-danger');
            statusBtn.classList.add('badge-success');
            statusBtn.textContent = 'Ativo';
        }
    }
}

// Função para excluir uma notícia ou recrutamento
function deleteItem(id, type) {
    if (confirm(`Tem certeza que deseja excluir este item?`)) {
        // Em um sistema real, isso enviaria uma requisição AJAX para o servidor
        // Aqui, apenas removemos o elemento da DOM para simular
        const item = document.getElementById(`${type}-${id}`);
        if (item) {
            item.remove();
            showAlert(`Item excluído com sucesso!`, 'success');
        }
    }
}

// Função para mostrar alertas
function showAlert(message, type = 'info') {
    const alertContainer = document.getElementById('alertContainer');
    
    if (!alertContainer) return;
    
    const alert = document.createElement('div');
    alert.className = `alert alert-${type} alert-dismissible fade show`;
    alert.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    `;
    
    alertContainer.appendChild(alert);
    
    // Auto-remover após 5 segundos
    setTimeout(() => {
        alert.classList.remove('show');
        setTimeout(() => alert.remove(), 300);
    }, 5000);
}

// Função para exportar dados para CSV
function exportToCSV(tableId, filename = 'export') {
    const table = document.getElementById(tableId);
    if (!table) return;
    
    let csv = [];
    const rows = table.querySelectorAll('tr');
    
    for (let i = 0; i < rows.length; i++) {
        const row = [], cols = rows[i].querySelectorAll('td, th');
        
        for (let j = 0; j < cols.length; j++) {
            // Remover HTML e limpar o texto
            let data = cols[j].innerText.replace(/(\
\n|\n|\r)/gm, '').replace(/(\\s\s)/gm, ' ');
            // Escapar aspas duplas
            data = data.replace(/\"/g, '""');
            // Adicionar aspas duplas ao redor de cada campo
            row.push('"' + data + '"');
        }
        csv.push(row.join(','));
    }
    
    // Download do arquivo CSV
    const csvFile = new Blob([csv.join('\n')], {type: 'text/csv'});
    const downloadLink = document.createElement('a');
    
    downloadLink.download = filename + '.csv';
    downloadLink.href = window.URL.createObjectURL(csvFile);
    downloadLink.style.display = 'none';
    
    document.body.appendChild(downloadLink);
    downloadLink.click();
    document.body.removeChild(downloadLink);
}

// Inicializar quando o DOM estiver pronto
document.addEventListener('DOMContentLoaded', function() {
    // Inicializar tooltips do Bootstrap
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
    
    // Toggle do sidebar para dispositivos móveis
    const sidebarToggleBtn = document.getElementById('sidebarToggle');
    if (sidebarToggleBtn) {
        sidebarToggleBtn.addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
            document.querySelector('.main-content').classList.toggle('active');
        });
    }
    
    // Fechar sidebar ao clicar em links em dispositivos móveis
    const sidebarLinks = document.querySelectorAll('.sidebar-menu a');
    if (window.innerWidth <= 768) {
        sidebarLinks.forEach(link => {
            link.addEventListener('click', function() {
                document.querySelector('.sidebar').classList.remove('active');
                document.querySelector('.main-content').classList.remove('active');
            });
        });
    }
    
    // Inicializar gráficos se estivermos na página do dashboard
    if (document.getElementById('viewsChart') || document.getElementById('conversionChart')) {
        initCharts();
    }
    
    // Manipulador para o formulário de adicionar notícia
    const addNewsForm = document.getElementById('addNewsForm');
    if (addNewsForm) {
        addNewsForm.addEventListener('submit', function(e) {
            e.preventDefault();
            // Aqui seria o código para enviar os dados para o servidor
            // Como estamos simulando, apenas mostramos um alerta de sucesso
            showAlert('Notícia adicionada com sucesso!', 'success');
            this.reset();
        });
    }
    
    // Manipulador para o formulário de adicionar recrutamento
    const addRecruitmentForm = document.getElementById('addRecruitmentForm');
    if (addRecruitmentForm) {
        addRecruitmentForm.addEventListener('submit', function(e) {
            e.preventDefault();
            // Aqui seria o código para enviar os dados para o servidor
            // Como estamos simulando, apenas mostramos um alerta de sucesso
            showAlert('Recrutamento adicionado com sucesso!', 'success');
            this.reset();
        });
    }
    
    // Manipulador para o botão de exportar CSV
    const exportBtn = document.getElementById('exportCsv');
    if (exportBtn) {
        exportBtn.addEventListener('click', function() {
            exportToCSV('candidatesTable', 'candidatos_lobinave');
        });
    }
    
    // Manipulador para o botão de alternar modo claro/escuro
    const themeToggleBtn = document.getElementById('themeToggle');
    if (themeToggleBtn) {
        themeToggleBtn.addEventListener('click', function() {
            document.body.classList.toggle('dark-mode');
            
            // Salvar preferência no localStorage
            if (document.body.classList.contains('dark-mode')) {
                localStorage.setItem('theme', 'dark');
                this.innerHTML = '<i class="fas fa-sun"></i>';
            } else {
                localStorage.setItem('theme', 'light');
                this.innerHTML = '<i class="fas fa-moon"></i>';
            }
        });
        
        // Verificar preferência salva
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme === 'dark') {
            document.body.classList.add('dark-mode');
            themeToggleBtn.innerHTML = '<i class="fas fa-sun"></i>';
        }
    }
});