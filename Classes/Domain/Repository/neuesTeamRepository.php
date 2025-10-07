<?php
declare(strict_types=1);

namespace Conpassione\kuhteammanagement\Domain\Repository;

use Doctrine\DBAL\Exception;
use phpDocumentor\Reflection\Types\Integer;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Database\Query\QueryBuilder;
use TYPO3\CMS\Core\Database\Query\Restriction\DeletedRestriction;
use TYPO3\CMS\Core\Database\Query\Restriction\FrontendRestrictionContainer;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class neuesTeamRepository
{
    public function __construct(
        private readonly ConnectionPool $connectionPool,
    ) {}

    /**
     * @throws Exception
     */
    public function findAllTeams(): array
    {
        $queryBuilder = $this->connectionPool->getQueryBuilderForTable('tx_kuhteammanagement_neuesteam');
        $result = $queryBuilder
            ->select('*')
            ->from('tx_kuhteammanagement_neuesteam')
            ->where(
                $queryBuilder->expr()->eq('deleted', 0)
            )
            ->executeQuery();
        $teams[] = $result->fetchAllAssociative();
        return $teams;
    }

    public function findTeamById(?int $teamID = null): array
    {
        if (is_null($teamID)) {
            return [
                ['firstname' => 'john doe']
            ];
        }

        $queryBuilder = $this->connectionPool->getQueryBuilderForTable('tx_kuhteammanagement_neuesteam');
        $queryBuilder->setRestrictions(GeneralUtility::makeInstance(FrontendRestrictionContainer::class));
        $result = $queryBuilder
            ->select('*')
            ->from('tx_kuhteammanagement_neuesteam')
            ->where(
                    $queryBuilder->expr()->eq('uid', $teamID)
            )
            ->executeQuery();
        $team[] = $result->fetchAssociative();
        return $team;
    }
}
