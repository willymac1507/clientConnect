<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Cmgmyr\Messenger\Traits\Messagable;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;
    use Messagable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function organisation(): BelongsTo
    {
        return $this->belongsTo(Organisation::class);
    }

    public function calendar(): HasOne
    {
        return $this->hasOne(Calendar::class);
    }

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    public function receivedMessages(): HasMany
    {
        return $this->hasMany(Message::class, 'recipient_id');
    }

    public function sentMessages(): HasMany
    {
        return $this->hasMany(Message::class, 'sender_id');
    }

    public function hasRole($role)
    {
        if (is_string($role)) {
            return $this->roles->contains('role', $role);
        }
        return !!$role->intersect($this->roles)->count();
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
