<?php 
namespace App\Models\AdminModels;
use CodeIgniter\Model;
 
class HotelModel extends Model
{
    protected $table = 'item';
    protected $primaryKey = 'item_id';
     
    public function get($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->where('item_id', $id)->get();
        }   
    }

    public function getHome($type = false)
    {
        if($type === false){
            return $this->limit(4)->get();
        }else{
            return $this->where('item_type', $type)->get();
        }   
    }

    public function add($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function edit($data, $id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('item_id', $id);
        return $builder->update($data);
    }


    public function deleteData($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['item_id' => $id]);
    }
}