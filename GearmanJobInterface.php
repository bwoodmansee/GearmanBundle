<?php

namespace Hautelook\GearmanBundle;

use Hautelook\GearmanBundle\Service\GearmanJobStatus;

/**
 * @author Baldur Rensch <baldur.rensch@hautelook.com>
 */
interface GearmanJobInterface
{
    const PRIORITY_LOW = 0;
    const PRIORITY_NORMAL = 1;
    const PRIORITY_HIGH = 2;

    /**
     * This functions needs to return a string with all parameters that need to be passed
     * on to the Gearman server, so the serialized workload
     * @return string
     */
    public function getWorkload();

    /**
     * This function needs to return the Gearman function to call
     * @return string
     */
    public function getFunctionName();

    /**
     * This function stores Gearman job status information after a job has been added.
     * @return GearmanJobStatus Gearman job handle and return code
     */
    public function getStatus();

    /**
     * Set the Gearman Job Status.
     * @param GearmanJobStatus $status
     */
    public function setStatus(GearmanJobStatus $status);
}
