let lastScrollY = window.scrollY;
const header = document.querySelector('header');

window.addEventListener('scroll', () => {
    const currentScrollY = window.scrollY;

    if (currentScrollY < lastScrollY) {
        // 上にスクロール → 表示
        header.classList.remove('header-hidden');
    } else {
        // 下にスクロール → 非表示
        header.classList.add('header-hidden');
    }

    lastScrollY = currentScrollY;
});