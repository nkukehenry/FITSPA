
<!--Counter start-->
<section class="counter">
    <div class="container">
        <div class="row">
            <div class="col-md-4 wow fadeInLeft">
                <h3><?php echo $page_home['home_welcome_pbar4_text']; ?></h3>
                <span class="hr-line"></span>
                <p class="pt-3 pb-3"><?php echo $page_home['home_welcome_text']; ?></p>
            </div>
            <div class="col-md-8 text-center wow fadeInRight">
                <div class="row" style="justify-content: center;">

                    <?php foreach(get_counters() as $counter): ?>
                            
                        <div class="icon-block col-lg-2 col-md-2 col-sm-4 col-xs-4  m-1  pt-3 pb-2">
                            <div class="icon">
                                <i class="<?php echo $counter->icon; ?> blue"></i>
                            </div>
                            <div class="counters mt-1">
                                <h5><span class="count_nums text-bold" data-to="<?php echo $counter->counter_value; ?>" data-speed="<?php echo $counter->counter_value; ?>"><strong><?php echo $counter->counter_value; ?></strong></span></h5>
                            </div>
                            <p class="num-counts mb-2 mt-6" style="font-size: 10pt;"><?php echo $counter->counter_label; ?></p>
                        </div>

                    <?php endforeach; ?>

                    <!--
                    <div class="col-md-3 icon-block two">
                        <div class="icon">
                            <i class="icon-umbrella green"></i>
                        </div>
                        <div class="counters mt-4">
                            <h3><span class="count_nums" data-to="<?php echo $page_home['home_welcome_pbar2_value']; ?>" data-speed="<?php echo $page_home['home_welcome_pbar2_value']; ?>"><?php echo $page_home['home_welcome_pbar2_value']; ?></span></h3>
                        </div>
                        <p class="num-counts mb-4 mt-10"><?php echo $page_home['home_welcome_pbar2_text']; ?></p>
                    </div>
                    <div class="col-md-3 icon-block">
                        <div class="icon">
                            <i class="icon-megaphone blue"></i>
                        </div>
                        <div class="counters mt-4">
                            <h3><span class="count_nums" data-to="<?php echo $page_home['home_welcome_pbar3_value']; ?>" data-speed="<?php echo $page_home['home_welcome_pbar3_value']; ?>"><?php echo $page_home['home_welcome_pbar3_value']; ?></span></h3>
                        </div>
                        <p class="num-counts mt-10"><?php echo $page_home['home_welcome_pbar3_text']; ?></p>
                    </div>
                    <div class="col-md-3 icon-block">
                        <div class="icon">
                            <i class="icon-bubbles7 blue"></i>
                        </div>
                        <div class="counters mt-4">
                            <h3><span class="count_nums" data-to="<?php echo $page_home['home_welcome_pbar5_value']; ?>" data-speed="<?php echo $page_home['home_welcome_pbar5_value']; ?>"><?php echo $page_home['home_welcome_pbar5_value']; ?></span></h3>
                        </div>
                        <p class="num-counts mt-10"><?php echo $page_home['home_welcome_pbar5_text']; ?></p>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--Counter end-->
