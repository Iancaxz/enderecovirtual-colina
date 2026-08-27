document.addEventListener("DOMContentLoaded", () => {
    const accordionItems = document.querySelectorAll(".faq-item");

    accordionItems.forEach((item) => {
        const button = item.querySelector(".faq-button");
        const content = item.querySelector(".faq-content");
        const icon = item.querySelector(".faq-icon");

        button.addEventListener("click", () => {
            const isOpen = button.getAttribute("aria-expanded") === "true";

            // Fecha todos os itens antes de abrir o selecionado.
            accordionItems.forEach((otherItem) => {
                const otherButton = otherItem.querySelector(".faq-button");
                const otherContent = otherItem.querySelector(".faq-content");
                const otherIcon = otherItem.querySelector(".faq-icon");

                otherButton.setAttribute("aria-expanded", "false");
                otherContent.setAttribute("aria-hidden", "true");

                otherContent.classList.remove("grid-rows-[1fr]", "opacity-100");
                otherContent.classList.add("grid-rows-[0fr]", "opacity-0");

                otherIcon.classList.remove("rotate-180");
                otherIcon.classList.add("rotate-0");
            });

            // Abre o item selecionado, caso estivesse fechado.
            if (!isOpen) {
                button.setAttribute("aria-expanded", "true");
                content.setAttribute("aria-hidden", "false");

                content.classList.remove("grid-rows-[0fr]", "opacity-0");
                content.classList.add("grid-rows-[1fr]", "opacity-100");

                icon.classList.remove("rotate-0");
                icon.classList.add("rotate-180");
            }
        });
    });
});