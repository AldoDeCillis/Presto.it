<?php

namespace App\Models;

use App\Models\User;
use App\Models\Image;
use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Insertion extends Model
{
    use HasFactory, Searchable;
    protected $fillable = [
        'name',
        'subtitle',
        'price',
        'description',
        'is_new',
        'category_id',
        'user_id',
    ];

    public function toSearchableArray(){
        $category=$this->category;
        $array=[
        'id' => $this->id,
        'name'=>$this->name,
        'subtitle'=>$this->subtitle,
        'description'=>$this->description,
        'category'=>$category,
        ];
        return $array;
        }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public static function toBeRevisionedCount()
    {
        return Insertion::where('is_accepted', null)->count();
    }
    public function setAccepted($value){
        if($value===true || $value===false || $value===NULL){
        $this->is_accepted = $value;
        $this->save();
        return true;
    }
    return false;
    }
    public function setNew($value){
        if($value===true || $value===false || $value===NULL){
        $this->is_new = $value;
        $this->save();
        return true;
    }
    return false;
    }
    public function images(){
        return $this->hasMany(Image::class);
    }
}