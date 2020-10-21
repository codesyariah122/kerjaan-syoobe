// // author: permanto@syoobe.co.id
// // Custom Jquery by PT. Syoobe Inti Perdana | 2020

// // let node = document.createElement('P');
// // let textNode = document.createTextNode('➖Community Syoobe Indonesia');
// // node.appendChild(textNode);
// // document.getElementById('header-left-section').appendChild(node);

// $('.primary-btn').hide();
// $('.secondary-btn').hide();
function login_popupbox(){
    // fancyboxLogin.fancybox();
    data.fancyboxLogin.css({
        'display' : ''
    });
    data.fancyboxLogin.show('slow').fadeIn(1000);

}

function closePopup(){
    data.fancyboxLogin.css({
        'display': 'none',
    });
    data.fancyboxLogin.hide('slow').fadeOut(1000);
}

function redirect(){
    window.open(baseURL);
}

// header footer data syoobe
const becomeSeller = data.becomeSeller.attr('href');
const cartPage = data.cartPage.attr('href');
const cartCheckout = data.cartCheckout.attr('href');
const btnLogin = data.btnLogin.attr('onclick');
const btnDaftar = data.btnDaftar.attr('href');
const cartSummary = data.cartSummary.attr('href');
const primaryLink = data.primaryLink.attr('href');
const buttonNormal = data.buttonNormal.attr('href');

// dom link on header and footer
data.becomeSeller.attr('href', `${baseURL}${becomeSeller}`);
data.cartPage.attr('href', `${baseURL}`);
data.cartCheckout.attr('href', `${baseURL}${cartCheckout}`)
data.btnLogin.attr('onclick', 'redirect()');
data.btnDaftar.attr('href', `${baseURL}${btnDaftar}`);
data.cartSummary.attr('href', `${baseURL}`);
data.primaryLink.attr('href', `${baseURL}${primaryLink}`);

// dom first link menu
for(let i = 0; i<=data.firstLink.length; i++){
    const firstLink = data.firstLink.eq(i).attr('href');
    data.firstLink.eq(i).attr('href', `${baseURL}${firstLink}`);
}
data.buttonNormal.attr('href', `${baseURL}${buttonNormal}`);

for(let i = 0; i<=data.secondLink.length; i++){
    const secondLink = data.secondLink.eq(i).attr('href');
    data.secondLink.eq(i).attr('href', `${baseURL}${secondLink}`);
}
for(let i = 0; i <= data.moreLink.length; i++){
    const moreLink = data.moreLink.eq(i).attr('href');
    data.moreLink.eq(i).attr('href', `${baseURL}${moreLink}`);
}



// dom footer links sitemap
for(let i = 0; i <= data.secondLinksFooter.length; i++){
    const secondLinksFooter = data.secondLinksFooter.eq(i).attr('href');
    if(secondLinksFooter == 'https://blog.syoobe.co.id/'){
        data.secondLinksFooter.eq(i).attr('href', `${secondLinksFooter}`);
    }else{
        data.secondLinksFooter.eq(i).attr('href', `${baseURL}${secondLinksFooter}`);
    }
}

// form subscribe syoobe
const newsLetter = data.subscribeNews.attr('action');
data.subscribeNews.attr('action', `${formURL}${newsLetter}`);

// dom link brand footer
for(let i = 0; i <= data.linkBrand.length; i++){
    const linkBrand = data.linkBrand.eq(i).attr('href');
    data.linkBrand.eq(i).attr('href', `${baseURL}${linkBrand}`);
}


data.clickTrigger.on('click', function(){
    location.href=baseURL;
});

$('#colophon').remove();
$('.footer-socket-wrapper').remove();
$('#masthead').remove();
$('#jquery-core-js').remove();
$('#scroll-up').remove();


$(document).ready(function(){
    // data.marquee.hide();


    // data.tahun.html(data.year);
    // data.syoobe.html('PT. Syoobe');

    // data.dropdownJasa.hide();
    
    // data.jasaMenu.mouseover(function(){
    //     data.dropdownJasa.show('slow');
    // });
    // data.dropdownJasa.mouseleave(function(){
    //     data.dropdownJasa.hide('slow');
    // })

    // data.keranjangIcn.css({
    //     'cursor': 'pointer'
    // });
    // data.keranjangIcn.click(function(){
    //     window.location.replace('https://syoobe.co.id');
    // });
    // data.product0.click(function(){
    //     window.location.replace('https://syoobe.co.id')
    // })

    // data.mobileMenu.hide();

    // data.settingsMobile.on('click',function(){
    //     // $('#modalMobile').modal('show').slideUp(1000);
    //     $('.settings').modal('show');
    //     const login = $('#login');
    //     const daftar = $('#daftar');
    //     login.on('click', function(){
    //         window.open(data.button.login);
    //     });
    //     daftar.on('click', function(){
    //         window.open(data.button.url);
    //     });
    // });

    // data.settingsTablet.on('click',function(){
    //     $('.settings').modal('show');
    //     const login = $('#login');
    //     const daftar = $('#daftar');
    //     login.on('click', function(){
    //         window.open(data.button.login);
    //     });
    //     daftar.on('click', function(){
    //         window.open(data.button.url);
    //     });
    // });

    // data.categories.hide();
    // data.moretab.mouseover(function(){
    //     data.categories.show('slow');
    //     data.sliderHeader.hide();
    // });

    // data.menuId.mouseenter(function(){
    //     data.categories.show();
    // });

    // data.menuId.mouseleave(function(){
    //     data.categories.hide('slow').slideUp(1000);
    //     data.sliderHeader.show();
    // });

    // $(window).scroll(function(){
    //     // let isMobile = window.matchMedia("only screen and (max-width: 760px;").matches;
    //     let isMobile = window.matchMedia('only screen and (max-width: 992px)').matches;

    //     if(!isMobile){
    //         if($(this).scrollTop()>150){
    //             data.stickyHeader.addClass('sticky');
    //         }else{
    //             data.stickyHeader.removeClass('sticky');
    //         }
    //     }else{
    //         if($(this).scrollTop()>150){
    //             data.stickyHeader.addClass('sticky');
    //         }else{
    //             data.stickyHeader.removeClass('sticky');
    //         }
    //     }
    // });
    // $('#subscribeModal').modal('show');
    //Swal.fire(data.url+'/?p=subscribe');

    // $('#alert-subscribe').hide();
    
    $('#alert-subscribe').hide();
    data.mailchimpSubmit.click(function(){
        const email = data.mailchimpEmail.val();
        const regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(email !== ''){
            if(!regex.test(email)){
                Swal.fire({
                    title: 'Maaf, Format Email Tidak Valid.',
                    width: 600,
                    padding: '3em',
                    background: '#fff url(https://blog.syoobe.co.id/wp-content/uploads/2015/03/girl-237871_1280.jpg)',
                    backdrop: `
                    rgba(0,0,123,0.4)
                    url("https://blog.syoobe.co.id/wp-content/uploads/2020/09/computer-says-no.gif")
                    left top
                    no-repeat
                    `
                });
                document.querySelector('#mc-embedded-subscribe-form').reset();
            }else{
                $.ajax({
                    url: data.url+'/?email='+email,
                    type: 'post',
                    data: 'email='+email,
                    success: function(res){
                        if(res){
                            document.querySelector('#mc-embedded-subscribe-form').reset();
                            $('#alert-subscribe').show('slow').fadeIn(1000);
                            $('#email-anda').html(`<a href="mailto:${email}">${email}</a>`);
                            Swal.fire({
                                title: '<strong>Terima Kasih sudah <u>SUBSCRIBE</u></strong>',
                                imageUrl: 'https://blog.syoobe.co.id/wp-content/uploads/2015/03/online-shopping.jpg',
                                imageWidth: 600,
                                imageHeight: 200,
                                html:
                                'Anda akan menerima email 📬<b>Informasi</b> seputar <br/> Pembaruan Content Produk, Penawaran hingga Info-info menarik lainnya , yang resmi tentunya dari : ' +
                                '<a href="https://syoobe.co.id" class="display-5">Syoobe Indonesia</a> <br/> 🎁 ke alamat email Anda <b style="color:navy;"> :'+email+'</b><br/>'+
                                '<b style="color:forestgreen;">Salam Sukses 📸📸📸📸</br>',
                                showCloseButton: false,
                                showCancelButton: true,
                                focusConfirm: false,
                                confirmButtonText:
                                '<i class="fa fa-thumbs-up"></i> Great!',
                                confirmButtonAriaLabel: 'Thumbs up, great!',
                                cancelButtonText:
                                '<i class="fa fa-thumbs-down"></i>',
                                cancelButtonAriaLabel: 'Thumbs down'
                            });
                        }else{
                            Swal.fire("Subscribe gagal ! ");
                        }
                    }            
                });
            }
    // if empty form
        }else{
            Swal.fire({
                title: 'Form Error ! ',
                html:   '<span class="text-primary"><strong>Anda Belum Mengisi Form Email</strong></span>',
                width: 600,
                padding: '3em',
                background: '#fff url(https://blog.syoobe.co.id/wp-content/uploads/2015/03/girl-237871_1280.jpg)',
                backdrop: `
                rgba(0,0,123,0.4)
                url("https://blog.syoobe.co.id/wp-content/uploads/2020/09/funny-cat.gif")
                left top
                no-repeat
                `
            })
        }
    });

    // ini untuk form search di navgiation
    data.formSearch.attr('action', 'https://syoobe.co.id/-/products/search');
    data.formSearchInput.attr('autocomplete', 'off');
    data.formSearchInput.attr('autofocus', 'autofocus');
    data.formSearchInput.hover(function(){
        $(this).focus();
    });

    data.formSearchInput.before(data.loaderSearch);
    $('.loader-search').hide();
    data.formSearchInput.on('keyup', function(e){
        e.preventDefault();
        const search = $(this).val();
        const keyCode = e.keyCode || e.which;
        console.log(search);
        if(search && keyCode !== 8){
            $('.loader-search').show('slow').fadeIn(1000);
                Swal.fire({
                    title: 'Anda akan diarahkan ke halaman resmi Syoobe',
                    imageUrl: 'https://blog.syoobe.co.id/wp-content/uploads/2020/09/Screenshot-from-2020-09-21-18-30-42-e1600689042494.png',
                    imageWidth: 400,
                    imageHeight: 200,
                    showDenyButton: true,
                    showCancelButton: true,
                    confirmButtonText: `Lanjut sekarang`,
                    cancelButtonText: `Nanti saja`,
                    denyButtonText: `OK`,
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                    Swal.fire('Okay bosku ! ', '', 'success');
                    window.location.replace('https://syoobe.co.id/-/products/search');
                    } else if (result.isDenied) {
                    Swal.fire('Baiklah bosku !', '', 'info')
                    data.formSearchInput.reset();
                    data.formSearchInput.val('');
                    }
                });
                
        }else{
            $('.loader-search').hide('slow').slideUp(1000);
        }
    });

    data.formSearch.on('keyup keypress', function(e){
        const keyCode = e.keyCode || e.which;
        if(keyCode === 13){
            e.preventDefault();
            // return false;
            // data.formSearch.reset();
            Swal.fire({
                title: 'Anda akan diarahkan ke halaman toko Syoobe',
                imageUrl: 'https://blog.syoobe.co.id/wp-content/uploads/2020/09/Screenshot-from-2020-09-21-18-30-42-e1600689042494.png',
                imageWidth: 400,
                imageHeight: 200,
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: `Lanjut sekarang`,
                cancelButtonText: `Nanti saja`,
                denyButtonText: `OK`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                Swal.fire('Okay bosku ! ', '', 'success');
                window.location.replace('https://syoobe.co.id/-/products/search');
                } else if (result.isDenied) {
                Swal.fire('Baiklah bosku !', '', 'info')
                data.formSearchInput.reset();
                }
            });
            data.formSearchInput.reset();
        }
    });
    data.formSearchSubmit.attr('name', '');
    data.formSearchSubmit.on('click', function(e){
        e.preventDefault();
        Swal.fire({
            title: 'Anda akan diarahkan ke halaman toko Syoobe',
            imageUrl: 'https://blog.syoobe.co.id/wp-content/uploads/2020/09/Screenshot-from-2020-09-21-18-30-42-e1600689042494.png',
            imageWidth: 400,
            imageHeight: 200,
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: `Lanjut sekarang`,
            cancelButtonText: `Nanti saja`,
            denyButtonText: `OK`,
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
            Swal.fire('Okay bosku ! ', '', 'success');
            window.location.replace('https://syoobe.co.id');
            } else if (result.isDenied) {
            Swal.fire('Baiklah bosku !', '', 'info')
            }
        });
    });

});

  
