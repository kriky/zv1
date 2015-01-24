<?php

class AdminController extends \BaseController {

    /**
     * Display a listing of the resource.
     * GET /admin
     *
     * @return Response
     */
    public function index() {
        return View::make('admin.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     * GET /admin/create
     *
     * @return Response
     */
    public function createUser($role) {
        
        
        
        return View::make('admin.createUser', compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     * POST /admin
     *
     * @return Response
     */
    public function storeUser() {
        
        $user = User::createUser();
//        
//         $user = User::whereUsername( 'kiki')->first();
//        $user->roles()->attach(Input::get('role'));
        
         return "BRAVO!!";
    }

    /**
     * Display the specified resource.
     * GET /admin/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * GET /admin/{id}/edit
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     * PUT /admin/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     * DELETE /admin/{id}
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

    public function test() {
        $posjeduje = "AM";
        $polaze = "A";
        $hours = HoursHelper::getHoursWithNotes($posjeduje, $polaze);
        
        return $hours;
//        $theoryHours =  $hours['theory'];
//        $drivingHours =  $hours['driving'];
//     
//        return View::make('admin.test', compact('theoryHours', 'drivingHours' ));
    }

}
