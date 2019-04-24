<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TeamDetails_model extends CI_Model {

    public function __construct() {
        parent::__construct(); //note: this creates database connection
    }

    public function get_all_records($teamID) {
        $sql = "SELECT teams.teamID, teams.teamName, teams.city, teams.state, teams.league, teams.division, teams.leagueLogoURL 
                FROM teams
                WHERE teams.teamID
                LIKE $teamID";
        $query = $this->db->query($sql);
        $result = $query->result_array();

        return $result;
    }

    public function get_primary_logos($teamID) {
        $sql = "SELECT teams.teamID, logos.logoID, logos.current, logos.datesUsed, logos.logoURL 
                FROM teams 
                INNER JOIN logos
                ON teams.teamID=logos.teamID
                WHERE logos.teamID = $teamID
                AND logos.logoType = 'primary'";
        $query = $this->db->query($sql);
        $result = $query->result_array();

        return $result;
    }

    public function get_alternate_logos($teamID) {
        $sql = "SELECT teams.teamID, logos.logoID, logos.current, logos.datesUsed, logos.logoURL 
                FROM teams 
                INNER JOIN logos
                ON teams.teamID=logos.teamID
                WHERE logos.teamID = $teamID
                AND logos.logoType = 'alternate'";
        $query = $this->db->query($sql);
        $result = $query->result_array();

        return $result;
    }

    public function get_current_facility($teamID) {
        $sql = "SELECT teams.teamID, facilities.facilityName, facilities.facilityURL, facilities.currentFacility, facilities.facilityNumber 
                FROM teams 
                INNER JOIN facilities
                ON teams.teamID=facilities.teamID
                WHERE facilities.teamID = $teamID
                AND facilities.currentFacility = 1";
        $query = $this->db->query($sql);
        $result = $query->result_array();

        return $result;
    }

    public function get_past_facility($teamID) {
        $sql = "SELECT teams.teamID, facilities.facilityName, facilities.facilityURL, facilities.currentFacility, facilities.facilityNumber 
                FROM teams 
                INNER JOIN facilities
                ON teams.teamID=facilities.teamID
                WHERE facilities.teamID = $teamID
                AND facilities.currentFacility = 0";
        $query = $this->db->query($sql);
        $result = $query->result_array();

        return $result;
    }

    public function get_players($teamID) {
        $sql = "SELECT teams.teamID, players.playerName, players.yearsPlayed, players.playedFor, players.historicEvents, players.portraitURL 
                FROM teams 
                INNER JOIN players 
                ON teams.teamID = players.teamID
                WHERE players.teamID
                LIKE $teamID";
        $query = $this->db->query($sql);
        $result = $query->result_array();

        return $result;
    }

    public function get_coaches($teamID) {
        $sql = "SELECT teams.teamID, coaches.coachName, coaches.yearsCoached, coaches.historicEvents, coaches.portraitURL 
                FROM teams 
                INNER JOIN coaches 
                ON teams.teamID = coaches.teamID
                WHERE coaches.teamID
                LIKE $teamID";
        $query = $this->db->query($sql);
        $result = $query->result_array();

        return $result;
    }

    public function get_owners($teamID) {
        $sql = "SELECT teams.teamID, owners.ownerName, owners.yearsInvolved, owners.historicEvents, owners.portraitURL 
                FROM teams 
                INNER JOIN owners 
                ON teams.teamID = owners.teamID
                WHERE owners.teamID
                LIKE $teamID";
        $query = $this->db->query($sql);
        $result = $query->result_array();

        return $result;
    }

}