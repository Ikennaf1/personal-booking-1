<?php
$socials = themeGetSocials();
$contacts = themeGetContacts();
?>

<div class="w-64">
    <label class="flex flex-col gap-2">
        <div>Your title</div>
        <input class="border border-gray-400 rounded-lg w-full" type="text" name="user_title" id="" placeholder="Copywriter" value="<?= settings('r', 'personal_booking_1.user_title') ?>">
    </label>
</div>

<div class="w-64">
    <label class="flex flex-col gap-2">
        <div>Bio</div>
        <textarea class="border border-gray-400 rounded-lg w-full"name="user_bio" id="" placeholder="Short description of yourself and services"><?= settings('r', 'personal_booking_1.user_bio') ?></textarea>
    </label>
</div>

<div class="w-64">
    <label class="flex flex-col gap-2">
        <div>Call to action text</div>
        <input class="border border-gray-400 rounded-lg w-full" type="text" name="cta_text" id="" placeholder="Book me" value="<?= settings('r', 'personal_booking_1.cta_text') ?>">
    </label>
</div>

<?php
foreach ($contacts as $contact => $details) {
?>
<div class="w-64">
    <label class="flex flex-col gap-2">
        <div><?= $details['name'] ?></div>
        <input class="border border-gray-400 rounded-lg w-full" type="text" name="<?= $contact ?>" id="" value="<?= settings('r', 'personal_booking_1.'.$contact) ?>">
    </label>
</div>
<?php
}

foreach ($socials as $social => $details) {
?>
<div class="w-64">
    <label class="flex flex-col gap-2">
        <div><?= $details['name'] ?></div>
        <input class="border border-gray-400 rounded-lg w-full" type="text" name="<?= $social ?>" id="" value="<?= settings('r', 'personal_booking_1.'.$social) ?>">
    </label>
</div>
<?php
}
