<?php
declare(strict_types=1);

namespace Conpassione\kuhteammanagement\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
//use TYPO3\CMS\Frontend\Controller\ErrorController;
//use TYPO3\CMS\FrontendLogin\Domain\Repository\FrontendUserRepository;
//use Conpassione\kuhteammanagement\Domain\DTO\neuesTeam;
use Conpassione\kuhteammanagement\Domain\Repository\neuesTeamRepository;

class TeamAufnahmeController extends ActionController
{
    public function __construct(
        protected neuesTeamRepository $neuesTeamRepository,
    ) {}

    public function listAction(): ResponseInterface
    {
        $teams = $this->neuesTeamRepository->findAllTeams();
        $this->view->assign('teams', $teams);
        return $this->htmlResponse();
    }

    public function neuesteamAction(?int $teamID = null): ResponseInterface
    {
        if (is_null($teamID)) {
            $message = "Das ist ein Test: leere teamID";
            $this->view->assign('message', $message);
        } else {
            $neuesTeam = $this->neuesTeamRepository->findTeamById($teamID);
            $message = "Das ist ein Test: mit teamID={$teamID}";
            $this->view->assign('message', $message);
            $this->view->assign('neuesTeam', $neuesTeam);
        }
        return $this->htmlResponse();
    }

    public function deleteAction(?int $teamID = null): ResponseInterface
    {
        if (is_null($teamID)) {
            $teamID = 0;
        }
        $effectedRows = $this->neuesTeamRepository->deleteTeamById($teamID);

        return $this->redirect('list');

    }
}
