<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - Sistema Escolar</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>
    <div style="max-width: 300px; margin: 100px auto; border: 1px solid #ccc; padding:20px;">
    <h2>Acesso ao Sistema</h2>

    <?php if (isset($erro)): ?>
        <p style="color: red;"><?= $erro ?></p>
    <?php endif; ?>

    <form action="index.php?controller=login&action=logar" method="POST">
        <label>Login:</label><br>
        <input type="text" name="login" required style="width: 100%;"><br><br>

        <label
    </form>
</div>
</body>
</html>