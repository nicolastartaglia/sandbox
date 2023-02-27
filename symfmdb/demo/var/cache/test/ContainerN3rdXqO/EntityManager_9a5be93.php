<?php

namespace ContainerN3rdXqO;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8d0fb = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd5bf1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2b0bd = [
        
    ];

    public function getConnection()
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'getConnection', array(), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'getMetadataFactory', array(), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'getExpressionBuilder', array(), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'beginTransaction', array(), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'getCache', array(), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'transactional', array('func' => $func), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'commit', array(), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->commit();
    }

    public function rollback()
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'rollback', array(), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'getClassMetadata', array('className' => $className), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'createQuery', array('dql' => $dql), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'createNamedQuery', array('name' => $name), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'createQueryBuilder', array(), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'flush', array('entity' => $entity), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'clear', array('entityName' => $entityName), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->clear($entityName);
    }

    public function close()
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'close', array(), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->close();
    }

    public function persist($entity)
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'persist', array('entity' => $entity), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'remove', array('entity' => $entity), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'refresh', array('entity' => $entity), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'detach', array('entity' => $entity), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'merge', array('entity' => $entity), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'contains', array('entity' => $entity), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'getEventManager', array(), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'getConfiguration', array(), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'isOpen', array(), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'getUnitOfWork', array(), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'getProxyFactory', array(), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'initializeObject', array('obj' => $obj), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'getFilters', array(), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'isFiltersStateClean', array(), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'hasFilters', array(), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return $this->valueHolder8d0fb->hasFilters();
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

        $instance->initializerd5bf1 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder8d0fb) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8d0fb = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8d0fb->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, '__get', ['name' => $name], $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        if (isset(self::$publicProperties2b0bd[$name])) {
            return $this->valueHolder8d0fb->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8d0fb;

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

        $targetObject = $this->valueHolder8d0fb;
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
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8d0fb;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8d0fb;
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
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, '__isset', array('name' => $name), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8d0fb;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8d0fb;
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
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, '__unset', array('name' => $name), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8d0fb;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8d0fb;
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
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, '__clone', array(), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        $this->valueHolder8d0fb = clone $this->valueHolder8d0fb;
    }

    public function __sleep()
    {
        $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, '__sleep', array(), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;

        return array('valueHolder8d0fb');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd5bf1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd5bf1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd5bf1 && ($this->initializerd5bf1->__invoke($valueHolder8d0fb, $this, 'initializeProxy', array(), $this->initializerd5bf1) || 1) && $this->valueHolder8d0fb = $valueHolder8d0fb;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8d0fb;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8d0fb;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
