<?php
/**
 * User: Mustafa Emre Ilhan
 * Job: Junior Software Developer
 */
?>

<div class="row">
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("product/image_upload");?>" class="dropzone" data-plugin="dropzone" data-options="{ url: '<?php echo base_url("product/image_upload");?>'}">
                    <div class="dz-message">
                        <h3 class="m-h-lg">Yüklemek istediginiz resimleri buraya sürükleyiniz</h3>
                        <p class="m-b-lg text-muted">(Yüklemek için dosyalarınızı süreükleyiniz yada buraya tıklayınız)</p>
                    </div>
                </form>
            </div><!-- .widget-body -->
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- .row -->


<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
           <b> <?php echo $item->title ?> </b> kaydına ait Resimler
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
               <table class="table table-bordered table-striped table-hover pictures_list">
                   <thead>
                   <th>#id</th>
                   <th>Görsel</th>
                   <th>Resim Adı</th>
                   <th>Durumu</th>
                   <th>İşlem</th>
                   </thead>
                   <tbody>
                   <tr>
                       <td class="w100 text-center">#1</td>
                       <td class="w100 text-center"><img width="50" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoGCBUVExcVFRUYGBcZGhwaGhkaGxohHBwbHxofGhwdGxwcHysjGiAoHRsfJDUkKC0uMjIyGSE3PDcxOysxMi4BCwsLDw4PHBERHTEoISgxMTExMTExMTEuMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExMTExLjE7Mf/AABEIALcBEwMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAFAAIDBAYBBwj/xABCEAACAQIEAwUFBgUCBAcBAAABAhEAAwQSITEFQVEGEyJhcTKBkaHwQlKxwdHhBxQjkvEzYhVygqIWJENTo7KzNP/EABoBAAIDAQEAAAAAAAAAAAAAAAIDAAEEBQb/xAAqEQADAAICAgEDAgcBAAAAAAAAAQIDESExBBJBEyJRYYEjMkJDkdHwFP/aAAwDAQACEQMRAD8ANMBmHWmOeYPuiusDvuaaF+VYTqDw8RPyOvlvTZ01+jXPjSiRUIIExBrkfP61rjNpp+G1cg6iT+fzoiDzXVHnpTYGvSuM31+lQoeTA+dNSeddCHpVHHcZw1rS5eRTtlHib+1ZMVSTfRTaXZeVtfx610H6/es3d7aYXXKt64B7RVUXQ/8AM0/Kqq9tGKlkwpIkr/q6zEjQJO2pMR50xY7/AALeaF8muYU9RWRHbC/ywannPeOQR7lH41Ytdo8USB/KW1nRpuXPDru3hMDfadjU+lZX/oj8mjuHTpTFoD/4kuaZsG+sglLqkf8AcAR76evae1pnt3rX/NaJUdDmQt+FU8dfgJZofyHhtHM0wr5zQ6zx3DXCFTEWiehJXX/rAO9ExMSZgiQeR9DzFA5a7GTSfQwHlTgsaU2Y+tq7moQhU1BHM03PvuPhTh0qiDrZ6609UJNcVasWE1qEHrZ2AGvIADc+nWsx/ETjxtD+TtAi4CHu3NIgCVRNfPWfzrWcU4imDs968Z2gW110DGC2gJ28vzrzziPAGdmu27nfKwJJuEd4AdAWI0bnDjwnyOlMWpXPYM/faRkrhuZdNFG4H5nmav8ABGvh0uWWZboPhZYBkmAIOhzbdNDNXcPwa4Yt5kCs0TsZ56bgwNZ2FHeKBMJZAnK7IwtnYqmzXSepmF8p6moq30a8kTjlu3+xtOF8YS4FtYl7a34AzLOQkmFEn2Wb7u2sAnapr4KMY+yYkHSR5jYjpvXhSY9gxYlvEMpgnNliNeR/5T+NaXsnxS8pCJczI+pOYjbfMNTPmAT61qlNLk4eTPqtpcHrXDeLqqkXAQBJBA8+gqhjsUcZdyIf6Vo/3uCRm9ByHWT0rkW2JFu4rwAdDOh5g/aE6SPlVfDu1m5Nq2DnI7xTItkA6kR7FyNjEGNRzBJbWkN2lyZ3+LHBSti3fBMW27sjkA8Qd9NRGxmeUV5zudJj6/Ovc+2T272Buqq3LgeFAVCSjhgVLjdFBAk+fnXi17CG3cKeJSCQZB3BjTqJ51bnRTe+R9nBkqNKVQWyxH+aVDoh66w1rgcGu3tB193n0FQKDMxpP19eVYTeTiBXetR5uunpPzp4POahQ0qF/HSkms6H3fKldXpE8qD8e7RWsP4FHeXY0tg6KdwbjD2Rzgany3o5lvhA1SlbYVvXFRSzsqqN2YwojzJ+VZ/Edqs7ZcJa7zkblw5FGk6J7TfKg6YDEYq4Ll9ix3AjwqD91dhp8etanh/DFVFAB0AGuw6AfL41rjx13Rhy+X8SZ67hMRfab99ysGETwp6Qu+3P41ZwvB8Mm9tQTABJaBrJAHOfOYitDfwcawNeQ9eXr+dDbvCmuEKREmABsZ6zTfVLoy+9V2x+HFtwCmQgSogDQTJEj8eVSJgrS5iLakkArAiABrEaDTc9JqohSw2RSua22VlBJEgwYI940p9x71wwtshTO41Onp0POoVpkmIvW7ekgbGNRPINB5Tp7/OrWEVGUMMpWDtpB1WTH4GAdRVW72ZlAXYligmDucxkZCRAAiCOYmq2HwT2HAJDqQSG8WnM6Db39KnJNoLZAQPLYHeKemEBI3A6jQkfrH4026pgG3semokb77nyqazimVoZQfNSSN9h19dqmy0vwQcU4DZuFotq68gyrmiebRvzkHnWfvcMuWR/5e7dtgbJmLW5mfYbb3Vt7vElIzsCToMuXkB8CBFUMbf7wHwektG2gExt+lVpMJOk+DM4PtPcTTF2pUad5aEif9y8vd8K0GFxVq4oe263EOoI5a7MNwfI61meJoxYjXQ7fudT61TThbd7nwzm3cJABBGVp0AYEAc9SdNOdJvAn0asfkUv5jckfX1yroEUCw3GWt3Th8YotXQ2UXAZtOfJvsny29NqNo/Xpt1rJUOXybItUtontgUSwqoiNdf2E3H3juFoN/NATIioG4mmNKJZu5TbJHdOAC8T/UtGSGafsHUbjYTT2lslP4Mx2s4m2IvEvJM+zqAo+yPURPl6iocBjCB4CVKSx1082mPCw5mMp+0OdM4tw+4jxcDWwNCY3MnbnJrbdhOzgFpXuiDFxhmA8KM0l3B6AQAdCZ5A0maddPsY9Y1t/AP4E4uOt02j7JR2AVVeNkzMRBLArlBI21jbC9rsdeu3TdvAjOf+mV0CeQQACNJImtb247U21uJathu6UmFWCY1Gdp0Ynkp5U/CcUt4hO7uhbtqIVwCYHtZGX2mAgEA+NdYJFa8X2dmTyrrK00uvj5PNO53Ynb5+lehdk+BWsLbbEYoBiMpFsCT3mpS2NwxESx6yPsmbHB+wltL/AH+fNhwveJOyAaly+zKnIbydR4dQX8QePS4t2vCiAi2PIiDcPmw0XoBPOtq1rZztuqSXS7/0WMP2wYYl7sWwxJBUewgAyiBEaDmND9oc69E4birWKtd5YfMVAzofbXTmv6SDyJr56tlgdNCK9A7BYTEF7d1clr2mDsYGUA+PbRDBkHQhWPKq9Xrg0zWuzXnG5GN24z2u7Moz+EAGAR4TLq2nhYa8tqLcR4fh+I2C3h7xlEOpMaEGdCMw0IHSaEcR7SYa7Ae21xGZrbEKTmWB41QTKmDKnxAFTrQ3BYru7xYjujcOaYiREKRoJUKPxqpr26CtqdbNzw/s9hrSBEtDKCY3O7FuZPWlVWxxR8o8Ctpv1pVfBNge427R6022068jzpuY8x8/qKlC1zjeNjadz5z8Kch6062s/l5noayHaTjZuE2LDEKJFy4OfIonl1b3CmY8bt6QvJkULbJ+McdNxjYwzANBD3YJC6Hw243Y7ZthNO7LcBRTnaSZmTrrPnOY+vvrvAeG5bYgaAkaRG3KTzHPaj9uy28keX1y03roximEcrLmq2WWVAQFGx6fgOvv51ZtL8/x8ulQ2rR3+pn6+FXrFmRHz/Tyo2zPsgZB68v1io7mELbaHbT6n/FEcPhTP19D3ir9nDiNRQMZK2BsB2ftFQGAkTrA8R316+tEcNhAukVbC66VPFQNGfx1iCTM/XOoLlpDqVEjmR+R+taKcRHu8qDYgSwEwOZ/L1okZ7fJLftIfGCVJA25c+XMzQ69w3mrTB2jQ67Eg/PzowzqI2j1j4H86rYq6EDCRI3j8o3H41TQcU0Vke4p8NsypLZhrA6gDxQAPOuXrq5c+kRrAHTXb61p2HvMxGU+JtjJHqDroI/GqzBSSSJ5n3Cduk/IVXqNVIEnDKTI0zHWen5+npVg2EGYDXzIgkdSOXp5VNib2hmNROvX8+VUbd5mIyg6TrpoNufMjl51c8FXyuBmO4dbdcrjw7Rp8W6GqFnEPg4t3Ha5htlubvbJ+y3Ir6bUd8zMj4+/z/WoLqqwIIlSNRpr+v8AiryY5tC8ee8ddk99gVmZ0kEbEciKwnFbRt3i6yNZ0MEHqOhnWjY/8m/dO04dj4WMnuXP2GJ1Kkkg9CPWVxvDBhI+vf8AW9c24cPTOxjyTlnaCHZvtotzLbxUZh7N06+65M9NG5c60fb/ALSJYsFE3cCd/GYlVXqgG5HIdTXkmLwxUyulFeBdpcls4bEp32GJE229pDOr2mGqEesUEYpVey+SU38/Bm8Sr3HZmJZ2aTvz6eXKPStd2B4Jdu31QSqLBun/AGGcqEbHM0xPs5WblVy12XuMUuYFhibNxwFuaBrU8r6HVYGpYbxsJEme32NXhuGGDtSb19C127rKoYQuQPtOJAAIyhQPXVraFVSnoi7X9p7GFYYS0O/SCMQzk5XM620IIyxuWAI0AM61lu0HZ5Ls3sIXafFctPGdGMRGpzA8jJB5HlWVxKF5ZFIRYA8hyk9TvV/s7ir+cLazMQGIy7oAJZtdMvUHw0Uakz02y/2a4Ylz2lOVNbrEkMTrFtehaNTyAJ3ij/HHfW0WCBYFxVEDSItADZQoEry8IM0/F4u9ZcWe7RMY0OcxUIJQFW3MXCIhWiCgmYWudmLRZmuXLRRB/TVSSSrKZbNpJZixJJ3mp5nkqMX2/wDfoN8XG7vdL9gfaxAmEZywiG3JbkpiJ8joRyMaVpsHxy3dVbWOQXACAt0GHSTBzMRPr8xOtT4HgyveNzL3aidSDBAXdgOQ/HTnUHazilvBWTbUziGAaSFJtK3iLtl0Fx+g205KK5vj5KutwbPImEtP/BrP+G/dZcvL0+NKvH+HcRfu1jEZBr4czaamfnr765XR9TJ7/oekyCfSnOZFRnf1Gv8AmqPaHiHcWjcjMxIRF6uQSJ8gBMdBWSVt6RtqkltgvtbxllnDWiQ7L/VcfYUj2VPJmG55A6b1S4HgYVQAN4iddI3G4B6+XlVPhmFZiSxzO5zOx3JOs+fwrYcHtRpyjUdfXkRNdTFjUI4+fK6oJ8IswpOWQRzOxjeB013HOuosk9Pr5VfsJoAQcxGw5z86rDDlbh6jRuoOo191E+zK6Clgk+1JO2vQcvdpV2zZHx1qphAAOn6VZfFKsCQGacoOkkDz6bx5VCTyy0qRSZwJnQDdjov9x0NYzG9qwLttGz2zmZLbOVNtrjJBFxVYkZWhVzaf1J2ob2n7bGxiLS5VICqL1vMTbBzhxdtsB7Q8akRPLkDQUzXM6NZxDj4W09yzba+q5hmVgoLAkQub2tQRI3JAEzVP/wAZ2lFpmt3Cl0DxW1LZDkDksInKATrEkKTyrJ2L9lMRjbbNdNi8LN1HC5Wa6WAQy6xbGfNlDDLtJgaZnG464jBFD5Hs57e3eHOpcu+SfFO50IAJAXMaHYXqeg47tjafGphbeXKwM3WcBcxUMqrrEmYMwZpuOxQ7tmt3EYgx4CGXMDGWRsZI515bd4gpW3bAzWZOZDlUsxAGZnA3nUEzoqzzo9gcdhsLZaz3vfZnVkCplIMhWDNtoVkEEgjY8qirQq8S2aXEY5+7zi4BGmTwltdAVbVGTz5TrQG5x4XHDaL3cHxEkFdd2kFRMiPPfagnFOLm+LgN1kCquS28EuwYZwGUDL5AzMHah3Dccbasph7ZKsbTAxcYAgSy6qBmmJExBqewU40j1zBWmkOrQBLIAZABA3Ox0jlBqe4hI1GkaaDbXfz1PxqPs1iUuYa06DKhtjLJ0GXwkDpDAgDWNJq+yEqSF2glunIT6mnyuBL4YBx2G1OvznyGg1kzVK1ZyHLqD0Eevod6OXcK7q1zLKIYY+ZMDnr00qg9pVcSSRIzZRBAnUCecRrMVNIjbEE3B6x569PrrUbKNRHp5fn7zUmIKnPlkLJyhvaynYGOcbnzqJXZdVMaETz2hlHlqaJITb5K2Jtq6lW1UjKR10jprQbCkWiMNc2ImzckRGpNpzGh0JB8wOdHLi9R/jp6UN4vghdTLoGXxK0agj2T5CfzpGaFa0N8bK4oHYzC71nuJYUjxRWp4fiDcSD/AKieG4NiGHOOh5VXx2FzAiuYm4rTO40rnaAnZfjeIwl5blm73cmGza22G8ONj+I8q0PafDf8RuNet3Cl9v8AVsXTtA0a0wHjtASdRKyJ01GethUJtXJ7p+Y3RuTr5jmOYkV1bj2Lnd3J8BBV0PiTmr225qRqPKn+zfRmqPyWMKLip/JFCl17iqTc0Cgt4T5jWZEzOk1qMVjcJwqUw39R1MXLhIJuXFEQBytK8tHNgT9lZYmLtYoo124qXfCReQBVvQYy3o1tPoBn9mRrB1rD8dxDPebMhTKSqoQJEH7Xn193KinXIhy96ZQxVxnYuzSzHMxJ1JOutbLsj24awos4gNdtD2WHt2/Qn2l/2nUcjyrF2rJZgF1Y8to57mtDa4AEsq14kM4FwL9y0RKsf99wjReSgkxK1d45ufWltBzbl7R6rf4raXBm+90Ogy5QhEXLh1RQo1MTrOxDExlFePdquKNfusSZ1ljqMzHcweQ2Hl60c4WtpT3b2xcVhnFoNBRWWCyDUF467iNpmq+M7No695hrguAkkLtmHRZMq4+42+6k1fiePGPcpl5bquWZdRpSrW8M7GYq5aVwgAYSAxAMTpIJ0pVv+khHuegA7+Z6/CsPxjHHEYkgMe6ttkUDbQw7jqTrB6Dzo92p4h3WHOXS5cORCOXVvKF+ZFA+GWLZtWxbDi6Ce8ZyMh18JSBKgDfN1rneNj/qZq8vJpeoX4JhwBGkDyJnWR7/ANq1a4pmCZzoihBAEgfmfXpWW4diddxz5bmdY5GN+W1Fku6Dz28/zmtz6OVT5DAcQeQn8fkT+tS2EzahTOYkndYOg13mQeu1BFxR1gSR7xvrP+KI4JnCMwJgFc/iULqTlhZ8Wv40BFPAWvOEiXGvXl0MnrWK4rixiL6qFHdahrj62wpErufCWbwyuoB3Aii+O4jbC/1LlsgOAQ7JlneDMwT9daz3GsFbW2r237tULMlxUUqWIKq6knxaZczgQAAR1AtjMa55APERbTCK6ra7xT3JzZjcOY97mtMPCUWWAaSYYbQKGYrGC89tZUZsma7c0y3ncNcuMR9ka+E+ECSADVnG8GuJhTdv3GVVOWzbafFsDl3WBoWg++QaBYsicyoUQ+yCc3kfFAnXy0oGzUjQcIwim7LX7N1Ljt3gbNmZrY7zOFLKxB5OGEyRrtQXiWONx84GWcw008BPhXyAU5Y6VTJpwqtl6GyNJ+X71Ph7DOCbYnJDEj2gJ057DeQNJqBlPSpLbEeySsjWDrHMSOXlUIMuXCdydTJ9evrqfjSn65V1lO8++pbHd5LmbN3ng7uPZ9rxltfu7epqEN92Q48lrDRBZbdrPOx0mQoBIkMDqBsZO1VOO4m9xAK1m6EQC2/cNdGcTcKC5oBmjwmJlc3Uisylp7Vm1eS3cEkl3dFayfFCBTrMgEMrcwKI9l8NZvpcW6qgswJbvUstm1hbcqUYHNJRgBIEHlTFTa0LcpPZ6o1nwgElgoC+0eX466yddaH3sKTA5c9vl5VAOL3P6Y7h0VibQDjVWTSGAYFhERlB56kUevW1BAVswgT5HmPdT00IcsB3bRWd/L8PUDz8qqTLRuQNB+XSP0o1ikJEH5/p00oRiYSTBkdeo3np+9XsXcjDbmPOudzuOXTofxplnHqSVYgEEw2vimDABURGukVce4vhAPiMkzEDpHU+elDXKE8zXJmeM2Fs30vDRWBt3BsBoCpPOZkQY5VaupM6Vc7SYcXLDA7iGmPEIjWZmYFD+EXi9oZpzglXzGTmB1JJA9r2vQiub5Ef1HZ8PLteoJ4vgcwMD9ap4Be+TuG/1UnuSeY3a0fXdeh02Naa9b3np76y/GcKUYOnWdPjSYfwask/IO7so2YCCDqDzjQqR8iKt3US6C6AyB4kkSsbGDoyjqIIFFMQP5i1/MgAOIW8JUZm2FxVnMZ0DaRsetBr1gg5l0PIimq9PkW4TRJwWwq3S7hWC+IIRIusDIBJ8PdgwzHosbmjvGbgRWuXouXLkv4hOuhLMP7RpoqhVG8rlsLiDbuBiJysGyyQpgyR5AxB8q2vE+H2uJJ/MYAt/MABb2DuMJyiZa2T7Qk/Mkwd3ewj10YH+cdnzHUzM7EHfMCNjOtbnsNw+7i2N5VgIwR2MBbsiSCvNgNWiBAB0MUC4Bwd8Tc/lktuIabzlZa2inWPPkBuTpWp7Q8UHD8OlizmR3BZDID2rRJkGP8A1Ljak7RoDoIjrngKJ2uei9jr2EtuyNiSzKYJFrvRPQXWMvG0npSrza1xG6BozAawOmvpSovqZPyF64fwHO1GKz4nIPZtaf8AUdWP4D3VYwLxseX17qDLcNy67n2ndmjmSzEwAOeu1ErJMazppB5Rp+0UzGvWUjJmr2ew1wtAWG50n56+7zMbUcvIFA11O3mPKhnZ88tTvvJ0HPTUEbT/ALuVX2vw2mkyDHPaQYG229MZla5CGFgJlXQkkMwzSVhSFjbLmAM71T7RY5LVo5mIkFSRkITMpyF1fQhipAkb/GrOFdcvnPL60+VZvtlfTvbbhk7xCyFG8QEwTmQ7ZgBlggaHrNDXAcLbMYmKXvJhZBlcngCnScqjRTA6/OjtrjV02Qtu2n2jbVCA1u3ozxpqCVBJnxQQd4qkyX7qMUtu9m3IV0thYDEjSdWjURM6rJmJi4jhbly2HyXGyqtw5bYCBXAKgBfYhFkn/afWgNJ3j3GDdTDoZPdAlkJBtgs2YBI1Mr7RbUk+8i8Viy2YKAiFi/dr7IJ6TroIHuqK65YjpEATMDpSyChb2EhinWpVpKtPy1CHCK4FpxFIVZDhXSo3TpTiahZzNUQs2b4CFHLZCSSBy03UE5QSQATvFH+zfELNi3cZF/rtbyML3sgFtTbUavAg5TqYMVmLVwhg3MEEeo1G9E8Vjrl1FDhQASyuEynYLkVh9gQPDyOtXL0U0bqziGL2LrhmMlUPdspzkjMxUnQaGASI1rV4XE5hqACNwGBjWNY86814Li7qKllmzG4+dA7CEeCATn8WYg6x5cxqf4ReuLcz3lylDlVUVcz6BWkaRqfaMA5hETTpsVUmrZhMsJHPXXaPrSh+MXckCWJn16yd6IMwIqnxBoA0EbTzPz06dNKNMTSM7i7UOPEABGuvh13gTIE8unnFQ94QZzRtA1OYGYYEiDy3118jVji45bfn6fnQZtXLSJBJKCYEdDOgPrPyopWzNlfBobV0wQR5ct/Mc5oHw493iblvUBgrrLHpBgHzEnyAohwZpEMdNdem/wBa1S4yyrfs3NQS2TSIgqZBnlIHpFZM87TRt8PJqkwmyz8ap47DZlIOtEMopXFk1zTuNHn9+7cw7Nl8OdSjGATkOjKCfZkaSNfOp+G3g4yncDT3bj1Hzox2hwGZCdJ+vnWQsk23inz986Efy1+gUxeEqphr1y1cV7blGUyHX2gfz9KN4a6LiTpmHtD8CPI/rVTF4agmnPDJUbPQuxHby3cPd37aJeKgIwhbd1gDlFwxCNy1015TXnnbVr4xlx8RbdLj+Ih+Z6rGmUbCOQoZesRsPjWh4R2iS7aGFxwa5a2t3R4rtk7AifbUfd3jadqfLQvXwAFxA8/lvz+dKtjhuxTsoNq5auWzOV1zQwnf2tD1HIyK7RbGfQZl8OuvvmjnDbWY766HXX4nrQa2ny/WtFwVAYLbDSQPqT+QrTKOXkYawlrKNNPKd5+RruLwudly5tgTO884j7PrVrDYclGeBlEAmV3Y6QD7W2/KprNoRmIMQYIka9QNjrHP47UYkZbwIB0Ow5n6+YoJ2+4dbTuXeUtPnN3uxNxm8Kq0MMhyysSQYJgaVpWS4VzWwpyMpYNEtbB8YQMRL5eXrzNZv+Il9kxNtijXrHcyFBIEq+a4+gIhWyyrTEihvWg8e9mdt2SpuKl021RFzgtlzWioYkasO9EjTaSCIg1zHcSS2sWEQQVYXFVxscpB1AKMsKUZftddTJ2hx4GW4htGVt28iouRVQSyFZImfCQTmIMzFUOJX0uXTmy2syEvbsqcne7qFWcq5vDqNAeVLZoQHusSSepny11py6jf1pjGTp9H/NcOmlAETB/OnZhVcnyNWcdhTbcoGRyNZtsGQrEyGG/ntHrVkEXqMvrUakzFItUIPuPpFRJTwAa7Zts3s8gTMgaAa6k/KqIMqfD5TIdiqgTpqSR9nynWDtMVywinVpiRMb+e/OK4qyYA9BVlBXgGJHfBmYnZWBMHJzCyfCZAJaREaVs8NiEv3LRTMY1hkZWIA8WR2WHWRBUzpBEVnuxPBDcvJcclQG8C/eEHOSZEABgd9dd4IrVrwxlv25utctgBiluQHEFO8DH2FcQTEkEDrpaYFaC+EvCFCqVjTLAGUcueqkbEfrTcfiMqOYB0jXz+70PnXO5yKAJ2gE7tGmp5/vQTjrnKrnXKRO+oPyHv60aoVVor4vEBj4yFU7kLOkSNBsP1oI25M6E8+uu0ctBVzi9+07sbaNbUglUBL5G2hmbVgY5HSR0ofbuOSoaSCR6SDA02J1IE9T1pkUzJaVBLh9wZjlLEaaHfaTMec+6u8XysGBVWIUsJB0KsrTHOQIgjnT8M6KjzbDlhp4iO6YGQ0LpmC8jyO9VOL4gkDkcjrM+IqUKgAbzrpv15UrK9sf4+loN2XBAJ5gfHnUxYmOXX65VW4e/hHwM9fz9anrlvs9CuiPEWgRrWN7RcOynMo+VbgDy1FUeI2A4IiPWrmtMG59kYPhmNKMOcaR1HMfXOtU1pXUOuoOorLcawRtsTyop2Uxx/029kka8gx2noDEevrTbn2XshcVp+rJsVgqgtcP1kitJdsSP01qJ7EaUlU0McA21hTG3X8a7V9bZrtF7snqZ2IP19Gr2AxpUgDaqc6T9fX61JaTYDckakmBPPSTHPTWuomcikn2a3A8QVyAJ03/bn1oxZd2ga5J0HLXpymst2bJza667elalr0MJnXTeiE60x/FMcbKApAIkywAR4Bm2HLeC8QC6mCCRHWsBZ7VsrYi33a37V5nyhpWM5IZ0CgFGdT4gsa/CvQ8JwhLystxjlZHtsoiGDgQ2swysJBGvnVLtH/D+0xtvbW67gqLpV7as4AVc0PC5oU+yRq060DTfQyXKXJ57ibmH/AJa0iNcS4GPenK5tPrKswzaXAPujUDehmMwjKqsTmDAsIDaKWyqzyIXPEgSa1vH+yn8szqLfeT4VZrpCgMSLbHwDLcLAKJYqSrkgAiK3GcLYttatWbTXO7AF+4zaG7ocpeDltKykkiNCYOs0LQxUn0ZfAYY3LioGVCWADOcoUkxJPLWrXF+HXLZ/qCSGZWYZoL+0VZiBLgHkNutXeKcDxeFS3duIAuZitxIbxZt3I5Ewy5twfdWnxnG7WP4a1lkVMbZy3S8AC6tvR3zADxZGaUPIaTQhHn86DoNfXUT9aV6p2B7MYXHJjMXcsnunuMli0vhyIniGXLs3srAMb7zWb4D2TW7wvFY0sWe2rKiD7LKylmb73gMj1O9ei/wTj/hQzEZe8ukk7ASJnyigdaL0eDvbIYhgViQQRqI5Eaa1x7LKRmBEqGAPQ7Hyo/xwW72OxBwy3Loe4xtCJkRLOf8AaIJHkRNG7v8ADLHC13hNtru5tAktB63D4S3lPvotkMJlq5wq21zNbTJmbTxETBBkLm05T10GtP4tw27Yc27tt7bDSGHlOhGjb7gmq2FuojS1tbg+62aN/wDaQdtKsoPYy01y6neXLdpEt/6inMpNtQCSAZLFso20LdBNNfh1u1btXLjHPdIuIjLlJQEgsSTlhtIG+u1Wuz38m9zIcHmD5de8LG2Z100zLy5HTU6zRDA8Ot3MUosras3Ea6pssNWRZ0ZodCxXoumbymoVs3/A8ClzDoWKXFKwrpsyzIEQMuU6RrqKs4rDqqkDTc8+Z1+esbVLwJFXDqBnAErluQWWD7LGBm6hjqQwMnen3kJqtGewLjrey5cpX1Ou87xPpQ3HYU3UdZhmESZ38wNTrFHr+G0OgE0H43C2nAJHhjQazpMGdNPtVaFmGwaZvCZE6QSAoPPNOk6QPOrWBwxA2kAiJXUSQdPPT51Ej5SSBCqwhZ5TJAO8efnVx8ezKvgyMJGYFtpzKNdPCDoRGkGnpIzb0RYm8FMLB5gEiB69dvLlQ3jN5l/pk6ZtYK8wBIYGOY5xz0p91wFiAWMGZMrvI6NIjXlHrQ/EiXQDUM6adfEKXlWjRge6RqsGYGmwJGp+Hr60QtGOdDsE+mtXrO8bVyn2eiXRPmEc96hZRHlyqVRtPPbSuMvz1+vhUCAnGuHBlPWsVcD2XMEidD5jofhXpN9Z5f46Vm+PcNzA6aim471wxOSN8oI9n8abtoSfGORjxAaT5dD+9XstYDhOLezcEbztyPLX8PfXoNi8lxA4nX5HYg+hqsker2Hjv2Q1bQ+v81ypctKlhmOwKqyCWy+6SdflzPLarOHcqZABj7wkHSNRz/WqODaAUP2WYH3GNOdELIGtdddHFrhhDg14Bl+B19o8z5DlA6Vq8LdVgAdzy0/GfqKyWHSPX6iY2228qOB0MBAQMomWBOaPEZAAAnYedXsDXyazhzcp+Y/zTO2fERasm5be53llrbulrmjuQO8GnhIV41GsHUaEZw+5AmdRy5/PStLwq6TlLKA8QNBMHz3AMDTyFVsrfJ5zd43dxS913ttAyi3aa43iLMHzLcuAd3nyFQ2YCCwjxVa7H9kyL63b697cBdbmGyW2WBAQ3LnsWvvx7egIGsVvMXwKw7IxtjwXDdEfeOpgn2FJ1IWJgaxIJjBoqgKqhVGyqAAPQDSqpFza6RS/4Xda2yXLiojghktqGZgZkXLtwHONY0RT5mvLO3n8P3wqnEYXM9ldXUn+pbgatP2k89xzkV7Wz1yxqpnmTIPPltWPJkccj0jx3+E2PX+U4jhmjW0big8/6bI0f2rWQw/ae4nDjgUlVe4zu3NkIXweQkSeugrQ/wAV+A/yGJS9h/BbvB4URFt8uV1A2ClWkDlJ8qx3Z7h5xGJs2AY7y4qSNwCfER6LNMlql7Fnrf8ACLhNmzZfN/UxN5fGEBYWrTKMtt39lGM5iszqNNK2/BZbD2i2rZFBj7yjK3/cDVvh+AtWLS2rSBEQQqgfM9SeZO9UeAGBdT7l+8oHkzd6B/8AJSff22WD+0vZnC4qGv2y5SSCHZZ09k5TtXmvanshbSyrW7Dpcyl8qMzwJMqSZzx97QkHYbV7LdGp0objMOrESATymNJ0OvLQxT56Ap6PnaxZIysjQw1Ujly9371puxt21cxAXEiXU5lJbRyDJFzMCIA1r0Ts7wi0bKOEHiRc+g9tZQsZ5yD5aCgOL7DXLmIkOotlWzN4VcToBAXxAiAWjQz6UxFKtm/tXg0NIgqCOehGmvP3TXWXy9f2oJwDhLYVO7zuykgWwxLZQPsz0j8PWjSGRVfIuuyK+nI8qzfGrZCtBOumhPMj9AfdWjxpjbb4Vn+NnwGdfLy/TyFX8iqMPjrKzp1+vKqLAidjMTO8fl0oziGLsWaSTqSdz5k/tXL/AIlthmzG2cqoR4Qs59YHiDMTpPXyok9CKjbA7WiRpJ3kkcjt+NV7yM19CxMzmM7mBHPzIrS4i2jSwUIzMWZVWLajkEElt9ddKBsk4lgNkUDTmWObX3AUOa/tZp8TH/ESCuFSNdfnEUQw4+1v+XWKgs2zA61ZsjkBp5/W9cw7xI1MYRTjMHeoyD9fpUIcAnUfpVfEWxERA22qzl0213O8GmXFUr5/jNQsxHaLhxBzAVN2X4sEOV2gEgN+Te7n5elaTiOEDLEViuJYZrNwMvIzTor2XqxFJw/ZHpKpSrJ4LjjZFykKOQZlkeXp08opVX02H9SSnxkd3inE6XAH2iGIg/MGpcNcg6HUazOo9J391SdscMYS4B7BIPkCdPdP41RtPIn6863Yr3KOfmjVMM230126fX4cpoph8QSZYk6eh0EDYeQ0jl76CYa5I2+MfU1fw+v67D4/nRtmdhzhTZnGw200/wAVv8Hh1gHUH1+Zrzzgl3xDadojYfma9CwD6Dp+f51RSXJYB5Hl9TU1qmOvOpFSKp1wT00yfPpVhPZA8qpqdatq1Y8s7NEGF/jnhQ/Ds8a2rttgegYlD/8AYV5R/DQE8UwYH/ug+4Ak/Kvc/wCIuGNzhmLUCT3TMBE6qQ/5V4V/DW4F4phDy70D4ggfjV4U1jaLrs+krhoLwkgYrG251L2bvuuWRb/GyaNRQa0uXiFw/wDuYW0f7Ltwfhc+dDjIwhdOulVHQhpogyzrUN9K1ANAbgVuLbof/TvXl93elx/2sKJhKH8HBGIxinbvLVxf+V7CKf8AvtvrRaKJA6KzrNRlAKtMsb1TxtwKJnTrVMCini8RrGkcupI8948qHcQseE+6dPmatWNWJI59K5j/AE/ajSFNNoxWJUq5mVU7wOUyN+elVroPICdteR+utGsXYLM3IaDnvvyoL7LG2yw0nUSZ2hennmHU61bQvs67ALLHQb+VDezyls1wjW4S3uPsj+0Cn9oJIW0phnMGD9kHxH4HL/1UW4fhwqjy+hWTyK+Dp+Fj1umSBIMz7gdPoVKo19411n9/2pM4H1v+tMO8jTrrvpWQ6I4vsB6mlJ2G/wBbVxVkDnH1+FdUATJgfUVCHH9eXOo7ab1ORBidKahBO/vqFkRAigvG8GHWOs/rR64uXSPfVe4g1B+FRPRTWzzm7gmBI6Uq2zYfyNKn/UYj6aJuIWwysCJDAg+/SsngENu4bZMFW8J59VI+EzyNbDEbnpvWe4/hpIdfaG3mOlXhyer0wc+P2W0XLVnmeZk+v51ftp4ZA0mOsE7enrQ/gePF1dfaG4/eK0uFNs2DLw6t4FFseINGYm55RoDtHnW59HOa5K+HOWCI06fU1qODcTBAg9P3+vWs2LcgGIEldtJEEgcjoRRXhGUCANfrbpQlG4wlyQD+9WCelAMHi4ifrlRfD3wwkUNLYaZZy1MriqbMdxr+NPwt4NsfUc6S0/kNMsYm2Llt00OdGWDtqpGvlXylgMQ1q6lwDxW3V4PVWBg/CvqoPBkV8zduLZXH4oFcv9a5ppzYnl1mffRQuy9n0/Yui4i3F9l1VgfJgCPkaE4kEY2yeTWL6k+a3LLD19pvhVfsBj+84dhGJn+iik+aDIZ/tq7j/wD+nCHqbyD32s/v/wBOlwuSNlLj/a3CYO9as37hV7kEQshFJgNcM+EE+uxo5eSvDP4tcWwl7iNtkV3FqLV/ZQ4R/ZQ66xmWSOlW+DdvXbi4uNiGTB3Gy5HICLbykKGEwpBjxDp0NP0UeqW1y4ljzuWU/wDjuONOn+qKvE6VQxDA4iyymQ1u8ARBBE2WEEbiNj51autpFRMoWIfTyoTi3zHUacp69TVy486HYUwgek/lU7ehdEKoB+H150P4nc+U0Qun4dPrrQnFNmPynSnITT4K920IIkGeayJ/MUH4kip4jAAB3jYCjjIInp9aViu0mI7+4Lak5ZzOBrIHsqT/ALiJjoBPtVWSvWdsrFjeS/VFbgym9da+86nwCIhRMQNhO5jyo6B+n+KiwKQI5VLmE76THvrl3Tp7Z3scKJUojYn40lUjQCY505gd+h6e6nmPiKEMYHGwkczM/L650644I1n46+tI1UvvJ0+E8/KoQkDzpT8Mhkz6DT4VXMmPlU+FeANfryqEQ99jz6k1DkOk/R/erRYdekVxU5AaAVCyrAPM/GlUq2450qhRG678wPr8KG49QQelKlVopmauzZfvF0Eww/atdw3Eh0DDYiu0q6OHmeTmZ0lXBcjU+e0fW1EuG29YP1y+HpSpUYj4C1sqQZk6H3Hrry8hTrF51ZQraT7j+YpUqFkDeEx4brNWrltWM6g9RvSpVH0Gh9tj1086+dv4mW8vE8UN/wCpm/uUN+dKlQIKT0r+CXEy2Ba0ZPc3WAjmrKGA109rN8a3HGHAOGf7uIt+7vFe0f8A9IpUqT/cL+T5v7TWSmKvo3tC7cn+88/fPvqq1iLaPyYsvvXLP/2FKlWldEPav4Y4ktgsJmacty/aXecuViqk+RT0gCtdfedB60qVAgWVL7gDoBzqqcYImPr8/wB6VKijsVZTvY4nTp00+jTbayQ3Tbf/ADSpVokyU2CO2nGDZsraT/UuTkB2XmzHl7tyaz3CMNkTTU8ydyeZNKlWHy6ezreDK9fb5CIOk9dPWn2RJIHLelSrGdAkt6/XzprsZ16UqVQsYqz8p/SuPGwpUqhCB9P2qK0TyOhHx/SlSqwS7hddD+XxqQtr9fW1KlVBDM1KlSqEP//Z" alt="" class="img-responsive"></td>
                       <td>deneme.urunu-jpg</td>
                       <td class="w100 text-center">
                           <input
                                   data-url="<?php echo base_url("product/isActiveSetter")?>"
                                   class="isActive"
                                   type="checkbox"
                                   data-switchery
                                   data-color="#10c469"
                               <?php echo (true) ? "checked" : "";  ?>
                           />
                       </td>
                       <td class="w100 text-center">
                           <button data-url="<?php echo base_url("product/delete")?>"
                                   class="btn btn-sm btn-danger btn-outline remove-btn btn-block">
                               <i class="fa fa-trash"> Sil </i>
                           </button>
                       </td>
                   </tr>
                   </tbody>
               </table>
            </div><!-- .widget-body -->
        </div><!-- .widget-body -->
    </div><!-- .widget -->
</div><!-- .row -->


