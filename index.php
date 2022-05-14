<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="./assets/js/init-alpine.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
    <script src="./assets/js/charts-lines.js" defer></script>
    <script src="./assets/js/charts-pie.js" defer></script>
    <!-- You need focus-trap.js to make the modal accessible -->
    <script src="./assets/js/focus-trap.js" defer></script>

</head>

<body>



    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">


        <div class="flex flex-col flex-1 w-full">
            <!--Navbar starts-->
            <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
                <div class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300">
                    <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200">
                        eBallot
                    </a>
                    <!-- space between tabs -->
                    <div class="flex justify-center flex-1 lg:mr-32">
                        <div class="relative w-full max-w-xl mr-6 focus-within:text-purple-500">
                        </div>
                    </div>
                    <ul class="flex items-center flex-shrink-0 space-x-6">
                        <!-- Theme toggler -->
                        <li class="flex">
                            <button class="rounded-md focus:outline-none focus:shadow-outline-purple" @click="toggleTheme" aria-label="Toggle color mode">
                                <template x-if="!dark">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z">
                                        </path>
                                    </svg>
                                </template>
                                <template x-if="dark">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"></path>
                                    </svg>
                                </template>
                            </button>
                        </li>

                        <!-- signup -->

                        <div>
                            <a href="signup.php" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                signup
                            </a>
                        </div>



                    </ul>
                </div>
            </header>

            <!--Navbar ends-->







            <main class="h-full overflow-y-auto">
                <div class="container px-6 mx-auto grid">



                    <!--Header start-->
                    <div class="mb-16">
                        <div class="bg-gray-100">
                            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                                <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                                    <div>
                                        <p class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                                            eBallot
                                        </p>
                                    </div>
                                    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                                        <span class="relative inline-block">
                                            <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-gray-400 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                                                <defs>
                                                    <pattern id="dc223fcc-6d72-4ebc-b4ef-abe121034d6e" x="0" y="0" width=".135" height=".30">
                                                        <circle cx="1" cy="1" r=".7"></circle>
                                                    </pattern>
                                                </defs>
                                                <rect fill="url(#dc223fcc-6d72-4ebc-b4ef-abe121034d6e)" width="52" height="24"></rect>
                                            </svg>
                                            <span class="relative">Voting</span>
                                        </span>
                                        Software, and </br> Services that Generate Serious Impact
                                    </h2>
                                    <p class="text-base text-gray-700 md:text-lg">
                                        Upgrade from manually counting ballots to an online election system without sacrificing the integrity of your vote
                                    </p>
                                </div>
                                <div class="flex items-center sm:justify-center">
                                    <a href="signup.php" class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-purple-600 hover:bg-purple-700 focus:shadow-outline focus:outline-none">
                                        Get started
                                    </a>
                                    <a href="/" aria-label="" class="inline-flex items-center font-semibold text-gray-800 transition-colors duration-200 hover:text-purple-700">Learn
                                        more...</a>
                                </div>
                            </div>
                        </div>
                        <div class="relative px-4 sm:px-0">
                            <div class="absolute inset-0 bg-gray-100 h-1/2"></div>
                            <div class="relative grid mx-auto overflow-hidden bg-white divide-y rounded shadow sm:divide-y-0 sm:divide-x sm:max-w-screen-sm sm:grid-cols-3 lg:max-w-screen-md">
                                <div class="inline-block p-8 text-center">
                                    <div class="flex items-center justify-center w-12 h-12 mx-auto mb-4 rounded-full bg-indigo-50">
                                        <svg class="w-10 h-10 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                                            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                                        </svg>
                                    </div>
                                    <p class="font-bold tracking-wide text-gray-800">Create</p>
                                </div>
                                <div class="inline-block p-8 text-center">
                                    <div class="flex items-center justify-center w-12 h-12 mx-auto mb-4 rounded-full bg-indigo-50">
                                        <svg class="w-10 h-10 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                                            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                                        </svg>
                                    </div>
                                    <p class="font-bold tracking-wide text-gray-800">Deploy</p>
                                </div>
                                <div class="inline-block p-8 text-center">
                                    <div class="flex items-center justify-center w-12 h-12 mx-auto mb-4 rounded-full bg-indigo-50">
                                        <svg class="w-10 h-10 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                                            <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
                                        </svg>
                                    </div>
                                    <p class="font-bold tracking-wide text-gray-800">Vote</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Header ends-->




                    <!--Features starts-->

                    <section class="bg-white dark:bg-gray-900">
                        <div class="container px-6 py-10 mx-auto">
                            <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-center dark:text-white">
                                An online voting system
                                with<br>
                                your needs at the forefront.</span></h1>

                            <p class="mt-4 text-gray-500 xl:mt-6 text-center dark:text-gray-300">
                                From secure polling software to the management of complex virtual voting events - we
                                offer a range of</br>
                                online voting software options that exceed expectation. </p>

                            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-16 md:grid-cols-2 xl:grid-cols-3">
                                <div class="space-y-3">
                                    <span class="inline-block p-3 text-purple-500 bg-purple-100 rounded-full dark:text-white dark:bg-purple-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                        </svg>
                                    </span>

                                    <h1 class="text-2xl font-semibold text-gray-700 capitalize dark:text-white">A
                                        reliable online voting tool for
                                        your group</h1>

                                    <p class="text-gray-500 dark:text-gray-300">
                                        Run online elections among your group for a single important event. Or manage
                                        consistent, recurring votes.
                                    </p>

                                    <a href="#" class="inline-flex items-center -mx-1 text-sm text-purple-500 capitalize transition-colors duration-200 transform dark:text-purple-400 hover:underline hover:text-purple-600 dark:hover:text-purple-500">
                                        <span class="mx-1">read more</span>
                                        <svg class="w-4 h-4 mx-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </div>

                                <div class="space-y-3">
                                    <span class="inline-block p-3 text-purple-500 bg-purple-100 rounded-full dark:text-white dark:bg-purple-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                        </svg>
                                    </span>

                                    <h1 class="text-2xl font-semibold text-gray-700 capitalize dark:text-white">Web
                                        app-based voting platform</h1>

                                    <p class="text-gray-500 dark:text-gray-300">
                                        Send eligible voters to a personalized voting website, no online voting app
                                        download required.
                                    </p>

                                    <a href="#" class="inline-flex items-center -mx-1 text-sm text-purple-500 capitalize transition-colors duration-200 transform dark:text-purple-400 hover:underline hover:text-purple-600 dark:hover:text-purple-500">
                                        <span class="mx-1">read more</span>
                                        <svg class="w-4 h-4 mx-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </div>

                                <div class="space-y-3">
                                    <span class="inline-block p-3 text-purple-500 bg-purple-100 rounded-full dark:text-white dark:bg-purple-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                        </svg>
                                    </span>

                                    <h1 class="text-2xl font-semibold text-gray-700 capitalize dark:text-white">Flexible
                                        implementation options
                                    </h1>

                                    <p class="text-gray-500 dark:text-gray-300">
                                        Choose how involved you want to be. Self-administer your vote or let us manage
                                        the voting experience.
                                    </p>

                                    <a href="#" class="inline-flex items-center -mx-1 text-sm text-purple-500 capitalize transition-colors duration-200 transform dark:text-purple-400 hover:underline hover:text-purple-600 dark:hover:text-purple-500">
                                        <span class="mx-1">read more</span>
                                        <svg class="w-4 h-4 mx-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </div>

                                <div class="space-y-3">
                                    <span class="inline-block p-3 text-purple-500 bg-purple-100 rounded-full dark:text-white dark:bg-purple-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                                        </svg>
                                    </span>

                                    <h1 class="text-2xl font-semibold text-gray-700 capitalize dark:text-white">Key
                                        electronic voting features
                                    </h1>

                                    <p class="text-gray-500 dark:text-gray-300">
                                        Never again worry about people voting twice or other forms of vote manipulation.
                                        Get results instantly. Dive
                                        deeper into vote statistics.
                                    </p>

                                    <a href="#" class="inline-flex items-center -mx-1 text-sm text-purple-500 capitalize transition-colors duration-200 transform dark:text-purple-400 hover:underline hover:text-purple-600 dark:hover:text-purple-500">
                                        <span class="mx-1">read more</span>
                                        <svg class="w-4 h-4 mx-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </div>

                                <div class="space-y-3">
                                    <span class="inline-block p-3 text-purple-500 bg-purple-100 rounded-full dark:text-white dark:bg-purple-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                                        </svg>
                                    </span>

                                    <h1 class="text-2xl font-semibold text-gray-700 capitalize dark:text-white">A
                                        pleasant way to cast votes
                                    </h1>

                                    <p class="text-gray-500 dark:text-gray-300">
                                        Your voters deserve a fair and easy to use voting website, accessible from any
                                        device.
                                    </p>

                                    <a href="#" class="inline-flex items-center -mx-1 text-sm text-purple-500 capitalize transition-colors duration-200 transform dark:text-purple-400 hover:underline hover:text-purple-600 dark:hover:text-purple-500">
                                        <span class="mx-1">read more</span>
                                        <svg class="w-4 h-4 mx-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </div>

                                <div class="space-y-3">
                                    <span class="inline-block p-3 text-purple-500 bg-purple-100 rounded-full dark:text-white dark:bg-purple-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                        </svg>
                                    </span>

                                    <h1 class="text-2xl font-semibold text-gray-700 capitalize dark:text-white">Online
                                        election system
                                        integrations
                                    </h1>

                                    <p class="text-gray-500 dark:text-gray-300">
                                        Each vote is unique. Customization options include technical integrations, paper
                                        ballots, vote consulting,
                                        and more.
                                    </p>

                                    <a href="#" class="inline-flex items-center -mx-1 text-sm text-purple-500 capitalize transition-colors duration-200 transform dark:text-purple-400 hover:underline hover:text-purple-600 dark:hover:text-purple-500">
                                        <span class="mx-1">read more</span>
                                        <svg class="w-4 h-4 mx-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!--Features ends-->


                    <!--rely starts-->



                    <!--rely ends-->


                    <!--Team starts-->


                    <section class="bg-white dark:bg-gray-900">
                        <div class="h-[32rem] bg-gray-100 dark:bg-gray-800">
                            <div class="container px-6 py-10 mx-auto">
                                <h1 class="text-3xl font-semibold text-center text-gray-800 capitalize lg:text-4xl dark:text-white">
                                    The
                                    Executive Team</h1>

                                <div class="flex justify-center mx-auto mt-6">
                                    <span class="inline-block w-40 h-1 bg-purple-500 rounded-full"></span>
                                    <span class="inline-block w-3 h-1 mx-1 bg-purple-500 rounded-full"></span>
                                    <span class="inline-block w-1 h-1 bg-purple-500 rounded-full"></span>
                                </div>


                            </div>
                        </div>

                        <div class="container px-6 py-10 mx-auto -mt-72 sm:-mt-80 md:-mt-96">
                            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-16 md:grid-cols-2 xl:grid-cols-3">
                                <div class="flex flex-col items-center p-4 border sm:p-6 rounded-xl dark:border-gray-700">
                                    <img class="object-cover w-full rounded-xl aspect-square" src="   " alt="">

                                    <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white">
                                        Sachin Sharma</h1>

                                    <p class="mt-2 text-gray-500 capitalize dark:text-gray-300">design director</p>

                                    <div class="flex mt-3 -mx-2">
                                        <a href="#" class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Reddit">
                                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
                                                </path>
                                            </svg>
                                        </a>

                                        <a href="#" class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Facebook">
                                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                                                </path>
                                            </svg>
                                        </a>

                                        <a href="#" class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Github">
                                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                                <div class="flex flex-col items-center p-4 border sm:p-6 rounded-xl dark:border-gray-700">
                                    <img class="object-cover w-full rounded-xl aspect-square" src="" alt="">

                                    <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white">
                                        Anshul Chaudhary</h1>

                                    <p class="mt-2 text-gray-500 capitalize dark:text-gray-300">Lead Developer</p>

                                    <div class="flex mt-3 -mx-2">
                                        <a href="#" class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Reddit">
                                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
                                                </path>
                                            </svg>
                                        </a>

                                        <a href="#" class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Facebook">
                                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                                                </path>
                                            </svg>
                                        </a>

                                        <a href="#" class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Github">
                                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>

                                <div class="flex flex-col items-center p-4 border sm:p-6 rounded-xl dark:border-gray-700">
                                    <img class="object-cover w-full rounded-xl aspect-square" src="" alt="">

                                    <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize dark:text-white">
                                        Ankit Raj</h1>

                                    <p class="mt-2 text-gray-500 capitalize dark:text-gray-300">Full stack developer</p>

                                    <div class="flex mt-3 -mx-2">
                                        <a href="#" class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Reddit">
                                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
                                                </path>
                                            </svg>
                                        </a>

                                        <a href="#" class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Facebook">
                                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                                                </path>
                                            </svg>
                                        </a>

                                        <a href="#" class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Github">
                                            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!--Team ends-->


                    <!--Contact starts-->

                    <form action="https://formspree.io/f/xrgjongl" method="POST">

                        <div class="max-w-screen-xl mt-12 px-8 grid gap-8 grid-cols-1 md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 py-16 mx-auto bg-gray-100 text-gray-900 rounded-lg shadow-lg">
                            <div class="flex flex-col justify-between">
                                <div>
                                    <h2 class="text-4xl lg:text-5xl font-bold leading-tight">Lets talk about everything!
                                    </h2>
                                    <div class="text-gray-700 mt-8">
                                        Hate forms? Send us an <span class="underline">email</span> instead.
                                    </div>
                                </div>
                                <div class="mt-8 text-center">

                                    <img src="/assets/img/contact.png">

                                    </svg>
                                </div>
                            </div>
                            <div class="">
                                <div>
                                    <span class="uppercase text-sm text-gray-600 font-bold">Full Name</span>
                                    <input class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="text" name="name" placeholder="Name" required>
                                </div>
                                <div class="mt-8">
                                    <span class="uppercase text-sm text-gray-600 font-bold">Email</span>
                                    <input class="w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline" type="email" name="email" placeholder="example@email.com" required>
                                </div>
                                <div class="mt-8">
                                    <span class="uppercase text-sm text-gray-600 font-bold">Message</span>
                                    <textarea input type="text" name="message" placeholder="Enter your message here" required class="w-full h-32 bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"></textarea>

                                </div>
                                <div class="mt-8">
                                    <button type="submit" class="uppercase text-sm font-bold tracking-wide bg-purple-500 text-white p-3 rounded-lg w-full focus:outline-none focus:shadow-outline">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <!--Contact ends-->



                    <!--Footer starts-->


                    <footer class="flex flex-col items-center justify-between px-6 py-4 bg-white dark:bg-gray-800 sm:flex-row">
                        <a href="#" class="text-xl font-bold text-gray-800 dark:text-white hover:text-gray-700 dark:hover:text-gray-300">eBallot</a>

                        <p class="py-2 text-gray-800 dark:text-white sm:py-0">All rights reserved</p>

                        <div class="flex -mx-2">
                            <a href="#" class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Reddit">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C21.9939 17.5203 17.5203 21.9939 12 22ZM6.807 10.543C6.20862 10.5433 5.67102 10.9088 5.45054 11.465C5.23006 12.0213 5.37133 12.6558 5.807 13.066C5.92217 13.1751 6.05463 13.2643 6.199 13.33C6.18644 13.4761 6.18644 13.6229 6.199 13.769C6.199 16.009 8.814 17.831 12.028 17.831C15.242 17.831 17.858 16.009 17.858 13.769C17.8696 13.6229 17.8696 13.4761 17.858 13.33C18.4649 13.0351 18.786 12.3585 18.6305 11.7019C18.475 11.0453 17.8847 10.5844 17.21 10.593H17.157C16.7988 10.6062 16.458 10.7512 16.2 11C15.0625 10.2265 13.7252 9.79927 12.35 9.77L13 6.65L15.138 7.1C15.1931 7.60706 15.621 7.99141 16.131 7.992C16.1674 7.99196 16.2038 7.98995 16.24 7.986C16.7702 7.93278 17.1655 7.47314 17.1389 6.94094C17.1122 6.40873 16.6729 5.991 16.14 5.991C16.1022 5.99191 16.0645 5.99491 16.027 6C15.71 6.03367 15.4281 6.21641 15.268 6.492L12.82 6C12.7983 5.99535 12.7762 5.993 12.754 5.993C12.6094 5.99472 12.4851 6.09583 12.454 6.237L11.706 9.71C10.3138 9.7297 8.95795 10.157 7.806 10.939C7.53601 10.6839 7.17843 10.5422 6.807 10.543ZM12.18 16.524C12.124 16.524 12.067 16.524 12.011 16.524C11.955 16.524 11.898 16.524 11.842 16.524C11.0121 16.5208 10.2054 16.2497 9.542 15.751C9.49626 15.6958 9.47445 15.6246 9.4814 15.5533C9.48834 15.482 9.52348 15.4163 9.579 15.371C9.62737 15.3318 9.68771 15.3102 9.75 15.31C9.81233 15.31 9.87275 15.3315 9.921 15.371C10.4816 15.7818 11.159 16.0022 11.854 16C11.9027 16 11.9513 16 12 16C12.059 16 12.119 16 12.178 16C12.864 16.0011 13.5329 15.7863 14.09 15.386C14.1427 15.3322 14.2147 15.302 14.29 15.302C14.3653 15.302 14.4373 15.3322 14.49 15.386C14.5985 15.4981 14.5962 15.6767 14.485 15.786V15.746C13.8213 16.2481 13.0123 16.5208 12.18 16.523V16.524ZM14.307 14.08H14.291L14.299 14.041C13.8591 14.011 13.4994 13.6789 13.4343 13.2429C13.3691 12.8068 13.6162 12.3842 14.028 12.2269C14.4399 12.0697 14.9058 12.2202 15.1478 12.5887C15.3899 12.9572 15.3429 13.4445 15.035 13.76C14.856 13.9554 14.6059 14.0707 14.341 14.08H14.306H14.307ZM9.67 14C9.11772 14 8.67 13.5523 8.67 13C8.67 12.4477 9.11772 12 9.67 12C10.2223 12 10.67 12.4477 10.67 13C10.67 13.5523 10.2223 14 9.67 14Z">
                                    </path>
                                </svg>
                            </a>

                            <a href="#" class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Facebook">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z">
                                    </path>
                                </svg>
                            </a>

                            <a href="#" class="mx-2 text-gray-600 dark:text-gray-300 hover:text-gray-500 dark:hover:text-gray-300" aria-label="Github">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.026 2C7.13295 1.99937 2.96183 5.54799 2.17842 10.3779C1.395 15.2079 4.23061 19.893 8.87302 21.439C9.37302 21.529 9.55202 21.222 9.55202 20.958C9.55202 20.721 9.54402 20.093 9.54102 19.258C6.76602 19.858 6.18002 17.92 6.18002 17.92C5.99733 17.317 5.60459 16.7993 5.07302 16.461C4.17302 15.842 5.14202 15.856 5.14202 15.856C5.78269 15.9438 6.34657 16.3235 6.66902 16.884C6.94195 17.3803 7.40177 17.747 7.94632 17.9026C8.49087 18.0583 9.07503 17.99 9.56902 17.713C9.61544 17.207 9.84055 16.7341 10.204 16.379C7.99002 16.128 5.66202 15.272 5.66202 11.449C5.64973 10.4602 6.01691 9.5043 6.68802 8.778C6.38437 7.91731 6.42013 6.97325 6.78802 6.138C6.78802 6.138 7.62502 5.869 9.53002 7.159C11.1639 6.71101 12.8882 6.71101 14.522 7.159C16.428 5.868 17.264 6.138 17.264 6.138C17.6336 6.97286 17.6694 7.91757 17.364 8.778C18.0376 9.50423 18.4045 10.4626 18.388 11.453C18.388 15.286 16.058 16.128 13.836 16.375C14.3153 16.8651 14.5612 17.5373 14.511 18.221C14.511 19.555 14.499 20.631 14.499 20.958C14.499 21.225 14.677 21.535 15.186 21.437C19.8265 19.8884 22.6591 15.203 21.874 10.3743C21.089 5.54565 16.9181 1.99888 12.026 2Z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </footer>

                    <!--Footer ends-->




                </div>
            </main>
        </div>
    </div>
</body>

</html>