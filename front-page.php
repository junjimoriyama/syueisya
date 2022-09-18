<?php get_header(); ?>


<section id="#" class="hero">
    <video autoplay muted class="hero-movie" src="<?php echo get_template_directory_uri(); ?>/img/top-pc.mp4"></video>
    <div class="hero-copy">
      <picture>
        <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/mv_heading_sp.png">
        <img src="<?php echo get_template_directory_uri(); ?>/img/message_heading.svg" alt="" width="36px" height="431px">
      </picture>
    </div>
  </section>

  <main>
    <!-- message -->
    <section class="message">
      <p class="message-inside">
        集英社が長い年月のなかで、<br>
        たえず繰り返してきたのは<br class="only-sp">「種をまいて」「育てる」ことです。<br>
        ひとつひとつの作品と誠実に向き合い、<br>
        大切に育てることで、<br class="only-sp">集英社もまた、育ってきました。<br>
        あなたの手のひらには、<br class="only-sp">あなただけの種が握られています。<br>
        どんな花が咲き、どんな実を結ぶのか、<br>
        まだ誰にもわからないけれど、<br class="only-sp">大切に慈しみ育てていけば、<br>
        きっとワクワクすることが待っている。<br>
        その種を、集英社で育ててみませんか。
      </p>

      <div class="seed">
        <div class="seed-bg">
          <div class="seed-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/seed.png" alt="">
          </div>
        </div>
      </div>
    </section>

    <!-- wave-top -->
    <div class="wave-top"></div>

    <!-- news -->
    <section class="news">
      <div class="inner">
        <div class="heading">
          <div class="news-tit">
            <img src="<?php echo get_template_directory_uri(); ?>/img/news(2).svg" alt="">
          </div> 
          <div class="view-index">
            <img src="<?php echo get_template_directory_uri(); ?>/img/view_index.svg" alt="">
          </div>
        </div>

        <!-- <div class="news-contents"> -->
        <div class="news-list">

        <?php
          $args = array(
            'post_type' => 'news-list',
            'posts_per_page' => 1
          );
          $news_list_query = new WP_Query($args);
          ?>
          
          <?php if ($news_list_query->have_posts()): while($news_list_query->have_posts()): $news_list_query->the_post(); ?>
            <time datetime="<?php echo get_the_date('Y-m-d'); ?>" class="news-date">
              <?php echo get_the_date('Y.m.d'); ?>
            </time>
            <div class="news-desc">
              <?php the_title(); ?>
            </div>
            <?php endwhile; endif; ?>
        </div>
      </div>
    </section>

    <!-- special -->
    <section class="special">
      <div class="bg"></div>
      <div class="inner">
        <div class="head">

          <div class="heading">
            <img src="<?php echo get_template_directory_uri(); ?>/img/special-1.svg" alt="">
          </div>

          <div class="subheading">
            <img src="<?php echo get_template_directory_uri(); ?>/img/special_sub.svg" alt="">
          </div>

        </div>

        <!-- speciale-1 -->
        <section class="special-1">
          <div class="special-bg-sp"></div>
          <!--  <div class="special-1-thumb-img"> -->
          <img src="<?php echo get_template_directory_uri(); ?>/img/special_01_thumb.png" alt="">
          <!--  </div> -->

            <div class="view-more-1"></div>

          <!--  <div class="person-img"> -->
          <img class="person" src="<?php echo get_template_directory_uri(); ?>/img/person.png" alt="">
          <!--  </div> -->

          <div class="interview">
            <p>ジャンプ</p>
            <p>編集長に聞く</p>
          </div>

          <div class="heading">
            <img src="<?php echo get_template_directory_uri(); ?>/img/special_01_title.svg" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/img/special_01.svg" alt="">
          </div>

          <div class="special-1-illust"></div>

        </section>

        <!-- speciale-2 -->
        <section class="special-2">

          <div class="heading">
            <div class="title">
              <!-- divを付けないとafterで画像配置できない -->
              <img src="<?php echo get_template_directory_uri(); ?>/img/special_02_title.svg" alt="">
            </div>

            <img class="index" src="<?php echo get_template_directory_uri(); ?>/img/special_02.svg" alt="">
          </div>

          <div class="links-img">
            <!-- ul -->
            <a href="">
              <!-- li -->
              <div class="thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/img/special_02_thumb_chanel.jpg">
              </div>

              <div class="btn">
                <span>マンガmeetsシャネル</span>
                <div class="icon"></div>
              </div>

            </a>
            <a href="">
              <div class="thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/img/special_02_thumb_yoi.jpg">
              </div>

              <div class="btn">
                <span>新メディア「yoi」</span>
                <div class="icon"></div>
              </div>
            </a>
          </div>

        </section>

        <!-- speciale-3 -->
        <section class="special-3">

          <div class="links-img">
            <a href="">
              <div class="thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/img/special_03_thumb_award.png">
              </div>

              <div class="btn">
                <span>小説すばる新人賞</span>
                <div class="icon"></div>
              </div>

            </a>

            <a href="">
              <div class="thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/img/special_03_thumb_school.png">
              </div>

              <div class="btn">
                <span>少女漫画学校</span>
                <div class="icon"></div>
              </div>
            </a>


            <a href="">
              <div class="thumb">
                <img src="<?php echo get_template_directory_uri(); ?>/img/special_03_thumb_audition.png">
              </div>

              <div class="btn">
                <span>メンズノンノ<br>モデルオーディション</span>
                <div class="icon"></div>
              </div>
            </a>
          </div>

          <div class="heading">

            <div class="title">
              <!-- divを付けないとafterで画像配置できない -->
              <img src="<?php echo get_template_directory_uri(); ?>/img/special_03_title.svg" alt="">
            </div>
            <img class="index" src="<?php echo get_template_directory_uri(); ?>/img/special_03.svg" alt="">
          </div>
        </section>
      </div>
    </section>

    <!-- wave -->
    <div class="wave-bottom"></div>

    <!-- people-work -->
    <section class="people-works">
      <div class="bg"></div>
      <div class="inner">

        <div class="text">

          <div class="heading">
            <img src="<?php echo get_template_directory_uri(); ?>/img/people_works_large.svg" alt="">
          </div>

          <img class="subheading" src="<?php echo get_template_directory_uri(); ?>/img/people_works_sub.svg" alt="">

          <p>どんな先輩が、どんな風に働いている?<br>
            未来のあなたが見つけられるかもしれません。
          </p>
        </div>
      </div>
      <!-- people-work-1 -->
      <div class="people-works-1">

        <div class="heading">
          <img div class="title" src="<?php echo get_template_directory_uri(); ?>/img/people_works_01_title.svg" alt="">
          <img class="index" src="<?php echo get_template_directory_uri(); ?>/img/people_works_01.svg">
          <!-- <a class="view-index" href=""></a> -->
        </div>

        <ul>
        <?php if (have_posts()): while(have_posts()): the_post(); ?>
    <li>
      <a href="<?php the_permalink(); ?>">
        <?php /* the_post_thumbnail(); */ ?>
        <h3><?php the_title(); ?></h3>
        <p><?php the_content(); ?></p> <!-- 文章の一部を表示 -->
      </a>
    </li>
    <?php endwhile; endif; ?>
    </ul>

      </div>
        <!-- <div class="slide-wrap">
          <div class="swiper mySwiper">
       
            <div class="swiper-wrapper">
             
              <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/01.jpg" alt="">
                <div class="department">マーガレット<br>編集部</div>
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/02.jpg" alt="">
                <div class="department">グランドジャンプ<br>編集部</div>
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/03.jpg" alt="">
                <div class="department">シュプール編集部</div>
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/04.jpg" alt="">
                <div class="department">文芸書編集部</div>
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/05.jpg" alt="">
                <div class="department">広告部 デジタル<br>デュース課</div>
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/06.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/07.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/08.jpg" alt="">
              </div>
              <div class="swiper-slide">
                <img src="<?php echo get_template_directory_uri(); ?>/img/09.jpg" alt="">
              </div>
            </div>

          </div>

          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div> -->
      


      <!-- people-work-2 -->
      <div class="inner">
        <a class="people-works-2">

          <div class="tour-img">
            <picture>
              <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/people_works_illust_sp.png">
              <img src="<?php echo get_template_directory_uri(); ?>/img/people_works_02_illust.png" alt="">
            </picture>
          </div>

          <div class="heading">
            <img class="title" src="<?php echo get_template_directory_uri(); ?>/img/people_works_02_title.svg" alt="">
            <img div class="index" src="<?php echo get_template_directory_uri(); ?>/img/people_works_02.svg">
            <div class="view-more-2"></div>
          </div>
        </a>
      </div>

      <!-- people-work-3 -->
      <div class="people-works-3">
        <div class="heading">
          <img class="title" src="<?php echo get_template_directory_uri(); ?>/img/people_works_03_title.svg" alt="">
          <img div class="index" src="<?php echo get_template_directory_uri(); ?>/img/people_works_03.svg">
        </div>
      </div>


      <a class="scroll-bg" href="">
        <div class="view-more-3"></div>
      </a>

    </section>

    <!-- wave -->
    <div class="wave-top"></div>

    <!-- recruit -->
    <section class="recruit">

      <div class="bg"></div>

      <div class="inner">

        <div class="text">
          <div class="head">
            <div class="heading">
              <img src="<?php echo get_template_directory_uri(); ?>/img/recruiting-heading.svg" alt="">
            </div>
            <img class="subheading" src="<?php echo get_template_directory_uri(); ?>/img/recruiting_sub.svg" alt="">
          </div>
          <p>
            募集要項、説明会情報、内定者座談会など<br>
            就活についての“知りたい”はこちらへ！
          </p>
        </div>

        <div class="body">
          <div class="title-wrap">
            <img class="title" src="<?php echo get_template_directory_uri(); ?>/img/recruiting_title.png" alt="">
          </div>

          <a class="recruit-link">

            <div class="recuruit-illust">
              <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/recruiting_illust_sp.png">
                <img src="<?php echo get_template_directory_uri(); ?>/img/recruiting_illust.png" alt="">
              </picture>
            </div>

            <img class="survey" src="<?php echo get_template_directory_uri(); ?>/img/recruiting_enquete.png" alt="">

            <div class="view-more-4"></div>
          </a>

        </div>

        <div class="links-img">

          <a href="">
            <div class="thumb">
              <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/requirements_sp.jpeg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/requirements.jpg" alt="" alt="">
              </picture>
            </div>

            <div class="btn">
              <p>募集要項</p>
              <div class="icon"></div>
            </div>
          </a>

          <a href="">
            <div class="thumb">
              <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/faq_sp.jpeg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/faq.jpg" alt="" alt="">
              </picture>
            </div>

            <div class="btn">
              <p>採用FAQ</p>
              <div class="icon"></div>
            </div>
          </a>

          <a href="">
            <div class="thumb">
              <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/schedule_sp.jpeg">
                <img src="<?php echo get_template_directory_uri(); ?>/img/requirements.jpg" alt="" alt="">
              </picture>
            </div>

            <div class="btn">
              <p>1day仕事体験・説明会</p>
              <div class="icon"></div>
            </div>
          </a>
        </div>
      </div>
    </section>



    <!-- wave-bottom -->

    <div class="wave-bottom"></div>

    <!-- company -->
    <section class="company">

      <div class="bg"></div>
      <div class="inner">

        <div class="head">
          <div class="heading">
            <img class="company-img" src="<?php echo get_template_directory_uri(); ?>/img/company.svg" alt="">
          </div>
          <div class="subheading">
            <img src="<?php echo get_template_directory_uri(); ?>/img/company_sub.svg" alt="">
          </div>
        </div>

        <div class="links-img">
          <!-- ul -->

          <a href="">
            <!-- li -->

            <p>会社概要</p>

            <div class="thumb">
              <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/company_info_sp.jpeg">
                <img class="company-img" src="<?php echo get_template_directory_uri(); ?>/img/company_info.jpg" alt="">
              </picture>
            </div>

            <div class="btn">
              <img src="<?php echo get_template_directory_uri(); ?>/img/company_info.svg" alt="" width="100px">
              <div class="icon"></div>
            </div>
          </a>

          <a href="">

            <p>研修・その他</p>

            <div class="thumb">
              <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/welfare_sp.jpeg">
                <img class="company-img" src="<?php echo get_template_directory_uri(); ?>/img/welfare.jpg" alt="">
              </picture>
            </div>

            <div class="btn">
              <img src="<?php echo get_template_directory_uri(); ?>/img/training.svg" alt="">
              <div class="icon"></div>
            </div>
          </a>

          <a href="">

            <p>ダイバーシティ</p>

            <div class="thumb">
              <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/diversity_sp.jpeg">
                <img class="company-img" src="<?php echo get_template_directory_uri(); ?>/img/diversity.jpg" alt="">
              </picture>
            </div>

            <div class="btn">
              <img src="<?php echo get_template_directory_uri(); ?>/img/diversity.svg" alt="">
              <div class="icon"></div>
            </div>
          </a>

          <a href="">

            <p>神保町おすすめMAP</p>

            <div class="thumb">
              <picture>
                <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/map_sp.jpeg">
                <img class="company-img" src="<?php echo get_template_directory_uri(); ?>/img/map.jpg" alt="">
              </picture>
            </div>

            <div class="btn">
              <img src="<?php echo get_template_directory_uri(); ?>/img/recommended_map.svg" alt="">
              <div class="icon"></div>
            </div>
          </a>
        </div>
      </div>
    </section>


    <!-- contents-archives -->
    <section class="contents-archives">
      <div class="inner">
        <div class="text">
          <img src="<?php echo get_template_directory_uri(); ?>/img/contents_archives.svg" alt="">

          <div class="desc">
            <p>過去の採用HPから<br class="only-sp">スペシャルコンテンツをセレクトしてご紹介。</p>
            <a class="veiw-index" href="">
              VIEW INDEX
            </a>
          </div>
        </div>


        <div class="links-img">
          <!-- ul -->

          <?php
          $args = array(
            'post_type' => 'archive',
            'posts_per_page' => 3
          );
          $archive_query = new WP_Query($args);
          ?>
          
          <?php if ($archive_query->have_posts()): while($archive_query->have_posts()): $archive_query->the_post(); ?>
          <a href="">
          <div class="thumb">

            </div>
            <div class="btn">
              <div class="title">
                <div class="sub">
                <?php the_content(); ?>
                </div>
                <div class="main">
                <?php the_title(); ?>
                </div>
              </div>
              <div class="icon"></div>
            </div>
          </a>
            <?php endwhile; endif; ?>


          
        </div>
      </div>
    </section>

    <!-- SNS -->

    <section class="sns">
      <div class="bg"></div>
      <div class="inner">
          
        <img class="illust" src="<?php echo get_template_directory_uri(); ?>/img/sns_illust.png" alt="">

        <div class="sns-img-wrap">
          <div class="sns-img-bg">
            <img class="bg-img" src="<?php echo get_template_directory_uri(); ?>/img/sns_article_bg.jpg" alt="">
          </div>


          <div class="head">
            <div class="heading">
              <span>「集英社 採用担当」SNSでも</span>
              <br>
              <span>情報発信中!</span>
            </div>

            <div class="icons">

              <a class="note-icon" href="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/note_icon.png" alt="">
              </a>

              <a class="twitter-icon" href="">
                <img src="<?php echo get_template_directory_uri(); ?>/img/twitter_icon.png" alt="">
              </a>

            </div>
          </div>

          <div class="body">
            <div class="heading">

              <div class="note">
                <img src="<?php echo get_template_directory_uri(); ?>/img/rss_logo.svg" alt="">
                <div class="title">
                  集英社新卒採用担当
                </div>
              </div>

              <ul class="sns-news">
                <li>
                  <a href="">
                    <img class="article-img" src="<?php echo get_template_directory_uri(); ?>/img/rectangle_large_type_2_6d6d3b812ee78feb8117d11b5ad62139.jpg"
                      alt="">

                    <div class="article-text">
                      <div class="head-line">年末年始オススメの本</div>
                      <div class="date">2021/12/24</div>
                    </div>
                  </a>

                  <a href="">
                    <img class="article-img" src="<?php echo get_template_directory_uri(); ?>/img/nophoto.png" alt="">

                    <div class="article-text">
                      <div class="head-line">就活Q&A～vol.6~</div>
                      <div class="date">2021/11/15</div>
                    </div>
                  </a>

                  <a href="">
                    <img class="article-img" src="<?php echo get_template_directory_uri(); ?>/img/rectangle_large_type_2_3c8b8ffa9ec61c4c77f8556dae71be73.jpg"
                      alt="">

                    <div class="article-text">
                      <div class="head-line">集英社2023年度定期採用情報公開！</div>
                      <div class="date">2021/11/01</div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- space -->

    <section class="space">
      <div class="inner">
        <div class="bg"></div>
        <div class="seed"></div>
      </div>
    </section>

  </main>

  <?php get_footer(); ?>


  nagi-yoshida
  //work

      margin-bottom: 385px

      .inner
        width: 1280px
        margin: 0 auto
        display: flex
        justify-content: center
        align-items: center
        

        .title
          font-size: 2.3em
          font-family: 'Lato', sans-serif
          color: #fff
          writing-mode: vertical-lr
          padding: 0 120px 0 0
          margin-left: 60px

        .main-img
          
          .portfolio

            li
              list-style: none

              .work-content

                p
                  width: 1020px
                  height: 645px
                  overflow: hidden
                  text-align: center

                  img
                    width: 100%

              .work-title
                font-size: 1.1rem
                letter-spacing: .1em
                line-height: 1em
                padding-top: 10px
                color: #ccc
        
        .sub-img

          .work-sub-img


           <!-- sub -->

  <div class="swiper sub-swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
      <!-- カスタム投稿「work」のポートフォリオ -->
      <?php
        $args = array(
          'post_type' => 'portfolio',
          'posts_per_page' => -1
        );
        $portfolio_query = new WP_Query($args);
        ?>

        <?php if ($portfolio_query->have_posts()) : while ($portfolio_query->have_posts()) : $portfolio_query->the_post(); ?>
            <div class="swiper-slide">
              <?php the_post_thumbnail(); ?>
            </div>
        <?php endwhile;
        endif; ?>
    </div>

  </div>

<?php get_footer(); ?>

// sub-swiper
        .sub-swiper
          width: 11.2%
          height: 100%
          margin-left: 10px

          .swiper-wrapper

            .swiper-slide
              
              img
                width: 100%
                height: 100%
                object-fit: cover