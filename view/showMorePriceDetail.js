const showPrice = document.querySelector(".show__price");
const detailPrice = document.querySelector(".detail__price");
const iconUp = document.querySelector(".icon__up");
const iconDown = document.querySelector(".icon__down");

showPrice.onclick = () => {
    if(detailPrice.classList.contains("d-none")){
        iconUp.classList.remove('fa-chevron-up');
        iconUp.classList.add('fa-chevron-down');
    }else{
        iconUp.classList.add('fa-chevron-up');
        iconUp.classList.remove('fa-chevron-down');
    }
    detailPrice.classList.toggle('d-none')
};
