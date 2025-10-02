<?php
declare(strict_types=1);

namespace Conpassione\kuhteammanagement\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Frontend\Controller\ErrorController;
use TYPO3\CMS\FrontendLogin\Domain\Repository\FrontendUserRepository;
use Conpassione\kuhteammanagement\Domain\DTO\neuesTeam;
use Conpassione\kuhteammanagement\Domain\Repository\neuesTeamRepository;

class TeamAufnahmeController extends ActionController
{
    public function __construct(
        protected FrontendUserRepository $userRepository,
        protected NeuesTeamRepository $neuesTeamRepository,
    ) {}


    public function createTeamAction(?neuesTeam $team = null): ResponseInterface {
        $userIdentifier = $team->get();
        $userData = $this->userRepository->findUserByUsernameOrEmailOnPages($userIdentifier, $storagePageIds);

        return $this->htmlResponse();
    }


}
