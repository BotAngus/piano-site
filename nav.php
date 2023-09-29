<style>
    nav {
        display: flex;
        justify-content: space-around;
    }

    .nav-name {
        color: white;
        flex: 1;
        align-self: flex-start;
        display: flex;
        flex-direction: column;
        padding: 1rem 0 0 4rem;
    }

    .nav-items {
        flex: 3;
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
    }

    .nav-items > a {
        padding: 2rem;

    }
    .nav-items > a:hover {
        text-decoration: underline;
    }

</style>

<nav>
    <div class="nav-name"><span>Suzanne Spanjaard</span><span>Piano Docent</span></div>
    <div class="nav-items">
        <a href="./">Home</a>
        <a href="./pricing" data-lang="pricing"></a>
        <a href="./contact" data-lang="contact"></a>
        <a href="./about" data-lang="about"></a>
        <a href="./events" data-lang="events"></a>
        <a href="./lesson" data-lang="lesson"></a>
    </div>
</nav>