<?php

class EntityManager_a45e65e extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $valueHolder5b4b8bc1b0bca139923527 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5b4b8bc1b0bd7461893707 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5b4b8bc1b0b8a037785451 = [
        
    ];

    /**
     * {@inheritDoc}
     */
    public function getConnection()
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'getConnection', array(), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->getConnection();
    }

    /**
     * {@inheritDoc}
     */
    public function getMetadataFactory()
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'getMetadataFactory', array(), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->getMetadataFactory();
    }

    /**
     * {@inheritDoc}
     */
    public function getExpressionBuilder()
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'getExpressionBuilder', array(), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->getExpressionBuilder();
    }

    /**
     * {@inheritDoc}
     */
    public function beginTransaction()
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'beginTransaction', array(), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->beginTransaction();
    }

    /**
     * {@inheritDoc}
     */
    public function getCache()
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'getCache', array(), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->getCache();
    }

    /**
     * {@inheritDoc}
     */
    public function transactional($func)
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'transactional', array('func' => $func), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->transactional($func);
    }

    /**
     * {@inheritDoc}
     */
    public function commit()
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'commit', array(), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->commit();
    }

    /**
     * {@inheritDoc}
     */
    public function rollback()
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'rollback', array(), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->rollback();
    }

    /**
     * {@inheritDoc}
     */
    public function getClassMetadata($className)
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'getClassMetadata', array('className' => $className), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->getClassMetadata($className);
    }

    /**
     * {@inheritDoc}
     */
    public function createQuery($dql = '')
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'createQuery', array('dql' => $dql), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->createQuery($dql);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedQuery($name)
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'createNamedQuery', array('name' => $name), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->createNamedQuery($name);
    }

    /**
     * {@inheritDoc}
     */
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->createNativeQuery($sql, $rsm);
    }

    /**
     * {@inheritDoc}
     */
    public function createNamedNativeQuery($name)
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->createNamedNativeQuery($name);
    }

    /**
     * {@inheritDoc}
     */
    public function createQueryBuilder()
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'createQueryBuilder', array(), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->createQueryBuilder();
    }

    /**
     * {@inheritDoc}
     */
    public function flush($entity = null)
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'flush', array('entity' => $entity), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->flush($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function find($entityName, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'find', array('entityName' => $entityName, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->find($entityName, $id, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function getReference($entityName, $id)
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->getReference($entityName, $id);
    }

    /**
     * {@inheritDoc}
     */
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->getPartialReference($entityName, $identifier);
    }

    /**
     * {@inheritDoc}
     */
    public function clear($entityName = null)
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'clear', array('entityName' => $entityName), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->clear($entityName);
    }

    /**
     * {@inheritDoc}
     */
    public function close()
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'close', array(), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->close();
    }

    /**
     * {@inheritDoc}
     */
    public function persist($entity)
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'persist', array('entity' => $entity), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->persist($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function remove($entity)
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'remove', array('entity' => $entity), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->remove($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function refresh($entity)
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'refresh', array('entity' => $entity), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->refresh($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function detach($entity)
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'detach', array('entity' => $entity), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->detach($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function merge($entity)
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'merge', array('entity' => $entity), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->merge($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function copy($entity, $deep = false)
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->copy($entity, $deep);
    }

    /**
     * {@inheritDoc}
     */
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->lock($entity, $lockMode, $lockVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function getRepository($entityName)
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->getRepository($entityName);
    }

    /**
     * {@inheritDoc}
     */
    public function contains($entity)
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'contains', array('entity' => $entity), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->contains($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventManager()
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'getEventManager', array(), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->getEventManager();
    }

    /**
     * {@inheritDoc}
     */
    public function getConfiguration()
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'getConfiguration', array(), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->getConfiguration();
    }

    /**
     * {@inheritDoc}
     */
    public function isOpen()
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'isOpen', array(), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->isOpen();
    }

    /**
     * {@inheritDoc}
     */
    public function getUnitOfWork()
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'getUnitOfWork', array(), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->getUnitOfWork();
    }

    /**
     * {@inheritDoc}
     */
    public function getHydrator($hydrationMode)
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->getHydrator($hydrationMode);
    }

    /**
     * {@inheritDoc}
     */
    public function newHydrator($hydrationMode)
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->newHydrator($hydrationMode);
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyFactory()
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'getProxyFactory', array(), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->getProxyFactory();
    }

    /**
     * {@inheritDoc}
     */
    public function initializeObject($obj)
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'initializeObject', array('obj' => $obj), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->initializeObject($obj);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilters()
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'getFilters', array(), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->getFilters();
    }

    /**
     * {@inheritDoc}
     */
    public function isFiltersStateClean()
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'isFiltersStateClean', array(), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->isFiltersStateClean();
    }

    /**
     * {@inheritDoc}
     */
    public function hasFilters()
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'hasFilters', array(), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return $this->valueHolder5b4b8bc1b0bca139923527->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer5b4b8bc1b0bd7461893707 = $initializer;

        return $instance;
    }

    /**
     * {@inheritDoc}
     */
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5b4b8bc1b0bca139923527) {
            $reflection = $reflection ?: new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5b4b8bc1b0bca139923527 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5b4b8bc1b0bca139923527->__construct($conn, $config, $eventManager);
    }

    /**
     * @param string $name
     */
    public function & __get($name)
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, '__get', ['name' => $name], $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        if (isset(self::$publicProperties5b4b8bc1b0b8a037785451[$name])) {
            return $this->valueHolder5b4b8bc1b0bca139923527->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5b4b8bc1b0bca139923527;

            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder5b4b8bc1b0bca139923527;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function __set($name, $value)
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5b4b8bc1b0bca139923527;

            return $targetObject->$name = $value;
            return;
        }

        $targetObject = $this->valueHolder5b4b8bc1b0bca139923527;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __isset($name)
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, '__isset', array('name' => $name), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5b4b8bc1b0bca139923527;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5b4b8bc1b0bca139923527;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    /**
     * @param string $name
     */
    public function __unset($name)
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, '__unset', array('name' => $name), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5b4b8bc1b0bca139923527;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder5b4b8bc1b0bca139923527;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, '__clone', array(), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        $this->valueHolder5b4b8bc1b0bca139923527 = clone $this->valueHolder5b4b8bc1b0bca139923527;
    }

    public function __sleep()
    {
        $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, '__sleep', array(), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;

        return array('valueHolder5b4b8bc1b0bca139923527');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5b4b8bc1b0bd7461893707 = $initializer;
    }

    /**
     * {@inheritDoc}
     */
    public function getProxyInitializer()
    {
        return $this->initializer5b4b8bc1b0bd7461893707;
    }

    /**
     * {@inheritDoc}
     */
    public function initializeProxy() : bool
    {
        return $this->initializer5b4b8bc1b0bd7461893707 && ($this->initializer5b4b8bc1b0bd7461893707->__invoke($valueHolder5b4b8bc1b0bca139923527, $this, 'initializeProxy', array(), $this->initializer5b4b8bc1b0bd7461893707) || 1) && $this->valueHolder5b4b8bc1b0bca139923527 = $valueHolder5b4b8bc1b0bca139923527;
    }

    /**
     * {@inheritDoc}
     */
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5b4b8bc1b0bca139923527;
    }

    /**
     * {@inheritDoc}
     */
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5b4b8bc1b0bca139923527;
    }


}
