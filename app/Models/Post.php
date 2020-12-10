<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 10.12.2020
 * Time: 13:45
 */

namespace App\Models;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

/**
 * Class Post
 * @package App\Models
 *
 * @property int $id
 * @property string $name
 * @property string $image
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Post extends Model
{
    public function getImageAttribute(string $attribute): string
    {
        return Storage::url($attribute);
    }
}