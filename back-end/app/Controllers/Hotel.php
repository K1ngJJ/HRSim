<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AdminModels\HotelModel;

class Hotel extends Controller
{
    /**
	 * Instance of the main Request object.
	 *
	 * @var HTTP\IncomingRequest
	 */
	protected $request;
    
    public function add()
    {   
        if(isset($_SESSION['logged_in'])){
            echo view('admin/hotel/add');
        } else{
            echo '<script>
                    alert("Harap login dahulu.");
                    window.location="'.base_url('/admin/login').'"
                </script>';
        }
    }

    public function addProcess()
    {
        $model = new HotelModel();
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('admin/hotel');
        }
        $upload = $this->request->getFile('item_thumbnail');
        $upload->move(WRITEPATH . '../public/assets/images/');
        $data = array(
            'item_name' => $this->request->getPost('item_name'),
            'item_type'         => $this->request->getPost('item_type'),
            'item_city'  => $this->request->getPost('item_city'),
            'item_address'         => $this->request->getPost('item_address'),
            'item_price'  => $this->request->getPost('item_price'),
            'item_desc'  => $this->request->getPost('item_desc'),
            'item_facility'  => $this->request->getPost('item_facility'),
            'item_thumbnail'  => $upload->getName()
        );
        $model->add($data);
        if(isset($_SESSION['logged_in'])){
            echo '<script>
                    alert("Data berhasil di tambahkan");
                    window.location="'.base_url('/admin/hotel').'"
                </script>';
        } else{
            echo '<script>
                    alert("Harap login dahulu.");
                    window.location="'.base_url('/admin/login').'"
                </script>';
        }

    }

    public function edit($id)
    {
        $model = new HotelModel;
        $get = $model->get($id);
        if(isset($_SESSION['logged_in'])){
            if(isset($get)){
                $data['item'] = $get;
                echo view('admin/hotel/edit', $data);
            }else{
                echo '<script>
                        alert("ID '.$id.' Tidak ditemukan");
                        window.location="'.base_url('admin/hotel').'"
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
        $model = new HotelModel();
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('admin/hotel');
        }
        $id = $this->request->getPost('id');
        $upload = $this->request->getFile('item_thumbnail');
        $upload->move(WRITEPATH . '../public/assets/images/');
        $data = array(
            'item_name' => $this->request->getPost('item_name'),
            'item_type'         => $this->request->getPost('item_type'),
            'item_city'  => $this->request->getPost('item_city'),
            'item_address'         => $this->request->getPost('item_address'),
            'item_price'  => $this->request->getPost('item_price'),
            'item_desc'  => $this->request->getPost('item_desc'),
            'item_facility'  => $this->request->getPost('item_facility'),
            'item_thumbnail'  => $upload->getName()
        );
        $model->edit($data, $id);

        if($model->edit($data, $id)){
            echo '<script>
                    alert("Data berhasil di ubah");
                    window.location="'.base_url('admin/hotel').'"
                </script>';
        }else{
            echo '<script>
                    alert("Edit Gagal !");
                    window.location="'.base_url('admin/hotel').'"
                </script>';
        }
    }

    public function deleteData($id)
    {
        $model = new HotelModel;
        $get = $model->get($id)->getRow();
        if(isset($get))
        {
            $model->deleteData($id);
            echo '<script>
                    alert("Data berhasil di hapus");
                    window.location="'.base_url('admin/hotel').'"
                </script>';
        }else{
            echo '<script>
                    alert("Hapus Gagal !, ID '.$id.' Tidak ditemukan");
                    window.location="'.base_url('admin/hotel').'"
                </script>';
        }
    }

}