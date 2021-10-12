<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class Ekiden extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * 複数代入可能な属性
     *
     * @var array
     */
    protected $fillable = ['ekiden_name'];

    /**
     * 駅伝データの登録更新
     *
     * @var array
     */
    public function saveEkiden($ekiden)
    {
        // DB::enableQueryLog();
        $this->fill($ekiden)->save();
        // Log::debug(dd(DB::getQueryLog()));
    }
}
