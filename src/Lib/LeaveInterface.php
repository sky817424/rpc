<?php
/**
 * @author: yuanfu <yuanf@pvc123.com>
 * @date: 2019/11/28
 *
 */

namespace Rpc\lib;

interface LeaveInterface
{
    /**
     * @param int $id
     * @return mixed
     */
    public function find(int $id);

    /**
     * @param String $name
     * @return mixed
     */
    public function findByName(String $name);

    /**
     * @param int $type
     * @return mixed
     */
    public function getByType(int $type);

    /**
     * @param $id
     * @param $leaveType
     * @param $name
     * @param $description
     * @return mixed
     */
    public function update($id, $leaveType, $name, $description);

}
