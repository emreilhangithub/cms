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
    }

    public function index()
    {
        $viewData = new stdClass();

        /* Tablodan Verilerin Getirilmesi*/
        $items = $this->product_model->get_all();

        /* View Gönderilecek verilerin Set Edilmesi */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";
        $viewData->items = $items;


        $this->load->view("{$this->viewFolder}/{$viewData->subViewFolder}/index",$viewData);
    }

    public  function new_form()
    {
        $viewData = new stdClass();
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



}
