<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Secret
 * 
 * @property int $id
 * @property int $secret_code
 * @property int $nemesis_id
 * 
 * @property Nemesi $nemesi
 *
 * @package App\Models
 */
class Secret extends Model
{
	protected $table = 'secret';
	public $timestamps = false;

	protected $casts = [
		'secret_code' => 'int',
		'nemesis_id' => 'int'
	];



	public function nemesi()
	{
		return $this->belongsTo(Nemesi::class, 'nemesis_id');
	}
}
