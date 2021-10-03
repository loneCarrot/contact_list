<?php

namespace App\Repository;

use App\Entity\ContactList;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ContactList|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContactList|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContactList[]    findAll()
 * @method ContactList[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContactListRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ContactList::class);
    }

    /**
     * @return ContactList[]   
     */
    public function checkEmailIsExists($input_val):array
    {
        $email_query = $this->getEntityManager()->createQuery("SELECT COUNT(cl.email_add) FROM App\Entity\ContactList cl WHERE cl.email_add LIKE :email")->setParameter('email', $input_val."%");
        return $email_query->getResult();
    }

    // /**
    //  * @return ContactList[] Returns an array of ContactList objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ContactList
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
