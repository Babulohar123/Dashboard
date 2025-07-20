<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $role
 * @property string|null $avatar
 * @property bool $is_active
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 */
class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'role', 'avatar', 'is_active'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_active' => 'boolean'
    ];

    /**
     * Check if user has given role.
     */
    public function hasRole(string $role): bool
    {
        return $this->role === $role;
    }

    // Role helpers for convenience
    public function isAdmin(): bool
    {
        return $this->hasRole('admin');
    }

    public function isTeacher(): bool
    {
        return $this->hasRole('teacher');
    }

    public function isParent(): bool
    {
        return $this->hasRole('parent');
    }

    public function isStudent(): bool
    {
        return $this->hasRole('student');
    }

    /**
     * Subjects taught by the user (if teacher).
     * Inverse relation in Subject: teacher()
     */
    public function subjects()
    {
        return $this->hasMany(Subject::class, 'teacher_id');
    }

    /**
     * Student marks for this user (if student).
     * Inverse relation in StudentMark: student()
     */
    public function studentMarks()
    {
        return $this->hasMany(StudentMark::class, 'student_id');
    }

    /**
     * Attendance records for this user (if student).
     * Inverse relation in Attendance: student()
     */
    public function attendance()
    {
        return $this->hasMany(Attendance::class, 'student_id');
    }
}
