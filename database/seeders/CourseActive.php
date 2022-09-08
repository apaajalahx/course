<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CourseActive as ModelsCourseActive;
use App\Models\Member;
use App\Models\Mentor;
use Illuminate\Database\Seeder;

class CourseActive extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db_make = [
            [
                'member' => 1,
                'course' => 1,
                'mentor' => 1,
            ],
            [
                'member' => 2,
                'course' => 2,
                'mentor' => 1,
            ],
            [
                'member' => 3,
                'course' => 3,
                'mentor' => 2,
            ],
            [
                'member' => 4,
                'course' => 4,
                'mentor' => 3,
            ],
            [
                'member' => 5,
                'course' => 5,
                'mentor' => 4,
            ],
            [
                'member' => 6,
                'course' => 2,
                'mentor' => 1,
            ],
            [
                'member' => 2,
                'course' => 3,
                'mentor' => 2,
            ],
            [
                'member' => 7,
                'course' => 6,
                'mentor' => 5,
            ],
            [
                'member' => 2,
                'course' => 4,
                'mentor' => 3,
            ],
            [
                'member' => 4,
                'course' => 5,
                'mentor' => 4,
            ]
        ];
        foreach($db_make as $db_make_key => $make){
            $member = Member::find($make['member']);
            $mentor = Mentor::find($make['mentor']);
            $course = Course::find($make['course']);
            $data = new ModelsCourseActive();
            $data->mentor()->associate($mentor);
            $data->member()->associate($member);
            $data->list_course()->associate($course);
            $data->save();
        }
    }
}
