<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css', 'resources/js/app.js')
</head>
<body id="app" class="bg-white dark:bg-gray-900 astro-4L22QGTD">
    <header class="astro-ARE2YTNH">
        <nav
            class="absolute z-10 w-full border-b border-black/5 dark:border-white/5 lg:border-transparent astro-ARE2YTNH">
            <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
                <div
                    class="relative flex flex-wrap items-center justify-between gap-6 py-3 md:gap-0 md:py-4 astro-ARE2YTNH">
                    <div class="relative z-20 flex w-full justify-between md:px-0 lg:w-max astro-ARE2YTNH">
                        <a href="/#home" aria-label="logo"
                            class="flex items-center space-x-2 astro-ARE2YTNH">
                            <div aria-hidden="true" class="flex space-x-1 astro-ARE2YTNH">
                                <div class="h-4 w-4 rounded-full bg-gray-900 dark:bg-white astro-ARE2YTNH"></div>
                                <div class="h-6 w-2 bg-primary astro-ARE2YTNH"></div>
                            </div>
                            <span
                                class="text-2xl font-bold text-gray-900 dark:text-white astro-ARE2YTNH">Laravel 10x</span>
                        </a>

                        <div class="relative flex max-h-10 items-center lg:hidden astro-ARE2YTNH">
                            <button aria-label="humburger" id="hamburger" class="relative -mr-6 p-6 astro-ARE2YTNH">
                                <div aria-hidden="true" id="line"
                                    class="m-auto h-0.5 w-5 rounded bg-sky-900 transition duration-300 dark:bg-gray-300 astro-ARE2YTNH">
                                </div>
                                <div aria-hidden="true" id="line2"
                                    class="m-auto mt-2 h-0.5 w-5 rounded bg-sky-900 transition duration-300 dark:bg-gray-300 astro-ARE2YTNH">
                                </div>
                            </button>
                        </div>
                    </div>
                    <div id="navLayer" aria-hidden="true"
                        class="fixed inset-0 z-10 h-screen w-screen origin-bottom scale-y-0 bg-white/70 backdrop-blur-2xl transition duration-500 dark:bg-gray-900/70 lg:hidden astro-ARE2YTNH">
                    </div>
                    <div id="navlinks"
                        class="invisible absolute top-full left-0 z-20 w-full origin-top-right translate-y-1 scale-90 flex-col flex-wrap justify-end gap-6 rounded-3xl border border-gray-100 bg-white p-8 opacity-0 shadow-2xl shadow-gray-600/10 transition-all duration-300 dark:border-gray-700 dark:bg-gray-800 dark:shadow-none lg:visible lg:relative lg:flex lg:w-7/12 lg:translate-y-0 lg:scale-100 lg:flex-row lg:items-center lg:gap-0 lg:border-none lg:bg-transparent lg:p-0 lg:opacity-100 lg:shadow-none astro-ARE2YTNH">
                        <div class="w-full text-gray-600 dark:text-gray-200 lg:w-auto lg:pr-4 lg:pt-0 astro-ARE2YTNH">
                            <ul
                                class="flex flex-col gap-6 tracking-wide lg:flex-row lg:gap-0 lg:text-sm astro-ARE2YTNH">
                                <li class="astro-ARE2YTNH">
                                    <a href="/#features"
                                        class="hover:text-primary block transition dark:hover:text-white md:px-4 astro-ARE2YTNH">
                                        <span class="astro-ARE2YTNH">Features</span>
                                    </a>
                                </li>
                                <li class="astro-ARE2YTNH">
                                    <a href="/#solution"
                                        class="hover:text-primary block transition dark:hover:text-white md:px-4 astro-ARE2YTNH">
                                        <span class="astro-ARE2YTNH">Solution</span>
                                    </a>
                                </li>
                                <li class="astro-ARE2YTNH">
                                    <a href="/#reviews"
                                        class="hover:text-primary block transition dark:hover:text-white md:px-4 astro-ARE2YTNH">
                                        <span class="astro-ARE2YTNH">Reviews</span>
                                    </a>
                                </li>
                                <li class="astro-ARE2YTNH">
                                    <a href="#" target="_blank"
                                        class="flex gap-2 font-semibold text-gray-700 transition hover:text-primary dark:text-white dark:hover:text-white md:px-4 astro-ARE2YTNH">
                                        <span class="astro-ARE2YTNH">Premium</span>
                                        <span class="flex rounded-full bg-primary/20 px-1.5 py-0.5 text-xs tracking-wider text-purple-700 dark:bg-white/10 dark:text-orange-300 astro-ARE2YTNH">
                                            new</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="mt-12 lg:mt-0 astro-ARE2YTNH">
                            <a href="/register"
                                class="relative flex h-9 w-full items-center justify-center px-4 before:absolute before:inset-0 before:rounded-full before:bg-primary before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max astro-ARE2YTNH">
                                <span class="relative text-sm font-semibold text-white astro-ARE2YTNH"> Get
                                    Started</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="space-y-40 mb-40">
        <div class="relative" id="home">
            <div aria-hidden="true" class="absolute inset-0 grid grid-cols-2 -space-x-52 opacity-40 dark:opacity-20">
                <div class="blur-[106px] h-56 bg-gradient-to-br from-primary to-purple-400 dark:from-blue-700"></div>
                <div class="blur-[106px] h-32 bg-gradient-to-r from-cyan-400 to-sky-300 dark:to-indigo-600"></div>
            </div>
            <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">
                <div class="relative pt-36 ml-auto">
                    <div class="lg:w-2/3 text-center mx-auto">
                        <h1 class="text-gray-900 dark:text-white font-bold text-5xl md:text-6xl xl:text-7xl">Shaping a
                            world with <span class="text-primary dark:text-white">reimagination.</span></h1>
                        <p class="mt-8 text-gray-700 dark:text-gray-300">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Odio incidunt nam itaque sed eius modi error totam sit illum. Voluptas
                            doloribus asperiores quaerat aperiam. Quidem harum omnis beatae ipsum soluta!</p>
                        <div class="mt-16 flex flex-wrap justify-center gap-y-4 gap-x-6">
                            <a href="/#"
                                class="relative flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-full before:bg-primary before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max">
                                <span class="relative text-base font-semibold text-white">Get started</span>
                            </a>
                            <a href="/#"
                                class="relative flex h-11 w-full items-center justify-center px-6 before:absolute before:inset-0 before:rounded-full before:border before:border-transparent before:bg-primary/10 before:bg-gradient-to-b before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 dark:before:border-gray-700 dark:before:bg-gray-800 sm:w-max">
                                <span class="relative text-base font-semibold text-primary dark:text-white">Learn
                                    more</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>