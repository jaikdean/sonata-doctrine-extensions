<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\Doctrine\Model;

use Doctrine\DBAL\Connection;

/**
 * @author Sylvain Deloux <sylvain.deloux@ekino.com>
 *
 * @template-covariant T of object
 */
interface ManagerInterface
{
    /**
     * Return the Entity class name.
     *
     * @return string|class-string<T>
     */
    public function getClass();

    /**
     * Find all entities in the repository.
     *
     * @return array|T[]
     */
    public function findAll();

    /**
     * Find entities by a set of criteria.
     *
     * @param int|null $limit
     * @param int|null $offset
     *
     * @return array|T[]
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null);

    /**
     * Find a single entity by a set of criteria.
     *
     * @return T|null
     */
    public function findOneBy(array $criteria, ?array $orderBy = null);

    /**
     * Finds an entity by its primary key / identifier.
     *
     * @param mixed $id The identifier
     *
     * @return T|null
     */
    public function find($id);

    /**
     * Create an empty Entity instance.
     *
     * @return T
     */
    public function create();

    /**
     * Save an Entity.
     *
     * @param T    $entity   The Entity to save
     * @param bool $andFlush Flush the EntityManager after saving the object?
     */
    public function save($entity, $andFlush = true);

    /**
     * Delete an Entity.
     *
     * @param T    $entity   The Entity to delete
     * @param bool $andFlush Flush the EntityManager after deleting the object?
     */
    public function delete($entity, $andFlush = true);

    /**
     * Get the related table name.
     *
     * @return string
     */
    public function getTableName();

    /**
     * Get the DB driver connection.
     *
     * @return Connection
     */
    public function getConnection();
}

interface_exists(\Sonata\CoreBundle\Model\ManagerInterface::class);
