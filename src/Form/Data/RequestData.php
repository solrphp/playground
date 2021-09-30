<?php

declare(strict_types=1);

/*
 * This file is part of the solrphp playground.
 * (c) wicliff <wicliff.wolda@gmail.com>
 */

namespace Solrphp\Playground\Form\Data;

/**
 * RequestData.
 *
 * @author wicliff <wicliff.wolda@gmail.com>
 */
class RequestData
{
    /**
     * @var int
     */
    private int $requests = 0;

    /**
     * @return int
     */
    public function getRequests(): int
    {
        return $this->requests;
    }

    /**
     * @param int $requests
     */
    public function setRequests(int $requests): void
    {
        $this->requests = $requests;
    }
}
