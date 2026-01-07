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
                
                <div data-frame="goodsCell">
                    <article>
                        <div data-frame="goodsCard" data-space="goodsCard" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/sora_no1.mp3">
                            <p data-img="goodsImg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/slow_bloom.jpg" alt=" Slow Bloomジャケット写真" width="300" height="300"></p>
                            <h3>Sora.</h3>
                            <h3> Slow Bloom（Digital Single）</h3>
                            <p data-textArea="cardText">空気がふわっと広がるような、チルでミニマルな1曲。 朝に合うローファイ・ビート。</p>
                            <p>クリックで視聴 &#9850;</p>
                            <p>価格：¥250</p>
                            
                        </div>
                    </article>
                     <article>
                        <div data-frame="goodsCard" data-space="goodsCard" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/lune_no1.mp3">
                            <p data-img="goodsImg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/night_drift.jpg" alt="Night Driftジャケット写真" width="300" height="300"></p>
                            <h3>Lune</h3>
                            <h3>Night Drift（Digital EP）</h3>
                            <p data-textArea="cardText">夜の静けさをそのまま録音したような、やわらかい4曲。 ゆっくり漂うムードが特徴のレーベル定番EP。</p>
                            <p>クリックで視聴 &#9850;</p>
                            <p>価格：¥600</p>
                        </div>
                    </article>
                </div>
                <div data-frame="goodsCell">
                    <article>
                        <div data-frame="goodsCard" data-space="goodsCard" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/lune_no2.mp3">
                            <p data-img="goodsImg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/goods/quiethour_goods.jpg" alt="“Quiet Hour”のジャケット写真" width="300" height="300"></p>
                            <h3>Lune</h3>
                            <h3> “Quiet Hour” （Digital Single）</h3>
                            <p data-textArea="cardText">夜更けに寄り添う、静かで淡いローファイビート。 読書や作業に合う作品。</p>
                            <p>クリックで視聴 &#9850;</p>
                            <p>価格：¥250</p>
                        </div>
                    </article>
                     <article>
                        <div data-frame="goodsCard" data-space="goodsCard" data-audio="<?php echo get_template_directory_uri(); ?>/assets/audio/sora_no2.mp3">
                            <p data-img="goodsImg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/goods/bluewindow_goods.jpg" alt="“Blue Window”のジャケット写真" width="300" height="300"></p>
                            <h3>sora.</h3>
                            <h3>“Blue Window” （Digital Single）</h3>
                            <p data-textArea="cardText">雨粒のリズムをモチーフにした、やわらかな1曲。 透明感のあるピアノとチルビートが心地よく揺れる。</p>
                            <p>クリックで視聴 &#9850;</p>
                            <p>価格：¥250</p>
                        </div>
                    </article>
                </div>
            </section>
             
        </div>
    </main>
<?php get_footer(); ?>