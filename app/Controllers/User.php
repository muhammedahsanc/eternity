<?php
namespace App\Controllers;
use App\Models\Usermodel;

class User extends BaseController
{
    function __construct()
    {
        $this->myModel = new  Usermodel(); 
    }
    public function koo()
    {
        return view('person_dashboard');

    }
    public function hr()
    {
        return view('company_jobs');


    }
    public function job()
    {
        return view('job_section');
    }
    public function search()
    {
        return view('company_search');
    }
    
    public function loginPage()
    {
        return  view('Login');
    }
    public function person_signup()
    {
        return view('person_signup');
    }
    public function company_signup()
    {
        return view('company_signup');

    }

    public function cards()
    {
        return view('Person_company_card');
    }
    public function person_profile()
    {
        return view('person_profile');

    }
    public function CompanyHome()
    {
        echo view('navbar');
    }

    public function insert_com_signup()
    {
        $data['c_name']=$this->request->getPost('com_name');
        $data['c_address']=$this->request->getPost('com_address');
        $data['c_email']=$this->request->getPost('com_mail');
        $data['c_website']=$this->request->getPost('com_website');
        $data['c_reg_no']=$this->request->getPost('com_registernumber');
        $datas['u_user_name']=$data['c_email'];
        $datas['u_password']=$this->request->getPost('com_password');
        $datas['u_user_type']="company";
        $datas['u_role']="company";
        $check=$this->myModel->emailmdl($data['c_email']);
        if (!$check) {
            $insert=$this->myModel->insert_comdata($data,$datas);
            if($insert){
                echo "<script>alert('inserted Successfully');</script>;";
                $this->login_page();
            }else{
                echo "<script>alert('try again');window.history.back();</script>;";


            }
        }else{
            echo "<script>alert('already exist');window.history.back();</script>;";
        }
    }


    public function Login()
    {
        $session=session();
        if(!isset($_SESSION['user'])){
            $data['username']=$this->request->getPost('username');
            $data['password']=$this->request->getPost('password');
            $verification=$this->myModel->verifiedModel($data);
            if (!empty($verification)) {
             $session->set('user',$data['username']);
             if ($verification[0]->u_user_type=="company") {
                if (!empty($verification[0]->c_phone)) {
                 $this->Dashboard();
             }else{
                 $this->CompanyProfile();
             }
         }elseif ($verification[0]->u_user_type=="person") {
             if (!empty($verification[0]->u_role)) {
                 // echo "<script>alert('has profile');</script>";
               if($verification[0]->u_role==
                "student")
               {

                 $this->Person_Dashboard();
             }elseif ($verification[0]->u_role=="Professional")
             {

                 $this->proffetional_Dashboard();
             } else{
                $this->personProfile();
            }

        }else{
            $this->personProfile();
            // echo "<script>alert('no profile');</script>";
        }
    }
    else{
        echo "<script>alert('sww');window.history.back();</script>";
    }
}else{
    echo "<script>alert('Invalid Username or Password');</script>";
    $this->CompanyProfile();
}
}else{
   $this->rederection();
}
}




public function login_page()
{
   $session=session();
   if (!isset($_SESSION['user'])) {
    echo view('Login');
}else{
 $this->CompanyProfile();


}

}
public function Insert_com_Profile()
{
    $session=session();
    if (isset($_SESSION['user'])) {
        $data['c_phone']=$this->request->getPost('company_phone');
        $data['c_place']=$this->request->getPost('company_place');
        $data['c_branches']=$this->request->getPost('no_of_branches');
        $data['c_building_no']=$this->request->getPost('Building_no');
        $data['c_about']=$this->request->getPost('about_company');

        $file=$this->request->getFile('photo');
        $name=$file->getRandomName();
        $data['c_photo']=$name;
        $validated=$this->validate(['any_name'=>['uploaded[photo]',
            'mime_in[photo,image/jpg,image/png,image/gif,image/jpeg]',
            'max_size[photo,4096]',
        ],
    ]); 
        if ($validated) {
            $upload=$file->move('./companyImages/',$name);
            if ($upload) {
                $insert=$this->myModel->C_profile_insert($data,$_SESSION['user']);

                if($insert){
                 $session->set('profile',$data['c_phone']);
                 echo "<script>alert('Profile Created');</script>;";
                 $this->Dashboard();
             }else{
                echo "<script>alert('try again');window.history.back();</script>;";
                $this->login_page();   
            }
        }else{
           echo "<script>alert('try again');window.history.back();</script>;";
       }
   }else{
    echo "<script>alert('Select photo below 4 MP');window.history.back();</script>;";
}
}else{


    echo "<script>alert('trrry again');window.history.back();</script>;";
}
}





public function insert_person_profile()
{
 $session=session();
 if (isset($_SESSION['user'])) {
    $data['sd_name']=$this->request->getPost('p_name');
    $data['sd_email']=$this->request->getPost('p_mail');
    $data['sd_gender']=$this->request->getPost('p_gender');
    $data['sd_dob']=$this->request->getPost('p_dob');
    $data['sd_phone']=$this->request->getPost('p_phone');
    $data['s_school_college']=$this->request->getPost('school_college');
    $data['s_school']=$this->request->getPost('School_name');
    $data['s_place']=$this->request->getPost('School_place');
    $data['s_college']=$this->request->getPost('college_name');
    $data['s_university']=$this->request->getPost('university');
    $data['s_course']=$this->request->getPost('course');
    $data['s_about']=$this->request->getPost('p_about');
    $data['d_company']=$this->request->getPost('p_company_name');
    $data['d_address']=$this->request->getPost('p_Address');
    $data['d_experience']=$this->request->getPost('p_experience');
    $data['d_skills_know']=$this->request->getPost('p_skills');
    $data['devoleper_student']=$this->request->getPost('p_your');  
    $role['u_role']=$this->request->getPost('p_your');

    $file=$this->request->getFile('p_photo');
    $name=$file->getRandomName();
    $data['s_photo']=$name;
    $validated=$this->validate(['any_name'=>['uploaded[p_photo]',
        'mime_in[p_photo,image/jpg,image/png,image/gif,image/jpeg]',
        'max_size[p_photo,4096]',
    ],
]); 
    if ($validated) {
        $upload=$file->move('./personImages/',$name);
        if ($upload) {
            $uprole=$this->myModel->UpdateRoledata($role,$_SESSION['user']);
            $insert=$this->myModel->UpdatepersonProfiledata($data,$_SESSION['user']);



            if($insert){
             $session->set('role',$role['u_role']);
             $session->set('phone',$data['sd_phone']);
             echo "<script>alert('Profile Created');</script>;";
             if($role['u_role']=='student')
             {
        // echo "<script>alert('student'); </script>";
                 $this->Person_Dashboard();
             }elseif ($role['u_role']=='Professional') {
                 $this->proffetional_Dashboard();

             } else{
                $this->personProfile();
            }
        }else{
            echo "<script>alert('try again');window.history.back();</script>;";
        }
// $this->login_page();   

    }else{
        echo "<script>alert('try again');window.history.back();</script>;";
    }
}else{
    echo "<script>alert('Select photo below 4 MP');</script>;";
    $this->personProfile();

}
}else{
    echo "<script>alert('trrry again');window.history.back();</script>;";
}

}

public function Dashboard()
{ 

  if (isset($_SESSION['user']) && isset($_SESSION['profile']) && isset($_SESSION['role']) && $_SESSION['role']=='company') {

    echo view('navbar');
}else{

  $this->login_page();                                                      
}
}
public function insert_person_signup()
{
    $data['sd_name']=$this->request->getPost('sdd_name');
    $data['sd_email']=$this->request->getPost('sdd_email');
    $datas['u_user_name']=$data['sd_email'];
    $datas['u_user_type']='person';
    $datas['u_password']=$this->request->getPost('sdd_password');
    $check=$this->myModel->emailcheckmdl($data['sd_email']);
    if (!$check) {
        $insert=$this->myModel->insert_sd_data($data,$datas);
        if($insert){
          echo "<script>alert('inserted Successfully');</script>;";
          $this->login_page();
      }else{
        echo "<script>alert('try again');window.history.back();</script>;";
    }
}else{
    echo "<script>alert('already exist');window.history.back();</script>;";
}

}
public function Login_Person()

{
    $session=session();
    if(!isset($_SESSION['user'])){
        $data['username']=$this->request->getPost('username');
        $data['password']=$this->request->getPost('password');
        $session->set('user',$data['username']);
        $verification=$this->myModel->verifiedModel($data);
        if ($verification) {
           if ($verification[0]->u_user_type=="company") {
            if ($verification[0]->c_phone) {
                echo "<script>alert('dashboard');</script>";

            } else{
              echo view("person_profile");

          }
      }else{
        echo "<script>alert('not company');window.history.back();</script>";
    }
}else{
    echo "<script>alert('Invalid Username or Password');window.history.back();</script>";
}

}else{
 $this->login_page(); 
}
}
public function personProfile()
{
    $session = session();
    if (isset($_SESSION['user'])) {
        $data['userdetails']=$this->myModel->userpersonDataMdl($_SESSION['user']);
        if ($data['userdetails'][0]->u_role){
         $session->remove('profile');
         $session->remove('role');

         $session->set('phone',$data['userdetails'][0]->sd_phone);
         $session->set('role',$data['userdetails'][0]->u_role);


         if($data['userdetails'][0]->u_role=="student"){
             $this->Person_Dashboard();
         }elseif ($data['userdetails'][0]->u_role=="Professional") {
             $this->proffetional_Dashboard();
         }else{
            $this->personProfile();
        }
    }else{
        echo view('person_profile',$data);
    }
}else{
    $this->login_page();
}
}

public function CompanyProfile()
{
    $session = session();
    if (isset($_SESSION['user'])) {
        $data=$this->myModel->userDataMdl($_SESSION['user']);
        $com['userdetails']=$data;
        if ($data[0]->c_phone) { 
         $session->remove('profile');
         $session->remove('role');
         $session->set('profile',$data[0]->c_phone);
         $session->set('role',$data[0]->u_role);
         $this->Dashboard();
     }else{
        echo view('company_profile',$com);
    }
}else{
    $this->login_page();
}
}
public function stdHome()
{
   echo  view('studentDashboard');
}
public function Person_Dashboard()
{
  if (isset($_SESSION['user']) && isset($_SESSION['role']) && isset($_SESSION['phone']))  {
    echo view('studentDashboard');
}else{
  $this->personProfile();
}
}
public function proffetional_Dashboard()
{
  if (isset($_SESSION['user']) && isset($_SESSION['role']) && isset($_SESSION['phone'])) {
    echo view('proffetionalDashboard');
}else{
  $this->personProfile();
}
}
public function proffetional_home()
{
    echo view('proffetionalDashboard');
}
public function rederection()
{
    $session = session();
    if (isset($_SESSION['user'])) {
       $data=$this->myModel->userpersonDataMdl($_SESSION['user']);
       if ($data[0]->u_user_type=="company") {
        $com=$this->myModel->companyData($data[0]->u_fk_id);
        if(!empty($com[0]->c_phone)) {
         $this->Dashboard();
     }else{
         $this->CompanyProfile();
     }
 }elseif($data[0]->u_user_type=="person"){
    $std=$this->myModel->studentData($data[0]->u_fk_id);
    if (!empty($std[0]->sd_phone)){
     $this->Dashboard();
 }else{                       
     $this->personProfile();
 }
}else{
  echo "<script>alert('SWW');window.history.back();</script>;";

}
}else{
 echo "<script>alert('Invalid');window.history.back();</script>;";

}
}
public function jobtable()
{
    $session=session();
    $data['data']=$this->myModel->JobHireMdl($_SESSION['user']);
    return view('jobpost_table',$data);
}

public function insertJobpost()
{
    $session=session();
    $data['h_fk_id']=$_SESSION['user'];
    $data['h_companyname']=$this->request->getPost('job_com_name');
    $data['h_jobdetails']=$this->request->getPost('job_details');
    $data['h_position']=$this->request->getPost('job_position'); 
    $data['h_salary']=$this->request->getPost('job_salary');
    $data['h_skills']=$this->request->getPost('job_skills');
    $data['h_experience']=$this->request->getPost('job_experience');

    $file=$this->request->getFile('job_photo');
    $name=$file->getRandomName();
    $data['h_photo']=$name;
    $validated=$this->validate(['any_name'=>['uploaded[job_photo]',
        'mime_in[job_photo,image/jpg,image/png,image/gif,image/jpeg]',
        'max_size[job_photo,4096]',
    ],
]); 
    if ($validated) {
        $upload=$file->move('./hireImages/',$name);
        if ($upload) {
            $insert=$this->myModel->insertJobdata($data);
            if($insert){
                echo "<script>alert('inserted Successfully');window.history.back();</script>;";
            }else{
                echo "<script>alert('try again');window.history.back();</script>;";
            }
        }else{
            echo "<script>alert('try again');window.history.back();</script>;";
        }
    }else{
        echo "<script>alert('trrry again');window.history.back();</script>;";
    }
}
public function EditJobPost($id)
{
    $data['data']=$this->myModel->EditJobForm($id);
    echo view('editJobPost',$data);
}
public function UpdateJobpost()
{
  $data['h_id']=$this->request->getPost('id');
  $data['h_companyname']=$this->request->getPost('job_com_name');
  $data['h_jobdetails']=$this->request->getPost('job_details');
  $data['h_position']=$this->request->getPost('job_position'); 
  $data['h_salary']=$this->request->getPost('job_salary');
  $data['h_skills']=$this->request->getPost('job_skills');
  $data['h_experience']=$this->request->getPost('job_experience');

  $num=$this->myModel->Maildata($data['h_companyname']);
  if(!$num){
    if ($_FILES['job_photo']['name']) {
      $file=$this->request->getFile('job_photo');
      $name=$file->getRandomName();
      $data['h_photo']=$name;
      $validated=$this->validate(['any_name'=>['uploaded[job_photo]',
        'mime_in[job_photo,image/jpg,image/png,image/gif,image/jpeg]',
        'max_size[job_photo,4096]',
    ],
]); 
      if($validated) {
        $upload=$file->move('./hireImages/',$name);
        if ($upload) {
            $update=$this->myModel->updatetJobdata($data);
            if($update){
                echo "<script>alert('Updated Successfully');window.history.back();</script>;";
            }else{
                echo "<script>alert('try again');window.history.back();</script>;";
            }
        }else{
            echo "<script>alert('trry again');window.history.back();</script>;";
        }
    }else{


        echo "<script>alert('trrry again');window.history.back();</script>;";
    }
}else{
  $update=$this->myModel->updatetJobdata($data);
  if($update){
    echo "<script>alert('Updated successfully');window.history.back();</script>;";

}else{
    echo "<script>alert('try again');window.history.back();</script>;";
}

}
}elseif($num && $num[0]->h_id==$data['h_id']) {
    if ($_FILES['job_photo']['name']) {
        $file=$this->request->getFile('job_photo');
        $name=$file->getRandomName();
        $data['h_photo']=$name;
        $validated=$this->validate([
            'any_name'=>[
                'uploaded[job_photo]',
                'mime_in[job_photo,image/jpg,image/png,image/gif,image/jpeg]',
                'max_size[job_photo,4096]',
            ],
        ]); 
        if ($validated) {
            $upload=$file->move('./hireImages/',$name);
            if ($upload) {

                $update=$this->myModel->updatetJobdata($data);
                if($update){
                    echo "<script>alert('Updated successfully');window.history.back();</script>;";

                }else{
                    echo "<script>alert('try again');window.history.back();</script>;";
                }
            }else{
                echo "<script>alert('try again');window.history.back();</script>;";
            }
        }
        else{
            echo "<script>alert('try again');window.history.back();</script>;";
        }
    }else{
      $update=$this->myModel->updatetJobdata($data);
      if($update){
        echo "<script>alert('Updated successfully');window.history.back();</script>;";

    }else{
        echo "<script>alert('try again');window.history.back();</script>;";
    }

}

}else{

    echo "<script>alert('Mobile number already exist');window.history.back();</script>;";

}
}
public function  EditpersonProfile($id)
{
    $data['data']=$this->myModel->EditpersonProfileMdl($id);
    echo view('editPersonProfile',$data);

}
public function deleteJobData($id)
{
    $query=$this->myModel->JobDataDelete($id);
    if($query){
        echo "<script>alert('Not Visible');window.history.back();</script>;";
    }else{
        echo "<script>alert('Try again');window.history.back();</script>;";
    }
}
public function retakedltJobData($id)

{
    $query=$this->myModel->JobDataDeleteRepick($id);
    if($query){
        echo "<script>alert(' Visible');window.history.back();</script>;";
    }else{
        echo "<script>alert('Try again');window.history.back();</script>;";
    }
}

public function ProffetionalData()
{
    $query=$this->myModel->ProffetionalDataMdl();
    $i=1;
    foreach ($query as  $value) {
      echo '<tr>
      <td> '.$i++ .'</td>;
      <td>'.$value->sd_name.'</td>;
      <td>'.$value->sd_email.'</td>;
      <td>'.$value->sd_phone.'</td>;
      <td>'.$value->d_skills_know.'</td>;
      <td> <img width="150px" src="'.base_url().'./personImages/'.$value->s_photo.'"></td>
      <td><span><button class="btn btn-success">Contact</button></span> </td> 
      <tr>';
  }

}
public function ProffetionalTable()
{
    echo view('ViewProffetionals');
}

public function Logout()
{
    $session = session();    
    $session->remove('user');
    $session->remove('phone');
    $session->remove('role');

    $this->login_page();
}
public function jobData()
{
    $query=$this->myModel->jobDataMdl();
    $i=1;
    foreach ($query as $value){
        echo '<tr>
        <td> '.$i++ .'</td>;
        <td> '.$value->h_companyname .'</td>;
        <td>'.$value->h_jobdetails.'</td>;
        <td>'.$value->h_position.'</td>;
        <td>'.$value->h_salary.'</td>;
        <td><img height="100px" width="150px" src="'.base_url().'./hireImages/'.$value->h_photo.'" ></td>;


        </tr>';

    }
}
public function jobView()
{
    echo view('jobs');
}

public function companies()
{                                                                               
 $query=$this->myModel->companydataMdl();
 $i=1;
 foreach ($query as  $value) {
  echo '<tr>

  <td> '.$i++.'</td>;
  <td>'.$value->c_name.'</td>;
  <td>'.$value->c_email.'</td>;
  <td>'.$value->c_phone.'</td>;
  <td><img height="100px" width="150px" src="'.base_url().'./companyImages/'.$value->c_photo.'" ></td>;





  <td><span><button class="btn btn-success">Contact</button></span> </td> 

  <tr>';
}
}
public function Viewcompanies()
{
    echo view('Companies');
}
public function ProffetionalProfile()
{
    $session=session();

    $data['data']=$this->myModel->proProfile($_SESSION['user']);
    $data['job']=$this->myModel->jobDataMdl();
    return view('job_section',$data);
}
public function StudJobView()
{
    $session=session();

    $data['data']=$this->myModel->proProfile($_SESSION['user']);
    $data['job']=$this->myModel->jobDataMdl();
    return view('studentViewJob',$data);
}
public function Proffetion()
{
    $session=session();

    $data['data']=$this->myModel->ProffetionalDataMdl($_SESSION['user']);
    return view('Proffetionals',$data);

}
public function CompaniesViews()
{
    $data['data']=$this->myModel->companydataMdl();
    return view('viewCompanies',$data);

}
public function StudViewGuidance()
{
    $session=session();
    $data['data']=$this->myModel->proProfile($_SESSION['user']);
    $data['Guidance']=$this->myModel->GuidanceDataMdl();
    return view('Guidance',$data);
}
public function pro_jobsection()
{
   $session=session();

   $data['data']=$this->myModel->proProfile($_SESSION['user']);
   $data['job']=$this->myModel->jobDataMdl();
   return view('studentViewJob',$data);
}
public function std_viewProffetionals()
{
    $session=session();
    $data['data']=$this->myModel->ProffetionalDataMdl($_SESSION['user']);
    return view('std-view-proffetionals',$data);
}


public function pro_view_pro()
{
    $session=session();

    $data['data']=$this->myModel->ProffetionalDataMdl();
    return view('proff-view-proff',$data);
}
public function proviewscompanies()
{
    $data['data']=$this->myModel->companydataMdl();
    return view('pro-view-com',$data);

}


}

?> 
