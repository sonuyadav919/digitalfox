<?php namespace Digitalfox\Researchpublication\Components;

use Cms\Classes\Page;
use Cms\Classes\ComponentBase;

use Digitalfox\Researchpublication\Models\Journal;
class Journals extends ComponentBase
{

    public $pageParam;
    public $noJournalsMessage;
    public $sortOrder;
    public $sideMenuBooks;
    public $journals;

    public function componentDetails()
    {
        return [
            'name'        => 'Journals Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->journals = $this->page['journals'] = $this->getAttachedFileMime(Journal::orderBy('id','asc')->get());
    }


    private function getAttachedFileMime($records)
    {

        foreach($records as $record){
          $fe = ($record->file)?$this->get_file_extension($record->file):'';

          $record->file_mime  = $fe;
        }

        return $records;
    }


    private function get_file_extension($file_name) {
       return substr(strrchr($file_name,'.'),1);
    }
}
