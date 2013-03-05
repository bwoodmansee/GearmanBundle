<?php

namespace Hautelook\GearmanBundle\Service;

use Hautelook\GearmanBundle\GearmanJobInterface;

/**
 * Expose details about the Gearman job handle returned after the task is scheduled to run
 * @author Brandon Woodmansee <brandon.woodmansee@hautelook.com>
 */
class GearmanJobStatus
{
    protected $handle;
    protected $returnCode;

    /**
     * Create a GearmanJobStatus object.  Store the job handle and return code for the task.
     * @param GearmanJobInterface $job The job
     * @param string $handle     Gearman job handle
     * @param int $returnCode Result of GearmanClient::returnCode()
     */
    public function __construct($handle, $returnCode)
    {

        $this->handle = $handle;
        $this->returnCode = $returnCode;
    }

    /**
     * Return the job handle
     * @return string Job handle
     */
    public function getHandle()
    {
        return $this->handle;
    }

    /**
     * Return the GearmanClient return code.
     * @return int Return Code
     */
    public function getReturnCode()
    {
        return $this->returnCode;
    }

    /**
     * Returns true if GearmanClient returned a GEARMAN_SUCCESS
     * returnCode for the task.
     * @return bool Success flag
     */
    public function success()
    {
        return ($this->getReturnCode() == GEARMAN_SUCCESS);
    }
}
