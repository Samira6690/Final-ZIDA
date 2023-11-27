<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\User;
class rolename extends Model
{
    use CrudTrait;
    use HasFactory;

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
