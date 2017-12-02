<?php

use Illuminate\Database\Seeder;

use App\Videocard;

class VideocardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $backup_archive = file_get_contents('resources/backup/videocards_notebook.txt');
        $videocards_archive = unserialize($backup_archive);

        $columns = Schema::getColumnListing('videocards');
        unset($columns[0]); // удаяем поле ID
        unset($columns[41]); // удалем поле created_at
        unset($columns[42]); // удалем поле updated_at
        
        $videocard = new Videocard;
        $videocards = [];
        foreach ($videocards_archive as $video) {
            $video = array_combine($columns, $video);
            $video['created_at'] = date('Y-m-d H:i:s');
            $video['updated_at'] = date('Y-m-d H:i:s');
            $videocards[] = $video;
       }
        $videocard->insert($videocards);
    }
}
