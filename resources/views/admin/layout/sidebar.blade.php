<aside :class="sidebarToggle ? 'translate-x-0 lg:w-[90px]' : '-translate-x-full'"
    class="sidebar fixed left-0 top-0 z-9999 flex h-screen w-[290px] flex-col overflow-y-hidden border-r border-gray-200 bg-white px-5 dark:border-gray-800 dark:bg-black lg:static lg:translate-x-0"
    @click.outside="sidebarToggle = false">
    <!-- SIDEBAR HEADER -->
    <div :class="sidebarToggle ? 'justify-center' : 'justify-between'"
        class="flex items-center gap-2 pt-8 pb-7">
        <a href="/admin/dashboard">
            <span class="flex items-center gap-2" >
                <img class="dark:hidden w-10 h-10" src="{{ asset('/images/roaya-logo.png') }}" alt="Logo" />
                <img class="hidden dark:block w-10 h-10" src="src/images/logo/logo-dark.svg" alt="Logo" />
                <span class="text-lg font-semibold">Roaya Diamond</span>
            </span>
        </a>
    </div>

    <!-- SIDEBAR HEADER -->

    <div class="flex flex-col overflow-y-auto duration-300 ease-linear no-scrollbar">
        <!-- Sidebar Menu -->
        <nav x-data="{ selected: $persist('Dashboard') }">
            <ul class="flex flex-col gap-4 mb-6">
                <!-- Start Dashboard -->
                <li>
                    <a href="/admin/dashboard" class="menu-item group px-4 py-2 rounded-lg transition-all duration-300"
                        :class="(selected === 'Dashboard') ? 'bg-gray-200 dark:bg-gray-700 text-gray-900 dark:text-white' :
                        'bg-transparent text-gray-600 dark:text-gray-300'"
                        @click="selected = 'Dashboard'">
                        Dashboard
                    </a>
                </li>
                <!-- End Dashboard -->

                <!-- Start Diamond -->
                <li>
                    <a @click.prevent="selected = (selected === 'Diamond' ? '' : 'Diamond')"
                        class="menu-item group flex justify-between px-4 py-2 rounded-lg transition-all duration-300"
                        :class="(selected === 'Diamond') ? 'bg-gray-200 dark:bg-gray-700 text-gray-900 dark:text-white' :
                        'bg-transparent text-gray-600 dark:text-gray-300'">
                        Diamond
                        <svg class="w-5 h-5 transition-transform"
                            :class="(selected === 'Diamond') ? '-rotate-180' : 'rotate-180'" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </a>
                    <!-- Dropdown -->
                    <div class="overflow-hidden transition-all duration-300"
                        :class="(selected === 'Diamond') ? 'block' : 'hidden'">
                        <ul class="pl-6 mt-2 space-y-1">
                            <li>
                                <a href="/admin/fancy-color-diamonds"
                                    class="menu-dropdown-item block px-4 py-2 rounded-lg transition-all duration-300"
                                    :class="page === 'FancyColor' ?
                                        'bg-gray-300 dark:bg-gray-600 text-gray-900 dark:text-white' :
                                        'text-gray-600 dark:text-gray-300'">
                                    Fancy Color Diamond
                                </a>
                            </li>
                            <li>
                                <a href="/admin/natural-diamonds"
                                    class="menu-dropdown-item block px-4 py-2 rounded-lg transition-all duration-300"
                                    :class="page === 'NaturalDiamond' ?
                                        'bg-gray-300 dark:bg-gray-600 text-gray-900 dark:text-white' :
                                        'text-gray-600 dark:text-gray-300'">
                                    Natural Diamond
                                </a>
                            </li>
                            <li>
                                <a href="/admin/lab-grown-diamonds"
                                    class="menu-dropdown-item block px-4 py-2 rounded-lg transition-all duration-300"
                                    :class="page === 'LabGrown' ? 'bg-gray-300 dark:bg-gray-600 text-gray-900 dark:text-white' :
                                        'text-gray-600 dark:text-gray-300'">
                                    Lab Grown Diamond
                                </a>
                            </li>
                            <li>
                                <a href="/admin/antique-cut-diamonds"
                                    class="menu-dropdown-item block px-4 py-2 rounded-lg transition-all duration-300"
                                    :class="page === 'AntiqueCut' ?
                                        'bg-gray-300 dark:bg-gray-600 text-gray-900 dark:text-white' :
                                        'text-gray-600 dark:text-gray-300'">
                                    Antique Cut Diamond
                                </a>
                            </li>
                            <li>
                                <a href="/admin/precious-stone-diamonds"
                                    class="menu-dropdown-item block px-4 py-2 rounded-lg transition-all duration-300"
                                    :class="page === 'PreciousStone' ?
                                        'bg-gray-300 dark:bg-gray-600 text-gray-900 dark:text-white' :
                                        'text-gray-600 dark:text-gray-300'">
                                    Precious Stone Diamond
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- End Diamond -->

                <!-- Start Order -->
                <li>
                    <a href="/admin/order" class="menu-item group px-4 py-2 rounded-lg transition-all duration-300"
                        :class="(selected === 'Order') ? 'bg-gray-200 dark:bg-gray-700 text-gray-900 dark:text-white' :
                        'bg-transparent text-gray-600 dark:text-gray-300'"
                        @click="selected = 'Order'">
                        Order
                    </a>
                </li>
                <!-- End Order -->

                <!-- Start Cutomers -->
                <li>
                    <a href="/admin/customers" class="menu-item group px-4 py-2 rounded-lg transition-all duration-300"
                        :class="(selected === 'Customers') ? 'bg-gray-200 dark:bg-gray-700 text-gray-900 dark:text-white' :
                        'bg-transparent text-gray-600 dark:text-gray-300'"
                        @click="selected = 'Customers'">
                        Customers
                    </a>
                </li>
                <!-- End Cutomers -->
                <!-- Start Subscription Plan -->
                <li>
                    <a href=" {{ route('admin.subscription.plan') }} "
                        class="menu-item group px-4 py-2 rounded-lg transition-all duration-300"
                        :class="(selected === 'Plan') ? 'bg-gray-200 dark:bg-gray-700 text-gray-900 dark:text-white' :
                        'bg-transparent text-gray-600 dark:text-gray-300'"
                        @click="selected = 'Plan'">
                        Subacription Plan
                    </a>
                </li>
                <!-- End Subscription Plan -->
                <!-- Start Membership -->
                <li>
                    <a href=" {{ route('admin.membership.index') }} "
                        class="menu-item group px-4 py-2 rounded-lg transition-all duration-300"
                        :class="(selected === 'Membership') ? 'bg-gray-200 dark:bg-gray-700 text-gray-900 dark:text-white' :
                        'bg-transparent text-gray-600 dark:text-gray-300'"
                        @click="selected = 'Membership'">
                        Membership
                    </a>
                </li>
                <!-- End Membership -->
            </ul>
        </nav>

        <!-- Sidebar Menu -->
    </div>
</aside>
