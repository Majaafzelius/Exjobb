
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
            const icon = this.querySelector('.icon'); // The icon element

            // Toggle the icon text between plus (+) and minus (-)
            if (this.nextElementSibling.classList.contains('open')) {
                icon.textContent = '-';
            } else {
                icon.textContent = '+';
            }
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
// function validateCaptcha(event) {
//     event.preventDefault(); // Prevent form submission

//     const userAnswer = parseInt(document.getElementById('captcha-answer').value);

//     if (userAnswer === window.expectedAnswer) {
//         alert('CAPTCHA passed! Form submitted.');
//         document.getElementById('myForm').submit();
//     } else {
//         alert('CAPTCHA failed! Please try again.');
//         generateCaptcha();
//     }
// }

// document.getElementById('myForm').addEventListener('submit', validateCaptcha);


function filterQuestions() {
    const searchInput = document.getElementById('search-input').value.toLowerCase();
    const faqLists = document.querySelectorAll('.faq-list');

    faqLists.forEach(faqList => {
        const questions = faqList.querySelectorAll('.faq');

        let hasMatchingQuestion = false;

        questions.forEach(question => {
            const answer = question.nextElementSibling; // The answer element is the next sibling
            const questionText = question.textContent.toLowerCase();
            const answerText = answer.textContent.toLowerCase();

            if (questionText.includes(searchInput) || answerText.includes(searchInput)) {
                question.style.display = 'block';
                answer.style.display = 'block';
                hasMatchingQuestion = true;
            } else {
                question.style.display = 'none';
                answer.style.display = 'none';
                
            }
        });

        // Show or hide the FAQ category based on whether it has matching questions
        const category = faqList.previousElementSibling;
        if (hasMatchingQuestion) {
            faqList.style.display = 'block';
            category.style.display = 'block';
        } else {
            faqList.style.display = 'none';
            category.style.display = 'none';
        }
    });
}





