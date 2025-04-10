document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("menuToggle");
    const menuNav = document.getElementById("menuNav");

    menuToggle.addEventListener("click", function () {
        menuNav.classList.toggle("menu-expanded");
    });

    document.addEventListener("click", function (event) {
        if (!menuNav.contains(event.target) && !menuToggle.contains(event.target)) {
            menuNav.classList.remove("menu-expanded");
        }
    });
});
