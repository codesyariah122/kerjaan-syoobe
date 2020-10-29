$('#view-tgl').hide();

$(document).ready(function(){  
  $('#set-tgl').on('mouseover', function(){
    $(this).popover('show');
  });

  $('#set-tgl').on('click', function(){
   let getCookie = Cookies.get('simpan-jadwal');
//   alert(getCookie);
    if(getCookie == '' || getCookie == undefined){
      Swal.fire({
        title: 'Jadwalkan untuk join di syoobe?',
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: `Simpan`,
        denyButtonText: `Nanti Saja`,
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            let id = 'WelcomeSyoobe';
            let param = 'simpan-jadwal';
            cookie(param, id);
            Swal.fire(`${id} Tersimpan`, '', 'success')
        } else if (result.isDenied) {
          Swal.fire('Jadwal tidak disimpan', '', 'info')
          setTimeout(function(){
              location.href='https://www.syoobe.co.id/user/account';
          }, 1500)
        }
      });
    }else{
      Swal.fire({
        title: 'Jadwal sudah tersimpan.',
        width: 600,
        padding: '3em',
        background: '#fff url(https://syoobe.co.id/user-uploads/text-editor/alert/alert1.jpg)',
        backdrop: `
          rgba(0,0,123,0.4)
          url("https://syoobe.co.id/user-uploads/text-editor/alert/alert3.gif")
          left top
          no-repeat
        `
      });   
    }

  });

});

function cookie(param, id){
  Cookies.set(param, id, {expires: 30});
}

function makeTimer() {
        let endTime = new Date("26 November 2020 0:00:00 GMT+07:00");			
        endTime = (Date.parse(endTime) / 1000);

        let now = new Date();
        now = (Date.parse(now) / 1000);

        let timeLeft = endTime - now;

        let days = Math.floor(timeLeft / 86400); 
        let hours = Math.floor((timeLeft - (days * 86400)) / 3600);
        let minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
        let seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

        if (hours < "10") { hours = "0" + hours; }
        if (minutes < "10") { minutes = "0" + minutes; }
        if (seconds < "10") { seconds = "0" + seconds; }

        $("#days").html(days + " <span class='result'>Hari</span>");
        $("#hours").html(hours + " <span class='result'>Jam</span>");
        $("#minutes").html(minutes + " <span class='result'>Menit</span>");
        $("#seconds").html(seconds + " <span class='result'>Detik</span>");		

}

setInterval(function() { makeTimer(); }, 1000);
