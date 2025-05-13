<?php

namespace CSlant\Blog\Core\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CheckSqlModeCommand extends Command
{
    protected $signature = 'check:sqlmode';

    protected $description = 'Check the current SQL mode of the database';

    public function handle(): void
    {
        $mode = DB::select("SELECT @@sql_mode as sql_mode")[0]->sql_mode ?? 'unknown';

        $this->info("🔍 Current sql_mode:");
        $this->line($mode);

        if (str_contains($mode, 'ONLY_FULL_GROUP_BY')) {
            $this->warn("⚠️  ONLY_FULL_GROUP_BY is enabled. Group By is strict.");
        } else {
            $this->info("✅ ONLY_FULL_GROUP_BY is disabled. Can use Group By without strict mode.");
        }
    }
}
