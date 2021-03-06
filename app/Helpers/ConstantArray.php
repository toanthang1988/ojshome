<?php namespace App\Helpers;

class ConstantArray
{
    public static $author_per       = [
            'admin.manuscript.create'         =>  'admin/manuscript/form',
            'admin.manuscript.unsubmit'       =>  'admin/manuscript/unsubmit',
            'admin.manuscript.inScreening'    =>  'admin/manuscript/in-screening',
            'admin.manuscript.inReview'       =>  'admin/manuscript/in-review',
            'admin.manuscript.inEditing'      =>  'admin/manuscript/in-editing',
            'admin.manuscript.rejected'       =>  'admin/manuscript/rejected',
            'admin.manuscript.withdrawn'      =>  'admin/manuscript/withdrawn',
            'admin.manuscript.published'      =>  'admin/manuscript/published',
    ];
    public static $admin_per            = [
            'admin.user.create'               =>  'admin/user/form',
            'admin.user.index'                =>  'admin/user',
    ];
    public static $reviewer_per         = [
            'admin.manuscript.unReview'       =>  'admin/manuscript/un-review',
            'admin.manuscript.reviewed'       =>  'admin/manuscript/reviewed',
            'admin.manuscript.rejectedReview' =>  'admin/manuscript/rejected-review',
    ];
    public static $degree           = [
            BACHELOR                =>  'Bachelor',
            MASTER                  =>  'Master',
            DOCTORAL                =>  'Doctoral',
            ASSOCIATE_PROFESSOR     =>  'Associate Professional',
            PROFESSOR               =>  'Professor',
    ];
    public static $academic         = [
            MASTER_ECONOMIC         =>  'Master Economic',
            MASTER_SCIENCE          =>  'Master Science',
            DR_ECONOMIC             =>  'Doctor Economic',
            DR_SCIENCE              =>  'Doctor Science',
    ];
    public static $actor            = [
            ADMIN                   => 'Administrator',
            AUTHOR                  => 'Author',
            MANAGING_EDITOR         => 'Managing Editor',
            SCREENING_EDITOR        => 'Screening Editor',
            SECTION_EDITOR          => 'Section Editor',
            REVIEWER                => 'Reviewer',
            CHIEF_EDITOR            => 'Chief Editor',
            COPY_EDITOR             => 'Copy Editor',
            LAYOUT_EDITOR           => 'Layout Editor',
            PRODUCTION_EDITOR       => 'Production Editor',
    ];
    public static $actor_register   = [
            AUTHOR                  => 'Author',
            REVIEWER                => 'Reviewer',
    ];
}
