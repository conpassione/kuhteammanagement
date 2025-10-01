<?php
declare(strict_types=1);

namespace Conpassione\kuhteammanagement\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\Http\PropagateResponseException;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Frontend\Controller\ErrorController;



class TeamAufnahmeController extends ActionController
{
    public function __construct(

    ) {}


    public function createTeamAction(?Team $team = null): ResponseInterface {
        return $this->htmlResponse();
    }


}
