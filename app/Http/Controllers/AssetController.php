<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssetController {
  public function show($id) {
    $file = File::findOrFail($id);
    return Response::make(Storage::get($file->storage_key), 200, ['Content-Type' => $file->mime_type]);
  }
}