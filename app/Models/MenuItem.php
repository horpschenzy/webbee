<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MenuItem extends Model
{
    protected $appends = ['children'];
    /**
     * Get all of the children for the MenuItem
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children(): HasMany
    {
        return $this->hasMany(MenuItem::class, 'parent_id');
    }
    
    public function getChildrenAttribute()
    {
        return $this->children()->get();
    }
}
