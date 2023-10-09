
<header class="sticky top-0 h-fit w-full bg-blue-800 shadow-black lg:p-2">
    <a href="/">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white"
             class="w-10 h-10 absolute lg:hidden m-1">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>
        </svg>
    </a>
    <input type="checkbox" id="menu" class="hidden group/menu peer/menu">
    <label for="menu" class="relative float-right h-fit p-2 lg:p-0 transition-transform peer-checked/menu:-rotate-90">
        <span class="
        lg:hidden
        cursor-pointer
        block w-8 h-0.5 m-4 bg-white relative
        after:block after:w-8 after:h-0.5 after:bg-white after:absolute after:top-[-10px] after:transition-transform
        before:block before:w-8 before:h-0.5 before:bg-white before:absolute before:top-[10px] before:transition-transform "></span>
    </label>
    <nav class="lg:bg-blue-800 lg:flex-row lg:justify-around lg:max-h-max
    flex max-h-0 peer-checked/menu:max-h-96 w-full h-full
    flex-col overflow-hidden bg-blue-500 text-left text-xl
    transition-[max-height]
    ease-in
    [&>a]:py-2 [&>a]:pl-4 [&>a]:text-white">
        <a href="/">Home</a>
        <a href="about">Over Mijzelf</a>
        <a href="/contact">Contact</a>
        <a href="/pricing">Tarieven en Lestijden</a>
        <a href="/room">Lesruimte</a>
        <a href="/content">Lesinhoud</a>
        <a href="/events">Activiteiten</a>
    </nav>
</header>