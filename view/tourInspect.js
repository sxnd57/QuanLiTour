const quantitys = document.querySelectorAll(".quantity");
const inputNumber = document.querySelectorAll('input[type="number"]');
const ticketQuantitys = document.querySelectorAll('.ticket__quantity');
const btnCloses = document.querySelectorAll('.btn__close');



// Open quantity box
ticketQuantitys.forEach(ticketQuantity =>{
    ticketQuantity.onclick = e =>{
        var quantityBox = e.currentTarget.querySelector('.quantity__box');
        quantityBox.classList.toggle('d-none');
    }
})


// Close quantity box
btnCloses.forEach(btnClose => {
    btnClose.addEventListener('click', function () {
        var quantityBox = this.closest('.quantity__box');
        if (quantityBox) {
            quantityBox.classList.add('d-none');
        }
    });
});

quantitys.forEach((quantity) => {
    quantity.addEventListener("input", function () {
        // Lấy giá trị của input và chuyển đổi thành số nguyên
        var quantityValue = parseInt(this.value);

        if (quantityValue < 0 || isNaN(quantityValue)) {
            this.value = 0;
        } else {
            // Lấy giá tiền từ phần tử cha
            var price = parseFloat(
                this.closest(".quantity__box")
                    .querySelector(".child__price .fs-6")
                    .textContent.replace(" VND", "")
                    .replace(",", "")
            );

            // Tính tổng giá tiền
            var totalPrice = quantityValue * price;

            // Cập nhật giá tiền trong phần tử cha
            this.closest(".quantity__box").querySelector(
                ".total__ticket"
            ).textContent = totalPrice.toLocaleString() + " VND";
        }
    });
});
