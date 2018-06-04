<?php/*Template Name: Home*/?>
<?php get_header(); ?>
    
    <div id="slider">
        <div class="container">
            <?php putRevSlider('slider');?>
        </div>
    </div>
    <section class="section" id="contato">
        <div class="container">
            <div class="contato">
                <div class="col-md-6 col-md-offset-3 wow fadeIn title" data-wow-delay=".5s">
                    <h1>Contato</h1>
                    <p>deixe sua mensagem, retornaremos em breve! <br>se preferir, nosso email e <a href="mailto:contato@lepotgourmet.com.br" target="_blank">contato@lepotgourmet.com.br</a></p>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="13" title="contato"]'); ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>