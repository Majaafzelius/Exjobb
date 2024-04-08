console.log("Hej1");

document.addEventListener('DOMContentLoaded', function () {
    const topNavLinks = document.querySelectorAll('.top-nav a');
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
