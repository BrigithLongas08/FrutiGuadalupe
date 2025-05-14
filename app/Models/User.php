<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;

class User extends Authenticatable implements FilamentUser
{
    use HasFactory, Notifiable;

    /**
     * Atributos asignables masivamente.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Atributos que deben estar ocultos para los arrays.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Atributos que deben ser convertidos a tipos nativos.
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

    /**
     * Determina si el usuario puede acceder al panel de Filament.
     *
     * @param  \Filament\Panel  $panel
     * @return bool
     */
    public function canAccessPanel(Panel $panel): bool
    {
        // Aquí puedes agregar lógica de roles o permisos para controlar el acceso
        return true; // Permitir acceso a todos los usuarios
    }

    /**
     * Determina si el usuario puede acceder a Filament.
     *
     * @return bool
     */
    public function canAccessFilament(): bool
    {
        return true; // O personaliza según tu lógica
    }
}
