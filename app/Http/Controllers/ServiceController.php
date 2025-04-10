<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function markActiveInactive($id)
    {
        $service = Service::find($id);

        if(!$service) {
            return back()->with('error', 'Service not found');
        }

        $service->update([
            'status'        =>         !$service->status
        ]);

        $status = $service->status ? 'actived' : 'inactived';

        return back()->with('success', "Service is marked as {$status} successfully.");

    }
}
