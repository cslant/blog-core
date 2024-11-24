<?php

namespace CSlant\Blog\Core\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;

class ListProviders extends Command
{
    protected $signature = 'providers:list';

    protected $description = 'List all registered service providers';

    public function handle(): void
    {
        $providers = App::getLoadedProviders();

        foreach ($providers as $provider => $loaded) {
            if ($loaded) {
                $this->info($provider);
            }
        }
    }
}
