<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
    ];

    public function isAdmin()
    {
        return new class($this->role === 'admin') extends Relation {
            private $isAdmin;
            public function __construct($isAdmin)
            {
                $this->isAdmin = $isAdmin;
            }

            public function addConstraints()
            {
                // No actual query constraints necessary
            }

            public function addEagerConstraints(array $models)
            {
                // No actual query constraints necessary
            }

            public function initRelation(array $models, $relation)
            {
                // Initialize relation on models
                foreach ($models as $model) {
                    $model->setRelation($relation, $this->isAdmin);
                }
                return $models;
            }

            public function match(array $models, \Illuminate\Database\Eloquent\Collection $results, $relation)
            {
                // Match the eager loaded results to their parent models
                return $models;
            }

            public function getResults()
            {
                return $this->isAdmin;
            }
        };
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];
}
