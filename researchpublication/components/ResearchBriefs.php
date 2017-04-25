<?php namespace Digitalfox\Researchpublication\Components;

use Cms\Classes\Page;
use Cms\Classes\ComponentBase;

use Digitalfox\Researchpublication\Models\ResearchBrief;

class ResearchBriefs extends ComponentBase
{

    public $pageParam;
    public $noResearchBriefsMessage;
    public $sortOrder;
    public $sideMenuBooks;
    public $researchbriefs;

    public function componentDetails()
    {
        return [
            'name'        => 'ResearchBriefs Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }


    public function onRun()
    {
        $this->researchbriefs = $this->page['researchbriefs'] = $this->getAttachedFileMime(ResearchBrief::orderBy('id','asc')->get());
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
