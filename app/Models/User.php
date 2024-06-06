<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $firstName
 * @property string $lastName
 * @property int $age
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'user';
	public $timestamps = false;

	protected $casts = [
		'age' => 'int'
	];

	protected $fillable = [
		'firstName',
		'lastName',
		'age'
	];
}
