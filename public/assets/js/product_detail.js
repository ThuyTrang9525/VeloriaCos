let currentImage = 0;
const images = [
    "https://down-vn.img.susercontent.com/file/sg-11134201-7rdyj-lxietm1nzi4m54.webp",
    "https://down-vn.img.susercontent.com/file/sg-11134201-7rdxk-lxieto5ezgkff8@resize_w900_nl.webp",
    "https://down-vn.img.susercontent.com/file/sg-11134201-7rdwl-lxietp3jiq4qb7.webp"
];

function changeImage(index) {
    if (index >= 0 && index < images.length) {
        currentImage = index;
        document.getElementById("main-image").src = images[currentImage];
        updateNavigation();
    }
}

function updateNavigation() {
    document.getElementById("prev-button").classList.toggle("text-gray-400", currentImage === 0);
    document.getElementById("next-button").classList.toggle("text-gray-400", currentImage === images.length - 1);
}

function selectSize(button) {
    const buttons = document.querySelectorAll("button");
    buttons.forEach(btn => btn.classList.remove("bg-gray-200", "text-black", "border-black"));
    button.classList.add("bg-gray-200", "text-black", "border-black");
}
function showTab(tab) {
    // Ẩn tất cả các tab
    document.getElementById("description").classList.add("hidden");
    document.getElementById("reviews").classList.add("hidden");
    document.getElementById("more-products").classList.add("hidden");

    // Hiển thị tab đã chọn
    document.getElementById(tab).classList.remove("hidden");

    // Thay đổi kiểu dáng của các liên kết
    document.getElementById("description-link").classList.remove("border-b-2", "border-pink-500");
    document.getElementById("reviews-link").classList.remove("border-b-2", "border-pink-500");
    document.getElementById("more-products-link").classList.remove("border-b-2", "border-pink-500");

    // Đánh dấu liên kết đã chọn
    document.getElementById(tab + "-link").classList.add("border-b-2", "border-pink-500");
}
// Default tab to show
showTab('description');