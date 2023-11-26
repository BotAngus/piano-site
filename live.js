document.addEventListener("DOMContentLoaded", async () => {
    let comparison = await live();
    setInterval(async () => {
        let updated = await live();
        if (updated !== comparison) {
            location.reload(true);
        }
        let css = await (await fetch("./style.css")).text()
        const sheet = new CSSStyleSheet()
        await sheet.replace(css)
        document.adoptedStyleSheets[0] = sheet
    }, 500)
})


async function live() {
    let response = await fetch(location.href);
    return await response.text();
}