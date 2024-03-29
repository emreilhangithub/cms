<?php
/**
 * User: Mustafa Emre Ilhan
 * Job: Junior Software Developer
 */

class Product extends CI_Controller
{

    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();
        $this->viewFolder = "product_v";
        $this->load->model("product_model");
        $this->load->model("product_image_model");
    }

    public function index()
    {
        $viewData = new stdClass();

        /* Tablodan Verilerin Getirilmesi*/
        $items = $this->product_model->get_all(array(),"rank ASC");
        //$items = $this->product_model->get_all(array("isActive"=>1));

        /* View Gönderilecek verilerin Set Edilmesi */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";
        $viewData->items = $items;


        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }

    public  function new_form()
    {
        $viewData = new stdClass();

        /* View Gönderilecek verilerin Set Edilmesi */

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";

        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }

    public  function  save()
    {
        $this->load->library("form_validation");

        //Kurallar Yazılır
        $this->form_validation->set_rules("title","Başlık","required|trim");

        //Hata Mesajları
        $this->form_validation->set_message(
            array(
                "required" => "<b>{field}</b> alanı doldurulmalıdır",
            )
        );

        //Form Validation Çalıştırılır
        //TRUE - FALSE
        $validate =  $this->form_validation->run();

        //Monitör Askısı //monitor-askisi

        if ($validate)
        {
         $insert =  $this->product_model->add(
             array(
                 "title"        =>  $this->input->post("title"),
                 "description"  =>  $this->input->post("description"),
                 "url"          =>  convertToSeo($this->input->post("title")),
                 "rank"         =>  0,
                 "isActive"     =>  1,
                 "createdAt"    =>  date("Y-m-d H:i:s")
         )
         );

         if ($insert)
         {
             redirect(base_url("product"));
         }
         else
         {
             redirect(base_url("product"));
         }


        }
        else
        {
            $viewData = new stdClass();
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "add";
            $viewData->form_error = true;

            $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index",$viewData);

            //echo validation_errors();
            //echo "Bir şeyler terst gitti";
        }


        //Başarılı ise kayıt kayıt işlemi başlar

        //Başarısız ise hata ekranda göster


    }

    public  function update_form($id)
    {
        /* Tablodan Verilerin Getirilmesi*/
        $item = $this->product_model->get(array("id" => $id));

        /* View Gönderilecek verilerin Set Edilmesi */
        $viewData = new stdClass();
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->item=$item;

        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }

    public  function  update($id)
    {
        $this->load->library("form_validation");

        //Kurallar Yazılır
        $this->form_validation->set_rules("title","Başlık","required|trim");

        //Hata Mesajları
        $this->form_validation->set_message(
            array(
                "required" => "<b>{field}</b> alanı doldurulmalıdır",
            )
        );

        //Form Validation Çalıştırılır
        //TRUE - FALSE
        $validate =  $this->form_validation->run();

        //Monitör Askısı //monitor-askisi

        if ($validate)
        {
            $update =  $this->product_model->update(
                array(
                    "id"=>$id
                ),
                array(
                    "title"        =>  $this->input->post("title"),
                    "description"  =>  $this->input->post("description"),
                    "url"          =>  convertToSeo($this->input->post("title"))
                )
            );

            if ($update)
            {
                redirect(base_url("product/update_form/$id"));
            }
            else
            {
                redirect(base_url("product/update_form/$id"));
            }

        }
        else
        {
            $viewData = new stdClass();

            /* Tablodan Verilerin Getirilmesi*/
            $item = $this->product_model->get(array("id" => $id));

            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "update";
            $viewData->form_error = true;
            $viewData->item = $item; //title bos kalırsa hataya düşer ve biz bunu gönder zorundayız updatede

            $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index",$viewData);

            //echo validation_errors();
            //echo "Bir şeyler terst gitti";
        }


        //Başarılı ise kayıt kayıt işlemi başlar

        //Başarısız ise hata ekranda göster


    }

    public function delete($id)
    {
        $delete = $this->product_model->delete(array('id'=>$id));
        if ($delete)
        {
            redirect(base_url("product"));
        }
        else
        {
            redirect(base_url("product"));
        }
    }

    public function isActiveSetter($id)
    {
      if ($id)
      {
          $isActive = $this->input->post("data") === "true" ? 1 : 0;
          // echo $isActive; echo gettype($isActive); //string geliyor bize cunku

          $this->product_model->update(
              array(
                "id" => $id
              ),
              array(
                  "isActive"=>$isActive
              )
          );

      }
    }

    public function rankSetter()
    {
       $data =  $this->input->post("data");

       parse_str($data,$order);
       //stringi parse edecegiz degisikligide order isimli degiskene aktar
        //print_r($order);
        $items = $order["ord"];
        //print_r($items);
        foreach ($items as $rank => $id)
        {
            $this->product_model->update(
                array(
                    "id"      =>    $id,
                    "rank !=" =>    $rank //rankı ranka eşit degilse bunu ekledik
                ),
                array(
                    "rank"=>$rank
                )
            );
        }


    }


    public function image_form($id)
    {
        $viewData = new stdClass();

        /* View Gönderilecek verilerin Set Edilmesi */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "image";

        $viewData->item =  $this->product_model->get(
            array(
                "id"=>$id
            )); //burada ürün bilgilerini viewe gönderdim

        $viewData->item_images =  $this->product_image_model->get_all(
            array(
                "product_id"=>$id
            )); //burda ürüne ait resimlerin bilgilerini viewe gönderdim

        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }

    public function image_upload($id)
    {


        $config['upload_path']          = "uploads/$this->viewFolder/";
		$upload_path = "uploads/$this->viewFolder/";

		if (!is_dir($upload_path)) {
			mkdir($upload_path, 0777, true); // Dizini oluşturun, izinleri uygun bir şekilde ayarlayın
		}
		else
        {
            echo "Dosya Oluşturulamadı";
        }

        $config['allowed_types']        = "jpg|jepg|png";

        $this->load->library("upload", $config);

        $upload =  $this->upload->do_upload("file");


        if ( $upload)
        {
            $uploaded_file = $this->upload->data("file_name");

         $this->product_image_model->add(
             array(
                 "img_url"      =>$uploaded_file,
                 "rank"         =>0,
                 "isCover"      =>0,
                 "isActive"     =>1,
                 "createdAt"    =>  date("Y-m-d H:i:s"),
                 "product_id"   =>$id
             )
         );
        }

        else
        {
            echo "İşlem başarısız. Hata: " . $this->upload->display_errors();
        }

    }

}
