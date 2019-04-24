<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {
    
    public function __construct() {
        parent::__construct(); //note: this creates database connection
    }
	
	public function get_all_records() {
        $sql = "SELECT teams.teamID, teams.teamName, teams.city, teams.state, logos.logoURL 
                FROM teams 
                INNER JOIN logos 
                ON teams.teamID=logos.teamID
                WHERE logos.current IS TRUE
                ORDER BY teams.city";
        $query = $this->db->query($sql);
        $result = $query->result_array();

        return $result;
    }

    public function orderByCity() {
        $sql = "SELECT teams.teamID, teams.teamName, teams.city, teams.state, logos.logoURL 
                FROM teams 
                INNER JOIN logos 
                ON teams.teamID=logos.teamID
                WHERE logos.current IS TRUE
                ORDER BY teams.city";
        $query = $this->db->query($sql);
        $result = $query->result_array();

        return $result;
    }

    public function orderByState() {
        $sql = "SELECT teams.teamID, teams.teamName, teams.city, teams.state, logos.logoURL 
                FROM teams 
                INNER JOIN logos 
                ON teams.teamID=logos.teamID
                WHERE logos.current IS TRUE
                ORDER BY teams.state";
        $query = $this->db->query($sql);
        $result = $query->result_array();

        return $result;
    }

    public function orderByTeamName() {
        $sql = "SELECT teams.teamID, teams.teamName, teams.city, teams.state, logos.logoURL 
                FROM teams 
                INNER JOIN logos 
                ON teams.teamID=logos.teamID
                WHERE logos.current IS TRUE
                ORDER BY teams.teamName";
        $query = $this->db->query($sql);
        $result = $query->result_array();

        return $result;
    }
 }// end home model