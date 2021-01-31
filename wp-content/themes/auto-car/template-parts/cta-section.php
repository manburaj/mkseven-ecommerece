<?php
$auto_car_settings = auto_car_get_theme_options();
$cta_description = $auto_car_settings['cta_description'];
$cta_title = $auto_car_settings['cta_title'];
$cta_button = $auto_car_settings['cta_button'];
$cta_link = $auto_car_settings['cta_link'];


    if(($cta_button && $cta_link )|| $cta_description|| $cta_title ){?>

    <section id="promo" class="section promo text-center">
        <div class="container">
            <div class="row cta-wrap">

                <div class="col-md-9">
              
                   <div class="promo-content">
                    
                         <h2><?php echo esc_html($cta_title); ?> </h2>
                    
                        <p><?php echo esc_html($cta_description); ?> </p>
               </div>
           </div>

           <div class="col-md-3">
                <?php 
                if($cta_button && $cta_link){
                    echo '<div class="cta-btn-wrap">';
                    echo '<a href="'.esc_url($cta_link).'" class="btn btn-default" target="_blank">'.esc_html($cta_button).'</a>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
        </div>
    </section>
<?php }?>
