<?php
session_start();

if (isset($_POST['entrar'])) {

include_once("conexao.php");

$email = $_POST['email']; // recebe o nome

$senha = $_POST['password']; // recebe a senha

$dados = mysqli_query($conexao, "SELECT*FROM usuario where email='$email' and senha='$senha'");  

    if (mysqli_num_rows($dados)<1) {

$login_err = "Email ou senha inválidos.";

    }
    else{
            $_SESSION["loggin"] = true;       
            // Redirecionar para a página de dashboard
            header("location: dashboard.php");
    }
        
    }
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Painel Administrativo | LOBINAVE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <img src="assets/img/lobinave-logo.png" alt="LOBINAVE Logo" class="img-fluid mb-3" style="max-width: 80px;">
                            <h2 class="text-primary fw-bold">LOBINAVE</h2>
                            <p class="text-muted">Painel Administrativo</p>
                        </div>
                        
                        <?php if(!empty($login_err)): ?>
                            <div class="alert alert-danger"><?php echo $login_err; ?></div>
                        <?php endif; ?>

                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" class="form-control">
                                <span class="invalid-feedback"><?php echo $email_err; ?></span>
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label">Senha</label>
                                <input type="password" name="password" id="password" class="form-control">
                                <span class="invalid-feedback"><?php echo $password_err; ?></span>
                            </div>
                            <div class="d-grid">
                                <button type="submit" name="entrar" class="btn btn-primary btn-lg">Entrar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-center mt-4 text-muted">
                    <small>&copy; 2025 LOBINAVE – Estaleiro Naval do Lobito</small>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>