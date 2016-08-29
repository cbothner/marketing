<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/main.css') ?>

  <script src="https://use.typekit.net/fxq4rje.js"></script>
  <script>try{Typekit.load({ async: true  });}catch(e){}</script>
  <?php echo js('assets/js/jquery-3.1.0.js') ?>

  <script type="text/javascript">
    $(document).ready(function(){
      $('#responsive-nav').on('click',function(){
        $('nav.menu-mobile .first-level').slideToggle()
      });
    });
  </script>


</head>
<body class="<?php echo str_replace('.', '-', $page->template()) ?>" id="top">
