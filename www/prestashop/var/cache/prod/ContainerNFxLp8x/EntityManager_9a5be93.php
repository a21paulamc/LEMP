<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder488e7 = null;
    private $initializer36157 = null;
    private static $publicProperties9df66 = [
        
    ];
    public function getConnection()
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'getConnection', array(), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'getMetadataFactory', array(), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'getExpressionBuilder', array(), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'beginTransaction', array(), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'getCache', array(), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->getCache();
    }
    public function transactional($func)
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'transactional', array('func' => $func), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'wrapInTransaction', array('func' => $func), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'commit', array(), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->commit();
    }
    public function rollback()
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'rollback', array(), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'getClassMetadata', array('className' => $className), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'createQuery', array('dql' => $dql), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'createNamedQuery', array('name' => $name), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'createQueryBuilder', array(), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'flush', array('entity' => $entity), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'clear', array('entityName' => $entityName), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->clear($entityName);
    }
    public function close()
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'close', array(), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->close();
    }
    public function persist($entity)
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'persist', array('entity' => $entity), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'remove', array('entity' => $entity), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'refresh', array('entity' => $entity), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'detach', array('entity' => $entity), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'merge', array('entity' => $entity), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'getRepository', array('entityName' => $entityName), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'contains', array('entity' => $entity), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'getEventManager', array(), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'getConfiguration', array(), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'isOpen', array(), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'getUnitOfWork', array(), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'getProxyFactory', array(), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'initializeObject', array('obj' => $obj), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'getFilters', array(), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'isFiltersStateClean', array(), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'hasFilters', array(), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return $this->valueHolder488e7->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer36157 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder488e7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder488e7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder488e7->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, '__get', ['name' => $name], $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        if (isset(self::$publicProperties9df66[$name])) {
            return $this->valueHolder488e7->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder488e7;
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
        $targetObject = $this->valueHolder488e7;
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
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder488e7;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder488e7;
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
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, '__isset', array('name' => $name), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder488e7;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder488e7;
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
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, '__unset', array('name' => $name), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder488e7;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder488e7;
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
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, '__clone', array(), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        $this->valueHolder488e7 = clone $this->valueHolder488e7;
    }
    public function __sleep()
    {
        $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, '__sleep', array(), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
        return array('valueHolder488e7');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer36157 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer36157;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer36157 && ($this->initializer36157->__invoke($valueHolder488e7, $this, 'initializeProxy', array(), $this->initializer36157) || 1) && $this->valueHolder488e7 = $valueHolder488e7;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder488e7;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder488e7;
    }
}
