<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <title><?php echo $title ?></title>
  <?php echo html::script("public/javascripts/jquery-1.5.2.min.js") ?>
  <?php echo html::script("public/javascripts/jquery.address-1.3.2.min.js") ?>

  <style type="text/css">
    nav ul{
      list-style: none;
    }
    
    nav ul li{
      display: inline-block;
      margin-right: 10px;
    }
    
    section{
      padding: 0 40px;
    }
  </style>
  
  <script type="text/javascript">
    $(function(){
      $.address.init().change(function(event){
        $("section").load($("[rel='address:" + event.value + "']").attr('href'))
      })
      $("nav a").click(function(){
        $("section").load($(this).attr("href"))
      })
    })
  </script>
</head>
<body>
  <nav>
    <ul>
      <li><?php echo html::anchor("home", "Home", array("rel" => "address:/home")) ?></li>
      <li><?php echo html::anchor("about", "About", array("rel" => "address:/about")) ?></li>
      <li><?php echo html::anchor("contact", "Contact", array("rel" => "address:/contact")) ?></li>
    </ul>
  </nav>
  <section>
    <?php echo $content ?>
  </section>
</body>
</html>