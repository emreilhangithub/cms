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

    $(".remove-btn").click(function () {

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

    $(".isActive").change(function () {
        var $data =  $(this).prop("checked"); //burada tıklanınca veriyi aldık true mu false mi
        var $data_url = $(this).data("url"); //url aldık yine

        if (typeof $data !== "undefined" && typeof $data_url !== "undefined") // bos degilse ve eşit degilse (undefined)
        {
            $.post($data_url,{data:$data},function (response) {
                //alert(response);
            });
            //3 parametre alır 1.url 2.obje türünde bir bilgidir 3.colbage funciton
        }

    })
    /* http://abpetkov.github.io/switchery/ */

})
