<?php
// Định nghĩa lớp CategoryModel để thao tác với bảng 'category' trong database
class CategoryModel
{
    private $conn; // Biến chứa đối tượng kết nối database
    private $table_name = "category"; // Tên bảng trong database

    // Hàm khởi tạo, nhận kết nối database và gán vào biến $conn
    public function __construct($db)
    {
        $this->conn = $db;
    }

    // Lấy danh sách tất cả danh mục từ bảng category
    public function getCategories()
    {
        // Câu lệnh SQL để lấy danh sách danh mục
        $query = "SELECT id, name, description FROM " . $this->table_name;

        $stmt = $this->conn->prepare($query); // Chuẩn bị truy vấn SQL
        $stmt->execute(); // Thực thi truy vấn

        // Lấy tất cả kết quả dưới dạng đối tượng
        $result = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $result; // Trả về danh sách danh mục
    }
}
