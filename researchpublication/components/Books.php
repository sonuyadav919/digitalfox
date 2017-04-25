<?php namespace Digitalfox\Researchpublication\Components;

use Cms\Classes\Page;
use Cms\Classes\ComponentBase;

use Digitalfox\Researchpublication\Models\Book;

class Books extends ComponentBase
{

    public $pageParam;
    public $noBooksMessage;
    public $sortOrder;
    public $sideMenuBooks;
    public $books;

    public function componentDetails()
    {
        return [
            'name'        => 'Books Component',
            'description' => 'Books Component'
        ];
    }

    public function defineProperties()
    {
      return [];
    }


    public function onRun()
    {
        $this->books = $this->page['books'] = $this->getAttachedFileMime(Book::orderBy('id','asc')->get());
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
