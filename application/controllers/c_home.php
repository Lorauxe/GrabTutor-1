<?PHP
class c_home extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index(){

		if($this->session->has_userdata('UNAME') && $this->session->has_userdata('PWORD'))
			redirect('login','refresh');
		else
			redirect('c_home/start','refresh');
	}



	public function start(){
		$this->load->view('home');

	}


}

?>