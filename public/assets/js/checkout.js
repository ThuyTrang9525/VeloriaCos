
    function initAutocomplete() {
        let input = document.getElementById("address");
        let autocomplete = new google.maps.places.Autocomplete(input, {
            types: ['geocode'],
            componentRestrictions: { country: "VN" } // Giới hạn địa chỉ ở Việt Nam
        });

        autocomplete.addListener("place_changed", function () {
            let place = autocomplete.getPlace();
            console.log("Địa chỉ đã chọn:", place.formatted_address);
        });
    }
    
    document.addEventListener("DOMContentLoaded", initAutocomplete);
    async function getProvince() {
        let response = await fetch('https://provinces.open-api.vn/api/?depth=3'); // Đổi depth=3 để lấy xã/phường
        let data = await response.json();
        return data;
    }

    async function init() {
        let data = await getProvince();
        let provinceSelect = document.getElementById('province');
        let districtSelect = document.getElementById('district');
        let wardSelect = document.getElementById('ward');

        // Thêm tỉnh/thành phố vào dropdown
        data.forEach(province => {
            let option = document.createElement("option");
            option.value = province.name;
            option.textContent = province.name;
            provinceSelect.appendChild(option);
        });

        // Khi chọn tỉnh/thành phố, cập nhật danh sách quận/huyện
        provinceSelect.addEventListener('change', function () {
            let selectedProvince = data.find(p => p.name == provinceSelect.value);
            renderDistrict(selectedProvince);
            wardSelect.innerHTML = '<option value="">-- Chọn xã/phường --</option>'; // Reset xã/phường khi chọn tỉnh mới
        });

        // Khi chọn quận/huyện, cập nhật danh sách xã/phường
        districtSelect.addEventListener('change', function () {
            let selectedProvince = data.find(p => p.name == provinceSelect.value);
            let selectedDistrict = selectedProvince.districts.find(d => d.name == districtSelect.value);
            renderWard(selectedDistrict);
        });

        // Hiển thị danh sách quận/huyện
        function renderDistrict(province) {
            districtSelect.innerHTML = '<option value="">-- Chọn quận/huyện --</option>'; // Xóa quận/huyện cũ
            if (province && province.districts) {
                province.districts.forEach(district => {
                    let option = document.createElement("option");
                    option.value = district.name;
                    option.textContent = district.name;
                    districtSelect.appendChild(option);
                });
            }
        }

        // Hiển thị danh sách xã/phường
        function renderWard(district) {
            wardSelect.innerHTML = '<option value="">-- Chọn xã/phường --</option>'; // Xóa xã/phường cũ
            if (district && district.wards) {
                district.wards.forEach(ward => {
                    let option = document.createElement("option");
                    option.value = ward.name;
                    option.textContent = ward.name;
                    wardSelect.appendChild(option);
                });
            }
        }
    }

    // Khởi chạy khi trang tải
    init();
