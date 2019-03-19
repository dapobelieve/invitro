<?php

namespace App\Jobs;

use File;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;


use Cloudder;
use App\Models\Training;

class UploadTrainingMaterials implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $training;
    protected $materialsArray;

    /**
     * Job Timeout
     */
    public $timeout = 1200 ;

    /**
     * Job Tries
     */
    public $tries = 1;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    public function __construct(Training $training, $materials)
    {
        $this->training = $training;
        $this->materialsArray = $materials;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        foreach ($this->materialsArray as $file) {

//            $filePath = $file['id'].".".$file['ext'];
            $filePath = storage_path().'/uploads/'.$file['id'];


            try {
                if (Cloudder::upload($filePath, null, [
                    'folder' => 'ivf-materials',
                    'resource_type' => 'auto',
                    'format' => 'webm',
                    'quality' => 50,
                    'bit_rate' => "250k",
                    'timeout' => 3600
                ])){
                    File::delete($filePath);
                }

            }catch (\Exception $e) {
                \Log::error($e->getMessage());
            }
        }
    }
}
