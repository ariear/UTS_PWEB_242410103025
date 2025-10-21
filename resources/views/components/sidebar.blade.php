<aside class="fixed left-0 top-0 z-20 flex h-screen w-[355px] flex-col overflow-y-hidden px-5 py-5 lg:static lg:translate-x-0 bg-[#f9fafb]">
    <div class="h-full rounded-3xl border border-gray-200 bg-white">
        <div class="gap-2 pt-8 pb-7">
            <p class="font-semibold text-xl text-center tracking-wider">SIPEDU</p>
        </div>

        <div class="flex flex-col duration-300 ease-linear">
            <nav>
                <div>

                    <ul class="flex flex-col px-6">
                        <li class="{{ $title == 'Dashboard' ? 'bg-[#00B983] text-white' : '' }} rounded-xl pl-2 py-3 mb-4">
                            <a href="/dashboard?username={{$username}}" class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" height="28px" viewBox="0 -960 960 960" width="28px" fill="{{ $title == 'Dashboard' ? '#FFFFFF' : '#00000' }}">
                                    <path d="M520-600v-240h320v240H520ZM120-440v-400h320v400H120Zm400 320v-400h320v400H520Zm-400 0v-240h320v240H120Zm80-400h160v-240H200v240Zm400 320h160v-240H600v240Zm0-480h160v-80H600v80ZM200-200h160v-80H200v80Zm160-320Zm240-160Zm0 240ZM360-280Z" />
                                </svg>
                                <span class="ml-4">Dashboard</span>
                            </a>
                        </li>
                        <li class="{{ $title == 'Pengelolaan Penduduk' ? 'bg-[#00B983] text-white' : '' }} rounded-xl pl-2 py-3 mb-4">
                            <a href="/dashboard/kelola-penduduk?username={{$username}}" class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" height="28px" viewBox="0 -960 960 960" width="28px" fill="{{ $title == 'Pengelolaan Penduduk' ? '#FFFFFF' : '#00000' }}">
                                    <path d="M40-160v-112q0-34 17.5-62.5T104-378q62-31 126-46.5T360-440q66 0 130 15.5T616-378q29 15 46.5 43.5T680-272v112H40Zm720 0v-120q0-44-24.5-84.5T666-434q51 6 96 20.5t84 35.5q36 20 55 44.5t19 53.5v120H760ZM360-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47Zm400-160q0 66-47 113t-113 47q-11 0-28-2.5t-28-5.5q27-32 41.5-71t14.5-81q0-42-14.5-81T544-792q14-5 28-6.5t28-1.5q66 0 113 47t47 113ZM120-240h480v-32q0-11-5.5-20T580-306q-54-27-109-40.5T360-360q-56 0-111 13.5T140-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T440-640q0-33-23.5-56.5T360-720q-33 0-56.5 23.5T280-640q0 33 23.5 56.5T360-560Zm0 320Zm0-400Z" />
                                </svg>
                                <span class="ml-4">Pengelolaan Penduduk</span>
                            </a>
                        </li>
                        <li class="{{ $title == 'Profil' ? 'bg-[#00B983] text-white' : '' }} rounded-xl pl-2 py-3">
                            <a href="/dashboard/profile?username={{$username}}" class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" height="28px" viewBox="0 -960 960 960" width="28px" fill="{{ $title == 'Profil' ? '#FFFFFF' : '#00000' }}">
                                    <path d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z" />
                                </svg>
                                <span class="ml-4">Profil</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</aside>