// ajoute un fond a la navbar quand on scroll
window.addEventListener("scroll", () => {
    const nav = document.querySelector(".navbar");
    if (!nav) return;

    if (window.scrollY > 40) {
    nav.classList.add("bg-dark", "shadow-sm");
    } else {
    nav.classList.remove("bg-dark", "shadow-sm");
    }
});
