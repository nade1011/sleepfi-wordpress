<?php get_header(); ?>
    <main>
        <div id="content"  data-space="wrapperLR">
             <section id="mainVisual-area" data-space="section">
                <div data-img="mainVisual"><h2><img src="<?php echo get_template_directory_uri(); ?>/assets/images/main-visual.jpg" alt="夕焼けのような水彩画" width="1000" height="600"></h2></div>
            </section>
            <section id="news-area" data-space="lastSection">
                <div data-frame="newsArea">
                    <h2>NEWS</h2>
                    <div data-frame="newsItems">
                       <?php
                            $news_query = new WP_Query([
                            'post_type'      => 'post',
                            'posts_per_page' => 3
                            ]);
                        ?>

                        <?php if ($news_query->have_posts()) : ?>
                        <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>

                           <?php
                            // タイトルを分解
                            $title_parts = explode('｜', get_the_title());
                            $artist = $title_parts[0] ?? '';
                            $work   = $title_parts[1] ?? '';
                            ?>
                         
                        <article>
                            <div data-frame="itemWrapper">
                                <?php if (has_post_thumbnail()) : ?>
                                <p data-img="itemImg"><?php the_post_thumbnail('medium'); ?></p>
                                <?php endif; ?>
                                <?php if ($artist) : ?>
                                <h3><?php echo esc_html($artist); ?></h3>
                                <?php endif; ?>
                                <?php if ($work) : ?>
                                <h3><?php echo esc_html($work); ?></h3>
                                <?php endif; ?>
                                <p><?php the_excerpt(); ?></p>
                                <p><?php the_time('Y.m.d'); ?></p>
                            </div>
                        </article>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div>
                   <p class="goodsBtn-wrapper"> <a href="<?php echo home_url('/goods'); ?>" class="goodsBtn" data-btn="goodsBtn">GOODS</a></p>

                </div>
            </section>
        </div>
    </main>
    <?php get_footer(); ?>