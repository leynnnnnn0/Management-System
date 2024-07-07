<?php
require('views/partials/header.php');
require('views/partials/sidebar.php');
require('views/partials/heading.php');
?>

<div class="flex mt-5 gap-8">
    <?php foreach ($teachers as $teacher) : ?>
        <div class="flex flex-col w-48 bg-white h-52 rounded-lg p-3 items-center">
            <img src="../assets/images/speed.jpg" class="shadow-2xl h-16 rounded-full" alt="picture">
            <p class="text-indigo-900 font-bold text-lg mt-2"><?= $teacher['fullName'] ?></p>
            <p class="text-xs text-gray-400 mt-2"><?= $teacher['subject'] ?></p>
            <div class="flex items-center justify-center gap-2 mt-2">
                <a class="cursor-pointer bg-indigo-600 rounded-full text-white p-2"><i class="bi bi-telephone"></i></a>
                <a class="cursor-pointer bg-indigo-600 rounded-full text-white p-2"><i class="bi bi-envelope"></i></a>
            </div>
        </div>
    <?php endforeach; ?>
</div>


<?php
require('views/partials/footer.php');
?>