<?php
/**
 * Template Name: Registration Page
 */
get_header();
?>


<section id="front-page">
    <div class="main-container">
        <div class="left-side-container">
            <h2>Sponago</h2>
                <form action="" method="post">
                    <fieldset>
                        <label for="name">Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter your name">
                        <label for="email">Email Address</label>
                            <input type="email" name="email" id="email" placeholder="Enter your email">
                        <label for="password">Password</label>
                            <input type="password" name="pass" id="pass" placeholder="Enter password">

                        <div class="term">
                            <input type="checkbox" name="checkbox" id="checkbox">
                            <label for="agreement">I agree to the <a href="terms&policy">terms & policy</a></label>
                        </div>

                        <button>Signup</button>
                    </fieldset>
                </form>
        </div>
        <div class="right-side-container">right</div>
    </div>
</section>

