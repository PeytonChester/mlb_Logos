<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct() {
    parent::__construct();
    $this->load->model('Home_model');
}

    public function index(){
        $data = Array();
        $data["teams"] = $this->Home_model->get_all_records();
        $this->load->view('home', $data);
    }

    public function teamDetails($teamID){
        $data = Array();
        $this->load->model('TeamDetails_model'); # <- add this
        $data["teams"] = $this->TeamDetails_model->get_all_records($teamID);
        $data["primaryLogos"] = $this->TeamDetails_model->get_primary_logos($teamID);
        $data["alternateLogos"] = $this->TeamDetails_model->get_alternate_logos($teamID);
        $data["currentFacility"] = $this->TeamDetails_model->get_current_facility($teamID);
        $data["pastFacility"] = $this->TeamDetails_model->get_past_facility($teamID);
        $data["players"] = $this->TeamDetails_model->get_players($teamID);
        $data["coaches"] = $this->TeamDetails_model->get_coaches($teamID);
        $data["owners"] = $this->TeamDetails_model->get_owners($teamID);
        $this->load->view('teamDetails', $data);

//        echo "<script type='text/javascript'>";
//        echo "alert('$teamID');";
//        echo "</script>";
    }

    public function orderByCity() {
        $teams = $this->Home_model->orderByCity();
        echo json_encode($teams);
    }

    public function orderByState() {
        $teams = $this->Home_model->orderByState();
        echo json_encode($teams);
    }

    public function orderByTeamName() {
        $teams = $this->Home_model->orderByTeamName();
        echo json_encode($teams);
    }

} //end home controller


?>
