document.addEventListener("DOMContentLoaded", function () {

    const wrapper = document.querySelector(".carousel-wrapper");
    const track = document.querySelector(".carousel-track");

    if (!wrapper || !track) return;

    const cards = track.querySelectorAll(".struktur-card");
    const nextBtn = wrapper.querySelector(".carousel-btn.next");
    const prevBtn = wrapper.querySelector(".carousel-btn.prev");

    const gap = 18;

    const firstClone = cards[0].cloneNode(true);
    const lastClone = cards[cards.length - 1].cloneNode(true);

    track.appendChild(firstClone);
    track.insertBefore(lastClone, cards[0]);

    let allCards = track.querySelectorAll(".struktur-card");

    let index = 1;

    function cardWidth() {
        return allCards[0].offsetWidth + gap;
    }

    track.style.transform = `translateX(-${cardWidth() * index}px)`;

    nextBtn.addEventListener("click", () => {
        index++;
        track.style.transition = "transform .6s ease";
        track.style.transform = `translateX(-${cardWidth() * index}px)`;
    });

    prevBtn.addEventListener("click", () => {
        index--;
        track.style.transition = "transform .6s ease";
        track.style.transform = `translateX(-${cardWidth() * index}px)`;
    });

    track.addEventListener("transitionend", () => {

        if (allCards[index] === firstClone) {
            track.style.transition = "none";
            index = 1;
            track.style.transform = `translateX(-${cardWidth() * index}px)`;
        }

        if (allCards[index] === lastClone) {
            track.style.transition = "none";
            index = allCards.length - 2;
            track.style.transform = `translateX(-${cardWidth() * index}px)`;
        }

    });

});
