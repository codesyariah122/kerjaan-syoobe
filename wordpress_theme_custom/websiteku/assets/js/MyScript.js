object.menuItem.last().after(`
    <a href="#" class="menu-item btn btn-primary tombol">Join US</a>
`);

$(window).on('scroll', function(){
    let isDesktop = window.matchMedia('only screen and (min-width: 992px)').matches;
    if(!isDesktop){
        if($(window).scrollTop() > 400){
            console.log("this is mobile");
            object.fixedTop.removeClass('transparent-nav');
            object.fixedTop.addClass('bg-white');
        }else{
            object.fixedTop.removeClass('bg-white');
            object.fixedTop.addClass('transparent-nav');
        }
    }else{
        if($(window).scrollTop() > 50){
            console.log("Ok On Desktop");
            object.fixedTop.addClass('transparent-nav');
            // object.fixedTop.addClass('bg-dark');
        }else{
            object.fixedTop.removeClass('bg-dark');
            object.fixedTop.removeClass('transparent-nav');
        }
    }
})
