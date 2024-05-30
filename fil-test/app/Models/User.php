<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Notification;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'handphone_number',
        'address_province',
        'address_regency',
        'address_district',
        'address_subdistrict',
    ];

    public function run(): void
{
    User::factory()
            ->count(50)
            ->hasPosts(1)
            ->create();
}

//     public function notifications()
// {
//     return $this->hasMany(Notification::class);
// }

    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(vehicle::class);
    }

    public function dashboard()
{
    $user = auth()->user();
    $notifications = Notification::where('notifiable_type', User::class)
                                 ->where('notifiable_id', $user->id)
                                 ->where('is_done', false)
                                 ->orderBy('created_at', 'desc')
                                 ->get();
    return view('dashboard', compact('notifications'));
}
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function vehicle()
    {
        return $this->hasMany(Vehicle::class,'id_user','id');
    };
    /**
     * Get the attributes that should be cast.
     *
    //  * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
