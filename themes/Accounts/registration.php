<?php
/**
 * Template Name: Registration Page
 * This is the frontend display file
 */

// Enable error reporting for debugging (remove in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

get_header();

// Start session if not already started (for WordPress compatibility)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Include the backend processing file
include(get_template_directory() . '/process-registration.php');

// Check for session messages (if using redirect method)
if (isset($_SESSION['success_message'])) {
    $success_message = $_SESSION['success_message'];
    unset($_SESSION['success_message']);
}
if (isset($_SESSION['error_message'])) {
    $error_message = $_SESSION['error_message'];
    unset($_SESSION['error_message']);
}
?>

<section id="front-page">
    <div class="main-container">
        <div class="left-side-container">
            <h2>Sponago</h2>

                <!-- Display success message -->
            <?php if (!empty($success_message)): ?>
                <div style="background: #d4edda; color: #155724; padding: 15px; margin-bottom: 20px; border-radius: 5px; border: 1px solid #c3e6cb;">
                    <strong>✅ Success!</strong><br>
                    <?php echo htmlspecialchars($success_message); ?>
                </div>
            <?php endif; ?>
            
            <!-- Display error message -->
            <?php if (!empty($error_message)): ?>
                <div style="background: #f8d7da; color: #721c24; padding: 15px; margin-bottom: 20px; border-radius: 5px; border: 1px solid #f5c6cb;">
                    <strong>❌ Error!</strong><br>
                    <?php echo htmlspecialchars($error_message); ?>
                </div>
            <?php endif; ?>

                <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post">
                    <fieldset>
                        <label for="name">Name</label>
                            <input type="text" name="name" id="name" placeholder="Enter your name" autocomplete="off">
                        <label for="email">Email Address</label>
                            <input type="email" name="email" id="email" placeholder="Enter your email" autocomplete="off">
                        <label for="password">Password</label>
                            <input type="password" name="password" id="password" placeholder="Enter password">

                        <div class="term">
                            <input type="checkbox" name="checkbox" id="checkbox">
                            <label for="checkbox">I agree to the <a href="terms&policy">terms & policy</a></label>
                        </div>

                        <button>Signup</button>
                    </fieldset>
                </form>
        </div>
        <div class="right-side-container">right</div>
    </div>
</section>
