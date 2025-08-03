let bgIndex = 1;
const topElement = document.getElementById('top');
function changebg() {
    topElement.style.backgroundImage = `url(./img/bg/${bgIndex}.jpeg)`;
    if (bgIndex == 7) bgIndex = 1
    else bgIndex ++;
}

for (let i = 1; i <= 7; i++) {
    new Image().src =  `url(./img/bg/${i}.jpeg)`;
}

setInterval(changebg, 5000)

let lastScrollY = window.scrollY;
const header = document.querySelector('header');

window.addEventListener('scroll', () => {
    const currentScrollY = window.scrollY;

    if (currentScrollY < lastScrollY) {
        if (currentScrollY == 0) {
            header.classList.remove('header-colored');
        }
        else header.classList.add('header-colored');

        header.classList.remove('header-hidden');
    } else {
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

document.querySelectorAll('.q').forEach(el => el.addEventListener('click', () => {
    el.querySelector('.a').classList.toggle('hidden')
}))
