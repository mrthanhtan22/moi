<?php


class Lienhe extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('static_model');
	}

	public function index()
	{

		$lienhe = $this->static_model->get_list();
        $this->data['lienhe'] = $lienhe;



         $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        
		//load view
        $this->data['temp'] = 'admin/lienhe/edit';
        $this->load->view('admin/main', $this->data);


	}

	 function edit()
    {
       	$lienhe = $this->static_model->get_list();
        $this->data['lienhe'] = $lienhe;

        //load thư viện validate dữ liệu
        $this->load->library('form_validation');
        $this->load->helper('form');

        //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
            $this->form_validation->set_rules('content', 'Nội dung bài viết', 'required');

            //nhập liệu chính xác
            if($this->form_validation->run())
            {
              
                 //luu du lieu can them
                $data = array(
                    
            'content'    => $this->input->post('content'),
                    
                ); 
               
                //them moi vao csdl
                if($this->static_model->update(3, $data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không cập nhật được');
                }
                //chuyen tới trang danh sách
                redirect(admin_url('lienhe/index'));
            }
        }
        
        
        //load view
        $this->data['temp'] = 'admin/lienhe/edit';
        $this->load->view('admin/main', $this->data);
    }
}
