    <footer class="container-fluid"> <!-- div for main image to stretch to edges -->
        
        <div class="container"> <!-- div to hold content in the middle -->

            <div class="row text-center">

                <div class="col-md-6">
                    <!-- <a class="navbar-brand" href="#"><span class="josh">JOSH</span><span class="orange">WHITKIN</span></a> -->
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-left') ) : 
                        endif; ?>

                </div>
            
                <div class="col-md-6">
                    <!-- <p>Terms and Conditions</p> -->
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-right') ) : 
                    endif; ?>

                </div>

            </div> <!-- row -->

        </div> <!-- container -->

    </footer> <!-- container-fluid -->
    <?php wp_footer(); ?>
</body>
</html>