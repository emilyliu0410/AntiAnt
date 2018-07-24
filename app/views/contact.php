<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$contact_lang = $this->lang->line('contact');
?>
<link href="<?php base_url();?>/src/css/contact.css" rel="stylesheet" />
<section id="contact">
<!--    Contact page title
    <h2><?php echo $contact_lang['title']; ?></h2>
    form
    <form action="/action_page.php">
        personla information 
        <?php foreach ($contact_lang['information'] as $infom):?>
            <label for="info"><?php echo $infom; ?></label>
            <input type="text" id="fname" name="<?php echo $infom; ?>" placeholder="">
        <?php endforeach; ?>
        msg detail	
        <label for="msg"><?php echo $contact_lang['msg']?></label>
        <textarea id="msg"  placeholder="" ></textarea>
        <input type="submit" value="<?php echo $contact_lang['submit'] ?>">
    </form>
    map and company contact information
    <div class="container">
        <div class="row">
            <div class="col-6">
                map-->
                <div id="map" class='map'>My map will go here</div>
<!--            </div>
            <div class="col-6">
                contact information
                <p><?php echo $contact_lang['address'] ?></p>
                <p><?php echo $contact_lang['number'] ?></p>
                <p><?php echo $contact_lang['email'] ?></p>
            </div>
        </div>
    </div>-->
</section>
<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
<script src="<?php base_url();?>/src/js/contact.js"></script>