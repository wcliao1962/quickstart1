<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = ['name'];

    /**
     * 取得擁有此任務的使用者。
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
