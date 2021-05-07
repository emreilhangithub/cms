<?php
/**
 * User: Mustafa Emre Ilhan
 * Job: Junior Software Developer
 */
?>

<div class="row">

    <div class="col-md-12">
        <h4 class="m-b-lg">
            Ürünler Listesi
            <a href="#" class="btn btn-outline btn-xs btn-primary pull-right"><i class="fa fa-plus"></i>Yeni Ekle</a>
        </h4>
    </div><!-- END column -->

    <div class="col-md-12">
        <div class="widget p-lg">

            <div class="alert alert-info text-center">
             <!--   <h5 class="alert-title">Kayıt Bulunamadı</h5>  -->
                <p>Burada herhangi bir veri bulunmamaktadır.Eklemek için lütfen <a href="#">Tıklayınız</a></p>
            </div>

            <table class="table table-hover table-striped">
               <thead>
                    <th>#Id</th>
                    <th>Url</th>
                    <th>Başlık</th>
                    <th>Açıklama</th>
                    <th>Durumu</th>
                    <th>İşlem</th>
               </thead>
                <tbody>
                <tr>
                    <td>#1</td>
                    <td>#1</td>
                    <td>#1</td>
                    <td>#1</td>
                   <td>
                        <input id="switch-2-2" type="checkbox" data-switchery data-color="#10c469" checked />
                   </td>
                    <td>
                        <a href="#" class="btn btn-sm btn-danger btn-outline"><i class="fa fa-trash">Sil</i></a>
                        <a href="#" class="btn btn-sm btn-info btn-outline"><i class="fa fa-pencil-square-o">Düzenle</i></a>



                    </td>
                </tr>

                </tbody>
            </table>
        </div><!-- .widget -->
    </div><!-- END column -->

</div><!-- .row -->
