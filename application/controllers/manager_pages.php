<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controlador para las páginas de administración que no requieren mucho 
 * procesamiento, del lado del servidor.
 *
 * @author Carlos Bello
 */
class Manager_pages extends Basic_controller {
    
    public function __construct() {
        parent::__construct();
        if (!isLogged()) {
            redirect('/login');
            exit;
        }
        $this->location = 'manager/';
        $this->template = 'templates/manager_page';
        $this->menu_template = 'templates/manager_menu';
    }
    
    public function main() {
        $this->current_page();
        // TODO: Remplazar literales por acceso a texto desde recurso internacionalizado
        $this->title = "CasabeSoft Academia - Principal";
        $this->description = "Págia principal de administración."; 
        $this->load_page('main');
    }
    
    protected function redirect_to_caller() {
        $current_url = $this->session->userdata('current_url');
        
        if (isset($current_url) && $current_url != '') {
            //redireccionamos a la url desde donde se hizo el cambio de cliente
            redirect($this->session->userdata('current_url'));
        } else {
            //redireccionamos a la página principal de gestión.
            redirect('/manager/main');
        }
    }


    public function change_to_client($client) {
        $this->load->model('General_model');
        $this->session->set_userdata('client_id', $client);
        $this->change_to_center($this->General_model->get_first_center($client)['id']);
    }
    
    public function change_to_center($center_id) {
        $this->load->model('General_model');
        $this->session->set_userdata('current_center', $this->General_model->get_center($center_id));
        $this->redirect_to_caller();
}
}

/* End of file manager_pages.php */
/* Location: ./application/controllers/manager_pages.php */
