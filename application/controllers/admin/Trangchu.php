<?php
    
Class Trangchu extends MY_Controller
{


	 function __construct()
	{
		parent::__construct();

		$this->load->model('trangchu_model');
	}

    
	 function index()
	{
		$trangchu = $this->trangchu_model->get_list();
        $this->data['trangchu'] = $trangchu;

         $message = $this->session->flashdata('message');
        $this->data['message'] = $message;

		$this->data['temp'] = 'admin/trangchu/edit';
        $this->load->view('admin/main', $this->data);
		/*load view*/
	}

	function edit()
    {
       
       
        //load thư viện validate dữ liệu
        $this->load->library('form_validation');
        $this->load->helper('form');

        /*lay danh muc san pham*/
            $this->load->model('trangchu_model');
           
            $trangchu = $this->trangchu_model->get_list();
        	$this->data['trangchu'] = $trangchu;
            
            /*end lay danh muc*/
        
        //neu ma co du lieu post len thi kiem tra
        if($this->input->post())
        {
            $this->form_validation->set_rules('title', 'Tiêu đề bài viết', 'required');
            $this->form_validation->set_rules('content', 'Nội dung bài viết', 'required');
            
            //nhập liệu chính xác
            if($this->form_validation->run())
            {
               
              
               
                 //luu du lieu can them
                $data = array(
                    'title'      => $this->input->post('title'),
                    'meta_desc'  => $this->input->post('meta_desc'),
                    'meta_key'   => $this->input->post('meta_key'),
                    'content'    => $this->input->post('content')
                ); 
               
                //them moi vao csdl
                if($this->trangchu_model->update(1, $data))
                {
                    //tạo ra nội dung thông báo
                    $this->session->set_flashdata('message', 'Cập nhật dữ liệu thành công');
                }else{
                    $this->session->set_flashdata('message', 'Không cập nhật được');
                }
                //chuyen tới trang danh sách
                redirect(admin_url('trangchu/edit'));
            }
        }

        $message = $this->session->flashdata('message');
        $this->data['message'] = $message;
        
        //load view
        $this->data['temp'] = 'admin/trangchu/edit';
        $this->load->view('admin/main', $this->data);
    }

}

?>