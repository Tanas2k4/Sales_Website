<?php
// Require các file cần thiết cho controller hoạt động
require_once('app/config/database.php'); // Kết nối database
require_once('app/models/CategoryModel.php'); // Model xử lý dữ liệu danh mục

class CategoryController
{
    private $categoryModel; // Biến chứa đối tượng CategoryModel
    private $db; // Biến chứa kết nối database

    // Hàm khởi tạo
    public function __construct()
    {
        $this->db = (new Database())->getConnection(); // Khởi tạo kết nối database
        $this->categoryModel = new CategoryModel($this->db); // Khởi tạo đối tượng CategoryModel
    }

    // Lấy danh sách danh mục và hiển thị
    public function list()
    {
        $categories = $this->categoryModel->getCategories(); // Lấy danh sách danh mục từ model
        include 'app/views/product/list.php'; // Load view danh sách danh mục category
    }
}
