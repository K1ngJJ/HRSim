<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AdminModels\UserModel;

class User extends Controller
{
    /**
	 * Instance of the main Request object.
	 *
	 * @var HTTP\IncomingRequest
	 */
	protected $request;
    
    public function add($role)
    {   
        if(isset($_SESSION['logged_in'])){
            if($role == 'user'){
                echo view('admin/customer/add');
            } else if($role == 'admin'){
                echo view('admin/admin/add');
            } 
        } else{
            echo '<script>
                    alert("Harap login dahulu.");
                    window.location="'.base_url('/admin/login').'"
                </script>';
        }
    }

    public function addProcess($role)
    {
        $model = new UserModel;
        $data = array(
            'name' => $this->request->getPost('name'),
            'telp'         => $this->request->getPost('telp'),
            'address'  => $this->request->getPost('address'),
            'email'         => $this->request->getPost('email'),
            'password'  => $this->request->getPost('password'),
            'role'  => $role,
        );
        $model->add($data);
        if($role == 'user'){
            echo '<script>
                    alert("Data berhasil di tambahkan");
                    window.location="'.base_url('/admin/').'"
                </script>';
        } else if($role == 'admin'){
            echo '<script>
                    alert("Data berhasil di tambahkan");
                    window.location="'.base_url('/admin/admin').'"
                </script>';
        }

    }

    public function edit($id, $role)
    {
        $model = new UserModel;
        $get = $model->get($role, $id)->getRow();
        if(isset($_SESSION['logged_in'])){
            if(isset($get)){
                $data['user'] = $get;
                if($role == 'user'){
                    echo view('admin/customer/edit', $data);
                } else if($role == 'admin'){
                    echo view('admin/admin/edit', $data);
                }
            }else{
                echo '<script>
                        alert("ID '.$id.' Tidak ditemukan");
                        window.location="'.base_url('admin/').'"
                    </script>';
            }
        } else{
            echo '<script>
                    alert("Harap login dahulu.");
                    window.location="'.base_url('/admin/login').'"
                </script>';
        }
    }

    public function editProcess($role)
    {
        $model = new UserModel;
        $id = $this->request->getPost('id');
        $data = array(
            'name' => $this->request->getPost('name'),
            'telp'         => $this->request->getPost('telp'),
            'address'  => $this->request->getPost('address'),
            'email'  => $this->request->getPost('email'),
            'password'  => $this->request->getPost('password'),
            'role' => $role
        );
        $model->edit($data, $id);

        if($role == 'user'){
            echo '<script>
                    alert("Berhasil mengubah data");
                    window.location="'.base_url('admin').'"
                </script>';
        } else if($role == 'admin'){
            echo '<script>
                    alert("Berhasil mengubah data");
                    window.location="'.base_url('admin/admin').'"
                </script>';
        } else{
            echo '<script>
                    alert("ID '.$id.' Tidak ditemukan");
                    window.location="'.base_url('admin').'"
                </script>';
        }
    }

    public function deleteData($id, $role)
    {
        $model = new UserModel;
        $get = $model->get($role, $id)->getRow();
        if(isset($get))
        {
            if($role == 'user'){
                $model->deleteData($id);
                echo '<script>
                        alert("Data berhasil di hapus");
                        window.location="'.base_url('admin/').'"
                    </script>';
            } else if($role == 'admin'){
                $model->deleteData($id);
                echo '<script>
                        alert("Data berhasil di hapus");
                        window.location="'.base_url('admin/admin').'"
                    </script>';
            }

        }else{
            echo '<script>
                    alert("Hapus Gagal !, ID '.$id.' Tidak ditemukan");
                    window.location="'.base_url('admin/admin').'"
                </script>';
        }
    }

}