<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Client extends Model implements HasMedia
{
    use SoftDeletes;
    use InteractsWithMedia;
    use Auditable;
    use HasFactory;

    public $table = 'clients';

    public static $searchable = [
        'name',
    ];

    protected $appends = [
        'logo',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'contact_email',
        'phone',
        'address',
        'lat',
        'lng',
        'rfc',
        'razon_social',
        'nombre_comercial',
        'grupo_id',
        'segmento_id',
        'clasificacion_id',
        'status_id',
        'kam_id',
        'ejecutivo_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function clientAppointments()
    {
        return $this->hasMany(Appointment::class, 'client_id', 'id');
    }

    public function getLogoAttribute()
    {
        $file = $this->getMedia('logo')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function grupo()
    {
        return $this->belongsTo(Group::class, 'grupo_id');
    }

    public function segmento()
    {
        return $this->belongsTo(Segment::class, 'segmento_id');
    }

    public function clasificacion()
    {
        return $this->belongsTo(Clasification::class, 'clasificacion_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function kam()
    {
        return $this->belongsTo(User::class, 'kam_id');
    }

    public function ejecutivo()
    {
        return $this->belongsTo(User::class, 'ejecutivo_id');
    }

    public function variantes()
    {
        return $this->belongsToMany(Variante::class);
    }

    public function mayoristas()
    {
        return $this->belongsToMany(Provider::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
