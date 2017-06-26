<?php

if ('BE' === TL_MODE)
{
    $GLOBALS['TL_CSS'][] = 'bundles/bugbusterstatisticsgroup/be_statisticsgroup.css';
    
}

//Banner
if (isset($GLOBALS['BE_MOD']['system']['bannerstat']))
{
    $GLOBALS['BE_MOD']['statistics']['bannerstat'] = array
    (
        'callback'   => $GLOBALS['BE_MOD']['system']['bannerstat']['callback'],
        'icon'       => $GLOBALS['BE_MOD']['system']['bannerstat']['icon'],
        'stylesheet' => $GLOBALS['BE_MOD']['system']['bannerstat']['stylesheet']
    );
    unset($GLOBALS['BE_MOD']['system']['bannerstat']);
}

//Visitors
if (isset($GLOBALS['BE_MOD']['system']['visitorstat']))
{
    $GLOBALS['BE_MOD']['statistics']['visitorstat'] = array
    (
        'callback'   => $GLOBALS['BE_MOD']['system']['visitorstat']['callback'],
        'icon'       => $GLOBALS['BE_MOD']['system']['visitorstat']['icon'],
        'stylesheet' => $GLOBALS['BE_MOD']['system']['visitorstat']['stylesheet']
    );
    unset($GLOBALS['BE_MOD']['system']['visitorstat']);
}

//Bot
if (isset($GLOBALS['BE_MOD']['system']['botstatistics']))
{
    $GLOBALS['BE_MOD']['statistics']['botstatistics'] = array
    (
        'callback'   => $GLOBALS['BE_MOD']['system']['botstatistics']['callback'],
        'icon'       => $GLOBALS['BE_MOD']['system']['botstatistics']['icon'],
        'stylesheet' => $GLOBALS['BE_MOD']['system']['botstatistics']['stylesheet']
    );
    unset($GLOBALS['BE_MOD']['system']['botstatistics']);
}

//Download, dlstat <= 1.0.0
if (isset($GLOBALS['BE_MOD']['content']['dlstats']['callback']))
{
    $GLOBALS['BE_MOD']['statistics']['dlstats'] = array
    (
        'callback'   => $GLOBALS['BE_MOD']['content']['dlstats']['callback'],
        'icon'       => $GLOBALS['BE_MOD']['content']['dlstats']['icon'],
        'stylesheet' => $GLOBALS['BE_MOD']['content']['dlstats']['stylesheet']
    );
    unset($GLOBALS['BE_MOD']['content']['dlstats']);
}
//Download, dlstat >=1.0.1
if (isset($GLOBALS['BE_MOD']['system']['dlstats']['callback']))
{
    $GLOBALS['BE_MOD']['statistics']['dlstats'] = array
    (
        'callback'   => $GLOBALS['BE_MOD']['content']['dlstats']['callback'],
        'icon'       => $GLOBALS['BE_MOD']['content']['dlstats']['icon'],
        'stylesheet' => $GLOBALS['BE_MOD']['content']['dlstats']['stylesheet']
    );
    unset($GLOBALS['BE_MOD']['system']['dlstats']);
}
