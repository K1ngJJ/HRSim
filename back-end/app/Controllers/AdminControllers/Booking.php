<?php 
namespace App\Controllers\AdminControllers;

use CodeIgniter\Controller;
use App\Models\AdminModels\UserModel;
use App\Models\AdminModels\HotelModel;
use App\Models\AdminModels\BookingModel;

class Booking extends Controller
{
    /**
	 * Instance of the main Request object.
	 *
	 * @var HTTP\IncomingRequest
	 */
	protected $request;
    
    public function add()
    {   
        $model = new BookingModel;
        $model2 = new HotelModel;
        $model3 = new UserModel;
        $data['book'] = $model->get('booking');
        $data['hotel'] = $model2->get('item');
        $data['user'] = $model3->get('user');

        if(isset($_SESSION['logged_in'])){
            echo view('admin/booking/add', $data);
        } else{
            echo '<script>
                    alert("Please login first.");
                    window.location="'.base_url('/admin/login').'"
                </script>';
        }
    }

    public function addProcess()
    {
        $model = new BookingModel;
        $model2 = new HotelModel;
        $data['hotel'] = $model2->get($this->request->getPost('item_id'));

        $dateStart = strtotime($this->request->getPost('booking_date_start'));
        $dateEnd = strtotime($this->request->getPost('booking_date_end'));
        $dateCalculate = $dateEnd - $dateStart;

        $dateTotal = floor($dateCalculate/(60*60*24));
        if($dateTotal == 0){
            $dateTotal = 1;
        }
        $totalPrice = $dateTotal * $data['hotel'][0]['item_price'];

        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('admin/booking');
        }
        $upload = $this->request->getFile('booking_proof_of_payment');
        $upload->move(WRITEPATH . '../public/assets/images/proof');
        $data = array(
            'item_id' => $this->request->getPost('item_id'),
            'user_id'         => $this->request->getPost('user_id'),
            'booking_price'  => $totalPrice,
            'booking_date_start'         => $this->request->getPost('booking_date_start'),
            'booking_date_end'  => $this->request->getPost('booking_date_end'),
            'booking_proof_of_payment'  => $upload->getName(),
            'booking_status'  => 'pending',
        );
        $model->add($data);

        return redirect()->to('/admin/booking');
    }

    public function edit($id)
    {
        $model = new BookingModel;
        $model2 = new HotelModel;
        $model3 = new UserModel;
        $get = $model->get($id)->getRow();
        if(isset($_SESSION['logged_in'])){
            if(isset($get)){
                $data['book'] = $get;
                // print_r($data['book']->item_id);
                $data['hotel'] = $model2->get($data['book']->item_id);
                $data['hotels'] = $model2->get();
                $data['user'] = $model3->get('user');
                $data['users'] = $model3->get('user');
                echo view('admin/booking/edit', $data);
            }else{
                echo '<script>
                        alert("ID '.$id.' Tidak ditemukan");
                        window.location="'.base_url('admin/booking').'"
                    </script>';
            }
        } else{
            echo '<script>
                    alert("Harap login dahulu.");
                    window.location="'.base_url('/admin/login').'"
                </script>';
        }
    }

    public function editProcess()
    {
        $model = new BookingModel;
        $model2 = new HotelModel;
        $id = $this->request->getPost('id');
        $data['hotel'] = $model2->get($this->request->getPost('item_id'));

        $dateStart = strtotime($this->request->getPost('booking_date_start'));
        $dateEnd = strtotime($this->request->getPost('booking_date_end'));
        $dateCalculate = $dateEnd - $dateStart;

        $dateTotal = floor($dateCalculate/(60*60*24));
        if($dateTotal == 0){
            $dateTotal = 1;
        }
        $totalPrice = $dateTotal * $data['hotel'][0]['item_price'];

        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('admin/booking');
        }
        $upload = $this->request->getFile('booking_proof_of_payment');
        $upload->move(WRITEPATH . '../public/assets/images/proof');
        $data = array(
            'item_id' => $this->request->getPost('item_id'),
            'user_id'         => $this->request->getPost('user_id'),
            'booking_price'  => $totalPrice,
            'booking_date_start'         => $this->request->getPost('booking_date_start'),
            'booking_date_end'  => $this->request->getPost('booking_date_end'),
            'booking_proof_of_payment'  => $upload->getName(),
            'booking_status'  => 'pending',
        );
        $model->edit($data, $id);

        if($model->edit($data, $id)){
            echo '<script>
                    alert("Data berhasil di ubah");
                    window.location="'.base_url('admin/booking').'"
                </script>';
        }else{
            echo '<script>
                    alert("Edit Gagal !");
                    window.location="'.base_url('admin/booking').'"
                </script>';
        }

        // return redirect()->to('/admin/booking');
    }

    public function deleteData($id)
    {
        $model = new BookingModel;
        $get = $model->get($id)->getRow();
        if(isset($get))
        {
            $model->deleteData($id);
            echo '<script>
                    alert("Data berhasil di hapus");
                    window.location="'.base_url('admin/booking').'"
                </script>';
        }else{
            echo '<script>
                    alert("Hapus Gagal !, ID '.$id.' Tidak ditemukan");
                    window.location="'.base_url('admin/booking').'"
                </script>';
        }
    }

    public function editStatusP($id, $id2)
    {
        $model = new BookingModel;
        $data = array(
            'booking_status' => 'pending',
            'admin_id' => $id2,
        );
        $model->edit($data, $id);

        if($model->edit($data, $id)){
            echo '<script>
                    alert("Berhasil mengubah status");
                    window.location="'.base_url('admin/booking').'"
                </script>';
        } else{
            echo '<script>
                    alert("ID '.$id.' Tidak ditemukan");
                    window.location="'.base_url('admin/booking').'"
                </script>';
        }
    }

    public function editStatusO($id, $id2)
    {
        $model = new BookingModel;
        $data = array(
            'booking_status' => 'ongoing',
            'admin_id' => $id2,
        );
        $model->edit($data, $id);

        if($model->edit($data, $id)){
            echo '<script>
                    alert("Berhasil mengubah status");
                    window.location="'.base_url('admin/booking').'"
                </script>';
        } else{
            echo '<script>
                    alert("ID '.$id.' Tidak ditemukan");
                    window.location="'.base_url('admin/booking').'"
                </script>';
        }
    }
    
    public function editStatusD($id, $id2)
    {
        $model = new BookingModel;
        $data = array(
            'booking_status' => 'done',
            'admin_id' => $id2,
        );
        $model->edit($data, $id);

        if($model->edit($data, $id)){
            echo '<script>
                    alert("Berhasil mengubah status");
                    window.location="'.base_url('admin/booking').'"
                </script>';
        } else{
            echo '<script>
                    alert("ID '.$id.' Tidak ditemukan");
                    window.location="'.base_url('admin/booking').'"
                </script>';
        }
    }

}