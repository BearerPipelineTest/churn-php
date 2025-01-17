<?php

declare(strict_types=1);

namespace Churn\Tests\Integration\Command\Assets;

use Churn\Event\Event\AfterAnalysis;
use Churn\Event\Event\AfterFileAnalysis;
use Churn\Event\Event\BeforeAnalysis;
use Churn\Event\Hook\AfterAnalysisHook;
use Churn\Event\Hook\AfterFileAnalysisHook;
use Churn\Event\Hook\BeforeAnalysisHook;

class TestAfterAnalysisHook implements AfterAnalysisHook
{
    public static $nbAfterAnalysisEvent = 0;

    /**
     * @param AfterAnalysis $event The event triggered when the analysis is done.
     */
    public static function afterAnalysis(AfterAnalysis $event): void
    {
        self::$nbAfterAnalysisEvent++;
    }
}

class TestAfterFileAnalysisHook implements AfterFileAnalysisHook
{
    public static $nbAfterFileAnalysisEvent = 0;

    /**
     * @param AfterFileAnalysis $event The event triggered when the analysis of a file is done.
     */
    public static function afterFileAnalysis(AfterFileAnalysis $event): void
    {
        self::$nbAfterFileAnalysisEvent++;
    }
}

class TestBeforeAnalysisHook implements BeforeAnalysisHook
{
    public static $nbBeforeAnalysisEvent = 0;

    /**
     * @param BeforeAnalysis $event The event triggered when the analysis starts.
     */
    public static function beforeAnalysis(BeforeAnalysis $event): void
    {
        self::$nbBeforeAnalysisEvent++;
    }
}
