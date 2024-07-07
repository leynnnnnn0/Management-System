<?php
require('views/partials/header.php');
require('views/partials/sidebar.php');
require('views/partials/heading.php');
?>
<!-- component -->
<div class="p-6 bg-gray-100">
    <div class="container mx-auto">
        <div>
            <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                    <div class="text-gray-600">
                        <p class="font-medium text-lg">Personal Details</p>
                        <p>Please fill out all the fields.</p>
                    </div>

                    <div class="lg:col-span-2">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                            <div class="md:col-span-5">
                                <label for="full_name">Full Name</label>
                                <input type="text" name="full_name" id="full_name" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="maria jane" />
                            </div>

                            <div class="md:col-span-5">
                                <label for="email">Email Address</label>
                                <input type="text" name="email" id="email" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="email@domain.com" />
                            </div>

                            <div class="md:col-span-5">
                                <label for="phoneNumber">Phone Number</label>
                                <input type="text" name="phoneNumber" id="phoneNumber" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="09*********" />
                            </div>

                            <div class="md:col-span-5">
                                <label for="address">Address</label>
                                <input type="text" name="address" id="address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="Bacao, Cavite" />
                            </div>

                            <div class="md:col-span-5">
                                <label for="dateOfBirth">Date of Birth</label>
                                <input type="date" name="dateOfBirth" id="dateOfBirth" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                            </div>

                            <div class="md:col-span-5 text-right mt-4">
                                <div class="inline-flex items-end gap-2 items-center">
                                    <a href="/schoolmanagementsystem/index.php/students" class="cursor-pointer border-2 border-indigo-600 hover:bg-blue-700 text-indigo-600 font-bold py-2 px-4 rounded">Cancel</a>
                                    <a class="cursor-pointer bg-indigo-600 hover:bg-indigo-400 text-white font-bold py-2 px-4 rounded">Submit</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="https://www.buymeacoffee.com/dgauderman" target="_blank" class="md:absolute bottom-0 right-0 p-4 float-right">
            <img src="https://www.buymeacoffee.com/assets/img/guidelines/logo-mark-3.svg" alt="Buy Me A Coffee" class="transition-all rounded-full w-14 -rotate-45 hover:shadow-sm shadow-lg ring hover:ring-4 ring-white">
        </a>
    </div>
</div>

<?php
require('views/partials/footer.php');
?>