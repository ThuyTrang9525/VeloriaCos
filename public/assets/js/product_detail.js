document.addEventListener('DOMContentLoaded', function() {
    // Lấy dữ liệu từ thuộc tính data-* trong HTML
    const productElement = document.getElementById('product');
    const productImages = JSON.parse(productElement.getAttribute('data-images')); // Mảng URL ảnh của sản phẩm
    const productId = productElement.getAttribute('data-id'); // ID của sản phẩm

    let currentImage = 0; // Mặc định ảnh đầu tiên

    // Hàm thay đổi ảnh chính
    function changeImage(index) {
        if (index >= 0 && index < productImages.length) {
            currentImage = index;
            document.getElementById("main-image").src = productImages[currentImage];
            updateNavigation();
        }
    }

    // Hàm cập nhật điều hướng (nút Previous/Next)
    document.getElementById('prev-button').addEventListener('click', function() {
        changeImage(currentImage - 1); // Chuyển đến ảnh trước
    });

    document.getElementById('next-button').addEventListener('click', function() {
        changeImage(currentImage + 1); // Chuyển đến ảnh tiếp theo
    });
    // Gán sự kiện cho ảnh thumbnail
    const thumbnails = document.querySelectorAll('.thumbnail'); // Lấy tất cả các ảnh thumbnail
    thumbnails.forEach((thumbnail, index) => {
        thumbnail.addEventListener('click', function() {
            changeImage(index); // Thay đổi ảnh chính khi nhấn vào thumbnail
        });
    });

    // Khởi tạo ảnh đầu tiên khi trang được tải
    changeImage(currentImage);
});

function showTab(tabId) {
    document.getElementById('description').classList.add('hidden');
    document.getElementById('reviews').classList.add('hidden');
    document.getElementById('more-products').classList.add('hidden');
    document.getElementById(tabId).classList.remove('hidden');

    document.getElementById('description-link').classList.remove('border-b-2', 'border-black', 'font-semibold', 'text-black');
    document.getElementById('reviews-link').classList.remove('border-b-2', 'border-black', 'font-semibold', 'text-black');
    document.getElementById('more-products-link').classList.remove('border-b-2', 'border-black', 'font-semibold', 'text-black');

    document.getElementById(tabId + '-link').classList.add('border-b-2', 'border-black', 'font-semibold', 'text-black');
}
// Default tab to show
showTab('description');


const quantityInput = document.getElementById('product-quantity');
const hiddenQuantityInput = document.getElementById('quantity-input');

quantityInput.addEventListener('input', function() {
    hiddenQuantityInput.value = quantityInput.value;
});