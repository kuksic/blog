<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Post_model extends CI_Model {

	function find_all()
	{
		$query = $this->db->get('posts');
		if ($query->num_rows() > 0)
		{
			return $query->result(__CLASS__);
		}
		else
		{
			return array();
		}
	}
	
	function find_by_id($id)
	{
		$query = $this->db->from('posts')->where('id', $id)->limit(1)->get();
		if ($query->num_rows() > 0)
		{
			return $query->row(0, __CLASS__);
		}
		else 
		{
			return NULL;	
		}
	}

}
