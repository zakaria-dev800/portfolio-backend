<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use  HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'options',
        'location',
        'profile_image',
        'resume'
    ];
public function skills()
{
    return $this->hasMany(Skill::class);
}
public function educations()
{
    return $this->hasMany(Education::class);
}
public function projects()
{
    return $this->hasMany(Project::class);
}

public function services()
{
    return $this->hasMany(Service::class);
}
}
