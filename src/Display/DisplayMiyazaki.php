<?php
namespace App\Display;

use App\Display\Observer;
use App\Data\PrecipitationData;

/**
 * Description of DisplayMiyazaki
 */
class DisplayMiyazaki implements Observer {

    public function update($subject) {
        foreach ($subject->data as $record) {
            if (!empty($record[0]) && $record[1] === '宮崎県') {
                printf('----------------------------------------------' . "\n");
                printf('観測地点：' . $record[1] . ' ' . $record[2] . "\n");
                printf('観測時間：' . $record[4] . '/' . $record[5] . '/' . $record[6] . ' ' . $record[7] . ':' . $record[8] . "\n");
                printf('降水量：' . $record[9] . ' mm' . "\n");
                printf('----------------------------------------------' . "\n");
            }


        }
    }

}
