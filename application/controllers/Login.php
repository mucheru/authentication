<?php

class Login extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model(array('user_model'));
        $this->load->helper('services_helper');
        $this->load->helper('security_helper');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');

    }


    public function index(){
       // $this->load->helper('form');
        $this->load->view('login_view');        
    }
    public function login_auth(){
        if (isset($_POST['login'])){
            $this->form_validation->set_rules('uname','username','required');
            $this->form_validation->set_rules('psw','password','required');

        }
        if($this->form_validation->run()!=False){
        $this->load->helper('services_helper');

        $user_data=array();
        $user_data['name'] = $this->input->post('uname');
        $user_data['password']=$this->input->post('psw'); 
        $username= $this->input->post('uname');
        $password=do_hash($this->input->post('psw'));
        $results=$this->user_model->loginvalidation($username,$password);
        if($results == 0){
           // $user_credential=array();
           
          $show_error=array();
          //redirect(base_url().'index.php/login');
          echo ($show_errror['error']="invalid passord");

    

            //echo $password;
        }else{
            $show_success=array();
            echo ($show_success['success']='log in successful'); 
           // echo $user_credential['code']='suv-gt'.str_pad($results, 3, '0', STR_PAD_LEFT);
           $this->load->view('getloginreport');
           $data['educationcontent']=$this->user_model->getquestiondetails();
           $this->load->view('getquestiondetails',$data);


        }

        /*function randomPassword()
        {
            $al     phabet = "0123456789";
            $pass = array();
            $alphaLength = strlen($alphabet) - 1;
            for ($i = 0; $i < 8; $i++)
            {
                $n = rand(0, $alphaLength);
                $pass[] = $alphabet[$n];
            }
            return implode($pass);
        }
    */
    

        }  
    }
    public function question(){
        $config = array(
            array(
                    'field' => 'question',
                    'label' => 'question',
                    'rules' => 'required'
            ),
            array(
                    'field' => 'AnswerA',
                    'label' => 'AnswerA',
                    'rules' => 'required',
                    
            ),
            array(
                    'field' => 'AnswerB',
                    'label' => 'AnswerB',
                    'rules' => 'required'
            ),
            array(
                    'field' => 'Answerc',
                    'label' => 'Answerc',
                    'rules' => 'required'
            )
    );

    
    
    $this->form_validation->set_rules($config);
    if($this->form_validation->run()!=False)
    {
        $question_content=array();
        $question_content['question']=$this->input->post('question');
        $question_content['AnswerA']=$this->input->post('AnswerA');
        $question_content['AnswerB']=$this->input->post('AnswerB');
        $question_content['Answerc']=$this->input->post('Answerc');
        $question_content['AnswerD']=$this->input->post('AnswerD');
        $question_content['Correct_Answer']=$this->input->post('Correct_Answer');
        $this->user_model->inserteducation_content($question_content);
        
        

    }else{
        $this->load->view('getloginreport');
        echo validation_errors();

    }
    $data['educationcontent']=$this->user_model->getquestiondetails();
    $this->load->view('getquestiondetails',$data);

    }



}

?>