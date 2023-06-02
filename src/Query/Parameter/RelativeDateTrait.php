<?php

namespace PiwikPro\ReportingApi\Query\Parameter;

use PiwikPro\ReportingApi\Query\Model\RelativeDate;

/**
 * Relative date param.
 */
trait RelativeDateTrait
{

    /**
     * Use relative date in query.
     *
     * Cannot be used with absolute date fields at the same time.
     *
     * @var \PiwikPro\ReportingApi\Query\Model\RelativeDate
     */
    protected RelativeDate $relative_date;

    /**
     * Sets relative date.
     *
     * @param \PiwikPro\ReportingApi\Query\Model\RelativeDate $date
     *   Relative date.
     *
     * @return $this
     *   Query object.
     */
    public function setRelativeDate(RelativeDate $date): static
    {
        $this->relative_date = $date;

        return $this;
    }

}