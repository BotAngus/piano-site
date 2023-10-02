<header class="sticky top-0 h-fit w-full bg-blue-800 shadow-black">
    <input type="checkbox" id="menu" class="float-right hidden group/menu peer/menu">
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
        <a href="/contact">Contact</a>
        <a href="/pricing">Tarieven</a>
        <a href="about">Over Mij</a>
        <a href="/lesson">Lessen</a>
    </nav>
</header>