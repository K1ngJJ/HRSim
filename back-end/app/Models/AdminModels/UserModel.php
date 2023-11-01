<?php 
namespace App\Models\AdminModels;
use CodeIgniter\Model;
 
class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'user_id';
     
    public function get($role, $id = false)
    {
        if($id === false){
            return $this->getWhere(['role' => $role])->getResultArray();
        }else{
            return $this->getWhere(['user_id' => $id]);
        }   
    }

    public function getByEmail($email)
    {
        return $this->Where(['email' => $email])->first();
    }


    public function add($data)
    {
        $builder = $this->db->table('user');
        return $builder->insert($data);
    }

    public function edit($data, $id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('user_id', $id);
        return $builder->update($data);
    }


    public function deleteData($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['user_id' => $id]);
    }
 
}