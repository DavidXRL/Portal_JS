<?php

namespace App\Models;

    use App\Http\Controllers\WorkshopController;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    Use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class WorkshopActivity extends Model
    {
        use HasFactory;

        protected $table = 'workshops_activities';

        protected $fillable = [
            'name_activity',
            'description_activity',
            'date_activity',
            'time_activity',
            'image_activity',
            'workshop_id'
        ];

    public function workshop()
    {
        return $this->belongsTo(Workshop::class);
    }

    }
