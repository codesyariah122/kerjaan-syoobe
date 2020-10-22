<?php
// child theme : color mag
// modified : syoobe
// author : permanto@syoobe.co.id
// last update : 12 September 2020 | 20:54
// pujiermanto | stay positif
// [wbcr_php_snippet id="1774"]
add_action( 'wp_enqueue_scripts', 'enqueue_child_styles' );
function enqueue_child_styles() {
    // bootstrap style
    wp_register_style('bootstrap-style', get_stylesheet_directory_uri().'/child-colormag/bootstrap/css/bootstrap.min.css', false, NULL, 'all');
    wp_register_style('bootstrap-grid-style', get_stylesheet_directory_uri().'/child-colormag/bootstrap/css/bootstrap-grid.min.css', false, NULL, 'all');
    wp_register_style('bootstrap-reboot-style', get_stylesheet_directory_uri().'/child-colormag/bootstrap/css/bootstrap-reboot.min.css', false, NULL, 'all');
    
    // bootstrap4 js
    wp_register_script('jquery-min',  get_stylesheet_directory_uri().'/child-colormag/bootstrap/js/jquery.min.js', false, NULL, 'all');
    wp_register_script('popper-min',  get_stylesheet_directory_uri().'/child-colormag/bootstrap/js/popper.min.js', false, NULL, 'all');
    wp_register_script('bootstrap-min',  get_stylesheet_directory_uri().'/child-colormag/bootstrap/js/bootstrap.min.js', false, NULL, 'all');
    wp_register_script('sweetalert2',  get_stylesheet_directory_uri().'/child-colormag/dist/sweetalert2.all.min.js', false, NULL, 'all');
    // js
    wp_register_script('cookie-min', get_stylesheet_directory_uri().'/child-colormag/js/cookie.min.js', false, NULL, 'all');
    wp_register_script('object-var', get_stylesheet_directory_uri().'/child-colormag/js/object.js', false, NULL, 'all');
    wp_register_script('syoobe-theme-js',  get_stylesheet_directory_uri().'/child-colormag/js/syoobe-theme.js', false, NULL, 'all');
    wp_register_script('syoobe-baseUrl-js',  get_stylesheet_directory_uri(). '/child-colormag/js/baseUrl.js', false, NULL, 'all');
    wp_register_script('call-Func-js', get_stylesheet_directory_uri().'/child-colormag/js/callFunc.js', false, NULL, 'all');
    wp_register_script('headline', get_stylesheet_directory_uri().'/child-colormag/js/headline.js', false, NULL, 'all');

    // enqueue stylesheet
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );    
    // wp_enqueue_style('bootstrap-style');
    // wp_enqueue_style('bootstrap-grid-style');
    // wp_enqueue_style('bootstrap-reboot-style');
    
    // enqueue javascript
    // wp_enqueue_script('jquery-min');
    // wp_enqueue_script('popper-min');
    // wp_enqueue_script('bootstrap-min');
    wp_enqueue_script('object-var');
    wp_enqueue_script('cookie-min');
    wp_enqueue_script('syoobe-theme-js');
    wp_enqueue_script('syoobe-baseUrl-js');
    wp_enqueue_script('sweetalert2');
    wp_enqueue_script('call-Func-js');
    wp_enqueue_script('headline');
}


add_action('wp_head', 'viewHeadline');
function viewHeadline(){
    ?>
     <style>
        #view-headline{
            cursor:pointer;
            color: navy;
            margin-left: 1rem;
            margin-top: 2.5rem;
        }
    </style>
    <?php
}

add_action('wp_head', 'syoobeCss');
function syoobeCss(){
    ?>
        <!-- CSS
        ================================================== -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link  rel="stylesheet" type="text/css" href="https://www.syoobe.co.id/public/index.php?url=jscss/css&f=css%2Fbootstrap.min.css%2Ccss%2Fskeleton.css%2Ccss%2Fnav.css%2Ccss%2Fowl.carousel.css%2Ccss%2Fowl.transitions.css%2Ccss%2Fphone.css%2Ccss%2Ftablet.css%2Ccss%2Fslider.css%2Ccss%2Fvalidation.css%2Ccss%2Fpersonal.css%2Ccss%2Fstar-rating.css%2Cjs%2Ffancybox%2Fsource%2Fjquery.fancybox.css%2Ccss%2Ffacebox.css%2Ccss%2Feasy-responsive-tabs.css%2CreCaptcha%2Fstyle.css%2Ccss%2Fjquery.datetimepicker.css%2Cjs%2FLiveEditor%2Fscripts%2Fstyle%2Fawesome.css%2Ccss%2Fmagnific-popup.css&min=1&sid=1601350871" />
    
    <link  rel="stylesheet" type="text/css" href="https://www.syoobe.co.id/public/index.php?url=jscss/css&f=css%2Fresponsiveslides.css&min=1&sid=1525539625" />
    <link rel="stylesheet" href="https://www.syoobe.co.id/css/theme-color.php">
    <link rel="stylesheet" href="https://www.syoobe.co.id/css/progress-bar.css">
    <link rel="stylesheet" href="carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="carousel/dist/assets/owl.theme.default.min.css">

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script  type="text/javascript">
	    	var webroot="/";
	    	var userwebroot = "/";
	    	var url_rewriting_enabled = 1;
	</script>

    <script  type="text/javascript" language="javascript" src="https://www.syoobe.co.id/public/index.php?url=jscss/js&f=js%2Frespond.min.js%2Cjs%2Fjquery-latest.js%2Cjs%2Fjquery.extend.js%2Cjs%2Fsite-functions.js%2Cform-validation.js.php%2Cfunctions.js.php%2Cjs%2Ffacebox.js%2Cjs%2Fjquery.loadJSON.js%2Cjs%2Fjquery.raty.min.js%2Cjs%2Fjquery.datetimepicker.js%2Cjs%2Fjquery.jscroll.min.js%2Cjs%2Fjquery.barrating.min.js%2Cjs%2Fmodernizr-1.7.min.js%2Cjs%2Fcommon.js%2Cjs%2Fresponsive-img.js%2Cjs%2Ftrunk.js%2Cjs%2FeasyResponsiveTabs.js%2Cjs%2Fjquery.lightSlider.js%2Cjs%2Fjquery.magnific-popup.js%2Cjs%2Fgrids.min.js&min=1&sid=1575615608"></script>
    <script  type="text/javascript" language="javascript" src="https://www.syoobe.co.id/public/index.php?url=jscss/js&f=js%2Fowl.carousel.js%2Cjs%2Fresponsiveslides.min.js&min=1&sid=1525539621"></script>  
    <?php
}



add_action('wp_head', 'mailChimpStyle');
function mailChimpStyle(){
?>
    <!-- Begin Mailchimp Signup Form -->
    <!-- <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
    <style type="text/css">
    #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:50%;}
    /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
    We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
    </style> -->
    <script>
        $("#navToggle").on("click",function (e) {
        $('.userVarificationWrapper,.main-nav-bar,.header ').toggleClass('open');
      });
  </script>
    <!--End mc_embed_signup-->
<?php
}

// add_action('wp_body_open', 'popUpLogin');
function popUpLogin(){
    ?>

    <style>
    .mfp-ready{
        display:none;
    }
    </style>
 <div class="mfp-bg mfp-ready"></div>

<div class="mfp-wrap mfp-close-btn-in mfp-auto-cursor mfp-ready" tabindex="-1" style="overflow: hidden auto;"><div class="mfp-container mfp-ajax-holder mfp-s-ready"><div class="mfp-content"><div class="content">

    	<div class="login-signup">

    	<div class="form-block-login">

		    <div id="ajax_login_message"></div>

		    <h2>Login Pengguna yang Ada</h2>

		    <div class="form-border">

            <form method="post" action="https://www.syoobe.co.id/user/account" name="frmLogin" id="frm_mbs_id_frmLogin" class="siteForm">
                <input type="hidden" name="redirect_url" value="https://www.syoobe.co.id/user/become_seller" title=""><fieldset>
                <label>Nama  atau Alamat Email</label>
                <input type="text" name="username" id="username" value="" title="Nama  atau Alamat Email">
                </fieldset>
                <fieldset>
                <label>Kata sandi</label>
                <input type="password" name="password" id="password" value="" title="Kata sandi">
                </fieldset>
                <fieldset>
                <label></label>
                <div class="remember">
                  <input type="checkbox" name="remember" value="1" checked="">
                  Ingat saya <br>
                  <p>
                  <a href="https://www.syoobe.co.id/user/forgot_password">Lupa Kata Sandi</a></p>
                  <br>
                    Belum punya Akun? <a href="https://www.syoobe.co.id/user/account">DAFTAR</a>
                </div>
                <input type="submit" name="btn_login" value="LOGIN / MASUK" class="btn primary-btn form-submit">
                </fieldset>
            </form>
            <script type="text/javascript">
            //<![CDATA[frm_validator_requirements={"redirect_url":{"required":false},"username":{"required":true},"password":{"required":true},"":{"required":false}};frm_validator_formatting={"errordisplay":"afterfield","summaryElementId":""};frm_validator=$("#frm_mbs_id_frmLogin").validation(frm_validator_requirements,frm_validator_formatting);
            //]]>
            </script>
		      

		    
		    <div class="divider"></div>

		    <h3>Masuk Dengan</h3>

           <div class="button-div">  
           <a href="https://www.syoobe.co.id/user/social_media_login/facebook" class="fb-color">
           <img src="/images/fb-small.png" alt="Facebook" width="9" height="20"> Facebook</a>   
           
           <a href="https://www.syoobe.co.id/user/social_media_login/googleplus" class="gp-color">
           <img src="https://www.syoobe.co.id/images/search.svg" style="width: 17px;" alt="Google" width="20" height="18">  Google </a> 		    
           </div>
		    
	    	</div>

    	</div>

    </div>

<button title="Close (Esc)" onclick="closePopup()" type="button" class="mfp-close">×</button></div>


<style>
.button-div{
    text-align:center;
}
.form-block-login a.gp-color {
    max-width: 149px !important;margin-left: 5px;	
    background: #red;
}
.form-block-login a.gp-color img {	
    width: 100%;    height: auto;
}

<button title="Close (Esc)" type="button" class="mfp-close">×</button>

</style>
</div>
<div class="mfp-preloader">
Loading...
</div>
</div>
</div>

    <?php
}

add_action('wp_body_open', 'headerContent');
function headerContent()
{
require_once 'fungsiSyoobe.php';

$url = 'https://www.syoobe.co.id';
$paramContent = [
    '<header class="header slide">',
    '</header>',
    '<div class="main-nav-bar slide">',
    '</div>',
    '<div class="content slide">',
    '</div>',
    '<div class="section category-list">',
    '</div>',
    '<div class="resp-tabs-container shop-list collection_box">',
    '</div>',
    '<footer class="footer slide clearfix">',
    '</footer>'
];
$dataHeader = GetContent($url, $paramContent[0]);
$dataHeader = explode($paramContent[1], $dataHeader[1]);
$header = $paramContent[0];
$headerContent = $dataHeader[0]."</header></div>";
echo $header;
echo $headerContent;


$dataMenu = GetContent($url, $paramContent[2]);
$dataMenu = explode($paramContent[4], $dataMenu[1]);
$menu = $paramContent[2];
$menuContent = $dataMenu[0];
echo $menu;
echo $menuContent;


$dataSlide = GetContent($url, $paramContent[4]);
$dataSlide = explode($paramContent[5], $dataSlide[1]);
$slide = $paramContent[4];
$slideContent = $dataSlide[0].'</div>';

$ajaxTag = '
<div id="ajax_message">
</div>

';
echo $slide;
echo $slideContent;
echo $ajaxTag;
}

add_action('wp_body_open', 'addAjax');
function addAjax(){
    if(@$_GET['email']):
        $email = @$_POST['email'];
        echo $email;
    endif;
}

add_action('get_footer', 'footerContent');
function footerContent()
{   
    $url = 'https://www.syoobe.co.id';
    $paramContent = [
        '<header class="header slide">',
        '</header>',
        '<div class="main-nav-bar slide">',
        '</div>',
        '<div class="content slide">',
        '</div>',
        '<div class="section category-list">',
        '</div>',
        '<div class="resp-tabs-container shop-list collection_box">',
        '</div>',
        '<footer class="footer slide clearfix">',
        '</footer>'
    ];
    // ads above footer
    $dataAds = GetAdsImage($url);
    echo $dataAds;
    
    // bagian content footer
    $dataFooter = GetContent($url, $paramContent[10]);
    $dataFooter = explode($paramContent[11], $dataFooter[1]);
    $footer = $paramContent[10];
    $footerContent = $dataFooter[0];
    $endFooter = $paramContent[11];
    $backTop = $dataFooter[1].'</div>';
    
    echo $footer;
    echo $footerContent;
    echo $endFooter;
    echo $backTop;
}





add_action('wp_footer', 'addAnyJquery');
function addAnyJquery() {
  ?>
      <!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>    -->
      <script src="https://www.syoobe.co.id/js/common-function.js" type="text/javascript"></script>
        <script>
        $(document).ready(function() {
        $('.click_trigger').click(function() {	
            var href=generateUrl('common', 'check_ajax_user_logged_in');
            $.ajax({url: href,async: false}).done(function(logged) {
                if (!logged){  
                    login_popupbox();
                    }
                });
        });
        $('#cart-page').click(function() {	
            var href=generateUrl('common', 'check_ajax_user_logged_in');
            $.ajax({url: href,async: false}).done(function(logged) {
                if (!logged){  
                    login_popupbox();
                    }else{
                        window.location.href = generateUrl('cart','display');
                    }
                });
        });

        });
        </script>

        <script type="text/javascript">
            const urlLink = 'https://www.syoobe.co.id';
            const oldLinks = $('.links').attr('href');
            for(let i = 0; i <= oldLinks.length; i++){
                $('.links').eq(i).attr('href', urlLink+oldLinks);
            }
        </script>
  <?php
}


