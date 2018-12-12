    <section class="gradient">
        <footer>
            <div class='w25'>
                <?php 
                if(is_active_sidebar('rodape-1')){
                    dynamic_sidebar('rodape-1');
                }
                ?>
            </div>
            <div class='w25'>
                <?php 
                if(is_active_sidebar('rodape-2')){
                    dynamic_sidebar('rodape-2');
                }
                ?>
            </div>
            <div class='w25'>
                <?php 
                if(is_active_sidebar('rodape-3')){
                    dynamic_sidebar('rodape-3');
                }
                ?>
            </div>
            <div class='w25'>
                <?php 
                if(is_active_sidebar('rodape-4')){
                    dynamic_sidebar('rodape-4');
                }
                ?>
            </div>
        </footer>
    </section>
    <section class="gradient rodape">
        <span>
            <?php 
            if(is_active_sidebar('rodape-6')){
                dynamic_sidebar('rodape-6');
            }
            ?>
        </span>
    </section>
    <?php wp_footer(); ?>
</body>
</html>
