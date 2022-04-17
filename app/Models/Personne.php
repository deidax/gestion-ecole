<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

abstract class Personne extends Model
{
    use HasFactory;

    //Overriding the create method
    public static function create(array $attributes = [], array $user_extra_attributes = [])
    {
        
        $model = static::query()->create($user_extra_attributes);
        
        if(!empty($attributes)){
            $model = $model->user()->create($attributes);
            $model->setDefaultPermissions();
        }
        
        
        return $model;
    }

    //Overriding the delete method
    public function delete()
    {
        $res = parent::delete();
        if($res == true)
        {
            if($this->user != null)
            {
                $relation = $this->user; // here get the relation data
                $relation->delete();
            }
        }
    }

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

}
