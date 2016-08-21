<?php

namespace InstagramAPI;

class Usertag
{
    protected $in;
    protected $photo_of_you;

    public function __construct($data)
    {
        $ins = [];
        foreach($data['in'] as $in) {
            $in[] = new In($in);
        }
        $this->in = $ins;
    }

    public function getIn()
    {
        return $this->in;
    }

    public function getPhotoOfYou()
    {
        return $this->photo_of_you;
    }
}
