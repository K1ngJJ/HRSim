<?php 
namespace App\Models\AdminModels;
use CodeIgniter\Model;
 
class ImageModel extends Model
{
    protected $table = 'item_image';
    protected $primaryKey = 'image_id';
     
    public function get($id)
    {
        return $this->db->table('item_image')
                        ->join('item', 'item_image.item_id=item.item_id')
                        ->getWhere(['item_image.item_id' => $id])->getResultArray();
    }

    public function getOne($id)
    {
        return $this->db->table('item_image')
        ->join('item', 'item_image.item_id=item.item_id')
        ->getWhere(['item_image.image_id' => $id]);
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