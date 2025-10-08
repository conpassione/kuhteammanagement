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
        $queryBuilder->setRestrictions(GeneralUtility::makeInstance(FrontendRestrictionContainer::class));
        $result = $queryBuilder
            ->select('*')
            ->from('tx_kuhteammanagement_neuesteam')
            ->executeQuery();
        return $result->fetchAllAssociative();
    }

    /**
     * @throws Exception
     */
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
        return $result->fetchAssociative();
    }

    public function deleteTeamById(?int $teamID = null): int
    {
        if (is_null($teamID)) {
            $effectedRows = 0;
        }

        $queryBuilder = $this->connectionPool->getQueryBuilderForTable('tx_kuhteammanagement_neuesteam');
        $queryBuilder->setRestrictions(GeneralUtility::makeInstance(FrontendRestrictionContainer::class));
        $effectedRows = $queryBuilder
            ->delete('tx_kuhteammanagement_neuesteam')
            ->where(
                $queryBuilder->expr()->eq('uid', $teamID)
            )
            ->executeStatement();
        return $effectedRows;
    }
}
