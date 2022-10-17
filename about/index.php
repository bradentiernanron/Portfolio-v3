<html>
  <head>
    <title>Braden Tiernan</title>
    <link type="x-image/icon" rel="shortcut icon" href="https://braden.today/images/jpg1.jpg">
    <link id="pagestyle" rel="stylesheet" type="text/css" href="/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@PawsCyro" />
    <meta name="twitter:creator" content="@PawsCyro" />
    <meta name="twitter:image" content="https://braden.today/images/png1.png" />
    <meta property="og:image" content="https://braden.today/images/png1.png">
    <meta property="og:image:alt" content="Braden Tiernan Logo">
    <meta name="twitter:description" content="Check out Braden Tiernan, and see how he can help you." />
    <meta property="og:title" content="Braden Tiernan" />
    <meta property="og:description" content="Check out Braden Tiernan, and see how he can help you." />
    <meta name="description" content="Check out Braden Tiernan, and see how he can help you." />
    <meta property="twitter:title" content="Check out Braden Tiernan, and see how he can help you." />
    <meta name="keywords" content="braden tiernan, braden, tiernan, braden ronald tiernan, braden r tiernan" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Braden Tiernan"/>
    <meta property="og:url" content="https://braden.today/" />
    <meta name="DC.title" content="Braden Tiernan" />
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
  </head>
  <body onLoad="setTimeout(function() {lf1();},1000);" class="index_about-body" onLoad="setTimeout(function () {document.getElementById('v1').play()},1000);">
    <main style="height:100%;position:relative;overflow-y:scroll;overflow-x:hidden;">
    <section class="index_about_s1">
        
    </section>
    <section class="index_about_s4">
        
    </section>
    <section class="index_about_s4">
        
    </section>
    <section class="index_about_s4">
        
    </section>
    <section class="index_about_s4">
        
    </section>
    <section class="index_about_s4">
        
    </section>
    <section class="index_about_s1">
        
    </section>
    </main>
    <header class="index_about_s2">
      <div class="index_about_s2s1"></div><div class="index_about_s2s2"><div class="index_about_s2s2s1"><a href="/">Home</a><span class="index_about_s2s2s1s1"> | </span>Projects<span class="index_about_s2s2s1s1"> | </span>Hire</div></div><div class="index_about_s2s3">RESUME</div>
    </header>
    <div id="index_about_s3" style="width:100%;height:100%;position:fixed;left:0px;top:0px;background-color:black;transition:all 0.3s;-moz-transition:all 0.3s;-webkit-transition:all 0.3s;-o-transition:all 0.3s;"></div>
  </body>
  <script>
    function isInViewport(element) {
      const rect = element.getBoundingClientRect();
      return (
        rect.top >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
      );
    }
    
    function f1(a,b) {
      if (a == 1) {
        if (b == 1) {
          document.getElementsByClassName("index_s1s1")[0].style.width = "100%";
          document.getElementsByClassName("index_s1s1")[0].style.height = "100%";
          document.getElementsByClassName("index_s1s1")[0].style.zIndex = "999";
          setTimeout(function () {
            document.getElementsByClassName("index_s1s1s1")[0].style.opacity = 0;
            document.getElementsByClassName("index_s1s1s2")[0].style.display = "none";
            document.getElementsByClassName("index_s1s1s1")[0].style.transform = "translateY(-100%)rotateX(45deg)";
          },400);
        }
      }
    }
    
    var f2v1 = [true];//[0] visible element set
    function f2() {
      f2v1[0] = true;
      for (var i = document.getElementsByClassName("index_about_s4").length - 1; i >= 0; i--) {
        if (isInViewport(document.getElementsByClassName("index_about_s4")[i]) && f2v1[0]) {
          document.getElementsByClassName("index_about_s4")[i].style.opacity = 1;
            document.getElementsByClassName("index_about_s4")[i].style.transform = "translateX(0px)";
          f2v1[0] = false;
        } else {
          if (f2v1[0]) {
            document.getElementsByClassName("index_about_s4")[i].style.opacity = 0;
            document.getElementsByClassName("index_about_s4")[i].style.transform = "translateX(100px)";
          } else {
            document.getElementsByClassName("index_about_s4")[i].style.opacity = 0;
            document.getElementsByClassName("index_about_s4")[i].style.transform = "translateX(-100px)";
          }
        }
      }
      if (!f2v1[0]) {
        document.body.style.backgroundColor = "black";
      } else {
        document.body.style.backgroundColor = "white";
      }
      setTimeout(f2,100);
    }
    
    function lf1() {
      document.getElementById("index_about_s3").style.pointerEvents = "none";
      document.getElementById("index_about_s3").style.backgroundColor = "transparent";
      for (var i = 0; i < document.getElementsByClassName("index_about_s1").length; i++) {
        document.getElementsByClassName("index_about_s1")[i].style.height = document.getElementsByClassName("index_about_s1")[i].offsetHeight;
      }
      f2();
    }
  </script>
</html>