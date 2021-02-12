<?php

declare(strict_types=1);

namespace App\RealOOP\Collection;

// Analog StdObjectStorage

/**
 * Class CollectionDataStorage
 */
class CollectionDataStorage
{
    /**
     * @var array $relationStorage
     */
    private array $relationStorage = [];

    /**
     * @var array $repository
     */
    private array $repository = [];

    /**
     * Attach object to repository and storage.
     *
     * @param  object $object
     * @param  null   $data
     * @return void
     */
    public function add(object $object, $data = null) : void
    {
        $key = $this->getHash($object);
        $this->repository[$key] = $data;
        $this->relationStorage[$key] = $object;
    }

    /**
     * Remove object from repository and storage.
     *
     * @param object $object
     * @return void
     */
    public function remove(object $object) : void
    {
        $key = $this->getHash($object);
        unset($this->repository[$key]);
        unset($this->relationStorage[$key]);
    }

    /**
     * Get hash of object.
     *
     * @param object $object
     * @return string
     */
    public function getHash(object $object) : string
    {
        return sha1(json_encode($object));
    }

    /**
     * Get last added object.
     */
    public function current(): object
    {
        $lastAddedKey = array_key_last($this->relationStorage);
        return $this->relationStorage[$lastAddedKey];
    }

    /**
     * Get list of objects in relation storage.
     */
    public function getObjectList() : array
    {
        return $this->relationStorage;
    }

    /**
     * Return info about existing object in storage.
     *
     * @param object $object
     * @return bool
     */
    public function check(object $object) : bool
    {
        $key = $this->getHash($object);
        return array_key_exists($key, $this->relationStorage) ? true : false;
    }

    /**
     * Remove all objects from storage.
     */
    public function removeAll() : void
    {
        $this->relationStorage = [];
        $this->repository = [];
    }
}

/*
$object = (object) [0,1,2,3,4,5];
$class = new CollectionDataStorage();
$class->add($object, 'array from 1 to 5');
$status = $class->check($object);
$class->remove($object);
$class->add($object, 'simple array');
$currentObject = $class->current();
$hash = $class->getHash($object);
$list = $class->getObjectList();
$class->removeAll();
var_dump($class->getObjectList());
*/