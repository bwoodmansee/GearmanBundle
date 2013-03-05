<?php

namespace Hautelook\GearmanBundle;

use Hautelook\GearmanBundle\Service\GearmanJobStatus;

abstract class GearmanJob implements GearmanJobInterface
{
    protected $workload;
    protected $status;

    /**
     * {@inheritDoc}
     */
    public function getWorkload()
    {
        return $this->workload;
    }

    /**
     * {@inheritDoc}
     */
    public function setStatus(GearmanJobStatus $status)
    {
        $this->status = $status;
    }

    /**
     * {@inheritDoc}
     */
    public function getStatus()
    {
        return $this->status;
    }
}
