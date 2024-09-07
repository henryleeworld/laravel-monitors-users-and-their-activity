<?php

use Binafy\LaravelUserMonitoring\Commands\RemoveVisitMonitoringRecordsCommand;

Schedule::command(RemoveVisitMonitoringRecordsCommand::class)->hourly();
