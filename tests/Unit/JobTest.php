<?php

use App\Models\Job;
use App\Models\Employer;


//AAA
// Arrange
// Act
// Action
it('belongs to employer', function () {
    
    //Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    // Act and Assert
    expect($job->employer->is($employer))->toBeTrue();
});


it('it can have tag', function() {
    $job = Job::factory()->create();

    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);
});