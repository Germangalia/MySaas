<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

use App\Http\Requests;

class ShotOut extends Model
{
    protected $fillable = [
        'user', 'content',
    ];

    /**
     * ShotOut constructor.
     */
    public function __construct(Request $request)
    {
        $this->fillable = [
            $request->Name, $request->Messatge,
        ];
    }


}
