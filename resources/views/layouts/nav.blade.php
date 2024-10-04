<div class="flex ">
    <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar"
        aria-controls="sidebar-multi-level-sidebar" type="button"
        class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>
    <div class=" md:hidden flex justify-center m-auto">
        <img class="w-48" src="{{ asset('./images/logo.svg') }}" alt="logo">
    </div>
</div>
<aside id="sidebar-multi-level-sidebar"
    class="fixed  bg-primary text-white top-0 left-0 z-40 w-72 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="flex  justify-center mt-[30px] pr-4 mb-3">
        <a href="../"> <img class=" w-48" src="{{ asset('./images/logo.svg') }}" alt="Logo"></a>
    </div>
    <div class="h-full  py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <ul class="space-y-2  pl-3 pr-6 font-medium">
            <li>
                <a href="../"
                    class=" flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg width="20" height="20" viewBox="0 0 16 15" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.5 7.33333C0.5 7.88562 0.947715 8.33333 1.5 8.33333H6.16667C6.71895 8.33333 7.16667 7.88562 7.16667 7.33333V1C7.16667 0.447715 6.71895 0 6.16667 0H1.5C0.947714 0 0.5 0.447715 0.5 1V7.33333ZM0.5 14C0.5 14.5523 0.947715 15 1.5 15H6.16667C6.71895 15 7.16667 14.5523 7.16667 14V11C7.16667 10.4477 6.71895 10 6.16667 10H1.5C0.947714 10 0.5 10.4477 0.5 11V14ZM8.83333 14C8.83333 14.5523 9.28105 15 9.83333 15H14.5C15.0523 15 15.5 14.5523 15.5 14V7.66667C15.5 7.11438 15.0523 6.66667 14.5 6.66667H9.83333C9.28105 6.66667 8.83333 7.11438 8.83333 7.66667V14ZM9.83333 0C9.28105 0 8.83333 0.447715 8.83333 1V4C8.83333 4.55228 9.28105 5 9.83333 5H14.5C15.0523 5 15.5 4.55228 15.5 4V1C15.5 0.447715 15.0523 0 14.5 0H9.83333Z"
                            fill="#FFFFFF" />
                    </svg>
                    <span class="ms-3">@lang('lang.Dashboard')</span>
                </a>
            </li>
            <li>
                <a href="../excel-list"
                    class=" flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                    <svg class="size-6 text-gray-800 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 3v4a1 1 0 0 1-1 1H5m4 10v-2m3 2v-6m3 6v-3m4-11v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z" />
                    </svg>

                    <span class="ms-3">Messages</span>
                </a>
            </li>


            <li class="absolute bottom-5">
                <form action="../weblogout" method="post" class=" cursor-pointer" id="logoutform">
                    @csrf
                    <div onclick="logoutform.submit()"
                        class="mt-3 flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg width="20" height="20" viewBox="0 0 20 19" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.54545 8.18182H11.8182V10H4.54545V12.7273L0 9.09091L4.54545 5.45455V8.18182ZM3.63636 14.5455H6.09818C7.1479 15.4712 8.44244 16.0744 9.82648 16.2827C11.2105 16.4909 12.6252 16.2954 13.9009 15.7195C15.1766 15.1437 16.259 14.212 17.0182 13.0362C17.7775 11.8604 18.1814 10.4905 18.1814 9.09091C18.1814 7.69129 17.7775 6.3214 17.0182 5.14563C16.259 3.96985 15.1766 3.03813 13.9009 2.46227C12.6252 1.88642 11.2105 1.69089 9.82648 1.89915C8.44244 2.10741 7.1479 2.71061 6.09818 3.63637H3.63636C4.48242 2.50653 5.5803 1.58956 6.84279 0.958313C8.10528 0.327069 9.49759 -0.00105786 10.9091 2.56208e-06C15.93 2.56208e-06 20 4.07 20 9.09091C20 14.1118 15.93 18.1818 10.9091 18.1818C9.49759 18.1829 8.10528 17.8548 6.84279 17.2235C5.5803 16.5923 4.48242 15.6753 3.63636 14.5455Z"
                                fill="white" />
                        </svg>



                        <span class="flex-1 ms-3 whitespace-nowrap">@lang('lang.logout')</span>
                    </div>
                </form>
            </li>

        </ul>


    </div>

</aside>


<div class="p-4 sm:ml-[240px] bg-white relative sm:z-50 rounded-[20px] min-h-[100vh] ">
    <nav>
        <div class="flex justify-end items-center gap-5">

            {{-- =============language dropdown======================== --}}
            <button type="button" data-dropdown-toggle="language-dropdown-menu"
                class="inline-flex items-center font-medium justify-center px-4 py-2 text-sm text-gray-900 dark:text-white rounded-lg cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                @if (session()->get('locale') !== 'de')
                    <svg class="w-6 h-6 rounded-full me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 3900 3900">
                        <path fill="#b22234" d="M0 0h7410v3900H0z" />
                        <path d="M0 450h7410m0 600H0m0 600h7410m0 600H0m0 600h7410m0 600H0" stroke="#fff"
                            stroke-width="300" />
                        <path fill="#3c3b6e" d="M0 0h2964v2100H0z" />
                        <g fill="#fff">
                            <g id="d">
                                <g id="c">
                                    <g id="e">
                                        <g id="b">
                                            <path id="a"
                                                d="M247 90l70.534 217.082-184.66-134.164h228.253L176.466 307.082z" />
                                            <use xlink:href="#a" y="420" />
                                            <use xlink:href="#a" y="840" />
                                            <use xlink:href="#a" y="1260" />
                                        </g>
                                        <use xlink:href="#a" y="1680" />
                                    </g>
                                    <use xlink:href="#b" x="247" y="210" />
                                </g>
                                <use xlink:href="#c" x="494" />
                            </g>
                            <use xlink:href="#d" x="988" />
                            <use xlink:href="#c" x="1976" />
                            <use xlink:href="#e" x="2470" />
                        </g>
                    </svg>
                    English (US)
                @else
                    <svg class="h-6 w-6 rounded-full me-2" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256" height="256"
                        viewBox="0 0 256 256" xml:space="preserve">

                        <defs>
                        </defs>
                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                            transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                            <path
                                d="M 2.57 30 l 84.859 0 C 81.254 12.534 64.611 0.015 45.033 0 l -0.068 0 C 25.388 0.015 8.745 12.534 2.57 30 z"
                                style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path d="M 87.429 60 L 2.57 60 C 8.749 77.476 25.408 90 45 90 S 81.25 77.476 87.429 60 z"
                                style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,206,0); fill-rule: nonzero; opacity: 1;"
                                transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                            <path
                                d="M 87.429 60 C 89.088 55.307 90 50.261 90 45 c 0 -5.261 -0.911 -10.307 -2.571 -15 L 2.57 30 C 0.911 34.693 0 39.739 0 45 c 0 5.261 0.912 10.307 2.571 15 L 87.429 60 z"
                                style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(221,0,0); fill-rule: nonzero; opacity: 1;"
                                transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                        </g>
                    </svg>
                    German
                @endif


            </button>
            <!-- Dropdown -->
            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700"
                id="language-dropdown-menu">
                <ul class="py-2 font-medium" role="none">
                    <li>
                        <a href="../lang?lang=en"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                            role="menuitem">
                            <div class="inline-flex items-center">
                                <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full me-2"
                                    xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us" viewBox="0 0 512 512">
                                    <g fill-rule="evenodd">
                                        <g stroke-width="1pt">
                                            <path fill="#bd3d44"
                                                d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                transform="scale(3.9385)" />
                                            <path fill="#fff"
                                                d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                transform="scale(3.9385)" />
                                        </g>
                                        <path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)" />
                                        <path fill="#fff"
                                            d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z"
                                            transform="scale(3.9385)" />
                                    </g>
                                </svg>
                                English (US)
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="../lang?lang=de"
                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                            role="menuitem">
                            <div class="inline-flex items-center">
                                <svg class="h-3.5 w-3.5 rounded-full me-2" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="256"
                                    height="256" viewBox="0 0 256 256" xml:space="preserve">

                                    <defs>
                                    </defs>
                                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                        transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                        <path
                                            d="M 2.57 30 l 84.859 0 C 81.254 12.534 64.611 0.015 45.033 0 l -0.068 0 C 25.388 0.015 8.745 12.534 2.57 30 z"
                                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;"
                                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path
                                            d="M 87.429 60 L 2.57 60 C 8.749 77.476 25.408 90 45 90 S 81.25 77.476 87.429 60 z"
                                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,206,0); fill-rule: nonzero; opacity: 1;"
                                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        <path
                                            d="M 87.429 60 C 89.088 55.307 90 50.261 90 45 c 0 -5.261 -0.911 -10.307 -2.571 -15 L 2.57 30 C 0.911 34.693 0 39.739 0 45 c 0 5.261 0.912 10.307 2.571 15 L 87.429 60 z"
                                            style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(221,0,0); fill-rule: nonzero; opacity: 1;"
                                            transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                    </g>
                                </svg>
                                German
                            </div>
                        </a>
                    </li>
                </ul>
            </div>



            <div class="flex justify-end gap-6">
                <button>


                    <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification"
                        class="relative inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none dark:hover:text-white dark:text-gray-400"
                        type="button">
                        <svg width="19" height="21" viewBox="0 0 19 21" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.13043 0.130859C4.80824 0.130859 1.30439 3.63472 1.30439 7.95694V12.6341L0.38207 13.5564C0.00902661 13.9294 -0.10256 14.4904 0.0993266 14.9779C0.301214 15.4653 0.776831 15.783 1.30439 15.783H16.9565C17.4841 15.783 17.9597 15.4653 18.1616 14.9779C18.3635 14.4904 18.2519 13.9294 17.8788 13.5564L16.9565 12.6341V7.95694C16.9565 3.63472 13.4527 0.130859 9.13043 0.130859Z"
                                fill="#67748E" />
                            <path
                                d="M9.13082 21C6.96971 21 5.21777 19.2481 5.21777 17.0869H13.0439C13.0439 19.2481 11.292 21 9.13082 21Z"
                                fill="#67748E" />
                        </svg>

                        <div
                            class="absolute block w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-0.5 start-2.5 dark:border-gray-900">
                        </div>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownNotification"
                        class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-800 dark:divide-gray-700"
                        aria-labelledby="dropdownNotificationButton">
                        <div class="block px-4 py-2 font-medium text-center text-white rounded-t-lg bg-primary mr-5">
                            @lang('lang.Notifications')
                        </div>
                        <div class="divide-y divide-white mr-5">
                            <p class="text-center my-3">No Recent Notification</p>
                            {{-- <a href="#" class="flex px-4 pt-3 hover:bg-gray-100 dark:hover:bg-gray-700">

                                <div class="w-full ps-3 pb-3 border-b-2 border-primary">
                                    <div class="text-gray-500 text-sm mb-1.5 dark:text-gray-400">New message from <span
                                            class="font-semibold text-gray-900 dark:text-white">Jese Leos</span>: "Hey,
                                        what's up? All set for the presentation?"</div>
                                    <div class="text-xs text-blue-600 dark:text-blue-500">a few moments ago</div>
                                </div>
                            </a> --}}




                        </div>
                        <a href="#"
                            class="block py-2 text-sm font-medium text-center text-white rounded-b-lg bg-primary mr-5">
                            <div class="inline-flex items-center ">
                                <svg class="w-4 h-4 me-2 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                    <path
                                        d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                </svg>
                                @lang('lang.View_all')
                            </div>
                        </a>
                    </div>

                </button>
                <div class="flex items-center gap-2">
                    <div class="leading-tight  text-end">
                        <h2 class="text-md">{{ session('user_det')['name'] }}</h2>
                        <p class="text-xs  text-gray">{{ session('user_det')['role'] }}</p>
                    </div>
                    <div>
                        <img height="42px" width="42px" class="rounded-[5px] h-[42px] object-fill"
                            src="{{ session()->has('user_image') && session('user_image.user_image') !== null ? asset(session('user_image.user_image')) : asset('images/user.png') }}"
                            alt="user">
                    </div>
                </div>
            </div>
        </div>
    </nav>
