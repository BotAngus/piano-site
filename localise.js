async function getLang() {
    let anchor = document.cookie.split("; ")
        .find((row) => row.startsWith("lang="))
        ?.split("=")[1];
    switch (anchor) {
        case "nl":
        case "en":
            return anchor;
        default:
            return "nl"

    }
}

async function getTranslation() {
    let lang = await getLang();
    let response = await fetch("/lang/" + lang + ".json");
    return await response.json();
}

async function loadLang() {
    let translation = await getTranslation();
    console.log(translation);
    document.querySelectorAll("[data-lang]").forEach(elem => {
        let item = elem.getAttribute("data-lang") || "placeholder";
        elem.textContent = translation[item];
    })
}

document.addEventListener("DOMContentLoaded", async () => {
    await loadLang();
});