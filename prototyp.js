
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
                // icon.textContent = '&#9644;';
                icon.textContent = '▬';
            } else {
                // icon.textContent = '&#128934;';
                icon.textContent = '🞦';
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
document.addEventListener('DOMContentLoaded', function () {
    const hamburgerMenu = document.getElementById('hamburger-menu');
    const hamburgerMenuClose = document.getElementById('hamburger-menu-close');
    const mobileMenu = document.getElementById('mobile-menu');
    const searchBtn = document.getElementById('search-btn');
    const searchMobile = document.getElementById('search-mobile');
    const overlay = document.getElementById('overlay');
    function toggleElement(element) {
        element.classList.toggle('open');
        updateOverlayVisibility();
    }
    function closeElement(element) {
        element.classList.remove('open');
        updateOverlayVisibility();
    }
    function updateOverlayVisibility() {
        if (searchMobile.classList.contains('open') || mobileMenu.classList.contains('open')) {
            overlay.style.display = 'block';
        } else {
            overlay.style.display = 'none';
        }
    }
    // Event listeners
    hamburgerMenu.addEventListener('click', function () {
        toggleElement(mobileMenu);
    });
    hamburgerMenuClose.addEventListener('click', function () {
        closeElement(mobileMenu);
    });
    searchBtn.addEventListener('click', function () {
        if (searchMobile.classList.contains('open')) {
            closeElement(searchMobile);
        } else {
            toggleElement(searchMobile);
        }
    });
    overlay.addEventListener('click', function () {
        closeElement(mobileMenu);
        closeElement(searchMobile);
    });
    document.addEventListener('click', function (event) {
        const target = event.target;
        if (!mobileMenu.contains(target) && target !== hamburgerMenu && !searchMobile.contains(target)) {
            closeElement(mobileMenu);
        }
        if (!searchMobile.contains(target) && target !== searchBtn && !mobileMenu.contains(target)) {
            closeElement(searchMobile);
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    // Initialize the default bottom navigation to display bot-nav-three
    const defaultBotNav = document.getElementById('bot-nav-mobile-three');
    const otherBotNavs = document.querySelectorAll('bot-nav-mobile:not(#bot-nav-mobile-three)');
    // Hide all other bottom navigations and display the default one
    otherBotNavs.forEach(nav => nav.style.display = 'none');
    defaultBotNav.style.display = 'block';
    // Add event listeners to the top navigation links
    const topNavLinks = document.querySelectorAll('.top-left-nav-mobile a');
    topNavLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default link behavior
            // Get the target bot-nav ID from the link's href attribute
            const targetNavId = link.getAttribute('href').substring(1); // Remove the '#' from the href
            // Hide all bottom navigations
            document.querySelectorAll('.bot-nav-mobile').forEach(nav => nav.style.display = 'none');
            // Display the target bot-nav
            const targetBotNav = document.getElementById(`bot-nav-mobile-${targetNavId}`);
            if (targetBotNav) {
                targetBotNav.style.display = 'block';
            }
        });
    });
});
