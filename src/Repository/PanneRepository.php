<?php

namespace App\Repository;

use App\Entity\Machine;
use App\Entity\Panne;

use App\Repository\MachineRepository;
use App\Data\SearchData;


use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Panne>
 *
 * @method Panne|null find($id, $lockMode = null, $lockVersion = null)
 * @method Panne|null findOneBy(array $criteria, array $orderBy = null)
 * @method Panne[]    findAll()
 * @method Panne[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PanneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Panne::class);
    }

    public function add(Panne $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Panne $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Récupère les produits en lien avec une recherche
     * @return Panne []
     */
    public function findSearch(SearchData $search): array
    {
        $query = $this
        ->createQueryBuilder('p');
        if (!empty($search->mac)) {
            $query = $query
            ->leftJoin('p.machine', 'machine')
            ->andWhere('machine.nom LIKE :mac' )
            ->setParameter('mac', "%{$search->mac}%")
            ;   
        }

        if (!empty($search->ti)) {
            $query = $query
            ->leftJoin('p.typeintervention', 'typeintervention')
            ->andWhere('typeintervention.typeintervention LIKE :ti' )
            ->setParameter('ti', "%{$search->ti}%")
            ;   
        }

        if (!empty($search->tp)) {
            $query = $query
            ->leftJoin('p.typepanne', 'typepanne')
            ->andWhere('typepanne.typepanne LIKE :tp' )
            ->setParameter('tp', "%{$search->tp}%")
            ;   
        }

        if (!empty($search->min)) {
            $query = $query
                ->andWhere('p.debutarret >= :min')
                ->setParameter('min', $search->min);
        }

        if (!empty($search->max)) {
            $query = $query
                ->andWhere('p.debutarret <= :max')
                ->setParameter('max', $search->max);
        }
      
        return $query->getQuery()->getResult();
    }

    public function getBlockPrefix()
    {
        return '';
    }

    
  
}
