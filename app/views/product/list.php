<?php include 'app/views/shares/header.php'; ?>

<h1>Danh sách sản phẩm</h1>

<a href="/Sales_Website/Product/add" class="btn btn-success mb-2">Thêm sản phẩm mới</a>

<ul class="list-group">
    <?php foreach ($products as $product): ?>
        <li class="list-group-item">
            <h2>
                <a href="/Sales_Website/Product/show/<?php echo $product->id; ?>">
                    <?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>
                </a>
            </h2>

            <?php if (!empty($product->image)): ?>
                <img src="/Sales_Website/<?php echo htmlspecialchars($product->image, ENT_QUOTES, 'UTF-8'); ?>" 
                     alt="Product Image" style="max-width: 100px;">
            <?php endif; ?>

            <p><?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?></p>

            <p>Giá: <?php echo number_format($product->price, 0, ',', '.'); ?> VND</p>

            <p>Danh mục: <?php echo htmlspecialchars($product->category_name, ENT_QUOTES, 'UTF-8'); ?></p>

            <a href="/Sales_Website/Product/edit/<?php echo $product->id; ?>" class="btn btn-warning">Sửa</a>

            <a href="/Sales_Website/Product/delete/<?php echo $product->id; ?>" 
               class="btn btn-danger" 
               onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">Xóa</a>
        </li>
    <?php endforeach; ?>
</ul>

<?php include 'app/views/shares/footer.php'; ?>
