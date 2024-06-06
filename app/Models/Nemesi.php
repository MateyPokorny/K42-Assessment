<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Nemesi
 * 
 * @property bool $is_alive
 * @property int|null $years
 * @property int $id
 * @property int|null $character_id
 * 
 * @property Character|null $character
 * @property Collection|Secret[] $secrets
 *
 * @package App\Models
 */
class Nemesi extends Model
{
	protected $table = 'nemesis';
	public $timestamps = false;

	protected $casts = [
		'is_alive' => 'bool',
		'years' => 'int',
		'character_id' => 'int'
	];

	public function character()
	{
		return $this->belongsTo(Character::class);
	}

	public function secrets()
	{
		return $this->hasMany(Secret::class, 'nemesis_id');
	}
}
