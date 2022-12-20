<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengujian extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!is_logged()) {
			redirect(base_url('dashboard'));
			return;
		}
	}

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pengujian');
        $this->load->view('templates/footer');
    }
    public function rule(){
        
        $d = $_POST;
        if($d['motivation_willingness'] == 'tinggi'){

            if($d['empowerment_abilities'] == 'rendah'){
                
                if($d['norm_fulfillment'] == 'tinggi'){

                    if($d['motivation_strength']== 'rendah') {
                        $this->session->set_flashdata('message', 'Positif Kanker Serviks');
                    }else if($d['motivation_strength']== 'sedang'){

                        if($d['socialSupport_appreciation']== 'rendah'){

                            if($d['attitude_consistency']== 'rendah'){
                                $this->session->set_flashdata('message', 'Negatif Kanker Serviks');
                            } else if($d['attitude_consistency']== 'sedang'){
                                $this->session->set_flashdata('message', 'Negatif Kanker Serviks');
                            }
                        }else if($d['socialSupport_appreciation']== 'sedang'){
                            if($d['attitude_consistency']== 'rendah'){
                                $this->session->set_flashdata('message', 'Negatif Kanker Serviks');
                            } else if($d['attitude_consistency']== 'sedang'){
                                $this->session->set_flashdata('message', 'Negatif Kanker Serviks');
                            }
                        }
                    }else if($d['motivation_strength']== 'tinggi'){
                        if($d['behavior_sexualRisk']== 'rendah'){
                            $this->session->set_flashdata('message', 'Positif Kanker Serviks');
                        }else if($d['behavior_sexualRisk']== 'sedang'){
                            if($d['attitude_spontaneity']== 'rendah'){
                                $this->session->set_flashdata('message', 'Negatif Kanker Serviks');
                            }else if($d['attitude_spontaneity']== 'sedang'){
                                $this->session->set_flashdata('message', 'Negatif Kanker Serviks');
                            }
                        }
                    }

            }
        }else if($d['empowerment_abilities'] == 'sedang'){
            if($d['perception_vulnerability']== 'tinggi'){
                $this->session->set_flashdata('message', 'Negatif Kanker Serviks');
            }
            
        }else if($d['empowerment_abilities'] == 'tinggi'){

            if($d['intention_aggregation'] == 'rendah'){

                if($d['behavior_eating'] == 'rendah'){
                    $this->session->set_flashdata('message', 'Negatif Kanker Serviks');

                }else if($d['behavior_eating'] == 'sedang'){
                    $this->session->set_flashdata('message', 'Negatif Kanker Serviks');
                }
            }
        }
    }else if($d['motivation_willingness'] == 'sedang'){

    }else if($d['motivation_willingness'] == 'rendah'){

    }
    redirect(base_url('pengujian'));
}

}

/* End of file Controllername.php */
