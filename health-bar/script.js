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

document.getElementById('send').addEventListener('click', () => {
    const feedback = document.getElementById('feedback').value.trim();
    const email = document.getElementById('email').value.trim();
    const error = document.getElementById('error')

    if (feedback) {
        fetch('./feedback/feedback.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                feedback: feedback,
                email: email
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.status == "error") error.textContent = data.message
            else {
                document.getElementById('feedbackform').style.display = 'none';
                document.getElementById('thankyou').style.display = 'block';
            }
        })
        .catch(error => error.textContent = "There was an error sending your feedback.");
    }
    else error.textContent = "Please input your feedback."
})
