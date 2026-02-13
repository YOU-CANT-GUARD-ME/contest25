const butBtns = $$(".get");

buyBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
        const itemId = btn.closest(".item").getAttribute("data-id");

        fetch()
    })
})