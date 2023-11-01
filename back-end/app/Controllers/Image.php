<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AdminModels\ImageModel;
use App\Models\AdminModels\HotelModel;

class Image extends Controller
{
    /**
	 * Instance of the main Request object.
	 *
	 * @var HTTP\IncomingRequest
	 */
	protected $request;
    
    public function add($id)
    {   
        if(isset($_SESSION['logged_in'])){
            $model = new ImageModel;
            $data['image'] = $model->get($id);
            $data['id'] = $id;
            echo view('admin/image/add', $data);
        } else{
            echo '<script>
                    alert("Harap login dahulu.");
                    window.location="'.base_url('/admin/login').'"
                </script>';
        }
    }

    public function addProcess()
    {
        $model = new ImageModel();
        if ($this->request->getMethod() !== 'post') {
            return redirect()->to('admin/image');
        }
        $upload = $this->request->getFile('image_name');
        $upload->move(WRITEPATH . '../public/assets/images/');
        $data = array(
            'item_id'  => $this->request->getPost('id'),
            'image_name' => $upload->getName()
        );
        $model->add($data);
        return redirect()->to('/admin/image/add/'.$this->request->getPost('id'))->with('berhasil', 'Data Berhasil di Simpan');
    }

    public function deleteData($id, $item_id)
    {
        $model = new ImageModel;
        $get = $model->getOne($id)->getRow();
        if(isset($get))
        {
            $model->deleteData($id);
            echo '<script>
                    alert("Data berhasil di hapus");
                    window.location="'.base_url('admin/image/'.$item_id).'"
                </script>';
        }else{
            echo '<script>
                    alert("Hapus Gagal !, ID '.$id.' Tidak ditemukan");
                    window.location="'.base_url('admin/image/'.$item_id).'"
                </script>';
        }
    }

}