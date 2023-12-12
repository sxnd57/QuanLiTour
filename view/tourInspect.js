const quantitys = document.querySelectorAll(".quantity");
const inputNumber = document.querySelectorAll('input[type="number"]');
const ticketQuantitys = document.querySelectorAll(".ticket__quantity");
const btnChoose = document.

quantitys.forEach((quantity) => {
    quantity.addEventListener("input", function () {
        var quantityValue = parseInt(this.value);

        if (quantityValue < 0 || isNaN(quantityValue)) {
            this.value = 0;
        } else {
            var ticketQuantity = this.closest(".ticket__quantity");
            var totalTicket = ticketQuantity.querySelector(".total__ticket");
            var ticketPrice = ticketQuantity
                .querySelector(".ticket__price")
                .getAttribute("data-price");
            var price = parseInt(ticketPrice);
            // Tính tổng giá tiền
            var totalPrice = quantityValue * price;
            // Cập nhật giá tiền trong phần tử cha
            var formattedPrice = totalPrice.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
            totalTicket.textContent = formattedPrice;
        }
    });
});
