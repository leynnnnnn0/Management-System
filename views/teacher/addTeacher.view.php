<?php
require('views/partials/header.php');
require('views/partials/sidebar.php');
require('views/partials/heading.php');
?>
<!-- component -->
<div class="p-6 bg-gray-100">
    <div class="container mx-auto">
        <div>
            <form method="POST" class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
                    <div class="text-gray-600">
                        <p class="font-medium text-lg">Personal Details</p>
                        <p>Please fill out all the fields.</p>
                    </div>

                    <div class="lg:col-span-2">
                        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                            <div class="md:col-span-5">
                                <label for="fullName">Full Name</label>
                                <input type="text" name="fullName" id="fullName" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="maria jane" />
                                <?php if (isset($_SESSION['error']['fullName'])) : ?>
                                    <p class="text-red-300"><?= $_SESSION['errors']['fullName'] ?></p>
                                <?php endif; ?>
                            </div>

                            <div class="md:col-span-5">
                                <label for="email">Email Address</label>
                                <input type="text" name="email" id="email" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="email@domain.com" />
                                <?php if (isset($_SESSION['errors']['email'])) : ?>
                                    <p class="text-red-300"><?= $_SESSION['errors']['email'] ?></p>
                                <?php endif; ?>
                            </div>

                            <div class="md:col-span-5">
                                <label for="phoneNumber">Phone Number</label>
                                <input type="text" name="phoneNumber" id="phoneNumber" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="09*********" />
                                <?php if (isset($_SESSION['errors']['phoneNumber'])) : ?>
                                    <p class="text-red-300"><?= $_SESSION['errors']['phoneNumber'] ?></p>
                                <?php endif; ?>
                            </div>

                            <div class="md:col-span-5">
                                <label for="address">Address</label>
                                <input type="text" name="address" id="address" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="Bacao, Cavite" />
                                <?php if (isset($_SESSION['errors']['address'])) : ?>
                                    <p class="text-red-300"><?= $_SESSION['errors']['address'] ?></p>
                                <?php endif; ?>
                            </div>

                            <div class="md:col-span-5">
                                <label for="dateOfBirth">Date of Birth</label>
                                <input type="date" name="dateOfBirth" id="dateOfBirth" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" />
                                <?php if (isset($_SESSION['errors']['dateOfBirth'])) : ?>
                                    <p class="text-red-300"><?= $_SESSION['errors']['dateOfBirth'] ?></p>
                                <?php endif; ?>
                            </div>

                            <div class="md:col-span-5">
                                <label for="subject">Subject</label>
                                <input type="text" name="subject" id="subject" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" value="" placeholder="Mathematics" />
                                <?php if (isset($_SESSION['errors']['subject'])) : ?>
                                    <p class="text-red-300"><?= $_SESSION['errors']['subject'] ?></p>
                                <?php endif; ?>
                            </div>

                            <div class="md:col-span-5 text-right mt-4">
                                <div class="inline-flex items-end gap-2 items-center">
                                    <a href="/schoolmanagementsystem/index.php/teachers/add" class="cursor-pointer border-2 border-indigo-600 hover:bg-blue-700 text-indigo-600 font-bold py-2 px-4 rounded">Cancel</a>
                                    <button class="cursor-pointer bg-indigo-600 hover:bg-indigo-400 text-white font-bold py-2 px-4 rounded">Submit</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require('views/partials/footer.php');
?>