<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class Welcome
 */
class Welcome extends CI_Controller {

	/**
	 * Index Page for Welcome controller.
	 *
     * @example http://example.com/index.php/welcome
	 *
     * @access  public
	 */
	public function index()
	{
	    $head['title'] = "Title";
        $head['description'] = "Description";
        
	    $this->load->view('templates/head', $head);
        $this->load->view('templates/header');
        $this->load->view('welcome_view');
		$this->load->view('templates/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */