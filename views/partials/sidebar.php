<div class="min-h-screen flex flex-row bg-indigo-50">
    <div class="flex flex-col w-56 bg-indigo-600 rounded-r-3xl overflow-hidden">
        <div class="flex items-center justify-center h-20 shadow-md">
            <h1 class="text-3xl uppercase text-white">Akademi</h1>
        </div>
        <ul class="flex flex-col py-4">
            <li>
                <a href="/schoolmanagementsystem/" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:text-gray-800">
                    <span class="inline-flex items-center justify-center h-12 w-12 text-lg <?= urlIs("/schoolmanagementsystem/") ? "text-gray-800" : "text-white" ?>"><i class="bx bx-home"></i></span>
                    <span class="text-sm font-medium <?= urlIs("/schoolmanagementsystem/") ? "text-gray-800" : "text-white" ?>">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/schoolmanagementsystem/index.php/students" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:text-gray-800">
                    <span class="inline-flex items-center justify-center h-12 w-12 text-lg <?= urlIs("/schoolmanagementsystem/index.php/students") || urlIs("/schoolmanagementsystem/index.php/students/add") ? "text-gray-800" : "text-white" ?>"><i class="bi bi-backpack"></i></span>
                    <span class="text-sm font-medium <?= urlIs("/schoolmanagementsystem/index.php/students") || urlIs("/schoolmanagementsystem/index.php/students/add") ? "text-gray-800" : "text-white" ?>">Students</span>
                </a>
            </li>
            <li>
                <a href="/schoolmanagementsystem/index.php/teachers" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:text-gray-800">
                    <span class="inline-flex items-center justify-center h-12 w-12 text-lg <?= urlIs("/schoolmanagementsystem/index.php/teachers") ? "text-gray-800" : "text-white" ?>"><i class="bi bi-briefcase"></i></i></span>
                    <span class="text-sm font-medium <?= urlIs("/schoolmanagementsystem/index.php/teachers") ? "text-gray-800" : "text-white" ?>">Teachers</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-white hover:text-gray-800">
                    <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-white"><i class="bx bx-shopping-bag"></i></span>
                    <span class="text-sm font-medium">Shopping</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                    <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-chat"></i></span>
                    <span class="text-sm font-medium">Chat</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                    <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-user"></i></span>
                    <span class="text-sm font-medium">Profile</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                    <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-bell"></i></span>
                    <span class="text-sm font-medium">Notifications</span>
                    <span class="ml-auto mr-6 text-sm bg-red-100 rounded-full px-3 py-px text-red-500">5</span>
                </a>
            </li>
            <li>
                <a href="#" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                    <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-log-out"></i></span>
                    <span class="text-sm font-medium">Logout</span>
                </a>
            </li>
        </ul>
    </div>