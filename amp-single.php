<?php
global $post;
setup_postdata( $post );
while ( have_posts() ) : the_post();
$image_data = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), "full" );
$width = $image_data['1'];
$height = $image_data['2'];
?>
<!doctype html>
<html amp lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title><?php the_title(); ?></title>
    <link rel="canonical" href="<?php the_permalink(); ?>" />
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <script type="application/ld+json">
      {
        "@context": "<?php echo get_site_url(); ?>",
        "@type": "NewsArticle",
        "headline": "<?php the_title(); ?>",
        "datePublished": "2015-10-07T12:02:41Z",
        "image": [
          "<?php echo the_post_thumbnail_url('full'); ?>"
        ]
      }
    </script>
    <style amp-custom>
    body{font-family: 'Roboto'}.article-content:first-letter{font-size: 72px;color:#005ba0;font-family: Georgia;padding-right: 10px;;float: left;font-weight: 700;line-height: 62px;}.content{padding: 0 15px;}.logo{padding: 15px;background: #005ba0}h1{padding: 0 15px;}footer{color: #fff; padding: 30px 15px; background-color: #222; bottom: 0; width: 100%; border-top: 3px solid #005ba0;}.contato{font-size: 16px; width: 20px;}.social{font-size: 25px; padding: 5px 10px 5px 10px;}amp-img#main {width: 60%;margin: 0 auto;}p{padding: 10px;}
    </style>
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <!-- componente do amp para ADS -->
    <script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <a href="http://ocponline.com.br">
      <div class="logo">
        <amp-img alt="OCP Online"
          src="http://ocponline.com.br/wp-content/themes/ocp-tema/imagens/main-logo.png"
          width="495"
          height="58"
          layout="responsive">
        </amp-img>
      </div>
    </a>
    <h1><?php the_title(); ?></h1>
    <amp-img alt="<?php the_title(); ?>"
    src="<?php echo the_post_thumbnail_url('full'); ?>"
    width="<?php echo $width; ?>"
    height="<?php echo $height; ?>"
    layout="responsive">
    </amp-img>
  <!-- Amp ADS -->
  <amp-ad width=300 height=100
      type="doubleclick"
      data-slot="/116700042/MainBanner"
      layout="responsive">
  </amp-ad>
  <div class="article">
        <div class="article-content">
          <?php
          $teste = limpa_amp(get_the_content());
          echo $teste;
          ?>
        </div>
      </div>
  <!-- DFP Retangulo Noticias -->
  <amp-ad 
    width=300 height=100
    type="doubleclick"
    data-slot="/116700042/RetanguloNoticias"
    layout="responsive">
  </amp-ad>
    <!-- DFP MegaBanner -->
  <amp-ad 
      width=300 height=250
      type="doubleclick"
      data-slot="/116700042/MegaBanner"
      layout="responsive">
  </amp-ad>
  </body>
  <footer>
    <h3>CONTATOS</h3>
    <i class="fa fa-icon fa-phone contato"></i> <?php echo $configuracao['telefone']; ?><br>
    <i class="fa fa-icon fa-envelope contato"></i> <?php echo $configuracao['email']; ?><br>
    <i class="fa fa-icon fa-map-marker contato"></i> <?php echo $configuracao['end_linha1']; ?><br>
    <i class="fa fa-icon fa-map contato"></i> <?php echo $configuracao['end_linha2']; ?><br><br>
  <p>
    <a href="<?php echo $configuracao['facebook']; ?>" target="_blank">
      <amp-img src="<?php bloginfo('template_url')?>/imagens/facebook-amp.png"
          width="64"
          height="64">
      </amp-img>
    </a>
    <a href="<?php echo $configuracao['instagram']; ?>" target="_blank">
      <amp-img src="<?php bloginfo('template_url')?>/imagens/instagram-amp.png"
          width="64"
          height="64">
      </amp-img>
    </a>
    <a href="<?php echo $configuracao['youtube']; ?>" target="_blank">
      <amp-img src="<?php bloginfo('template_url')?>/imagens/youtube-amp.png"
          width="64"
          height="64">
      </amp-img>
    </a>
  </p>
  </footer>
</html>
<?php endwhile; ?>