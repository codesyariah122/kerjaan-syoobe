// // author: permanto@syoobe.co.id
// // Custom Jquery by PT. Syoobe Inti Perdana | 2020
const jqueryCore = document.querySelector('#jquery-core-js');
jqueryCore.removeAttribute('src');

const baseUrl = (url) => {
    if(location.href == url){
        let getCookie = Cookies.get('id');
        popUp(getCookie);
    }
}

const popUp = (cookie) => {
    if(cookie){
        console.log(`Cookie is active : ${cookie}`);
    }else{
        Swal.fire({
            title: 'Selamat Datang',
            text: 'Di Community Syoobe Indonesia',
            imageUrl: 'https://blog.syoobe.co.id/wp-content/uploads/2020/09/Slide1.jpg',
            imageWidth: 600,
            imageHeight: 200,
            imageAlt: 'Community Syoobe Indonesia',
            showCancelButton: false,
            confirmButtonColor: 'salmon',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Setuju'
            }).then((result) => {
                if (result.isConfirmed) {
                    let id = 'syoobeCookie';
                    Cookies.set('id', id, {expires: 1});
                Swal.fire(
                    'Jangan Lupa',
                    'Kunjungi situs kami syoobe.co.id',
                    'success'
                )
            }
        });
    }
}

function FooterSocketLeft(elem){
    let leftSocket = document.querySelector(elem);
    leftSocket.remove();
}
// const popUpSyoobe = (props) => {
//     $(props).on('mouseenter', function() {
//         $(this).removeClass('img-path');
//             $(this).hide('slow').slideUp(1000);
//             $('.join').show('slow').fadeIn(1000);
//             $('.img-modal-2').show('slow').fadeIn(1000);
//             $('.img-modal-2').addClass('img-path-2');
//     });
// }

// const adsPathImg = $('.advertisement_728x90');
// adsPathImg.on('mouseover', function(){
//     $(this).addClass('advertisement_728x90-path');
// });
// adsPathImg.on('mouseleave', function(){
//     $(this).removeClass('advertisement_728x90-path');
// });


// function copyright(elem) {
//     let copyright = document.querySelector('.copyright');
//     copyright.innerHTML = elem;
// }



// function FooterSocketRight(elem){
//     let rightSection = $('.footer-socket-right-section');
//     rightSection.append(elem);
// }
