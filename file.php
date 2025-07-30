<?php

// b => Big (ascending), s => Small (descending), eq => equal, Error => mixed trend

    function TrendDetector(array $number): string
        {

            $currentTrend = null;
            $trend = null;

            $count_array = count($number) - 2;

            for ($i = 0; $i <= $count_array; $i++) {

                if ($number[$i] == $number[$i + 1]) {
                    continue;
                }

                $currentTrend = ($number[$i] < $number[$i + 1]) ? 'b' : 's';

                if ($trend === null)
                    $trend = $currentTrend;
                elseif ($trend !== $currentTrend) {
                    $trend = "Error";
                    exit();
                }
            }

            return $trend ?? 'eq';
        }
