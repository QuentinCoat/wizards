<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 15 Nov 2018 14:43:58 +0000.
 */

namespace App;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Invoice
 * 
 * @property int $id
 * @property float $price
 * @property string $name
 * @property \Carbon\Carbon $date
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property int $user_id
 * 
 * @property \App\User $user
 *
 * @package App
 */
class Invoice extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'price' => 'float',
		'user_id' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'price',
		'name',
		'date',
		'user_id'
	];

	public function user()
	{
		return $this->belongsTo(\App\User::class);
	}
}
