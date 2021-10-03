<?php

namespace ContainerTYNNYMS;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf8ec7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbe733 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4c309 = [
        
    ];

    public function getConnection()
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'getConnection', array(), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'getMetadataFactory', array(), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'getExpressionBuilder', array(), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'beginTransaction', array(), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'getCache', array(), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'transactional', array('func' => $func), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->transactional($func);
    }

    public function commit()
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'commit', array(), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->commit();
    }

    public function rollback()
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'rollback', array(), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'getClassMetadata', array('className' => $className), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'createQuery', array('dql' => $dql), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'createNamedQuery', array('name' => $name), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'createQueryBuilder', array(), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'flush', array('entity' => $entity), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'clear', array('entityName' => $entityName), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->clear($entityName);
    }

    public function close()
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'close', array(), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->close();
    }

    public function persist($entity)
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'persist', array('entity' => $entity), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'remove', array('entity' => $entity), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'refresh', array('entity' => $entity), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'detach', array('entity' => $entity), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'merge', array('entity' => $entity), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'contains', array('entity' => $entity), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'getEventManager', array(), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'getConfiguration', array(), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'isOpen', array(), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'getUnitOfWork', array(), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'getProxyFactory', array(), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'initializeObject', array('obj' => $obj), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'getFilters', array(), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'isFiltersStateClean', array(), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'hasFilters', array(), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return $this->valueHolderf8ec7->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerbe733 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf8ec7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf8ec7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf8ec7->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, '__get', ['name' => $name], $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        if (isset(self::$publicProperties4c309[$name])) {
            return $this->valueHolderf8ec7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8ec7;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf8ec7;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8ec7;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf8ec7;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, '__isset', array('name' => $name), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8ec7;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf8ec7;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, '__unset', array('name' => $name), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf8ec7;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf8ec7;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, '__clone', array(), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        $this->valueHolderf8ec7 = clone $this->valueHolderf8ec7;
    }

    public function __sleep()
    {
        $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, '__sleep', array(), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;

        return array('valueHolderf8ec7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbe733 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbe733;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbe733 && ($this->initializerbe733->__invoke($valueHolderf8ec7, $this, 'initializeProxy', array(), $this->initializerbe733) || 1) && $this->valueHolderf8ec7 = $valueHolderf8ec7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf8ec7;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf8ec7;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
