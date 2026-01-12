<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="container mt-5" style="max-width:400px;">
    <h4 class="mb-3 text-center">Login</h4>

    <?php if(isset($error)): ?>
        <div class="alert alert-danger">
            <?= $error ?>
        </div>
    <?php endif; ?>

    <form method="POST">
        <div class="mb-3">
            <label>Email</label>
            <input 
                type="email" 
                name="email" 
                class="form-control" 
                value="<?= htmlspecialchars($email ?? '') ?>" 
                required
            >
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input 
                type="password" 
                name="password" 
                class="form-control" 
                required
            >
        </div>

        <button class="btn btn-primary w-100">Login</button>
    </form>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>
