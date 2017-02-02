<?php

namespace SigAtelie\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Representation of customer.
 *
 *
 */
class Customer extends Model
{

  public $timestamps = false;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name', 'cpf','dateOfBirth',
  ];



}
