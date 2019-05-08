<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_model extends CI_Model
{
	/**
	 *	insert a line in bd
	 */
   public function create($escape_options = array(), $no_escape_options = array())
{
	//	Vérification of the data inserted
	if(empty($escape_options) AND empty($no_escape_options))
	{
		return false;
	}

	return (bool) $this->db->set($escape_options)
                               ->set($no_escape_options, null, false)
                               ->insert($this->table);
}

	/**
	 *	extract data in bd
	 */
   public function read($select = '*', $where = array(), $nb = null, $start = null)
{
	return $this->db->select($select)
                        ->from($this->table)
                        ->where($where)
                        ->limit($nb, $start)
                        ->get()
                        ->result();
}

	/**
	 *	Modify lines in bd
	 */
   public function update($where, $escape_options = array(), $no_escape_options = array())
{
	//	Vérification data to update
	if(empty($escape_options) AND empty($no_escape_options))
	{
		return false;
	}

	//	shortcut if id is selected
	if(is_integer($where))
	{
		$where = array('id' => $where);
	}

	return (bool) $this->db->set($escape_options)
                               ->set($no_escape_options, null, false)
                               ->where($where)
                               ->update($this->table);

}
	/**
	 *	delete lines in bd
	 */
   public function delete($where)
{
	if(is_integer($where))
	{
		$where = array('id' => $where);
	}

	return (bool) $this->db->where($where)
                               ->delete($this->table);
}

/**
 *	count lines in bd
 */
 public function count($field = array(), $value = null)
 // Si $field est une array,  $value sera ignorée par la méthode where()
{
	return (int) $this->db->where($field, $value)
                              ->from($this->table)
                              ->count_all_results();
}

}

/* End of file MY_Model.php */
/* Location: ./system/application/core/MY_Model.php */
?>
