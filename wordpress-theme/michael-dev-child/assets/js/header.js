"use strict";

const menuButton = document.querySelector('[aria-controls="header-menu-panel"]');
const menuPanel = document.getElementById("header-menu-panel");
const desktopBreakpoint = window.matchMedia("(min-width: 1024px)");

if (menuButton && menuPanel) {
    const setMenuOpen = (isOpen, returnFocus = false) => {
        menuButton.setAttribute("aria-expanded", String(isOpen));
        menuButton.setAttribute("aria-label", isOpen ? "Fechar menu" : "Abrir menu");
        menuPanel.classList.toggle("hidden", !isOpen);
        menuPanel.classList.toggle("flex", isOpen);

        if (returnFocus) {
            menuButton.focus();
        }
    };

    menuButton.addEventListener("click", () => {
        const isOpen = menuButton.getAttribute("aria-expanded") === "true";
        setMenuOpen(!isOpen);
    });

    menuPanel.querySelectorAll("nav a").forEach((link) => {
        link.addEventListener("click", () => setMenuOpen(false));
    });

    document.addEventListener("keydown", (event) => {
        const isOpen = menuButton.getAttribute("aria-expanded") === "true";

        if (event.key === "Escape" && isOpen) {
            setMenuOpen(false, true);
        }
    });

    desktopBreakpoint.addEventListener("change", (event) => {
        if (event.matches) {
            setMenuOpen(false);
        }
    });
}
