<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Illuminate\Queue\SerializesModels;
use Spatie\Image\Image as SpatieImage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class AddWatermark implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    private $insertion_image_id;
    public function __construct($insertion_image_id)
    {
        $this->insertion_image_id = $insertion_image_id;
    }
    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $i = Image::find($this->insertion_image_id);
        if(!$i){
            return;
        }
        $srcPath = storage_path('app/public/' . $i->path);
        $image = SpatieImage::load($srcPath);
        $image->watermark(base_path('public/media/logo.png'))
                    ->watermarkFit(Manipulations::FIT_STRETCH)
                    ->watermarkOpacity(50);
             
        $image->save($srcPath);
    }
}
