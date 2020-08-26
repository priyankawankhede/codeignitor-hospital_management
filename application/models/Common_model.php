<?php  
 class Common_model extends CI_Model  
 { 

    public function insert($table_name,$data)
	{
		if($this->db->insert($table_name,$data))
		{
			$insert_id = $this->db->insert_id();

  			 return  $insert_id;
		}
		else
		{
			return false;
		}

    }
	
	public function update($table_name,$data,$where_column,$where_id)
	{
		
			$this->db->where($where_column, $where_id);
			
			if($this->db->update($table_name,$data))
			{
				return true;

			}
			else
			{
				return false;
			}
		
	}

	public function delete($table_name,$where_column,$where_id)
	{
		
			$this->db->where($where_column, $where_id);
			
			if($this->db->delete($table_name))
			{
				return true;

			}
			else
			{
				return false;
			}
		
	}

	public function get_data_by_id($table_name,$id,$column_name)
	{
		if( $query = $this->db->get_where($table_name, array($column_name => $id))->result_array())
		{
			return $query;
		}
		else
		{
			return false;
		}

	}
	
	
 }
?>