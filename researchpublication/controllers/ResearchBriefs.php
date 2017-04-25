<?php namespace Digitalfox\Researchpublication\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

use ApplicationException;
use Flash;
use Redirect;

use Digitalfox\Researchpublication\Models\ResearchBrief;

/**
 * Research Briefs Back-end Controller
 */
class ResearchBriefs extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.ImportExportController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $importExportConfig = 'config_import_export.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Digitalfox.Researchpublication', 'researchpublication', 'researchbriefs');
    }

    public function index()
    {
        $this->addJs('/plugins/digitalfox/researchpublication/assets/js/post-form.js');
        $this->asExtension('ListController')->index();
    }


    public function create()
    {
        BackendMenu::setContextSideMenu('researchbriefs');

        $this->addJs('/plugins/digitalfox/researchpublication/assets/js/post-form.js');

        return $this->asExtension('FormController')->create();
    }


    public function update($recordId = null)
    {
        return $this->asExtension('FormController')->update($recordId);
    }



    public function index_onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $postId) {
                if ((!$post = ResearchBrief::find($postId))) {
                    continue;
                }

                $post->delete();
            }

            Flash::success('Successfully deleted Research Briefs and Reports.');
        }

        return $this->listRefresh();
    }
}
