document.addEventListener("DOMContentLoaded", () => {
    const menuButton = document.getElementById("menuButton");
    const navMenu = document.getElementById("navMenu");

    if (!menuButton || !navMenu) {
        return;
    }

    menuButton.addEventListener("click", () => {
        const isOpen = navMenu.classList.toggle("active");

        menuButton.setAttribute("aria-expanded", String(isOpen));

        menuButton.innerHTML = isOpen
            ? '<i class="fa-solid fa-xmark"></i>'
            : '<i class="fa-solid fa-bars"></i>';
    });

    navMenu.querySelectorAll("a").forEach((link) => {
        link.addEventListener("click", () => {
            navMenu.classList.remove("active");
            menuButton.setAttribute("aria-expanded", "false");
            menuButton.innerHTML = '<i class="fa-solid fa-bars"></i>';
        });
    });
});