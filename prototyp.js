console.log("Hej1");

document.addEventListener('DOMContentLoaded', function () {
    const topNavLinks = document.querySelectorAll('.top-left-nav a');
    const botNavs = document.querySelectorAll('.bot-nav');

    topNavLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault(); // Prevent default link behavior

            // Hide all bot-nav elements
            botNavs.forEach(nav => {
                nav.style.display = 'none';
            });

            // Determine which bot-nav to display based on the clicked link
            const targetNavId = link.getAttribute('href').substring(1); // Get href attribute without the #
            const targetNav = document.getElementById(`bot-nav-${targetNavId}`);

            // Display the target bot-nav
            if (targetNav) {
                targetNav.style.display = 'block';
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const faqCategories = document.querySelectorAll('.faq-category');
    const faqLists = document.querySelectorAll('.faq-list');

    faqCategories.forEach(category => {
        category.addEventListener('click', function () {
            const categoryValue = category.getAttribute('data-category');

            // Close all FAQ lists
            faqLists.forEach(list => {
                if (list.getAttribute('data-category') !== categoryValue) {
                    list.classList.remove('open');
                }
            });

            // Toggle open/close current FAQ list
            const currentList = document.querySelector(`.faq-list[data-category="${categoryValue}"]`);
            currentList.classList.toggle('open');
        });
    });

    const faqs = document.querySelectorAll('.faq');
    faqs.forEach(faq => {
        faq.addEventListener('click', function () {
            this.nextElementSibling.classList.toggle('open');
        });
    });
});

function generateCaptcha() {
    const num1 = Math.floor(Math.random() * 10) + 1; // Random number between 1 and 10
    const num2 = Math.floor(Math.random() * 10) + 1; // Random number between 1 and 10
    const operator = ['+', '-'][Math.floor(Math.random() * 2)]; // Randomly choose '+' or '-'

    // Store the expected answer in a global variable
    window.expectedAnswer = eval(`${num1} ${operator} ${num2}`);

    // Display the CAPTCHA question
    document.getElementById('captcha-question').innerText = `${num1} ${operator} ${num2} = ?`;
}

// Call the function to generate the initial CAPTCHA when the page loads
window.onload = function() {
    generateCaptcha();
};function generateCaptcha() {
    const num1 = Math.floor(Math.random() * 10) + 1; // Random number between 1 and 10
    const num2 = Math.floor(Math.random() * 10) + 1; // Random number between 1 and 10
    const operator = ['+', '-'][Math.floor(Math.random() * 2)]; // Randomly choose '+' or '-'

    // Store the expected answer in a global variable
    window.expectedAnswer = eval(`${num1} ${operator} ${num2}`);

    // Display the CAPTCHA question
    document.getElementById('captcha-question').innerText = `${num1} ${operator} ${num2} = ?`;
}

// Call the function to generate the initial CAPTCHA when the page loads
window.onload = function() {
    generateCaptcha();
};

// Optional: You could add a form submit event listener to validate the CAPTCHA answer
function validateCaptcha(event) {
    event.preventDefault(); // Prevent form submission

    const userAnswer = parseInt(document.getElementById('captcha-answer').value);

    if (userAnswer === window.expectedAnswer) {
        alert('CAPTCHA passed! Form submitted.');
        document.getElementById('myForm').submit();
    } else {
        alert('CAPTCHA failed! Please try again.');
        generateCaptcha();
    }
}

document.getElementById('myForm').addEventListener('submit', validateCaptcha);