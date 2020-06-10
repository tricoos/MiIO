<?php

namespace MiIO\Devices;

/**
 * Class AirPurifier
 *
 * @package MiIO\Devices
 */
class SmartMiFan extends BaseDevice 
{
    protected $properties = [
	"angle",
    "speed",
    "poweroff_time",
    "power",
    "ac_power",
    "angle_enable",
    "speed_level",
    "natural_level",
    "child_lock",
    "buzzer",
    "led_b",
    "use_time",
"mode",
    ];

}
