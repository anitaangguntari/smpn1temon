<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

        $this->load->model('m_calendar');
    }


  /*Home page Calendar view  */
  Public function index()
  {
    $this->load->view('home');
  }

  /*Get all Events */

  Public function getEvents()
  {
    $result=$this->m_calendar->getEvents();
    echo json_encode($result);
  }
  /*Add new event */
  Public function addEvent()
  {
    $result=$this->m_calendar->addEvent();
    echo $result;
  }
  /*Update Event */
  Public function updateEvent()
  {
    $result=$this->m_calendar->updateEvent();
    echo $result;
  }
  /*Delete Event*/
  Public function deleteEvent()
  {
    $result=$this->m_calendar->deleteEvent();
    echo $result;
  }
  Public function dragUpdateEvent()
  { 

    $result=$this->m_calendar->dragUpdateEvent();
    echo $result;
  }



}