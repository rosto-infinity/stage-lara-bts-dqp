<?php

namespace App\Models\Academic;

use Illuminate\Database\Eloquent\Model;

class AcademicYear extends Model
{
   protected $fillable =[
    'est_active',
       'date_debut',
    'date_fin',
    'est_active'
    ];

    //transtypages des attributs
    protected function casts()
    {
        return [
            // Convertit la colonne en objet Carbon (Date pure, sans heure)
            'date_debut' => 'date',
            'date_fin' => 'date',
            'est_active' => 'boolean'
        ];
    }

      /**
     * Le hook "booted" remplace l'ancien "boot".
     */
    protected static function booted(): void
    {
        // Désactivation des autres années lors de la création d'une année active
        static::creating(function (AcademicYear $academicYear): void {
            if ($academicYear->est_active) {
                static::where('est_active', true)
                    ->update(['est_active' => false]);
            }
        });
        // Désactivation des autres années lors du passage à l'état actif
        static::updating(function (AcademicYear $academicYear): void {
            if ($academicYear->est_active && $academicYear->isDirty('est_active')) {
                static::where('id', '!=', $academicYear->id)
                    ->where('est_active', true)
                    ->update(['est_active' => false]);
            }
        });
    }
}
