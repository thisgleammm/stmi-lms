<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Model implements Authenticatable
{
    use HasFactory, AuthenticableTrait;

    protected $table = "users";
    protected $primaryKey = "id";
    protected $keyType = "int";
    public $timestamps = true;
    public $incrementing = true;

    protected $fillable = [
        'email',
        'password',
        'level',
        'name',
    ];

    // Implementing the required methods from Authenticatable
    public function getAuthIdentifierName()
    {
        return 'email';  // Or return 'id' if using an ID-based authentication
    }

    public function getAuthIdentifier()
    {
        return $this->email;  // Typically returns the unique field (like email or username)
    }

    public function getAuthPassword()
    {
        return $this->password;  // Returns the user's password
    }

    public function getRememberToken()
    {
        return $this->token;  // Return remember token if any
    }

    public function setRememberToken($value)
    {
        $this->token = $value;  // Set the remember token
    }

    public function getRememberTokenName()
    {
        return 'token';  // Remember token column name
    }

    // Required by Authenticatable interface, returns the user's password attribute
    public function getAuthPasswordName()
    {
        return 'password';  // This is the field name in the database that stores the password
    }
}
