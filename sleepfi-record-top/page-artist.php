<?php get_header(); ?>
   <main>
        <div id="content"  data-space="wrapperLR">
            <section data-frame="Section" data-space="secBtm">
                <h2>ARTIST</h2>
                <div data-frame="artistWrapper">
                    <article>
                    <div data-frame="artistCard">
                        <p data-img="artistImg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/artist/sora_artist.jpg" alt="soraのアーティスト写真" width="300" height="300"></p>
                        <div>
                            <h3>Sora.（ソラ）</h3>
                            <p>柔らかい質感のチルビートを中心に、浮遊感のあるメロディを紡ぐビートメイカー。自然音やアンビエンスを取り入れた “静かな感情のゆらぎ” をテーマに制作している。</p>
                        </div>
                    </div>
                    </article>
                    <article>
                    <div data-frame="artistCard">
                        <p data-img="artistImg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/artist/lune_artist.jpg" alt="luneのアーティスト写真" width="300" height="300"></p>
                        <div>
                            <h3>Lune（ルネ）</h3>
                            <p>月明かりのような穏やかさを持つローファイサウンドが特徴。ジャズコードとアナログ質感のドラムを組み合わせ、夜の静寂に寄り添う音楽を届ける。</p>
                        </div>
                    </div>
                    </article>
                    <article>
                    <div data-frame="artistCard">
                        <p data-img="artistImg"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/artist/ame_artist.jpg" alt="ameのアーティスト写真" width="300" height="300"></p>
                        <div>
                            <h3>Ame（アメ）</h3>
                            <p>都市の深夜を切り取るようなメロウで透明感のあるビートを 制作するアーティスト。繊細なピアノフレーズと湿度を感じるベースラインが持ち味。</p>
                        </div>
                    </div>
                    </article>
                </div>
            </section>
        </div>
    </main>
<?php get_footer(); ?>