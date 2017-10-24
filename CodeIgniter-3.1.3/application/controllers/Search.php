<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

  var $TPL;

  public function __construct()
  {
    parent::__construct();
    // Your own constructor code
    $this->TPL['contactsBoolean'] = false;
    $this->TPL['searchBoolean'] = true;
    $this->TPL['homeBoolean'] = false;
    $this->TPL['aboutBoolean'] = false;
  }

  public function index()
    {
  	$query = $this->db-> query("SELECT * FROM phonebook ORDER BY id ASC;");
  	$this->TPL['listing'] = $query->result_array();
      $this->template->show('search', $this->TPL);
    }

    public function LiveSearch($txtSearch)
    {
  	  $this->load->database();

  	  $query = $this->db->query("SELECT * FROM phonebook where fname like '%" . $txtSearch . "%' or lname like '%" .$txtSearch . "%' or phone like '%" .$txtSearch . "%' or email like '%" . $txtSearch. "%';");

  	  $this->TPL['listing'] = $query->result_array();


      echo json_encode($this->TPL['listing']);


    }
  }
