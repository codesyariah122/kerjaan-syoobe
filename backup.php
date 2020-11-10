  <script type="text/javascript">

        $(function(){

            $.redirect_url = $('input[type=hidden][name=redirect_url]').val();

            $('form[name="frmLogin"]').bind('submit', function(){
                // alert("Hallo");

                var username = $('#username').val();

                var password = $('#password').val();

                alert(username);

                $frm = $(this);

                frm_validator.validate();

                if (!frm_validator.isValid()) return;

                var data = $frm.serialize();

                data += '&btn_login=Submit&is_ajax_request=yes';

                $.ajax({

                    url: $frm.attr('action'),

                    type: 'post',

                    data: data,

                    success: function(t) {
                        sessionStorage.setItem("name", username);

                        var ans = parseJsonData(t);

                        if (ans.status==0){

                            $("#ajax_login_message").html(ans.msg)

                        }else{

                            //window.redirectUserLoggedin();

                            window.location.href="https://www.syoobe.co.id/user/google_auth_login_popup/?user_name="+username+"&user_pass="+password;

                            //$.session.set('login', username);

                        }

                    }

                });

                return false;

            });

        })

    </script>

    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/3efecfb50ca1529652f1ed77d/ee8cd3c37e00116bc0089b7a1.js");</script>
 
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
    <!--End mc_embed_signup-->
    <script type="text/javascript">
        const urlLink = 'https://www.syoobe.co.id';
        const oldLinks = $('.links').attr('href');
        for(let i = 0; i <= oldLinks.length; i++){
            $('.links').eq(i).attr('href', urlLink+oldLinks);
        }
        //const url = 'https://www.syoobe.co.id';
        //const formSubscribeSyoobe = $('#subscribeNewsletter').attr('action');
        //$('.newsletter-form').attr('action', url+formSubscribeSyoobe);
        const formNewsLetter = $('.sign-up-form');
        //formNewsLetter.hide();
        
        /*$('.ft-bttm-left').append(`
                <div class="sign-up-form">
                        <!-- Begin Mailchimp Signup Form -->
                        <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
                        <style type="text/css">
                            #mc_embed_signup{
                                background:#F6F2F2;
                            justify-content: left;
                            font:14px Helvetica,Arial,sans-serif; 
                            width:100%;
                            }

                            h6, p{
                                text-align: left;
                            }
                            input{
                                align-content: left;
                                margin-left:-1rem;
                            }
                            .button:hover{
                                color:#fff;
                                background: grey;
                            }
                        </style>
                        <div id="mc_embed_signup">
                        <form action="https://syoobe.us2.list-manage.com/subscribe/post?u=3efecfb50ca1529652f1ed77d&#038;id=c79e458c5b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate style="background:#ECE9E9;">
                            <div id="mc_embed_signup_scroll">
                            <h6 style="font-size:14px; font-weight:bold;text-align:left">Berlangganan Berita</h6>
                            <p style="font-size:12px;margin-top:-2rem; text-align:left;">
                                Daftar & dapatkan voucher belanja & terus dapatkan kabar Seputar,<br/> <b>Gaya Terbaru dan promosi eksklusif.</b> 
                            </p>
                            <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Alamat Email Anda" autofocus="on" autocomplete="off" required style="width:50%; font-size:12px;margin-left:-2.3rem;margin-top:1rem">
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3efecfb50ca1529652f1ed77d_c79e458c5b" tabindex="-1" value=""></div>
                                <button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary" style="background:#E5E2E2; height:6vh;color:#959595; margin-left:-.3rem;margin-top:.9rem;">Subscribe</button>
                                    <div class="clear"></div>
                            </div>
                        </form>
                        </div>
                        <div class="alert alert-success" role="alert" id="alert-subscribe">
                        <strong>Terima kasih</strong> sudah berlangganan, Untuk proses selanjutnya Anda akan menerima pembaruan informasi terbaru seputar <a class="text-primary" href="https://syoobe.co.id/">Syoobe</a>, ke alamat email anda : <span class="text-danger" id="email-anda"></span> <br/>📬📬📬📬
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        </div>
                        <!--End mc_embed_signup-->
                </div>
            `);
    */
    </script>
