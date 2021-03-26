<?php

namespace App\Nova\Metrics;

use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Metrics\Partition;

class Example extends Partition
{
    /**
     * Calculate the value of the metric.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return mixed
     */
    public function calculate(NovaRequest $request)
    {
        $result = [
            'Name 1' => 75.07,
            'Name 2' => 48.09,
            'Name 3' => 16.39,
            'Name 4' => 15.02,
            'Name 5' => 13.86,
            'Name 6' => 7.22,
            'Name 7' => 5.93,
            'Name 8' => 5.62,
            'Name 9' => 2.72,
            'Name 10' => 2.21
        ];

        return $this->result($result);
    }

    /**
     * Determine for how many minutes the metric should be cached.
     *
     * @return  \DateTimeInterface|\DateInterval|float|int
     */
    public function cacheFor()
    {
        // return now()->addMinutes(5);
    }

    /**
     * Get the URI key for the metric.
     *
     * @return string
     */
    public function uriKey()
    {
        return 'example';
    }
}
