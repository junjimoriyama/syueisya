<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>集英社</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

  <?php wp_head(); ?>

</head>

<body>
  <header>
    <picture>
      <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/logo_sp.png">
      <img class="company-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo (1).png" alt="集英社のロゴ" width="249px" heght="41px">
    </picture>

    <div class="menu">
      <a class="mypage-btn" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/mypage.svg" alt=""></a>

      <div class="vertical-line"></div>
      <div class="menu-botton">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

    <!-- nav -->
    <nav class="nav">

      <div class="nav-block">

        <!-- menu-block -->

        <div class="menu-block">
          <a class="link" href="#">神保町おすすめMAP</a>
          <a class="link" href="#">ダイバーシティ</a>
          <a class="link" href="#">研修・その他</a>
          <a class="link" href="#">会社概要</a>

          <div class="heading-company">
            <picture>
              <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/company-header.svg">
              <img src="<?php echo get_template_directory_uri(); ?>/img/company-header.svg" alt="">
            </picture>
          </div>
        </div>

        <div class="menu-block">
          <a class="link" href="#">1day仕事体験・説明会</a>
          <a class="link" href="#">採用FAQ</a>
          <a class="link" href="#">募集要項</a>
          <a class="link-large" href="#">内定者の就職振り返り</a>

          <div class="heading-recruiting">
            <picture>
              <!-- <source media="(max-width: 767px)" srcset="<?php echo get_template_directory_uri(); ?>/img/recruiting_sp.svg"> -->
              <img src="<?php echo get_template_directory_uri(); ?>/img/recruiting.svg" alt="">
            </picture>
          </div>
        </div>

        <div class="menu-block">
          <a class="link-large" href="#">職種紹介</a>
          <a class="link-large" href="#">新人社員の職場案内ツアー</a>
          <a class="link-large" href="#">社員紹介</a>

          <div class="heading-people">
            <picture>
              <source media="(max-width: 767px)" srcset="">
              <img src="<?php echo get_template_directory_uri(); ?>/img/people_works.svg" alt="">
            </picture>
          </div>
        </div>

        <div class="menu-block">
          <a class="link-line" href="#">メンズノンノモデルオーディション</a>
          <a class="link-line" href="#">少女漫画学校</a>
          <a class="link-line" href="#">小説すばる新人賞</a>

          <p class="menu-block-tit">
            次世代の才能を育てる
          </p>
        </div>


        <div class="menu-block">
          <a class="link-line" href="#">新メディア「ｙｏｉ」</a>
          <a class="link-line" href="#">マンガmeetsシャネル</a>

          <p class="menu-block-tit">
            新しい価値を育てる
          </p>
        </div>

        <div class="menu-block">
          <a class="link-line" href="#">ジャンプ編集長に聞く</a>

          <p class="menu-block-tit">
            ヒットコンテンツを育てる
          </p>
          <div class="heading-special">
            <picture>
              <source media="(max-width: 767px)" srcset="">
              <img src="<?php echo get_template_directory_uri(); ?>/img/special-2.svg" alt="">
            </picture>
          </div>
        </div>

        <div class="menu-block">
          <a class="link-large" href="#">採用メッセージ</a>

          <div class="heading-top">
            <picture>
              <source media="(max-width: 767px)" srcset="">
              <img src="<?php echo get_template_directory_uri(); ?>/img/top.svg" alt="">
            </picture>
          </div>
        </div>
        <!-- illust -->
        <div class="illust">
          <img src="<?php echo get_template_directory_uri(); ?>/img/illust.png" alt="">
        </div>

        <!-- sub menu -->

        <div class="sub-menu">

          <div class="sub-menu-contents">
            <img src="<?php echo get_template_directory_uri(); ?>/img/contents_archives(2).svg" alt="">
          </div>

          <div class="sub-menu-news">
            <img src="<?php echo get_template_directory_uri(); ?>/img/news.svg" alt="">
          </div>

          <div class="sub-menu-sns">
            <div class="follow-sns">
              <img src="<?php echo get_template_directory_uri(); ?>/img/follow_sns.svg" alt="">
            </div>
          </div>

          <div class="note-twitter">
            <a href="#" class="note">
              <img class="note-icon" src="<?php echo get_template_directory_uri(); ?>/img/note_icon.png" alt="">
              <img class="note-txt" src="<?php echo get_template_directory_uri(); ?>/img/note.svg" alt="">
            </a>

            <a href="#" class="twitter">
              <img class="twitter-icon" src="<?php echo get_template_directory_uri(); ?>/img/twitter_icon.png" alt="">
              <img class="twitter-txt" src="<?php echo get_template_directory_uri(); ?>/img/twitter.svg" alt="">
            </a>
          </div>

          <div class="company-website">
            <p>集英社 ホームページ</p>
          </div>

        </div>
      </div>
    </nav>
  </header>