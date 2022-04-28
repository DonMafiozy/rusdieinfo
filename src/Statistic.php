<?php

namespace DonMafiozy\RusDieInfo;

class Statistic
{
    private function getData()
    {
        $path  = __DIR__ . '/data/info.json';
        return json_decode(file_get_contents($path), true);
    }

    /**
     * @return array
     */
    public function getAsArray()
    {
        return $this->getData();
    }

    /**
     * @param string $date
     * @return false|mixed
     */
    public function getAsArrayByDate(string $date)
    {
        $data = $this->getData();
        if (isset($data[$date])) {
            return $data[$date];
        } else {
            return false;
        }
    }
}

