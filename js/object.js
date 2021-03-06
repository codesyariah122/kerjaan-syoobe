const date = new Date();
let data = {
    'home' : $('.home-icon'),
    'menu' : $('.main-navigation'),
    'social' : $('.fa'),
    'footerWidget' : $('.footer-widgets-wrapper'),
    'ptSyoobe' : $('.pt-syoobe'),
    'syoobe': $('#syoobe'),
    'tahun' : $('#tahun'),
    'year' : date.getFullYear(),
    'y' : $('.y'),
    'headerLeft' : $('#header-left-section'),
    'headerRight' : $('#header-right-section'),
    'adsContent' : $('.advertisement-content'),
    'dataAds' : {
        'data1' : '<a href="https://www.syoobe.co.id/desain-grafis-dan-logo/category/view/280" class="single_ad_300x250" target="_blank" rel="nofollow"><img loading="lazy" src="https://blog.syoobe.co.id/wp-content/uploads/2020/09/Slide3b.jpeg" alt="" width="300" height="500"></a>'
    },
    'button' : {
        'join' : $('#btn-join'),
        'url' : 'https://www.syoobe.co.id/user/account',
        'login' : 'https://www.syoobe.co.id',
    },
    'blogURL' : 'https://blog.syoobe.co.id/',

    'moretab': $('#moretab-burger'),
    'categories' : $('#categories-second'),
    'menuId' : $('#menu-1-6d73763'),
    'dropDown' : $('.elementor-nav-menu--dropdown'),
    'close':'<i id="close" class="fa fa-times fa-2x text-white" aria-hidden="true"></i>',
    'settingsMobile' : $('#settings-mobile'),
    'settingsTablet' : $('#settings-tablet'),
    'nav' : $('.navigation'),
    'stickyHeader': $('.sticky-header'),
    'url': 'https://blog.syoobe.co.id',
    'mailchimpEmail': $('input[type=email]'),
    'mailchimpSubmit': $('#mc-embedded-subscribe'),
    'formSearch' : $('#frmSiteSearch'),
    'formSearchInput': $('#search_keyword'),
    'formSearchSubmit' : $('input[name=search_submit]'),
    'syoobeFormSubscribe' : $('#subscribeNewsletter'),
    'keranjangIcn' : $('.keranjang-icn'),
    'product0' : $('.product0'),
    'mobileMenu' : $('#mobile-menu'),
    'jasaMenu': $('.menu-item-818'),
    'dropdownJasa' : $('#dropdown-jasa'),
    'sliderHeader' : $('#slider_1050'),
    'loaderSearch' : '<img class="loader-search" src="https://blog.syoobe.co.id/wp-content/uploads/2020/09/progress.gif" width="100" height="100" style="z-index:1;margin-top:-3rem; margin-left:-2rem;"/>',
    'marquee' : $('.note'),
    'activateFancybox' : $('.login-signup'),
    'fancyboxLogin' : $('.mfp-ready'),
    'btnLogin' : $('.btn_login'),
    'btnDaftar' : $('.btn_daftar'),
    'becomeSeller' : $('#become-seller'),
    'cartPage' : $('#cart-page'),
    'cartCheckout' : $('#cart-checkout'),
    'cartSummary' : $('#cart_summary'),
    'primaryLink' : $('.primary-link'),
    'slider' : $('.rslides'),
    'firstLink' : $('.firstlink'),
    'secondLink' : $('.secondlink'),
    'moreLink' : $('.morelink'),
    'linkBrand' : $('.links-brand'),
    'buttonNormal' : $('.buttonNormal'),
    'linksFooter' : $('.links'),
    'secondLinksFooter' : $('.secondlinks'),
    'clickTrigger' : $('.click_trigger'),
    'subscribeNews' : $('#subscribeNewsletter'),
    'entryTitle' : $('.entry-title'),
    'jumbotronPers' : $('.jumbotron-pers'),
    'jumbotronIklan' : $('.jumbotron-iklan'),
    'showPertanyaan' : $('#show-pertanyaan'),
    'pertanyaan' : $('#pertanyaan'),
    'subjectPertanyaan' : $('input[name="your-subject"]'),
    'showIklan' : $('#show-iklan'),
    'pemasanganIklan' : $('#pemasangan-iklan'),
    'subjectIklan' : $('input[name="your-subject"]'),
    'closePertanyaan' : $('#closes-pertanyaan'),
    'closeIklan' : $('#closes-iklan'),
    'navToggle' : $('#navToggle'),
    'submitForm' : $('.wpcf7-submit'),
    'addsFooter' : $('.adds'),
    'modalVideo' : $('#modal-video'),
};

const baseURL = data.button.login;
const formURL = 'https://syoobe.co.id';
