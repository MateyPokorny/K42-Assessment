<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Character
 * 
 * @property int $id
 * @property string $name
 * @property string|null $gender
 * @property string $ability
 * @property float $minimal_distance
 * @property float|null $weight
 * @property Carbon $born
 * @property Carbon|null $in_space_since
 * @property int $beer_consumption
 * @property bool $knows_the_answer
 * 
 * @property Collection|Nemesi[] $nemesis
 *
 * @package App\Models
 */
class Character extends Model
{
	protected $table = 'character';
	public $timestamps = false;

	protected $casts = [
		'minimal_distance' => 'float',
		'weight' => 'float',
		'born' => 'datetime',
		'in_space_since' => 'datetime',
		'beer_consumption' => 'int',
		'knows_the_answer' => 'bool'
	];

	public function nemesis()
	{
		return $this->hasMany(Nemesi::class);
	}
}
