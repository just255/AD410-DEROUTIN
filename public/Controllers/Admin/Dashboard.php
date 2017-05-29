<?php

namespace App\Controllers\Admin;

use \Core\View;


class Dashboard extends \Core\Controller
{

    /**
     * Before filter
     *
     * @return void
     */
    protected function before()
    {
        // Make sure an admin user is logged in for example
        // return false;
    }

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        $userSpecs = \App\Models\AdminDash::getUser();
        $user = $userSpecs['name'];
        $stats = \App\Models\AdminDash::getStats();
        $total = $stats['complete'] + $stats['inprogress'] + $stats['notstarted'];
        $waiting_on = $total - ($stats['inprogress'] + $stats['notstarted']);
        View::render('Admin/dashboard.php', [
            'name' => $user,
            'totalFaculty' => $total,
            'waitingOn' => $waiting_on
        ]);
    }

    public function report1(){
        View::render('Reports/tip_report1.php', [
            'name' => $user
        ]);
    }
}
