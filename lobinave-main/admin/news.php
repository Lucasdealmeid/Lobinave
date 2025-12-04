<?php
// Incluir o cabeçalho
include 'includes/header.php';

include_once("conexao.php");

session_start();

if (!isset($_SESSION['loggin']) || $_SESSION['loggin']!==true){

 header('Location:login.php');
}

if (isset($_POST['add'])) {

    $titulo= $_POST['titulo'];

    $img = $_FILES['imagem'];

    $data = $_POST['data'];

    $descricao = $_POST['descricao'];

    $status = $_POST['status'];

    // Lista de formatos permitidos
    $formatosPermitidos = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];

    // 1️⃣ Verificar erros no upload
    if ($img['error'] === 0) {

        // 2️⃣ Verificar o tipo MIME real da imagem
        $tipoImagem = mime_content_type($img['tmp_name']);

        if (!in_array($tipoImagem, $formatosPermitidos)) {
            echo "<script>alert('Formato de imagem inválido! Apenas JPG, JPEG, PNG ou GIF.');</script>";
        } else {

    // pasta onde o arquivo ficará
    $pasta = "img noticias/";

    // novo nome único
    $nomeArquivo = uniqid() . "-" . $img['name'];

    // mover arquivo para a pasta
    move_uploaded_file($img["tmp_name"], $pasta . $nomeArquivo);

    // gravar no banco apenas o nome
    $sql = mysqli_query($conexao, "INSERT INTO noticias (titulo, descricao, imagem, data_publicacao, status) VALUES ('$titulo','$descricao','$nomeArquivo','$data','$status')");


}
}
}

if (isset($_GET['id'])) {
    $id_noticia = $_GET['id'];

    $delete = mysqli_query($conexao, "DELETE FROM noticias where id ='$id_noticia'");
}

if (isset($_GET['id_status']) and isset($_GET['status'])) {

    $id_status = $_GET['id_status'];

    $status = $_GET['status'];

    if ($status=="Ativo") {
        $status= mysqli_query($conexao, "UPDATE noticias set status='Inativo' where id = '$id_status'");
    }
    else{
    $status= mysqli_query($conexao, "UPDATE noticias set status='Ativo' where id = '$id_status'");
    }

}
else{
    echo "erro";
}
?>
 <style>
.paginacao {
    text-align: center;
    margin-top: 20px;
}

.paginacao a {
    display: inline-block;
    margin: 0 5px;
    padding: 6px 12px;
    font-size: 14px;
    background: #eee;
    color: #333;
    text-decoration: none;
    border-radius: 4px;
}

.paginacao a:hover {
    background: #ccc;
}

.paginacao .ativa {
    background: #555;
    color: #fff;
}
</style>
<!-- Título da página -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Notícias e Recrutamentos</h2>
    <div>
        <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#addNewsModal">
            <i class="fas fa-plus me-1"></i> Adicionar Notícia
        </button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addRecruitmentModal">
            <i class="fas fa-plus me-1"></i> Adicionar Recrutamento
        </button>
    </div>
</div>

<!-- Abas para alternar entre Notícias e Recrutamentos -->
<ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="news-tab" data-bs-toggle="tab" data-bs-target="#news" type="button" role="tab" aria-controls="news" aria-selected="true">
            <i class="fas fa-newspaper me-1"></i> Notícias
        </button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="recruitment-tab" data-bs-toggle="tab" data-bs-target="#recruitment" type="button" role="tab" aria-controls="recruitment" aria-selected="false">
            <i class="fas fa-users me-1"></i> Recrutamentos
        </button>
    </li>
</ul>

<!-- Conteúdo das abas -->
<div class="tab-content" id="myTabContent">
    <!-- Aba de Notícias -->
    <div class="tab-pane fade show active" id="news" role="tabpanel" aria-labelledby="news-tab">
        <div class="table-container">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Imagem</th>
                            <th>Título</th>
                            <th>Data</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $noticias= mysqli_query($conexao, "SELECT*FROM noticias ORDER BY id DESC LIMIT $inicio, $porPagina");

                        if (empty($noticias)): ?>
                        <tr>
                            <td colspan="6" class="text-center">Nenhuma notícia cadastrada</td>
                        </tr>
                        <?php else: ?>
                            <?php while($noticia = mysqli_fetch_assoc($noticias)){?>
                            <tr>
                                <td><?php echo $noticia['id']; ?></td>
                                <td>
                                    <img src="<?php echo htmlspecialchars($noticia['imagem']); ?>" alt="<?php echo htmlspecialchars($noticia['titulo']); ?>" class="img-thumbnail" style="width: 100px;">
                                </td>
                                <td><?php echo htmlspecialchars($noticia['titulo']); ?></td>
                                <td><?php echo date('d/m/Y', strtotime($noticia['data_publicacao'])); ?></td>
                                <td>
                                    <span class="badge <?php echo ($noticia['status'] == 'Ativo') ? 'bg-success' : 'bg-danger'; ?>">
                                        <?php echo $noticia['status']; ?>
                                    </span>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a href="?id_status=<?php echo $noticia['id'];?>&status=<?php echo $noticia['status'];?>" class="btn btn-sm btn-outline-primary" title="Alternar status">
                                            <i class="fas fa-toggle-on"></i>
                                        </a>
                                        <button type="button" class="btn btn-sm btn-outline-info" title="Visualizar" data-bs-toggle="modal" data-bs-target="#viewNewsModal<?php echo $noticia['id']; ?>">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <a href="?id=<?php echo $noticia['id']; ?>" class="btn btn-sm btn-outline-danger" title="Excluir" onclick="return confirm('Tem certeza que deseja excluir esta notícia?');">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </div>
                                    
                                    <!-- Modal de Visualização -->
                                    <div class="modal fade" id="viewNewsModal<?php echo $noticia['id']; ?>" tabindex="-1" aria-labelledby="viewNewsModalLabel<?php echo $noticia['id']; ?>" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="viewNewsModalLabel<?php echo $noticia['id']; ?>"><?php echo htmlspecialchars($noticia['titulo']); ?></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="text-center mb-3">
                                                        <img src="<?php echo htmlspecialchars($noticia['imagem']); ?>" alt="<?php echo htmlspecialchars($noticia['titulo']); ?>" class="img-fluid rounded">
                                                    </div>
                                                    <p><strong>Data:</strong> <?php echo date('d/m/Y', strtotime($noticia['data_publicacao'])); ?></p>
                                                    <p><strong>Status:</strong> <?php echo $noticia['status']; ?></p>
                                                    <p><strong>Descrição:</strong></p>
                                                    <p><?php echo nl2br(htmlspecialchars($noticia['descricao'])); ?></p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php }?>
                        <?php endif;    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
 
<!-- Modal para Adicionar Notícia -->
<div class="modal fade" id="addNewsModal" tabindex="-1" aria-labelledby="addNewsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addNewsModalLabel">Adicionar Nova Notícia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" id="addNewsForm" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                    </div>
                    <div class="mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <textarea class="form-control" id="descricao" name="descricao" rows="5" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="imagem" class="form-label">Adicione a Imagem</label>
                        <input type="file" class="form-control" id="imagem" name="imagem" placeholder="" required>
                        <small class="text-muted">Insira o link para uma imagem online ou use um placeholder.</small>
                    </div>
                    <div class="mb-3">
                        <label for="data" class="form-label">Data de Publicação</label>
                        <input type="date" class="form-control" id="data" name="data" value="<?php echo date('Y-m-d'); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" id="status" name="status" required>
                            <option value="Ativo">Ativo</option>
                            <option value="Inativo">Inativo</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" name="add">Adicionar Notícia</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
// Incluir o rodapé
include 'includes/footer.php';
?>