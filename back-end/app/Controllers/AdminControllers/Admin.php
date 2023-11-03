<?php 
namespace App\Controllers\AdminControllers;

use CodeIgniter\Controller;

use App\Models\AdminModels\UserModel;
use App\Models\AdminModels\HotelModel;
use App\Models\AdminModels\BookingModel;
use App\Models\AdminModels\ImageModel;

class Admin extends Controller
{
    /**
	 * Instance of the main Request object.
	 *
	 * @var HTTP\IncomingRequest
	 */
	protected $request;

    public function index()
    {
        $data['session'] = session();
        $session = session();
        $model = new UserModel;
        if(isset($_SESSION['logged_in'])){
            $data['user'] = $model->get('user');
            echo view('admin/customer/index', $data);
        } else{
            echo '<script>
                    alert("Please login first.");
                    window.location="'.base_url('/admin/login').'"
                </script>';
        }
    }

    public function admin()
    {
        $data['session'] = session();
        $session = session();
        $model = new UserModel;
        if(isset($_SESSION['logged_in'])){
            $data['user'] = $model->get('admin');
            echo view('admin/admin/index', $data);
        } else{
            echo '<script>
                    alert("Please login first.");
                    window.location="'.base_url('/admin/login').'"
                </script>';
        }
    }

    public function hotel()
    {
        $data['session'] = session();
        $session = session();
        $model = new HotelModel;
        $data['item'] = $model->get();
        if(isset($_SESSION['logged_in'])){
            echo view('admin/hotel/index', $data);
        } else{
            echo '<script>
                    alert("Please login first.");
                    window.location="'.base_url('/admin/login').'"
                </script>';
        }
    }

    public function image($id)
    {
        $data['session'] = session();
        $session = session();
        $model = new ImageModel;
        $data['image'] = $model->get($id);
        $data['id'] = $id;
        
        if(isset($_SESSION['logged_in'])){
            echo view('admin/image/index', $data);
        } else{
            echo '<script>
                    alert("Please login first.");
                    window.location="'.base_url('/admin/login').'"
                </script>';
        }
    }

    public function booking()
    {
        $data['session'] = session();
        $session = session();
        $model = new BookingModel;
        $data['book'] = $model->get();
        if(isset($_SESSION['logged_in'])){
            echo view('admin/booking/index', $data);
        } else{
            echo '<script>
                    alert("Please login first.");
                    window.location="'.base_url('/admin/login').'"
                </script>';
        }
    }

    public function login()
    {
        echo view('admin/user/login');
    }

    public function loginProcess()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $data = $model->where('email', $email)->first();
        // print_r($data);
        if($data['role'] == 'admin'){
            $verify_pass = $model->where('password', $password)->first();
            if($verify_pass){
                $ses_data = [
                    'user_id'       => $data['user_id'],
                    'name'     => $data['name'],
                    'email'    => $data['email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                echo '<script>
                        alert("Login successful.");
                        window.location="'.base_url('/admin').'"
                    </script>';
            }else{
                print_r($this->request->getPost());
                print_r($session->user_id);
                echo '<script>
                        alert("Login failed, please check your Network");
                        window.location="'.base_url('/admin').'"
                    </script>';
            }
        }else{
            echo '<script>
                    alert("Email not found or you are not an admin.");
                    window.location="'.base_url('/admin').'"
                </script>';
        }
    }
 
    public function logoutProcess()
    {
        $session = session();
        $session->destroy();
        echo '<script>
                alert("Logout successful");
                window.location="'.base_url('/admin').'"
            </script>';
    }

}