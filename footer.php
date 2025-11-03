    <!-- Footer -->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <?php 
                    $logo = get_template_directory_uri() . '/assets/images/logo.png';
                    if (file_exists(get_template_directory() . '/assets/images/logo.png')) {
                        echo '<img src="' . esc_url($logo) . '" alt="' . esc_attr(get_bloginfo('name')) . '" style="height: 40px;">';
                    } else {
                        echo '<img src="https://mydlandinsurance.com/wp-content/uploads/Sperling-Insurance-Horiz-Full-01-300x150.jpg" alt="' . esc_attr(get_bloginfo('name')) . '" style="height: 40px;">';
                    }
                    ?>
                </div>
                <div class="col-md-6 text-md-end mt-3 mt-md-0">
                    <p class="mb-0">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>
</body>
</html>

