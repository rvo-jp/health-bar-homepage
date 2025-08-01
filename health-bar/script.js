let bgIndex = 2;
const topElement = document.getElementById('top');

for (let i = 1; i <= 6; i++) {
    new Image().src =  `url(./img/bg/${i}.jpeg)`;
}

setInterval(() => {
    topElement.style.backgroundImage = `url(./img/bg/${bgIndex}.jpeg)`;
    if (bgIndex == 6) bgIndex = 1
    else bgIndex ++;
}, 5000)

let lastScrollY = window.scrollY;
const header = document.querySelector('header');

window.addEventListener('scroll', () => {
    const currentScrollY = window.scrollY;

    if (currentScrollY < lastScrollY) {
        if (currentScrollY == 0) {
            header.classList.remove('header-colored');
        }
        else header.classList.add('header-colored');

        // 上にスクロール → 表示
        header.classList.remove('header-hidden');
    } else {
        // 下にスクロール → 非表示
        header.classList.add('header-hidden');
    }

    lastScrollY = currentScrollY;
});
