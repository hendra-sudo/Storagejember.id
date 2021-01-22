<?php
class customer extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_customer');
        chek_session();
    }
    
    function index(){
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/customer/index/';
        $config['total_rows'] = $this->model_customer->tampilkan_data()->num_rows();
        $config['per_page'] = 3; 
        $this->pagination->initialize($config); 
        $data['paging']     =$this->pagination->create_links();
        $halaman            =  $this->uri->segment(3);
        $halaman            =$halaman==''?0:$halaman;
        $data['record']     =    $this->model_customer->tampilkan_data_paging($halaman,$config['per_page']);
        $this->template->load('template','customer/lihat_data',$data);
    }
    
    function post()
    {
        if(isset($_POST['submit'])){
            // proses customer
            
            $customer       =   $this->input->post('nama_customer');
            $asli           =   $this->input->post('alamat_asli');
            $pindahan       =   $this->input->post('alamat_pindahan');
            $data           =   array('nama_customer'=>$customer,
                                    'alamat_asli'=>$asli,
                                    'alamat_pindahan'=>$pindahan );
            $this->model_customer->post($data);
            redirect('customer');
        }
        else{
            //$this->load->view('customer/form_input');
            $this->template->load('template','customer/form_input');
        }
    }
    
    function edit()
    {
       if(isset($_POST['submit'])){
            // proses barang
            $id         =   $this->input->post('id');
            $nama       =   $this->input->post('nama_customer');
            $asli       =   $this->input->post('alamat_asli');
            $pindahan   =   $this->input->post('alamat_pindahan');
            $data       = array('nama_customer'=>$nama,
                                'alamat_asli'=>$asli,
                                'alamat_pindahan'=>$pindahan);
            $this->model_customer->edit($data,$id);
            redirect('customer');
        }
        else{
            $id=  $this->uri->segment(3);
            $this->load->model('model_customer');
            $data['customer']   =  $this->model_customer->tampilkan_data()->result();
            $data['record']     =  $this->model_customer->get_one($id)->row_array();
            //$this->load->view('barang/form_edit',$data);
            $this->template->load('template','customer/form_edit',$data);
        }
    }

    // function edit()
    // {
    //     if(isset($_POST['submit'])){
    //         // proses customer
    //         $this->model_customer->edit();
    //         redirect('customer');
    //     }
    //     else{
    //         $id=  $this->uri->segment(3);
    //         $data['record']=  $this->model_customer->get_one($id)->row_array();
    //         //$this->load->view('customer/form_edit',$data);
    //         $this->template->load('template','customer/form_edit',$data);
    //     }
    // }
    
    
    function delete()
    {
        $id=  $this->uri->segment(3);
        $this->model_customer->delete($id);
        redirect('customer');
    }
}