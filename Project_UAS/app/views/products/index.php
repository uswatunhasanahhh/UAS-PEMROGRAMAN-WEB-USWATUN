<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="container mt-5">
    <div class="d-flex justify-content-between mb-3">
        <h4>Data Produk</h4>
        <a href="<?= BASE_URL ?>/create" class="btn btn-success btn-sm">+ Tambah</a>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>

        <?php foreach($products as $i => $p): ?>
        <tr>
            <td><?= $i + 1 ?></td>
            <td><?= htmlspecialchars($p['name']) ?></td>
            <td>Rp <?= number_format($p['price']) ?></td>
            <td>
                <a href="<?= BASE_URL ?>/delete/<?= $p['id'] ?>"
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('Hapus?')">
                   Hapus
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>
