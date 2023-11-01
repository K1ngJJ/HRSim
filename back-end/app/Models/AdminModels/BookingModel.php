<?php 
namespace App\Models\AdminModels;
use CodeIgniter\Model;
 
class BookingModel extends Model
{
    protected $table = 'booking';
    protected $primaryKey = 'booking_id';
     
    public function get($id = false)
    {
        if($id === false){
            // return $this->db->table('customer')->join('user', 'customer.user_id=user.user_id')->get()->getResultArray();
            return $this->db->table('booking')
                            ->join('item', 'booking.item_id=item.item_id')
                            ->join('user', 'booking.user_id=user.user_id')
                            ->get()->getResultArray();
            return $this->findAll();
        }else{
            return $this->db->table('booking')->getWhere(['booking.booking_id' => $id]);
        }   
    }

    public function latest($id)
    {
        return $this->db->table('booking')
                            ->join('item', 'booking.item_id=item.item_id')
                            ->join('user', 'booking.user_id=user.user_id')
                            ->getWhere(['booking.booking_id' => $id]);
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