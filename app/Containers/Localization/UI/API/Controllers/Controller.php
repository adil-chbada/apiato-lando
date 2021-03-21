<?php

namespace App\Containers\Localization\UI\API\Controllers;

use Apiato\Core\Foundation\Facades\Apiato;
use App\Containers\Localization\UI\API\Requests\GetAllLocalizationsRequest;
use App\Containers\Localization\UI\API\Transformers\LocalizationTransformer;
use App\Ship\Parents\Controllers\ApiController;

class Controller extends ApiController
{
    public function getAllLocalizations(GetAllLocalizationsRequest $request): array
    {
        $localizations = Apiato::call('Localization@GetAllLocalizationsAction');
        return $this->transform($localizations, LocalizationTransformer::class);
    }
}
