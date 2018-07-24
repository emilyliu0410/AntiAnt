<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $nav_lang = $this->lang->line('nav');
?>
<div class="side-nav">
    <!-- Sidebar -->
    <nav id="sidebar navbar navbar-dark ">
        <div class="login">
            <form class="login_box">
                <div class="form-group">
                    <label><?php echo $nav_lang['username']; ?></label>
                    <input class="form-control" type="text" placeholder="<?php echo $nav_lang['username']; ?>" aria-label="<?php echo $nav_lang['username']; ?>">
                </div>
                <div class="form-group">
                    <label><?php echo $nav_lang['password']; ?></label>
                    <input class="form-control" type="password" placeholder="<?php echo $nav_lang['password']; ?>" aria-label="<?php echo $nav_lang['password']; ?>">
                </div>
                <div class="text-center">
                    <a href=""><?php echo $nav_lang['register']; ?></a>
                </div>
                <div class="submit text-center">
                    <button class=" login_btn btn btn-success" type="submit"><?php echo $nav_lang['login']; ?></button>
                </div>
            </form>

        </div>
    </nav>
</div>