// JavaScript code
function updateTotalProduct() {
    // Gửi yêu cầu AJAX đến file PHP để lấy giá trị mới
    // Ở đây, ta giả sử file PHP có tên là get_total_product.php
    $.ajax({
        type: "GET",
        url: "/thaitamcode/routes/get_total_product.php",
        success: function(data) {
            // Cập nhật giá trị mới vào vùng chứa
            document.getElementById("totalProduct").textContent = data;
        },
        error: function(xhr, status, error) {
            console.log("Đã xảy ra lỗi khi lấy dữ liệu sản phẩm.");
        }
    });
}

// Gọi hàm updateTotalProduct một lần khi trang được tải
updateTotalProduct();