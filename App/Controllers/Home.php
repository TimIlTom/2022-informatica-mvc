<?php

namespace App\Controllers;

use App\Models\Events;
use \Core\View;
use \App\Models\User;

/**
 * Home controller
 *
 * PHP version 7.0
 */
class Home extends \Core\Controller
{

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        View::renderTemplate('Home/index.html');
    }

    public function indexWithIdAction()
    {
        $id = $this->route_params["id"];
        View::renderTemplate('Home/index_id.html',['id' => $id]);
    }

    public function usersAction() {
        $users = User::getAll();
        View::renderTemplate('Home/users.html',['users' => $users]);
    }

    public function usersJsonAction() {
        $users = User::getAll();
        echo json_encode($users);
    }

    public function usersWithIdAction() {
        $id = $this->route_params["id"];
        $user = User::getUser($id);
        View::renderTemplate('Home/user.html',['user' => $user]);
    }
    public function usersWithIdJsonAction() {
        $id = $this->route_params["id"];
        $users = User::getUser($id);
        echo json_encode($users);
    }

    public function usersJs() {
        View::renderTemplate('Home/users_js.html');
    }

    public function eventsAction() {
        $events = Events::getAll();
        echo json_encode($events);
        //View::renderTemplate('Home/events.html',['events' => $events]);
    }

    public function eventsWithIdAction() {
        $events = Events::getAll();
        View::renderTemplate('Home/events.html',['events' => $events]);
    }
}