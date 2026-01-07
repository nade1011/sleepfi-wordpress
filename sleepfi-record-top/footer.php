 <footer data-space="footerBottom">
        <div data-frame="footer" data-space="wrapperLR">
        <p id="logo" data-img="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="SleepFiRecord" width="217" height="86"></p>
        <nav id="footer-nav">
            <ul data-frame="nav">
                <li><a href="<?php echo home_url('/'); ?>">TOP</a></li>
                <li><a href="<?php echo home_url('/about'); ?>">ABOUT</a></li>
                <li><a href="<?php echo home_url('/artist'); ?>">ARTIST</a></li>
                <li><a href="<?php echo home_url('/goods'); ?>">GOODS</a></li>
            </ul>
        </nav>
        <p><small>&copy;2025 SleepFi Records. All rights reserved.</small></p>
    </div>
    </footer>

<?php wp_footer(); ?>
</body>
</html>