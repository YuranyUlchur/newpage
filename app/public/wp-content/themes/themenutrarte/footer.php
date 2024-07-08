<!-- Footer Section -->
<footer class="container-fluid ">
    <div class="row justify-content-center footer-custom">
        <div class="col col-md-6 col-lg-3 social-widget">
            <div id="social-widget-container">
                <?php
                if (is_active_sidebar('social-sidebar')) {
                    dynamic_sidebar('social-sidebar');
                }
                ?>
            </div>
        </div>

        <div class="col col-md-6 col-lg-3">
            <h4>Quick Links</h4>
            <ul>
                <li>About Us</li>
                <li>Features</li>
                <li>News</li>
                <li>Menu</li>
            </ul>
        </div>

        <div class="col col-md-6 col-lg-3">
            <h4>Company</h4>
            <ul>
                <li>Why Naturfood?</li>
                <li>Partner With Us</li>
                <li>FAQ</li>
                <li>Blog</li>
            </ul>
        </div>

        <div class="col col-md-6 col-lg-3">
            <h4>Support</h4>
            <ul>
                <li>Account</li>
                <li>Support Center</li>
                <li>Feedback</li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="footer-text text-center">
            &copy; <?php echo date('Y'); ?> Your Company Name. All rights reserved.
        </div>
    </div>

</footer>

<?php wp_footer(); ?>
</body>

</html>