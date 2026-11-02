(() => {
    "use strict";

    const initializeMobileMenu = () => {
        const menuButton = document.querySelector('[aria-controls="header-menu-panel"]');
        const menuPanel = document.getElementById("header-menu-panel");

        if (!menuButton || !menuPanel) {
            return;
        }

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

        if (typeof window.matchMedia === "function") {
            try {
                const desktopBreakpoint = window.matchMedia("(min-width: 1024px)");
                const closeMenuOnDesktop = (event) => {
                    if (event.matches) {
                        setMenuOpen(false);
                    }
                };

                if (typeof desktopBreakpoint.addEventListener === "function") {
                    desktopBreakpoint.addEventListener("change", closeMenuOnDesktop);
                } else if (typeof desktopBreakpoint.addListener === "function") {
                    desktopBreakpoint.addListener(closeMenuOnDesktop);
                }
            } catch (error) {
                // A falha no controle do breakpoint não deve impedir o uso do menu.
            }
        }
    };

    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", initializeMobileMenu, { once: true });
    } else {
        initializeMobileMenu();
    }
})();
