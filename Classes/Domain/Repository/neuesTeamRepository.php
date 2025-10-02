<?php
declare(strict_types=1);

namespace Conpassione\kuhteammanagement\Domain\Repository;

use phpDocumentor\Reflection\Types\Integer;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Database\Query\QueryBuilder;
use TYPO3\CMS\Core\Utility\GeneralUtility;

final class neuesTeamRepository
{
    public function __construct(
        private readonly ConnectionPool $connectionPool,
    ) {}

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

    public function findTeamById(?Integer $teamID = null): array
    {
        $queryBuilder = $this->connectionPool->getQueryBuilderForTable('tx_kuhteammanagement_neuesteam');
        $result = $queryBuilder
            ->select('*')
            ->from('tx_kuhteammanagement_neuesteam')
            ->where(
                $queryBuilder->expr()->or (
                    $queryBuilder->expr()->eq('deleted', 0),
                $queryBuilder->expr()->eq('uid', $teamID)
                )
            )
            ->executeQuery();
        $team[] = $result->fetchAllAssociative();
        return $team;
    }
}
