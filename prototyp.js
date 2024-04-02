console.log("hej");
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