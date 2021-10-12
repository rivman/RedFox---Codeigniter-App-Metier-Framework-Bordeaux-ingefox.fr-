<?php


namespace RFCore\Models;


use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
use CodeIgniter\Validation\ValidationInterface;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use RFCore\Entities\RF_Entity;

/**
 * Class RF_Model
 * Generic Model for all RedFox models
 * @package RFCore\Models
 */
class RF_Model extends Model
{
    protected $entityName = null;

    /** @var EntityManager|null  */
    public static $em = null;

    public function __construct(ConnectionInterface &$db = null, ValidationInterface $validation = null)
    {
        parent::__construct($db, $validation);
        if (self::$em == null){
            self::$em = service('doctrine');
        }
    }

    /**
     * Find one entity in DB by the given criteria
     * @param $property string|array Property name (criteria) or Search criteria
     * @param $value mixed Value to search for
     * @param null|string $entity
     * @return object|null Either the Entity object or null if not found
     */
    public function findOneBy($property, $value = null, $entity = null){
        /** @var EntityRepository $repository */
        $repository = self::$em->getRepository($entity ?? $this->entityName);

        $ret = null;

        if (is_array($property))
        {
            $ret = $repository->findOneBy($property);
        }
        else{
            $ret = $repository->findOneBy(array($property => $value));
        }

        return $ret;
    }

    /**
     * Find one or more entities in DB by the given criteria
     * @param $property string Property name (criteria)
     * @param $value mixed Value to search for
     * @param null|string $entity
     * @return array Either the Entity object or null if not found
     */
    public function findMultiBy($property, $value, $entity = null)
    {
        /** @var EntityRepository $repository */
        $repository = self::$em->getRepository($entity ?? $this->entityName);
        return $repository->findBy(array($property => $value));
    }


    /**
	 * Find one or more entities in DB by multi given criteria
	 * @param array $data  Criteria array build like ["field"=>"value"]
	 * @param null|string $entity (Optional) Entity name
	 * @param null|array $orderBy Array containing information for ordering results (must be in this format ['field' => 'ASC', 'field2' => 'DESC']
     * @param int|null   $limit (Optional)
     * @return array Either the Entity object or null if not found
     */
    public function findBy($data, $entity = null, $orderBy = null, $limit = null): array
    {
        /** @var EntityRepository $repository */
        $repository = self::$em->getRepository($entity ?? $this->entityName);
        return $repository->findBy($data,$orderBy,$limit);
    }


    /**
     * Find all entities from the given repository name
     * @param $entity = null string Entity Repository name
     * @return array Collection of entities
     */
    public function findAllEntities($entity = null){
        /** @var EntityRepository $repository */
        $repository = self::$em->getRepository($entity ?? $this->entityName);
        return $repository->findAll();
    }

    /**
     * Flush the EntityManager
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function flush(){
        self::$em->flush();
    }

    /**
     * Persist an entity in DB
     * @param $entity
     * @throws ORMException
     */
    public function persist($entity){
        self::$em->persist($entity);
    }

    /**
     * Remove an entity from DB
     * @param $entity
     * @throws ORMException
     */
    public function remove($entity){
        self::$em->remove($entity);
    }

    /**
     * Allow to update an Entity
     * @param $property
     * @param $value
     * @param $params
     * @param null $entityName
     * @return int
     */
    public function updateEntity($property, $value, $params, $entityName = null){
        $ret = SC_INTERNAL_SERVER_ERROR;
        $entity = $this->findOneBy($property,$value,$entityName);
        if ($entity != null) {
            try {
                $entity->update($params);
                $this->flush();
                $ret = SC_SUCCESS;
            } catch (\Exception $e) {
                log_message('error', $e);
                $ret = SC_DOCTRINE_ENTITY_UPDATE_ERROR;
            }
        }
        else $ret = SC_DOCTRINE_ENTITY_NOT_FOUND;
        return $ret;
    }

    /**
     * Verify a ReCaptcha token
     * @param $token
     * @return bool
     */
    function checkReCaptcha($token){
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $verifyResponse = file_get_contents($url.'?secret='.RECAPTCHA_SECRET_KEY.'&response='.$token);
        $response_final = json_decode($verifyResponse);
        return $response_final->success;
    }
}
