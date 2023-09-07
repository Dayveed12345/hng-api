<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class apiController extends Controller
{
    public function __invoke(Request $request)
    {
        $utcDateTime = Carbon::now('UTC');

        // Format it as "2023-08-21T15:04:05Z"
        $formattedUtcDateTime = $utcDateTime->format('Y-m-d\TH:i:s\Z');
        $name = $request->query('slack_name');
        $trackquery = $request->query('track');
        $slackName = $name;
        $dayOfWeek = now()->format('l');
        $utcTime = $formattedUtcDateTime;
        $track = $trackquery;
        $githubFileURL = 'https://github.com/dayveed12345/hng-api/app/Http/Controllers/apiController.php';
        $githubSourceURL = 'https://github.com/dayveed12345/hng-api';

        $data = [
            'slack_name' => $slackName,
            'day_of_week' => $dayOfWeek,
            'utc_time' => $utcTime,
            'track' => $track,
            'github_file_url' => $githubFileURL,
            'github_source_url' => $githubSourceURL,
            'status_code' => 200, // Success
        ];

        return response()->json($data);
    }
}
