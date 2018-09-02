<head>
  <!-- Basic page needs -->
  <meta charset="utf-8">
  <!-- Mobile specific metas  -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <![endif]-->
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php echo $this->getTitle(); ?></title>
  <meta name="language" content="id" />
  <meta name="description" content="<?php echo $this->getDescription(); ?>"/>
  <meta name="keyword" content="<?php echo $this->getKeyword(); ?>"/>
  <meta name="author" content="<?php echo $this->getAuthor(); ?>">
  <link rel="icon" href="<?php echo $this->getIcon(); ?>" type="image/x-icon" />
  <link rel="shortcut icon" href="<?php echo $this->getShortcutIcon(); ?>" type="image/x-icon" />
  <meta name="robots" content="<?php echo $this->getRobots(); ?>" />

  <!-- prefetch -->
  <meta http-equiv="x-dns-prefetch-control" content="on">
  <link rel="dns-prefetch" href="//www.googletagmanager.com" />
  <link rel="dns-prefetch" href="//connect.facebook.net" />
  <link rel="dns-prefetch" href="//www.facebook.com" />
  <link rel="dns-prefetch" href="//api2.encyclo.co.id" />
  <link rel="dns-prefetch" href="//fonts.googleapis.com" />

  <!-- geo -->
  <meta name="geo.region" content="ID-JB" />
  <meta name="geo.placename" content="Kab. Bandung" />
  <meta name="geo.position" content="-7.012524;107.525479" />
  <meta name="ICBM" content="-7.012524, 107.525479" />


  <!-- other meta -->
  <meta property="fb:app_id" content="130766654278919" />
  <meta property="og:image" content="<?php echo base_url('assets/img/fb-share.png'); ?>" />

  <?php $this->getAdditionalBefore(); ?>
  <?php $this->getAdditional(); ?>
  <?php $this->getAdditionalAfter(); ?>
</head>
