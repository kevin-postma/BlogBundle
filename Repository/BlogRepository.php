<?php

namespace Kp\Bundle\BlogBundle\Repository;

use Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;
use DateTime;

/**
 * Promotion repository.
 *
 * @author Saša Stamenković <umpirsky@gmail.com>
 */
class BlogRepository extends EntityRepository
{
        /**
     * Create filter paginator.
     *
     * @param array $criteria
     * @param array $sorting
     *
     * @return PagerfantaInterface
     */
    public function createFilterPaginator($criteria = array(), $sorting = array())
    {
        $queryBuilder = parent::getCollectionQueryBuilder();

        $this->applySorting($queryBuilder, $sorting);
        

        return $this->getPaginator($queryBuilder);
    }
}
