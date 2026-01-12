<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="container mt-5" style="max-width:500px;">
    <h4 class="mb-3">Tambah Produk</h4>

    <form method="POST">
        <div class="mb-3">
            <label>Nama Produk</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="price" class="form-control" required>
        </div>

        <button class="btn btn-primary">Simpan</button>
        <a href="<?= BASE_URL ?>/products" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>
