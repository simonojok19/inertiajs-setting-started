<template>
    <main>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">S
                    <li class="nav-item active">
                        <inertia-link class="nav-link" href="/">Home <span class="sr-only">(current)</span></inertia-link>
                    </li>
                    <li class="nav-item">
                        <inertia-link class="nav-link" href="/">Home</inertia-link>
                    </li>
                    <li class="nav-item">
                        <inertia-link class="nav-link" href="/about">About</inertia-link>
                    </li>
                    <li class="nav-item">
                        <inertia-link class="nav-link" href="/contact">Contact</inertia-link>
                    </li>
                </ul>
            </div>
        </nav>
        <article>
            <slot/>
        </article>
    </main>
</template>
