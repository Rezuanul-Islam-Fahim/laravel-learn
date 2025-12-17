<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Job;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(10);

        return view('jobs.index', ['jobs' => $jobs]);
    }

    function create()
    {
        return view('jobs.create');
    }

    function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    function store()
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        $job = Job::create([
            'title' => request()->input('title'),
            'salary' => request()->input('salary'),
            'employer_id' => 1,
        ]);

        Mail::to($job->employer->user)->queue(
            new JobPosted($job),
        );

        return redirect('/jobs');
    }

    function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    function update(Job $job)
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);

        return redirect('/jobs/' . $job->id);
    }

    function destroy(Job $job)
    {
        $job->delete();

        return redirect('/jobs');
    }
}
