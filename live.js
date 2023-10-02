

document.addEventListener("DOMContentLoaded", async () => {
    let comparison = await live();
    setInterval(async () => {
        let updated = await live();
        if (updated !== comparison) {
            location.reload(true);
        }
    }, 500)
})


async function live() {
    let response = await fetch(location.href);
    return await response.text();
}