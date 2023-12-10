const tourCards = document.querySelectorAll(".item");

tourCards.forEach((card) => {
    card.onclick = (e) => {
        e.stopPropagation();
        const thisCard = e.currentTarget;

        const cardId = thisCard.getAttribute("data-id");
        var newUrl = "http://localhost/hotel/view/tourInspect.php?id=" + cardId;

        window.location.href = newUrl;
    };
});
