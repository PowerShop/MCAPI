<?php
if (isset($_GET['mode'])){
    if($_GET['mode'] == "mobile"){
        $mobile = $_GET['mode'];
    }
}

if (isset($_GET['mode'])){
    if($_GET['mode'] == "desktop"){
        $desktop = $_GET['mode'];
    }
}
?>
<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top col-md-12">
          <a class="navbar-brand">MCAPI TH</a>
          <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div id="my-nav" class="collapse navbar-collapse" style="font-size: 18px">
              <ul class="navbar-nav mr-auto">
              
                  <li class="nav-item active">
                      <a class="nav-link" href="#">Usage</a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="#">APIs</a>
                  </li>
                <?php
                    if (isset($_GET['mode']) == "mobile"){
                        if($_GET['mode'] == "mobile"){
                            $mobile = $_GET['mode'];

                        if (isset($_GET['mode']) == $mobile){
                        echo '<li class="nav-item active">
                        <a class="nav-link" href="?mode=desktop">Site Desktop</a>
                    </li>';
                            }
                        }
                    }
                    if (isset($_GET['mode']) == "desktop"){
                        if($_GET['mode'] == "desktop"){
                            $desktop = $_GET['mode'];
                            
                        if (isset($_GET['mode']) == $desktop){
                          echo '<li class="nav-item active">
                          <a class="nav-link" href="?mode=mobile">Site Mobile</a>
                    </li>';
                            }
                        }
                    }
                ?>
                <li class="new-item active">
                <div class="nav-link" id="google_translate_element"></div>
                </li>
              </ul>
          </div>
      </nav>
     
      <script type="text/javascript">
                        function googleTranslateElementInit() {
                            new google.translate.TranslateElement({pageLanguage: 'th', includedLanguages: 'en,th', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                        }
                    </script>  
                    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>