<!-- component -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite('resources/css/app.css')

    <title>Admin Panel</title>

    <style>
    </style>
</head>

<body class="text-gray-800 font-inter">
    <!--sidenav -->
    <div class="fixed left-0 top-0 w-64 h-full bg-[#f8f4f3] p-4 z-50 sidebar-menu transition-transform">
        <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">

            <h2 class="font-bold text-2xl">LOREM <span class="bg-[#f84525] text-white px-2 rounded-md">IPSUM</span></h2>
        </a>
        <ul class="mt-4">
            <span class="text-gray-400 font-bold">ADMIN</span>
            <li class="mb-1 group">
                <a href=""
                    class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                    <i class="ri-home-2-line mr-3 text-lg"></i>
                    <span class="text-sm">Dashboard</span>
                </a>
            </li>
            <span class="text-gray-400 font-bold">PERSONAL</span>
            <li class="mb-1 group">
                <a href=""
                    class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                    <i class='bx bx-envelope mr-3 text-lg'></i>
                    <span class="text-sm">Messages</span>
                    <span
                        class=" md:block px-2 py-0.5 ml-auto text-xs font-medium tracking-wide text-green-600 bg-green-200 rounded-full">2
                        New</span>
                </a>
            </li>
            <li class="mb-1 group">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    @method('post')
                    <a href="{{ route('logout') }}"
                        class="flex font-semibold items-center py-2 px-4 text-gray-900 hover:bg-gray-950 hover:text-gray-100 rounded-md cursor-pointer  group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                        <i class="ri-signout-2-line mr-3 text-lg"></i>
                        <span class="text-sm">Déconnexion</span>
                    </a>
                </form>

            </li>
        </ul>
    </div>
    <div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>
    <!-- end sidenav -->

    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen transition-all main">
        <!-- navbar -->
        <div class="py-2 px-6 bg-[#f8f4f3] flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30">
            <button type="button" class="text-lg text-gray-900 font-semibold sidebar-toggle">
                <i class="ri-menu-line"></i>
            </button>
            <ul class="ml-auto flex items-center">
                <li class="dropdown ml-3">
                    <button type="button" class="dropdown-toggle flex items-center">
                        <div class="p-2 md:block text-left">
                            <h2 class="text-sm font-semibold text-gray-800">{{ Auth::user()->name }}</h2>
                            <p class="text-xs text-gray-500">Administrator</p>
                        </div>
                    </button>
                </li>
            </ul>
        </div>
        <!-- end navbar -->

        <!-- Content -->
        <div class="p-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                <div
                    class="p-6 relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
                    <form>
                        <div class="mb-4">
                            <label for="fullName" class="block text-gray-700 text-sm font-semibold mb-2">Full Name
                                *</label>
                            <input type="text" id="fullName"
                                class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500"
                                required placeholder="James Brown">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 text-sm font-semibold mb-2">Email Address
                                *</label>
                            <input type="email" id="email"
                                class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500"
                                required placeholder="hello@alignui.com">
                        </div>
                        <div class="mb-6">
                            <label for="password" class="block text-gray-700 text-sm font-semibold mb-2">Password
                                *</label>
                            <input type="password" id="password"
                                class="form-input w-full px-4 py-2 border rounded-lg text-gray-700 focus:ring-blue-500"
                                required placeholder="••••••••">
                        </div>
                        <button type="submit"
                            class="w-full bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Register</button>
                        <p class="text-gray-600 text-xs text-center mt-4">
                            <a href="#" class="text-blue-500 hover:underline">Terms and Conditions</a>.
                        </p>
                    </form>
                </div>
                <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
                    <div class="flex justify-between mb-4 items-start">
                        <div class="font-medium">Activities</div>
                        <div class="dropdown">
                            <button type="button" class="dropdown-toggle text-gray-400 hover:text-gray-600"><i
                                    class="ri-more-fill"></i></button>
                            <ul
                                class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                                <li>
                                    <a href="#"
                                        class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="overflow-hidden">
                        <table class="w-full min-w-[540px]">
                            <tbody>
                                <tr>
                                    <td class="py-2 px-4 border-b border-b-gray-50">
                                        <div class="flex items-center">
                                            <a href="#"
                                                class="text-gray-600 text-sm font-medium hover:text-blue-500 ml-2 truncate">Lorem
                                                Ipsum</a>
                                        </div>
                                    </td>
                                    <td class="py-2 px-4 border-b border-b-gray-50">
                                        <span class="text-[13px] font-medium text-gray-400">02-02-2024</span>
                                    </td>
                                    <td class="py-2 px-4 border-b border-b-gray-50">
                                        <span class="text-[13px] font-medium text-gray-400">17.45</span>
                                    </td>
                                    <td class="py-2 px-4 border-b border-b-gray-50">
                                        <div class="dropdown">
                                            <button type="button"
                                                class="dropdown-toggle text-gray-400 hover:text-gray-600 text-sm w-6 h-6 rounded flex items-center justify-center bg-gray-50"><i
                                                    class="ri-more-2-fill"></i></button>
                                            <ul
                                                class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                                                <li>
                                                    <a href="#"
                                                        class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 border-b border-b-gray-50">
                                        <div class="flex items-center">
                                            <a href="#"
                                                class="text-gray-600 text-sm font-medium hover:text-blue-500 ml-2 truncate">Lorem
                                                Ipsum</a>
                                        </div>
                                    </td>
                                    <td class="py-2 px-4 border-b border-b-gray-50">
                                        <span class="text-[13px] font-medium text-gray-400">02-02-2024</span>
                                    </td>
                                    <td class="py-2 px-4 border-b border-b-gray-50">
                                        <span class="text-[13px] font-medium text-gray-400">17.45</span>
                                    </td>
                                    <td class="py-2 px-4 border-b border-b-gray-50">
                                        <div class="dropdown">
                                            <button type="button"
                                                class="dropdown-toggle text-gray-400 hover:text-gray-600 text-sm w-6 h-6 rounded flex items-center justify-center bg-gray-50"><i
                                                    class="ri-more-2-fill"></i></button>
                                            <ul
                                                class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
                                                <li>
                                                    <a href="#"
                                                        class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content -->
    </main>

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // start: Sidebar
        const sidebarToggle = document.querySelector('.sidebar-toggle')
        const sidebarOverlay = document.querySelector('.sidebar-overlay')
        const sidebarMenu = document.querySelector('.sidebar-menu')
        const main = document.querySelector('.main')
        sidebarToggle.addEventListener('click', function(e) {
            e.preventDefault()
            main.classList.toggle('active')
            sidebarOverlay.classList.toggle('hidden')
            sidebarMenu.classList.toggle('-translate-x-full')
        })
        sidebarOverlay.addEventListener('click', function(e) {
            e.preventDefault()
            main.classList.add('active')
            sidebarOverlay.classList.add('hidden')
            sidebarMenu.classList.add('-translate-x-full')
        })
        document.querySelectorAll('.sidebar-dropdown-toggle').forEach(function(item) {
            item.addEventListener('click', function(e) {
                e.preventDefault()
                const parent = item.closest('.group')
                if (parent.classList.contains('selected')) {
                    parent.classList.remove('selected')
                } else {
                    document.querySelectorAll('.sidebar-dropdown-toggle').forEach(function(i) {
                        i.closest('.group').classList.remove('selected')
                    })
                    parent.classList.add('selected')
                }
            })
        })
        // end: Sidebar



        // start: Popper
        const popperInstance = {}
        document.querySelectorAll('.dropdown').forEach(function(item, index) {
            const popperId = 'popper-' + index
            const toggle = item.querySelector('.dropdown-toggle')
            const menu = item.querySelector('.dropdown-menu')
            menu.dataset.popperId = popperId
            popperInstance[popperId] = Popper.createPopper(toggle, menu, {
                modifiers: [{
                        name: 'offset',
                        options: {
                            offset: [0, 8],
                        },
                    },
                    {
                        name: 'preventOverflow',
                        options: {
                            padding: 24,
                        },
                    },
                ],
                placement: 'bottom-end'
            });
        })
        document.addEventListener('click', function(e) {
            const toggle = e.target.closest('.dropdown-toggle')
            const menu = e.target.closest('.dropdown-menu')
            if (toggle) {
                const menuEl = toggle.closest('.dropdown').querySelector('.dropdown-menu')
                const popperId = menuEl.dataset.popperId
                if (menuEl.classList.contains('hidden')) {
                    hideDropdown()
                    menuEl.classList.remove('hidden')
                    showPopper(popperId)
                } else {
                    menuEl.classList.add('hidden')
                    hidePopper(popperId)
                }
            } else if (!menu) {
                hideDropdown()
            }
        })

        function hideDropdown() {
            document.querySelectorAll('.dropdown-menu').forEach(function(item) {
                item.classList.add('hidden')
            })
        }

        function showPopper(popperId) {
            popperInstance[popperId].setOptions(function(options) {
                return {
                    ...options,
                    modifiers: [
                        ...options.modifiers,
                        {
                            name: 'eventListeners',
                            enabled: true
                        },
                    ],
                }
            });
            popperInstance[popperId].update();
        }

        function hidePopper(popperId) {
            popperInstance[popperId].setOptions(function(options) {
                return {
                    ...options,
                    modifiers: [
                        ...options.modifiers,
                        {
                            name: 'eventListeners',
                            enabled: false
                        },
                    ],
                }
            });
        }
        // end: Popper



        // start: Tab
        document.querySelectorAll('[data-tab]').forEach(function(item) {
            item.addEventListener('click', function(e) {
                e.preventDefault()
                const tab = item.dataset.tab
                const page = item.dataset.tabPage
                const target = document.querySelector('[data-tab-for="' + tab + '"][data-page="' + page +
                    '"]')
                document.querySelectorAll('[data-tab="' + tab + '"]').forEach(function(i) {
                    i.classList.remove('active')
                })
                document.querySelectorAll('[data-tab-for="' + tab + '"]').forEach(function(i) {
                    i.classList.add('hidden')
                })
                item.classList.add('active')
                target.classList.remove('hidden')
            })
        })
        // end: Tab



        // start: Chart
        new Chart(document.getElementById('order-chart'), {
            type: 'line',
            data: {
                labels: generateNDays(7),
                datasets: [{
                        label: 'Active',
                        data: generateRandomData(7),
                        borderWidth: 1,
                        fill: true,
                        pointBackgroundColor: 'rgb(59, 130, 246)',
                        borderColor: 'rgb(59, 130, 246)',
                        backgroundColor: 'rgb(59 130 246 / .05)',
                        tension: .2
                    },
                    {
                        label: 'Completed',
                        data: generateRandomData(7),
                        borderWidth: 1,
                        fill: true,
                        pointBackgroundColor: 'rgb(16, 185, 129)',
                        borderColor: 'rgb(16, 185, 129)',
                        backgroundColor: 'rgb(16 185 129 / .05)',
                        tension: .2
                    },
                    {
                        label: 'Canceled',
                        data: generateRandomData(7),
                        borderWidth: 1,
                        fill: true,
                        pointBackgroundColor: 'rgb(244, 63, 94)',
                        borderColor: 'rgb(244, 63, 94)',
                        backgroundColor: 'rgb(244 63 94 / .05)',
                        tension: .2
                    },
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        function generateNDays(n) {
            const data = []
            for (let i = 0; i < n; i++) {
                const date = new Date()
                date.setDate(date.getDate() - i)
                data.push(date.toLocaleString('en-US', {
                    month: 'short',
                    day: 'numeric'
                }))
            }
            return data
        }

        function generateRandomData(n) {
            const data = []
            for (let i = 0; i < n; i++) {
                data.push(Math.round(Math.random() * 10))
            }
            return data
        }
        // end: Chart
    </script>

</body>

</html>
