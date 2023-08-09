<?php  

namespace App\Models;
use CodeIgniter\Model;

class Usermodel extends Model
{
	function __construct()
	{
		$this->db=db_connect();

	}
	public function emailmdl($data)
	{
		$builder=$this->db->table('tbl_companies');
		$builder->select('c_email');
		$builder->where('c_email',$data);
		if (count($builder->get()->getResultArray())==1) {
			return true;
		}else{
			return false;
		}
	}
	public function insert_comdata($data,$datas)
	{
		$builder=$this->db->table('tbl_companies');
		$builder->insert($data);
		if ($builder) {
			$datas['u_fk_id']=$this->db->insertID();
			$builder=$this->db->table('tbl_users');
			$builder->insert($datas);
			return $builder ? true : false;
		}else{
			return false;
		}
	}
	
	public function verifiedModel($data)
	{
		
		$user=$this->db->query("SELECT * FROM tbl_users WHERE  tbl_users.u_user_name='".$data['username']."' AND tbl_users.u_password='".$data['password']."' AND tbl_users.u_status=1");
					$user->getResult();
		if (count($user->getResultArray())==1) {
			 $query=$user->getResult();
			if ($query[0]->u_user_type=='company') {
				$fk=$query[0]->u_fk_id;
				$company=$this->db->query("SELECT * FROM tbl_users,tbl_companies WHERE tbl_companies.c_pstatus=0 AND tbl_companies.c_dstatus=0 AND tbl_users.u_fk_id=tbl_companies.c_id AND tbl_users.u_user_type='company' AND tbl_users.u_fk_id=".$fk."");
				return	$company->getResult();
			}elseif($query[0]->u_user_type=='person'){
				$fk=$query[0]->u_fk_id;
				$student=$this->db->query("SELECT * FROM tbl_users,tbl_students WHERE tbl_students.sd_status=1 AND tbl_users.u_fk_id=tbl_students.sd_id AND tbl_users.u_user_type='person' AND tbl_users.u_fk_id=".$fk."");
				return	$student->getResult();
			}else{
				return false;
			}
		}else{
			return false;
		} 
	}
	public function userDataMdl($user)
	{
		$builder=$this->db->table('tbl_companies');
		$builder->select('*');
		$builder->join('tbl_users','tbl_users.u_fk_id=tbl_companies.c_id');
		$builder->where('tbl_users.u_user_name',$user);
		$builder->where('tbl_companies.c_pstatus',0);
		$builder->where('tbl_companies.c_dstatus',0);
		return $builder ? $builder->get()->getResult() : false;
	}
	public function C_profile_insert($data,$user)
	{
		$builder=$this->db->table('tbl_companies');
		$builder->where('tbl_companies.c_email',$user);
		$builder->update($data);
		$query=$builder->get();
		return $query ? true : false;
	}

	public function insert_sd_data($data,$datas)
	{
		$builder=$this->db->table('tbl_students');
		$builder->insert($data);
		if ($builder) {
			$datas['u_fk_id']=$this->db->insertID();
			$builder=$this->db->table('tbl_users');
			$builder->insert($datas);
			return $builder ? true : false;
		}else{
			return false;
		}

	}
	public function emailcheckmdl($data)
	{
		$builder=$this->db->table('tbl_students');
		$builder->select('sd_email');
		$builder->where('sd_email',$data);
		if (count($builder->get()->getResultArray())==1) {
			return true;
		}else{
			return false;
		}
	}
	public function userpersonDataMdl($user)
	{
		$builder=$this->db->table('tbl_users');
		$builder->select('*');
		$builder->join('tbl_students','tbl_users.u_fk_id=tbl_students.sd_id');
		$builder->where('tbl_users.u_user_name',$user);
		$builder->where('tbl_users.u_status',1);
		$builder->where('tbl_students.sd_status',1);
		return $builder ? $builder->get()->getResult() : false;
	}
	public function companyData($data)
	{
		$builder=$this->db->table('tbl_companies');
		$builder->select('*');
		$builder->where('c_id',$data);
		$query=$builder->get();
		return $query ? true : false;
	}
	public function studentData($data)
	{
		$builder=$this->db->table('tbl_students');
		$builder->select('*');
		$builder->where('sd_id',$data);
		$query=$builder->get();
		return $query ? true : false;
	}
		public function insertJobdata($data)
	{
		$builder=$this->db->table('tbl_jobpost');
		$builder->insert($data);
		$query=$builder->get();
		return $query ? true : false;
	}
	public function JobHireMdl($data)
	{
		$builder=$this->db->table('tbl_jobpost');
		$builder->select('*');
		 $builder->where('h_fk_id',$data);
		$query=$builder->get();
		return $query ? $query->getResult() : false;
	}
	public function EditJobForm($value)
	{
			$builder=$this->db->table('tbl_jobpost');
		$builder->select('*');
		$builder->where('h_id',$value);
		$query=$builder->get();
		return $query ? $query->getResult() : false;
	}
	public function updatetJobdata($data)
{
	$builder=$this->db->table('tbl_jobpost');
	$builder->where('h_id',$data['h_id']);
	$builder->update($data);
	$query=$builder->get();
	return $query ? true : false;

}

	public function JobDataDelete($value)
{
	$builder=$this->db->table('tbl_jobpost');
	$builder->where('h_id',$value);
	$builder->set('h_dstatus',1);
		$builder->update();

	$delete=$builder->get();
	return $delete ? true : false;

}
	public function JobDataDeleteRepick($value)
{
	$builder=$this->db->table('tbl_jobpost');
	$builder->where('h_id',$value);
	$builder->set('h_dstatus',0);
		$builder->update();

	$delete=$builder->get();
	return $delete ? true : false;

}
public function UpdatepersonProfiledata($data,$user)
{
		$builder=$this->db->table('tbl_students');
		$builder->where('sd_email',$user);
		$builder->update($data);
		$query=$builder->get();
		return $query ? true : false;
}
public function UpdateRoledata($data,$user)
{
	$builder=$this->db->table('tbl_users');
	$builder->where('u_user_name',$user);
	$builder->set('u_role',$data['u_role']);
	$builder->update();
	$query=$builder->get();
	return $query ? true : false;
}
public function Maildata($value)
{
	$builder=$this->db->table('tbl_jobpost');
	$builder->select('h_id,h_companyname');
	$builder->where('h_companyname',$value);
    $query=$builder->get();
	return $query ? $query->getResult() : false;
}
public function ProffetionalDataMdl()
{
		$builder=$this->db->table('tbl_students');
		$builder->select('*');
	$builder->where('devoleper_student','Professional');
	$builder->where('sd_status',1);

		return $builder->get()->getResult();


}
public function jobDataMdl()
{

		$builder=$this->db->table('tbl_jobpost');
		$builder->select('*');
		$builder->join('tbl_companies','tbl_companies.c_email=tbl_jobpost.h_fk_id');

		$builder->where('h_pstatus',1);
		$builder->where('h_dstatus',0);

		$query=$builder->get();
		return $query ? $query->getResult() : false;
	}


	public function companydataMdl()
	{
		$builder=$this->db->table('tbl_companies');
		$builder->select('*');
		// $builder->where('c_dstatus',0);
		$builder->where('c_pstatus',0);

		$query=$builder->get();
		return $query ? $query->getResult() : false;
	}
	public function proProfile($data)
	{
		$builder=$this->db->table('tbl_students');
		$builder->select('*');
		 $builder->where('sd_email',$data);
		$query=$builder->get();
		return $query ? $query->getResult() : false;
	}
public function GuidanceDataMdl()
{
			$builder=$this->db->table('tbl_guidance');
			$builder->select('*');
			$builder->where('g_status',1);
			$query=$builder->get();
		return $query ? $query->getResult() : false;


}
public function EditpersonProfileMdl($value)
{
	$builder=$this->db->table('tbl_students');
	$builder->select('*');
	$builder->where('sd_id',$value);
	$query=$builder->get();
	return $query ? $query->getResult() : false;

}

}
?>
