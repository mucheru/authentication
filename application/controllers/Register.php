<?php 

class Register extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('security_helper');
        $this->load->model('register_model');
    }

    public function index()
    {
        $this->load->view('register_view');
    }

    public function register_user() {
        $this->form_validation->set_rules('first_name','first_name','required');
        $this->form_validation->set_rules('last_name','last_name','required');
        $this->form_validation->set_rules('email','email','required');
        $this->form_validation->set_rules('password','password','required');
        $this->form_validation->set_rules('confirm_password','confirm_password','required|matches[password]');
        if($this->form_validation->run()!=False){
            echo ('good');
           $user_data=array();
           $user_data['first_name'] = $this->input->post('first_name');
           $user_data['last_name'] =$this->input->post('last_name');
           $user_data['username'] =$this->input->post('email');
           $user_data['account'] =$this->input->post('password');
           $user_data['password']=do_hash($user_data['account']);
           $this->register_model->register_user($user_data);
           $this->redirect('index.php/login');

        }
        else{
            $this->load->view('register_view');

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





        }

        }
       
    

}

?>