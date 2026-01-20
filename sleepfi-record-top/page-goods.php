<?php get_header(); ?>
    <main>
        <div id="content"  data-space="wrapperLR">
            <section data-frame="Section" data-space="secBtm">
                <h2>GOODS</h2>
                <!-- ▼ Jukebox Player -->
                <div id="jukebox" data-player="jukebox" data-img="jukesubbarImg" data-space="jukesubbarBtm" class="is-paused">
                <div class="player-cover"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/goods/record.svg" alt="レコードの絵"></div>

                <div class="player-info">
                     <p id="track-artist" class="track-text"></p>
                     <p id="track-title" class="track-text"></p>
                    <div class="ticker">
                        <div class="ticker__inner" id="tickerText">
                        <span>Artist - Track Title ／</span>
                        <span>Artist - Track Title ／</span>
                        <span>Artist - Track Title ／</span>
                        </div>
                    </div>
                 </div>


                <button id="playPauseBtn" class="player-btn">►</button>
                <audio id="audioPlayer"></audio>
                </div>
                <!-- ▲ Jukebox Player -->
                
                <!-- ▼ Goods カスタム投稿 -->
                <div data-frame="goodsCell">
                    <?php
                        $goods_query = new WP_Query([
                            'post_type' => 'goods',
                            'posts_per_page' => -1,
                        ]);
                        
                        if($goods_query->have_posts()) :
                            while($goods_query->have_posts()) : $goods_query->the_post();
                    ?>

                    <article>
                        <div data-frame="goodsCard"
                         data-space="goodsCard" 
                         data-audio="<?php echo esc_attr(get_post_meta(get_the_ID(), 'audio_url', true)); ?>"
                         data-artist="<?php echo esc_attr(get_post_meta(get_the_ID(), 'artist', true)); ?>"
                         data-title="<?php echo esc_attr(get_post_meta(get_the_ID(), 'title', true)); ?>" 
                         >
                            <p data-img="goodsImg">
                                <?php the_post_thumbnail('medium'); ?>
                            </p>
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'artist', true)); ?></h3>
                            <h3><?php echo esc_html(get_post_meta(get_the_ID(), 'title', true)); ?></h3>
                            <p data-textArea="cardText"><?php echo nl2br(esc_html(get_post_meta(get_the_ID(), 'description', true))); ?></p>
                            <p>クリックで視聴 &#9850;</p>
                            <p>価格：￥<?php echo esc_html(get_post_meta(get_the_ID(), 'price', true)); ?></p>
                        </div>
                    </article>
                    
                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </section>
             
        </div>
    </main>
<?php get_footer(); ?>