<?php

use Illuminate\Support\Facades\Http;

$response = Http::get("https://ariel.pfregistres.com/apiUnlocked/all/{siren}");