<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="container mt-5" style="max-width:400px;">
    <h4 class="mb-3 text-center">Register</h4>

    <form method="POST">
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <button class="btn btn-success w-100">Register</button>

        <div class="text-center mt-3">
            <a href="/Project_UAS/public/login">Sudah punya akun</a>
        </div>
    </form>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>
