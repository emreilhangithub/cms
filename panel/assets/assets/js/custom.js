/**
 * User: Mustafa Emre Ilhan
 * Job: Junior Software Developer */

/* Döküman hazır oldugu zaman bu calısacak
$(document).ready(function () {
alert();
})
 */

/* remove clasına click yapıldıgında bir fonksiyon calıstır
$(document).ready(function () {
 $(".remove-btn").click(function () {
        alert();
    })
})
})
 */

/* remove butonuna basınca bu entregrasyon calısır
$(document).ready(function () {
 $(".remove-btn").click(function () {
swal.fire({
    title: 'Error!',
    text: 'Do you want to continue',
    icon: 'error',
    confirmButtonText: 'Cool'
     })
})
})
 */

$(document).ready(function () {

    $(".remove-btn").click(function (e) {

        var $data_url = $(this).data("url");

        //alert($data_url); return false;

        Swal.fire({
            title: 'Emin misiniz?',
            text: "Bu işlemi geri alamayacaksınız!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Evet Sil',
            cancelButtonText:'Hayır'
        }).then(function (result)  {
            if (result.value) {
               window.location.href =$data_url;
            }
        })
    })
    /* remove clasına click yapıldıgında bir fonksiyon calıstır https://sweetalert2.github.io/ */
})
