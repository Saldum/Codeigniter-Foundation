<?php 
    $base_url = $this->config->item('base_url');
    $resources = $this->config->item('resources');
?>

    <!-- Footer -->
    <footer class="row">
        <div class="twelve columns">
            <hr />
            <div class="row">
                <div class="six columns">
                    <p>&copy; Copyright... please use Creative Commons.</p>
                </div>
                <div class="six columns">
                    <ul class="link-list right">
                        <li><a href="#">Section 1</a></li>
                        <li><a href="#">Section 2</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Foundation JS -->
    <script src="<?php echo $resources;?>plugins/foundation/javascripts/foundation.min.js"></script>
    <script src="<?php echo $resources;?>plugins/foundation/javascripts/app.js"></script>
    
    <!-- Add your JS here -->
    
    </body>
</html>