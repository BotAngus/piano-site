<script defer>
    let active = false;

    function toggleNav() {
        const nav = document.getElementById("nav");
        if (active) {
            nav.className = "nav-collapsed"
        } else {
            nav.className = "nav-full"
        }
        active = !active
    }

    document.addEventListener("DOMContentLoaded", () => {
        let el = document.getElementById("hamburger");
        el.addEventListener("click", () => toggleNav())
    })
</script>

<header id="nav-container">
    <div id="nav-vis">
        <div id="home">
            <div id="home-icon">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.0" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>
                </svg>
            </div>
        </div>

        <div id="hamburger">
            <svg id="hamburger-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke-width="1.5" stroke="currentColor">

                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
            </svg>
        </div>
    </div>
    <nav id="nav" class="nav-collapsed">
        <a href="/">Home</a>
        <a href="/about">Over Mijzelf</a>
        <a href="/pricing">Tarieven en Lestijden</a>
        <a href="/room">Lesruimte</a>
        <a href="/content">Lesinhoud</a>
        <a href="/events">Activiteiten</a>
        <a href="/contact">Contact</a>
    </nav>
</header>