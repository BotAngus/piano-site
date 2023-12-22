<?php header("Content-type: text/css"); ?>

/*
Mobile First
PC Second
*/

:root {
    --nav: #009bd6;
    --background: white;
    --foreground: grey;
}

* {
    font-family: sans-serif;
}

/*
Navigation CSS
*/
#nav {
    flex-direction: column;
    display: flex;
    overflow: hidden;
    transition: max-height 0.50s linear;
    transition-delay: 0s;
    background: linear-gradient(45deg <?php ?>);
    /*position: sticky;*/
    width: 100%;
}

#nav-vis {
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.nav-collapsed {
    max-height: 0;
}

.nav-full {
    max-height: 50rem;
}

#nav > a {
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    color: white;
    text-decoration: none;
    padding: 1rem 1rem 1rem 1.5rem;
    /*font-weight: 200;*/
}

#nav-container {
    flex-direction: column;
    display: flex;
    position: sticky;
    top: 0;
    background: var(--nav);
}

#hamburger {
    overflow: hidden;
    width: 15%;
    position: relative;
    float: right;

}

#hamburger-icon {
    width: 100%;
    aspect-ratio: 1;
    color: white;
}

#home {
    overflow: hidden;
    width: 15%;
    position: relative;
    float: left;
}

#home-icon {
    width: 100%;
    aspect-ratio: 1;
    color: white;
}

/* Index/Home Page*/
.name {
    width: 70%;
    margin: 2.5rem auto 0 auto;
    font-size: xxx-large;
    font-weight: bold;
}

.name > p {
    font-size: small;
    font-weight: normal;
    text-align: center;
    padding: 1rem 0 1rem 0;
    border-bottom: 1px solid black;
}

.sur-name::before {
    margin: 1rem;
    content: '';
}

.small-intro-index {
    margin: 2.5rem auto 5rem auto;
    width: 80%;
}

.small-intro-index > p {
    text-align: center;
    margin: 2rem 0 0 0;
}

@media screen
and (min-device-width: 1200px) {
    #hamburger {
        display: none;
    }

    #home {
        display: none;
    }

    #nav {
        max-height: 50%;
        flex-direction: row;
        justify-content: space-around;
    }

    .name {
        margin-top: 10rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .name > p {
        width: 50%;
        margin: auto;

    }

    .first-name {
        /*margin: auto;*/
        text-align: center;
    }

    .sur-name {
        /*margin: auto;*/
        text-align: center;
    }

    .small-intro-index {
        width: 40%;
    }

    .small-intro-index > p {
        text-align: left;
        font-size: large;
    }
}

/*
Sensible CSS Defaults
*/
html, body, div, span, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
abbr, address, cite, code,
del, dfn, em, img, ins, kbd, q, samp,
small, strong, sub, sup, var,
b, i,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, figcaption, figure,
footer, header, hgroup, menu, nav, section, summary,
time, mark, audio, video {
    margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
    font-size: 100%;
    vertical-align: baseline;
    background: transparent;
}

html {
    width: 100vw;
}

body {
    width: 100%;

    background: -webkit-linear-gradient(180deg, hsla(155, 27%, 81%, 1) 0%, hsla(0, 0%, 100%, 1) 100%);
}

article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
    display: block;
}

nav ul {
    list-style: none;
}