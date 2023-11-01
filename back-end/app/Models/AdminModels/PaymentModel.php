<?php 
namespace App\Models\AdminModels;
use CodeIgniter\Model;
 
class PaymentModel extends Model
{
    protected $table = 'payment';
    protected $primaryKey = 'payment_id';
     
    public function get($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->get($id);
        }   
    }
    
    public function add($data)
    {
        $builder = $this->db->table('booking');
        return $builder->insert($data);
    }

    public function edit($data, $id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('booking_id', $id);
        return $builder->update($data);
    }

    public function deleteData($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['booking_id' => $id]);
    }
}