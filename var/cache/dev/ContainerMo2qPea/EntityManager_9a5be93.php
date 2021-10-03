<?php

namespace ContainerMo2qPea;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder596dc = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer460a8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties93bd7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'getConnection', array(), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'getMetadataFactory', array(), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'getExpressionBuilder', array(), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'beginTransaction', array(), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'getCache', array(), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->getCache();
    }

    public function transactional($func)
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'transactional', array('func' => $func), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->transactional($func);
    }

    public function commit()
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'commit', array(), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->commit();
    }

    public function rollback()
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'rollback', array(), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'getClassMetadata', array('className' => $className), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'createQuery', array('dql' => $dql), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'createNamedQuery', array('name' => $name), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'createQueryBuilder', array(), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'flush', array('entity' => $entity), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'clear', array('entityName' => $entityName), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->clear($entityName);
    }

    public function close()
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'close', array(), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->close();
    }

    public function persist($entity)
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'persist', array('entity' => $entity), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'remove', array('entity' => $entity), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'refresh', array('entity' => $entity), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'detach', array('entity' => $entity), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'merge', array('entity' => $entity), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'getRepository', array('entityName' => $entityName), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'contains', array('entity' => $entity), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'getEventManager', array(), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'getConfiguration', array(), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'isOpen', array(), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'getUnitOfWork', array(), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'getProxyFactory', array(), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'initializeObject', array('obj' => $obj), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'getFilters', array(), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'isFiltersStateClean', array(), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'hasFilters', array(), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return $this->valueHolder596dc->hasFilters();
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

        $instance->initializer460a8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder596dc) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder596dc = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder596dc->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, '__get', ['name' => $name], $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        if (isset(self::$publicProperties93bd7[$name])) {
            return $this->valueHolder596dc->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder596dc;

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

        $targetObject = $this->valueHolder596dc;
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
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder596dc;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder596dc;
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
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, '__isset', array('name' => $name), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder596dc;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder596dc;
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
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, '__unset', array('name' => $name), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder596dc;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder596dc;
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
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, '__clone', array(), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        $this->valueHolder596dc = clone $this->valueHolder596dc;
    }

    public function __sleep()
    {
        $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, '__sleep', array(), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;

        return array('valueHolder596dc');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer460a8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer460a8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer460a8 && ($this->initializer460a8->__invoke($valueHolder596dc, $this, 'initializeProxy', array(), $this->initializer460a8) || 1) && $this->valueHolder596dc = $valueHolder596dc;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder596dc;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder596dc;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
